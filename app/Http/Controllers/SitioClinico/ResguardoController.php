<?php

namespace App\Http\Controllers\SitioClinico;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Administracion\Proyecto;
use App\Models\SitioClinico\Resg_Integridad;
use App\Models\SitioClinico\Resg_Entrada;
use App\Models\SitioClinico\Resg_Material;
use App\Models\SitioClinico\Resg_Equipo;

// Start of uses

class ResguardoController extends Controller
{
    // Start of traits
	
    //CONSTRUCTOR PARA PROTEGER FILES SOLO PARA LOGEADOS
    public function __construct(){
        //PROTEGRE LAS RUTAS POR EL CONTROLADOR DEPENDIENDO DE ROLES Y PERMISOS
        $this->middleware('can:resguardo.index');//PROTEGE TODAS LAS RUTAS
        //$this->middleware('can:users.index')->only('index');//SOLO PROTEGE LO QUE ESPECIFIQUEMOS
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $proyectos = Proyecto::where('empresa_id', '=', session('id_empresa'))->get();
		return view('sc/resguardo.index', compact('proyectos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //return view('sc/factibilidad.create');
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $proyecto = Proyecto::where('id', '=', $id)->get()->first();
        $resguardo = Resg_Integridad::where('proyecto_id', '=', $id)->get()->first();
        $fechas = Resg_Integridad::pluck('no1', 'id');
        if($resguardo==""){
            return view('sc/resguardo.create', compact('proyecto', 'fechas'));
        }else{
            return view('sc/resguardo.edit', compact('proyecto', 'fechas'));
        }
        //return response($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
		
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $integridad = Resg_Integridad::where('proyecto_id', $id)->delete();
        $entrada = Resg_Entrada::where('proyecto_id', $id)->delete();
        $material = Resg_Material::where('proyecto_id', $id)->delete();
        $equipo = Resg_Equipo::where('proyecto_id', $id)->delete();
        $proyectos = Proyecto::where('empresa_id', '=', session('id_empresa'))->get();
        return redirect()->route('resguardo.index')->with('info', 'La recepción se eliminó correctamente');
    }




    public function list_integridad(Request $request)
    {
        $user_id = auth()->id();
        $empresa_id = $request->empresa_id;
        $proyecto_id = $request->proyecto_id;
        $integridad = Resg_Integridad::where('proyecto_id', $proyecto_id)
        ->where('empresa_id', $empresa_id)->orderBy('no1')->get();
        
        return datatables()->of($integridad)
        ->addColumn('fecha', function ($integridad) {
            $html3 = $integridad->no1;
            return $html3;
        })
        ->addColumn('tipo', function ($integridad) {
            $html3 = $integridad->no6;
            return $html3;
        })
        ->addColumn('edit', function ($integridad) {
            $html5 = '<a class="btn btn-info btn-sm" title="Editar" href="javascript:void(0)" onclick="edit_integridad('.$integridad->id.')"><span class="fas fa-edit"></span></a>';
            return $html5;
        })
        ->addColumn('delete', function ($integridad) {
            $html6 = '<button type="button" name="delete" id="'.$integridad->id.'" onclick="delete_integridad('.$integridad->id.');" title="Eliminar" class="delete btn btn-danger btn-sm"><span class="fas fa-trash-alt"></span></button>';
            return $html6;
        })
        ->rawColumns(['fecha', 'tipo', 'edit', 'delete'])
        ->make(true);
    }



    public function create_integridad(Request $request)
    {
        if($request->ajax()){
            $user_id = auth()->id();
            $id_integridad = $request->id_integridad;
            $no1 = $request->no1;
            $empresa_id = $request->empresaid_integridad;
            $proyecto_id = $request->proyectoid_integridad;

            if($id_integridad==""){
                //CONSULTA PARA SABER SI YA ESTA CAPTURADO EL SOCIO EN LA EMPRESA
                $integridad = Resg_Integridad::where('no1', '=', $no1)
                ->where('empresa_id', '=', $empresa_id)
                ->where('proyecto_id', '=', $proyecto_id)->get()->first();
                //GUARDAR REGISTRO
                if($integridad==""){
                    $eq= new Resg_Integridad();
                    $eq -> no1 = $request->no1;
                    $eq -> no2 = $request->no2;
                    $eq -> no3 = $request->no3;
                    $eq -> no4 = $request->no4;
                    $eq -> no5 = $request->no5;
                    $eq -> no6 = $request->no6;
                    $eq -> proyecto_id = $proyecto_id;
                    $eq -> empresa_id = $empresa_id;
                    $eq -> id_user = $user_id;
                    $eq -> save();
                    return response("guardado");
                }else{
                    return response("singuardar");
                }
            }else{
                $eq = Resg_Integridad::find($id_integridad);
                $eq -> no1 = $request->no1;
                $eq -> no2 = $request->no2;
                $eq -> no3 = $request->no3;
                $eq -> no4 = $request->no4;
                $eq -> no5 = $request->no5;
                $eq -> no6 = $request->no6;
                $eq -> proyecto_id = $proyecto_id;
                $eq -> empresa_id = $empresa_id;
                $eq -> id_user = $user_id;
                $eq -> save();
                return response("guardado");
            }
        }
    }



    public function edit_integridad(Request $request)
    {
        if($request->ajax()){
            $id_integridad = $request->id_integridad;
            $integridad = Resg_Integridad::where('id', '=', $id_integridad)
            ->get()->toJson();
            return json_encode($integridad);
        }
    }



    public function delete_integridad(Request $request)
    {
        if($request->ajax()){
            $id_integridad = $request->id_integridad;
            $integridad = Resg_Integridad::where('id', $id_integridad)->delete();
            return response("eliminado");
        }
    }






    public function list_entrada(Request $request)
    {
        $user_id = auth()->id();
        $empresa_id = $request->empresa_id;
        $proyecto_id = $request->proyecto_id;
        $entrada = Resg_Entrada::where('proyecto_id', $proyecto_id)
        ->where('empresa_id', $empresa_id)->orderBy('no7')->get();
        
        return datatables()->of($entrada)
        ->addColumn('fecha', function ($entrada) {
            $html3 = $entrada->no7;
            return $html3;
        })
        ->addColumn('nombre', function ($entrada) {
            $html3 = $entrada->no9;
            return $html3;
        })
        ->addColumn('edit', function ($entrada) {
            $html5 = '<a class="btn btn-info btn-sm" title="Editar" href="javascript:void(0)" onclick="edit_entrada('.$entrada->id.')"><span class="fas fa-edit"></span></a>';
            return $html5;
        })
        ->addColumn('delete', function ($entrada) {
            $html6 = '<button type="button" name="delete" id="'.$entrada->id.'" onclick="delete_entrada('.$entrada->id.');" title="Eliminar" class="delete btn btn-danger btn-sm"><span class="fas fa-trash-alt"></span></button>';
            return $html6;
        })
        ->rawColumns(['fecha', 'nombre', 'edit', 'delete'])
        ->make(true);
    }



    public function create_entrada(Request $request)
    {
        if($request->ajax()){
            $user_id = auth()->id();
            $id_entrada = $request->id_entrada;
            $no7 = $request->no7;
            $empresa_id = $request->empresaid_entrada;
            $proyecto_id = $request->proyectoid_entrada;

            if($id_entrada==""){
                //CONSULTA PARA SABER SI YA ESTA CAPTURADO EL SOCIO EN LA EMPRESA
                $entrada = Resg_Entrada::where('no7', '=', $no7)
                ->where('empresa_id', '=', $empresa_id)
                ->where('proyecto_id', '=', $proyecto_id)->get()->first();
                //GUARDAR REGISTRO
                if($entrada==""){
                    $eq= new Resg_Entrada();
                    $eq -> no7 = $request->no7;
                    $eq -> no8 = $request->no8;
                    $eq -> no9 = $request->no9;
                    $eq -> no10 = $request->no10;
                    $eq -> no11 = $request->no11;
                    $eq -> no12 = $request->no12;
                    $eq -> no13 = $request->no13;
                    $eq -> no14 = $request->no14;
                    $eq -> no15 = $request->no15;
                    $eq -> no16 = $request->no16;
                    $eq -> no17 = $request->no17;
                    $eq -> no18 = $request->no18;
                    $eq -> no19 = $request->no19;
                    $eq -> no20 = $request->no20;
                    $eq -> no21 = $request->no21;
                    $eq -> no22 = $request->no22;
                    $eq -> no23 = $request->no23;
                    $eq -> proyecto_id = $proyecto_id;
                    $eq -> empresa_id = $empresa_id;
                    $eq -> id_user = $user_id;
                    $eq -> save();
                    return response("guardado");
                }else{
                    return response("singuardar");
                }
            }else{
                $eq = Resg_Entrada::find($id_entrada);
                $eq -> no7 = $request->no7;
                $eq -> no8 = $request->no8;
                $eq -> no9 = $request->no9;
                $eq -> no10 = $request->no10;
                $eq -> no11 = $request->no11;
                $eq -> no12 = $request->no12;
                $eq -> no13 = $request->no13;
                $eq -> no14 = $request->no14;
                $eq -> no15 = $request->no15;
                $eq -> no16 = $request->no16;
                $eq -> no17 = $request->no17;
                $eq -> no18 = $request->no18;
                $eq -> no19 = $request->no19;
                $eq -> no20 = $request->no20;
                $eq -> no21 = $request->no21;
                $eq -> no22 = $request->no22;
                $eq -> no23 = $request->no23;
                $eq -> proyecto_id = $proyecto_id;
                $eq -> empresa_id = $empresa_id;
                $eq -> id_user = $user_id;
                $eq -> save();
                return response("guardado");
            }
        }
    }



    public function edit_entrada(Request $request)
    {
        if($request->ajax()){
            $id_entrada = $request->id_entrada;
            $entrada = Resg_Entrada::where('id', '=', $id_entrada)
            ->get()->toJson();
            return json_encode($entrada);
        }
    }



    public function delete_entrada(Request $request)
    {
        if($request->ajax()){
            $id_entrada = $request->id_entrada;
            $entrada = Resg_Entrada::where('id', $id_entrada)->delete();
            return response("eliminado");
        }
    }






    public function list_material(Request $request)
    {
        $user_id = auth()->id();
        $empresa_id = $request->empresa_id;
        $proyecto_id = $request->proyecto_id;
        $material = Resg_Material::where('proyecto_id', $proyecto_id)
        ->where('empresa_id', $empresa_id)->orderBy('no24')->get();
        
        return datatables()->of($material)
        ->addColumn('fecha', function ($material) {
            $html3 = $material->no24;
            return $html3;
        })
        ->addColumn('gabinete', function ($material) {
            $html3 = $material->no25;
            return $html3;
        })
        ->addColumn('edit', function ($material) {
            $html5 = '<a class="btn btn-info btn-sm" title="Editar" href="javascript:void(0)" onclick="edit_material('.$material->id.')"><span class="fas fa-edit"></span></a>';
            return $html5;
        })
        ->addColumn('delete', function ($material) {
            $html6 = '<button type="button" name="delete" id="'.$material->id.'" onclick="delete_material('.$material->id.');" title="Eliminar" class="delete btn btn-danger btn-sm"><span class="fas fa-trash-alt"></span></button>';
            return $html6;
        })
        ->rawColumns(['fecha', 'gabinete', 'edit', 'delete'])
        ->make(true);
    }



    public function create_material(Request $request)
    {
        if($request->ajax()){
            $user_id = auth()->id();
            $id_material = $request->id_material;
            $no24 = $request->no24;
            $empresa_id = $request->empresaid_material;
            $proyecto_id = $request->proyectoid_material;

            if($id_material==""){
                //CONSULTA PARA SABER SI YA ESTA CAPTURADO EL SOCIO EN LA EMPRESA
                $material = Resg_Material::where('no24', '=', $no24)
                ->where('empresa_id', '=', $empresa_id)
                ->where('proyecto_id', '=', $proyecto_id)->get()->first();
                //GUARDAR REGISTRO
                if($material==""){
                    $eq= new Resg_Material();
                    $eq -> no24 = $request->no24;
                    $eq -> no25 = $request->no25;
                    $eq -> no26 = $request->no26;
                    $eq -> proyecto_id = $proyecto_id;
                    $eq -> empresa_id = $empresa_id;
                    $eq -> id_user = $user_id;
                    $eq -> save();
                    return response("guardado");
                }else{
                    return response("singuardar");
                }
            }else{
                $eq = Resg_Material::find($id_material);
                $eq -> no24 = $request->no24;
                $eq -> no25 = $request->no25;
                $eq -> no26 = $request->no26;
                $eq -> proyecto_id = $proyecto_id;
                $eq -> empresa_id = $empresa_id;
                $eq -> id_user = $user_id;
                $eq -> save();
                return response("guardado");
            }
        }
    }



    public function edit_material(Request $request)
    {
        if($request->ajax()){
            $id_material = $request->id_material;
            $material = Resg_Material::where('id', '=', $id_material)
            ->get()->toJson();
            return json_encode($material);
        }
    }



    public function delete_material(Request $request)
    {
        if($request->ajax()){
            $id_material = $request->id_material;
            $material = Resg_Material::where('id', $id_material)->delete();
            return response("eliminado");
        }
    }






    public function list_equipo(Request $request)
    {
        $user_id = auth()->id();
        $empresa_id = $request->empresa_id;
        $proyecto_id = $request->proyecto_id;
        $equipo = Resg_Equipo::where('proyecto_id', $proyecto_id)
        ->where('empresa_id', $empresa_id)->orderBy('no27')->get();
        
        return datatables()->of($equipo)
        ->addColumn('fecha', function ($equipo) {
            $html3 = $equipo->no27;
            return $html3;
        })
        ->addColumn('nombre', function ($equipo) {
            $html3 = $equipo->no28;
            return $html3;
        })
        ->addColumn('edit', function ($equipo) {
            $html5 = '<a class="btn btn-info btn-sm" title="Editar" href="javascript:void(0)" onclick="edit_equipo('.$equipo->id.')"><span class="fas fa-edit"></span></a>';
            return $html5;
        })
        ->addColumn('delete', function ($equipo) {
            $html6 = '<button type="button" name="delete" id="'.$equipo->id.'" onclick="delete_equipo('.$equipo->id.');" title="Eliminar" class="delete btn btn-danger btn-sm"><span class="fas fa-trash-alt"></span></button>';
            return $html6;
        })
        ->rawColumns(['fecha', 'nombre', 'edit', 'delete'])
        ->make(true);
    }



    public function create_equipo(Request $request)
    {
        if($request->ajax()){
            $user_id = auth()->id();
            $id_equipo = $request->id_equipo;
            $no27 = $request->no27;
            $empresa_id = $request->empresaid_equipo;
            $proyecto_id = $request->proyectoid_equipo;

            if($id_equipo==""){
                //CONSULTA PARA SABER SI YA ESTA CAPTURADO EL SOCIO EN LA EMPRESA
                $equipo = Resg_Equipo::where('no27', '=', $no27)
                ->where('empresa_id', '=', $empresa_id)
                ->where('proyecto_id', '=', $proyecto_id)->get()->first();
                //GUARDAR REGISTRO
                if($equipo==""){
                    $eq= new Resg_Equipo();
                    $eq -> no27 = $request->no27;
                    $eq -> no28 = $request->no28;
                    $eq -> no29 = $request->no29;
                    $eq -> no30 = $request->no30;
                    $eq -> no31 = $request->no31;
                    $eq -> no32 = $request->no32;
                    $eq -> proyecto_id = $proyecto_id;
                    $eq -> empresa_id = $empresa_id;
                    $eq -> id_user = $user_id;
                    $eq -> save();
                    return response("guardado");
                }else{
                    return response("singuardar");
                }
            }else{
                $eq = Resg_Equipo::find($id_equipo);
                $eq -> no27 = $request->no27;
                $eq -> no28 = $request->no28;
                $eq -> no29 = $request->no29;
                $eq -> no30 = $request->no30;
                $eq -> no31 = $request->no31;
                $eq -> no32 = $request->no32;
                $eq -> proyecto_id = $proyecto_id;
                $eq -> empresa_id = $empresa_id;
                $eq -> id_user = $user_id;
                $eq -> save();
                return response("guardado");
            }
        }
    }



    public function edit_equipo(Request $request)
    {
        if($request->ajax()){
            $id_equipo = $request->id_equipo;
            $equipo = Resg_Equipo::where('id', '=', $id_equipo)
            ->get()->toJson();
            return json_encode($equipo);
        }
    }



    public function delete_equipo(Request $request)
    {
        if($request->ajax()){
            $id_equipo = $request->id_equipo;
            $equipo = Resg_Equipo::where('id', $id_equipo)->delete();
            return response("eliminado");
        }
    }



}