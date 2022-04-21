<?php

namespace App\Http\Controllers\SitioClinico;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Administracion\Proyecto;
use App\Models\SitioClinico\Proyect;
use App\Models\SitioClinico\Proyect_Problema;
use App\Models\Administracion\Investigador;
use Illuminate\Support\Facades\Event;
use App\Models\Menu;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

// Start of uses

class ProyectController extends Controller
{
    // Start of traits
	
    //CONSTRUCTOR PARA PROTEGER FILES SOLO PARA LOGEADOS
    public function __construct(){
        //PROTEGRE LAS RUTAS POR EL CONTROLADOR DEPENDIENDO DE ROLES Y PERMISOS
        $this->middleware('can:proyect.index');//PROTEGE TODAS LAS RUTAS
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
		return view('sc/proyect.index', compact('proyectos'));
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
		//VALIDAR CAMPOS
        $request->validate([
            'no1' => 'required',
        ]);

        //id usuario loggeado
        $id_user = auth()->id();
        $id=$request->id;

        if($id==""){
            $proyect = new Proyect();
        }else{
            $proyect = Proyect::find($id);
        }

		//GUARDAR REGISTROS $proyect
        $proyect->no1 = $request->no1;
        $proyect->no2 = $request->no2;
        $proyect->no3 = $request->no3;
        $proyect->no4 = $request->no4;
        $proyect->no5 = $request->no5;
        $proyect->no6 = $request->no6;
        $proyect->no7 = $request->no7;
        $proyect->no8 = $request->no8;
        $proyect->no9 = $request->no9;
        $proyect->no10 = $request->no10;
        $proyect->no11 = $request->no11;
        $proyect->no12 = $request->no12;
        $proyect->no13 = $request->no13;
        $proyect->no14 = $request->no14;
        $proyect->no15 = $request->no15;
        $proyect->no16 = $request->no16;
        $proyect->no17 = $request->no17;
        $proyect->no18 = $request->no18;
        $proyect->no19 = $request->no19;
        $proyect->no20 = $request->no20;
        $proyect->no21 = $request->no21;
        $proyect->no22 = $request->no22;
        $proyect->no23 = $request->no23;
        $proyect->no24 = $request->no24;
        $proyect->no25 = $request->no25;
        $proyect->no26 = $request->no26;
        $proyect->no27 = $request->no27;
        $proyect->no28 = $request->no28;
        $proyect->no29 = $request->no29;
        $proyect->no30 = $request->no30;
        $proyect->no31 = $request->no31;
        $proyect->no34 = $request->no34;
        $proyect->no35 = $request->no35;
        $proyect->no36 = $request->no36;
        $proyect->is_active = 1;
        $proyect->proyecto_id = $request->proyecto_id;
        $proyect->empresa_id = $request->empresa_id;
        $proyect->id_user = $id_user;
        $proyect -> save();

		return redirect()->route('proyect.edit', $request->proyecto_id)->with('info', 'El proyecto se guardó correctamente');
        
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
        $proyect = Proyect::where('proyecto_id', '=', $id)->get()->first();
        $investigadores = Investigador::pluck('investigador', 'id');

        if($proyect==""){
            return view('sc/proyect.create', compact('proyecto', 'investigadores'));
        }else{
            return view('sc/proyect.edit', compact('proyecto', 'proyect', 'investigadores'));
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
		//VALIDAR CAMPOS
        $request->validate([
            'no1' => 'required',
        ]);
		
        //id usuario loggeado
        $id_user = auth()->id();

		$proyect = Proyect::find($request->id);
        $proyect->no1 = $request->no1;
        $proyect->no2 = $request->no2;
        $proyect->no3 = $request->no3;
        $proyect->no4 = $request->no4;
        $proyect->no5 = $request->no5;
        $proyect->no6 = $request->no6;
        $proyect->no7 = $request->no7;
        $proyect->no8 = $request->no8;
        $proyect->no9 = $request->no9;
        $proyect->no10 = $request->no10;
        $proyect->no11 = $request->no11;
        $proyect->no12 = $request->no12;
        $proyect->no13 = $request->no13;
        $proyect->no14 = $request->no14;
        $proyect->no15 = $request->no15;
        $proyect->no16 = $request->no16;
        $proyect->no17 = $request->no17;
        $proyect->no18 = $request->no18;
        $proyect->no19 = $request->no19;
        $proyect->no20 = $request->no20;
        $proyect->no21 = $request->no21;
        $proyect->no22 = $request->no22;
        $proyect->no23 = $request->no23;
        $proyect->no24 = $request->no24;
        $proyect->no25 = $request->no25;
        $proyect->no26 = $request->no26;
        $proyect->no27 = $request->no27;
        $proyect->no28 = $request->no28;
        $proyect->no29 = $request->no29;
        $proyect->no30 = $request->no30;
        $proyect->no31 = $request->no31;
        $proyect->no34 = $request->no34;
        $proyect->no35 = $request->no35;
        $proyect->no36 = $request->no36;
        $proyect->is_active = 1;
        $proyect->proyecto_id = $request->proyecto_id;
        $proyect->empresa_id = $request->empresa_id;
        $proyect->id_user = $id_user;
        $proyect -> save();
		
        return redirect()->route('proyect.edit', $request->proyecto_id)->with('info', 'El proyecto se modificó correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $problema = Proyect_Problema::where('proyecto_id', $id)->delete();
        $proyect = Proyect::where('proyecto_id', $id)->delete();
        $proyectos = Proyecto::where('empresa_id', '=', session('id_empresa'))->get();
        return redirect()->route('proyect.index')->with('info', 'El proyecto se eliminó correctamente');
    }



    public function guardar_proyect(Request $request)
    {

        if($request->ajax()){
            $user_id = auth()->id();
            $id = $request->id;
            
            //GUARDAR
            if($id==""){
                $proyect = new Proyect();
                $proyect->no1 = $request->no1;
                $proyect->no2 = $request->no2;
                $proyect->no3 = $request->no3;
                $proyect->no4 = $request->no4;
                $proyect->no5 = $request->no5;
                $proyect->no6 = $request->no6;
                $proyect->no7 = $request->no7;
                $proyect->no8 = $request->no8;
                $proyect->no9 = $request->no9;
                $proyect->no10 = $request->no10;
                $proyect->no11 = $request->no11;
                $proyect->no12 = $request->no12;
                $proyect->no13 = $request->no13;
                $proyect->no14 = $request->no14;
                $proyect->no15 = $request->no15;
                $proyect->no16 = $request->no16;
                $proyect->no17 = $request->no17;
                $proyect->no18 = $request->no18;
                $proyect->no19 = $request->no19;
                $proyect->no20 = $request->no20;
                $proyect->no21 = $request->no21;
                $proyect->no22 = $request->no22;
                $proyect->no23 = $request->no23;
                $proyect->no24 = $request->no24;
                $proyect->no25 = $request->no25;
                $proyect->no26 = $request->no26;
                $proyect->no27 = $request->no27;
                $proyect->no28 = $request->no28;
                $proyect->no29 = $request->no29;
                $proyect->no30 = $request->no30;
                $proyect->no31 = $request->no31;
                $proyect->no34 = $request->no34;
                $proyect->no35 = $request->no35;
                $proyect->no36 = $request->no36;
                $proyect->is_active = 1;
                $proyect->proyecto_id = $request->proyecto_id;
                $proyect->empresa_id = $request->empresa_id;
                $proyect->id_user = $user_id;
                $proyect -> save();
                //SACAR EL ID
                $id = $proyect->id;
            }
            
            return response($id);
        }
    }



    public function list_problema(Request $request)
    {
        $user_id = auth()->id();
        $empresa_id = $request->empresa_id;
        $proyecto_id = $request->proyecto_id;
        $problema = Proyect_Problema::where('proyecto_id', $proyecto_id)
        ->where('empresa_id', $empresa_id)->orderBy('no32')->get();
        
        return datatables()->of($problema)
        ->addColumn('problema', function ($problema) {
            $html3 = $problema->no32;
            return $html3;
        })
        ->addColumn('solucion', function ($problema) {
            $html4 = $problema->no33;
            return $html4;
        })
        ->addColumn('edit', function ($problema) {
            $html5 = '<a class="btn btn-info btn-sm" title="Editar" href="javascript:void(0)" onclick="edit_problema('.$problema->id.')"><span class="fas fa-edit"></span></a>';
            return $html5;
        })
        ->addColumn('delete', function ($problema) {
            $html6 = '<button type="button" name="delete" id="'.$problema->id.'" onclick="delete_problema('.$problema->id.');" title="Eliminar" class="delete btn btn-danger btn-sm"><span class="fas fa-trash-alt"></span></button>';
            return $html6;
        })
        ->rawColumns(['problema', 'solucion', 'edit', 'delete'])
        ->make(true);
    }



    public function create_problema(Request $request)
    {
        if($request->ajax()){
            $user_id = auth()->id();
            $id_problema = $request->id_problema;
            $no32 = $request->no32;
            $no33 = $request->no33;
            $empresa_id = $request->empresaid_problema;
            $proyecto_id = $request->proyectoid_problema;
            $proyect_id = $request->proyectid_problema;

            if($id_problema==""){
                //CONSULTA PARA SABER SI YA ESTA CAPTURADO EL SOCIO EN LA EMPRESA
                $problema = Proyect_Problema::where('no32', '=', $no32)
                ->where('empresa_id', '=', $empresa_id)
                ->where('proyecto_id', '=', $proyecto_id)->get()->first();
                //GUARDAR REGISTRO
                if($problema==""){
                    $seg = new Proyect_Problema();
                    $seg -> no32 = $request->no32;
                    $seg -> no33 = $request->no33;
                    $seg -> proyect_id = $proyect_id;
                    $seg -> proyecto_id = $proyecto_id;
                    $seg -> empresa_id = $empresa_id;
                    $seg -> id_user = $user_id;
                    $seg -> save();
                    return response("guardado");
                }else{
                    return response("singuardar");
                }
            }else{
                $seg = Proyect_Problema::find($id_problema);
                $seg -> no32 = $request->no32;
                $seg -> no33 = $request->no33;
                $seg -> proyect_id = $proyect_id;
                $seg -> proyecto_id = $proyecto_id;
                $seg -> empresa_id = $empresa_id;
                $seg -> id_user = $user_id;
                $seg -> save();
                return response("guardado");
            }
        }
    }



    public function edit_problema(Request $request)
    {
        if($request->ajax()){
            $id_problema = $request->id_prob;
            $problema = Proyect_Problema::where('id', '=', $id_problema)
            ->get()->toJson();
            return json_encode($problema);
        }
    }



    public function delete_problema(Request $request)
    {
        if($request->ajax()){
            $id_problema = $request->id_prob;
            $problema = Proyect_Problema::where('id', $id_problema)->delete();
            return response("eliminado");
        }
    }



}