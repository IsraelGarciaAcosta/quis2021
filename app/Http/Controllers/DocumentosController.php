<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Documentos;
use App\Models\Documentos\Documentos_capacitacion;
use App\Models\Documentos\Documentos_instructivos;
use App\Models\Documentos\Documentos_manuales;
use App\Models\Documentos\Documentos_procedimientos;
use App\Models\Documentos\Documentos_procesos;
use App\Models\Documentos\Documentos_formatos;
use App\Models\Documentos\Formato;
use App\Models\Administracion\Proyecto;
use App\Models\User;
use Carbon\Carbon;

class DocumentosController extends Controller
{

  public function __construct(){
      //PROTEGRE LAS RUTAS POR EL CONTROLADOR DEPENDIENDO DE ROLES Y PERMISOS
      $this->middleware('can:documentos_sc.index');//PROTEGE TODAS LAS RUTAS
      //$this->middleware('can:users.index')->only('index');//SOLO PROTEGE LO QUE ESPECIFIQUEMOS
  }

  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {

    $documentos_manuales = Documentos_manuales::all();
    $documentos_procesos = Documentos_procesos::all();
    $documentos_capacitacion = Documentos_capacitacion::all();
    $documentos_instructivos = Documentos_instructivos::all();
    $documentos_procedimientos = Documentos_procedimientos::all();
    $documentos_formatos = Documentos_formatos::orderBy('nombre_doc', 'asc')->pluck('nombre_doc', 'id');
    $last_format = Documentos_formatos::orderBy('id', 'desc')->select('id')->first();
    $last_format = $last_format->id;
    
    $proyectos = Proyecto::where('empresa_id', '=', session('id_empresa'))
    ->where('no27', '<>', 'Cerrado')->where('no10', '=', 'Si')->get();
    
    return view('documentos_sc.index', compact('documentos_manuales', 'documentos_procesos', 'documentos_capacitacion', 'documentos_instructivos', 'documentos_procedimientos', 'documentos_formatos', 'proyectos', 'last_format'));

  }

  /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('documentos_sc.create');
    }

    public function list_formatos(Request $request)
  {
    $user_id = auth()->id();
    $formato_id = $request->formato_id;
    $codigo_id = $request->codigo_id;
    
    $formatos = Formato::where('documento_formato_id', $formato_id)
    ->where('empresa_id', '=', session('id_empresa'))
    ->where('proyecto_id', '=', $codigo_id)->get();
    
    return datatables()->of($formatos)
    ->addColumn('fecha', function ($formatos) {
      $fecha = $formatos->datos_json;
      $fecha = json_decode($fecha, true);
      $fecha = $fecha[1];
      $fecha = $formatos->created_at;
      $html3 = $fecha;
      return $html3;
    })
    ->addColumn('fecha_aprob', function ($formatos) {
      $html4 = $formatos->datos_json;
      return $html4;
    })
    ->addColumn('usuario', function ($formatos) {
      $user = $formatos->user_id;
      $user = User::where('id', $user)->get()->first();
      $html4 = $user->name;
      return $html4;
    })
    ->addColumn('download_delete', function ($formatos) {
      $html5 = '<a class="btn btn-info btn-sm" title="Descargar" href="sc/documentos/pdf/'.$formatos->id. /*'" onclick="download_formatos('.$formatos->id.')"*/ '" target="_blank" rel="noreferrer noopener"><span class="far fa-file-pdf"></span></a>
      <button type="button" title="Eliminar" name="delete" id="'.$formatos->id.'" onclick="delete_formatos('.$formatos->id.');" class="delete btn btn-danger btn-sm"><span class="fas fa-trash-alt"></span></button>';
      return $html5;
    })
    ->addColumn('edit', function ($formatos) {
      $html6 = '<button type="button" title="Editar" name="edit" id="'.$formatos->id.'" onclick="edit_formatos('.$formatos->id.');" class="delete btn btn-warning btn-sm"><span class="fas fa-edit"></span></button>';
      return $html6;
    })
    ->rawColumns(['fecha', 'fecha_aprob', 'usuario', 'download_delete', 'edit'])
    ->make(true);
  }

  public function codigos_nombre(Request $request){

    if ($request->proyecto_id) {
      $cd = Proyecto::where('id', $request->proyecto_id)->get()->first();
      $nombre = $cd->no18." - ".$cd->no20;
      return response($nombre);
    }

  }


  public function has_form(Request $request)
  {		
    if ($request->ajax()) {
      $formato = Documentos_formatos::where('id', $request->formato_id)->get()->first();
      if ($formato) {
        return $formato;
      } else {
        return null;
      }
    }
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {		


      
  }

  public function download(Request $request, $ruta)
  {		
    
    return response()->download(storage_path('../public/assets/SC-documents/'  .  $ruta ));
      
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function create_formato(Request $request)
  {		

    if ($request->ajax()) {

      // obtener el has_form del formato para ver si se guardan los datos o se genera el arhivo
      // $documento_formato_id = $request->documentoformato_id;
      $has_form = Documentos_formatos::where('id', $request->documentoformato_id)->value('has_form');
      // condicion para crear los archivos que no se guardan
      if ($has_form == 2) {
        $nombreDocumento = Documentos_formatos::where('id', $request->documentoformato_id)->get()->first();
        $datosProyecto = Proyecto::where('id', $request->proyecto_id)
        ->get()->first();
        $proyectos = Proyecto::where('proyectos.id', $request->proyecto_id)
        ->join('investigadores', 'proyectos.investigador_id', '=', 'investigadores.id')
        ->join('empresas', 'proyectos.empresa_id', '=', 'empresas.id')
        ->join('users', 'proyectos.id_user' , '=', 'users.id')
        ->select('proyectos.*', 'investigadores.*', 'empresas.*', 'users.*')
        ->get()->first();
        $codigoUIS = $datosProyecto->no18;

        $currentTime = Carbon::now();

        $my_template = new \PhpOffice\PhpWord\TemplateProcessor(storage_path('../public/' . $nombreDocumento['directorio'] . ''));

        // Documento Nota al archivo
        if (54 == $request->documentoformato_id) {
          $my_template->setValue('codigo', $datosProyecto->no20);
        }

        // Documento Eventos adversos
        if (59 == $request->documentoformato_id) {
          $my_template->setValue('codigo', $datosProyecto->no20);
        }

        // Documento Medicamentos contaminantes
        if (60 == $request->documentoformato_id) {
          $my_template->setValue('codigo', $datosProyecto->no20);
        }
        
        // Documento Medicamento de estudio
        if (61 == $request->documentoformato_id) {
          $my_template->setValue('codigo', $datosProyecto->no20);
        }

        // Documento Historia clinica
        if (62 == $request->documentoformato_id) {
          $my_template->setValue('codigo', $datosProyecto->no20);
        }
        
        // Documento Visita SD
        if (64 == $request->documentoformato_id) {
          $my_template->setValue('codigo', $datosProyecto->no20);
        }
        
        // Documento Nota medica
        if (65 == $request->documentoformato_id) {
          $my_template->setValue('codigo', $datosProyecto->no20);
        }
        
        // Documento Pre-seleccion
        if (66 == $request->documentoformato_id) {
          $my_template->setValue('codigo', $datosProyecto->no20);
        }
        
        // Documento Seleccion
        if (67 == $request->documentoformato_id) {
          $my_template->setValue('codigo', $datosProyecto->no20);
          $my_template->setValue('titulo', $datosProyecto->no19);
        }
        
        // Documento Seleccion
        if (71 == $request->documentoformato_id) {
          $my_template->setValue('codigo', $datosProyecto->no20);
        }
        
        // Documento Carnet de viaticos
        if (75 == $request->documentoformato_id) {
          $my_template->setValue('codigo', $datosProyecto->no20);
          $my_template->setValue('investigadorPrincipal', $proyectos->investigador);
        }

        try{
          // TODO: cambiar el nombre para que tenga el id del formato para diferenciarlos y que no se sobreescriban 
          $my_template->saveAs(storage_path( '../public/assets/SC-documents/' . $nombreDocumento['nombre_doc'] . '-' . $codigoUIS . '-' . $currentTime->toDateString() . '.' .$nombreDocumento['format'] ));
          // $my_template->saveAs(storage_path( '../public/assets/SC-documents/' . $nombreDocumento['nombre_doc'] . '-' . $currentTime->toDateString() . '.' .$nombreDocumento['format'] ));
        }catch (Exception $e){
          return response(null);
        }
    
        // return response()->download(storage_path( '../public/assets/SC-documents/'  . $nombreDocumento['nombre_doc'] . '-' . $currentTime->toDateString() . '.' . $nombreDocumento['format'] ));
        
        return response( $nombreDocumento['nombre_doc'] . '-' . $codigoUIS . '-' . $currentTime->toDateString() . '.' . $nombreDocumento['format'] );
        // return response( $nombreDocumento['nombre_doc'] . '-' . $currentTime->toDateString() . '.' . $nombreDocumento['format'] );
        
      } else {

        // VALIDAR CAMPOS
        $request->validate([
          'documentoformato_id' => 'required',
          'proyecto_id' => 'required',
        ]);

        // id usuario loggeado
        $id_user = auth()->id();
        //TODO: Buscar los datos del usuario, la empresa y el area(menu) en  un provider o donde sea que se encuentren
        $documento_formato_id = $request->documentoformato_id;
        $empresa_id = session('id_empresa');
        $proyecto_id = $request->proyecto_id;
        $menu_id = $request->menu_id;
        $formato_id = $request->formato_id;

        // Create formato
        if (!$formato_id) {
          
          // consulta para seber si ya existe el formato que se guardara
          //TODO: ver si se guardaran datos "repetidos"
          $formato = Formato::where('documento_formato_id', $documento_formato_id)
          ->where('empresa_id', $empresa_id)
          ->where('menu_id', $menu_id)
          ->where('proyecto_id', $proyecto_id)
          ->get()->first();

          // $formato = null;

          $datos_json = json_encode($request->all());
          $datos_array = json_decode($datos_json, true);
          $datos = null;
          
          //count para saber cuantos datos son, dependiendo del formulario
          $countArray = count($datos_array);

          for ($i=1; $i < $countArray - 6; $i++) { 
            $key = $documento_formato_id . 'no' . $i;
            $datos[] = $datos_array[$key];
          }
          $datos = json_encode($datos);
          
          if (!$formato) {
            // GUARDAR REGISTROS
            $formatos = new Formato();
            $formatos->documento_formato_id = $request->documentoformato_id;
            $formatos->datos_json = $datos;
            //TODO: cambiar para que sea la empresa y el menu correctos
            $formatos->empresa_id = $empresa_id;
            $formatos->menu_id = $menu_id;
            $formatos->proyecto_id = $proyecto_id;
            $formatos->user_id = $id_user;
            $formatos->save();

            if ($formatos) {
              return response('guardado');
            }else{
              return response('no guardado');
            }
            
          }else{
            return response('dato existe');
          }

          // Update formato
        }else{

          $datos_json = json_encode($request->all());
          $datos_array = json_decode($datos_json, true);
          $datos = null;

          //count para saber cuantos datos son, dependiendo del formulario
          $countArray = count($datos_array);
          // TODO: ver que onda con el ultimo valor no se guarda,   ----  talvez ya resuelto 
          for ($i=1; $i < $countArray - 6; $i++) { 
            $key = $documento_formato_id . 'no' . $i;
            $datos[] = $datos_array[$key];
          }
          $datos = json_encode($datos);


          $formatos = Formato::find($formato_id);

          $formatos->documento_formato_id = $request->documentoformato_id;
          $formatos->datos_json = $datos;
          //TODO: cambiar para que sea la empresa y el menu correctos
          $formatos->empresa_id = $empresa_id;
          $formatos->menu_id = $menu_id;
          $formatos->proyecto_id = $proyecto_id;
          $formatos->user_id = $id_user;
          $formatos->save();

          if ($formatos) {
            return response('editado');
          }else{
            return response(null);
          }

        };
        
      }
  
    }
      
  }


  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function delete_formato(Request $request)
  {		
    if($request->ajax()){
      
      $formato_id = $request->formato_id;
      $formato = Formato::where('id', $formato_id)->delete();

      if ($formato > 0) {
        return response('eliminado');
      }else{
        return response(null);
      }

    }
  }


  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function edit_formato(Request $request)
  {		
    if($request->ajax()){
      $formato_id = $request->formato_id;
      $formato = Formato::where('id', $formato_id)->get()->first()->toJson();
      
      $formato = json_encode($formato);

      return $formato;
    }
  }


  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function download_formato(Request $request, $ruta)
  {		
    return response()->download(storage_path('../public/assets/SC/5- FC-SC/'  .  $ruta ));
  }
  
  /**
   * Get the has_form of the format.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */


}
