<?php

namespace App\Http\Controllers\SitioClinico;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Administracion\Proyecto;
use App\Models\SitioClinico\Seguimiento;
use App\Models\SitioClinico\Seg_Seguimiento;
use Illuminate\Support\Facades\Event;
use App\Models\Menu;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

// Start of uses

class SeguimientoController extends Controller
{
    // Start of traits
	
    //CONSTRUCTOR PARA PROTEGER FILES SOLO PARA LOGEADOS
    public function __construct(){
        //PROTEGRE LAS RUTAS POR EL CONTROLADOR DEPENDIENDO DE ROLES Y PERMISOS
        $this->middleware('can:seguimiento.index');//PROTEGE TODAS LAS RUTAS
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
		return view('sc/seguimiento.index', compact('proyectos'));
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
            $seguimiento = new Seguimiento();
        }else{
            $seguimiento = Seguimiento::find($id);
        }

		//GUARDAR REGISTROS seguimiento
        $seguimiento->no1 = $request->no1;
        $seguimiento->no2 = $request->no2;
        $seguimiento->no3 = $request->no3;
        $seguimiento->no6 = $request->no6;
        $seguimiento->no7 = $request->no7;
        $seguimiento->no8 = $request->no8;
        $seguimiento->no9 = $request->no9;
        $seguimiento->no10 = $request->no10;
        $seguimiento->no11 = $request->no11;
        $seguimiento->no12 = $request->no12;
        $seguimiento->no13 = $request->no13;
        $seguimiento->no14 = $request->no14;
        $seguimiento->no15 = $request->no15;
        $seguimiento->no16 = $request->no16;
        $seguimiento->no17 = $request->no17;
        $seguimiento->no18 = $request->no18;
        $seguimiento->no19 = $request->no19;
        $seguimiento->no20 = $request->no20;
        $seguimiento->no21 = $request->no21;
        $seguimiento->is_active = 1;
        $seguimiento->proyecto_id = $request->proyecto_id;
        $seguimiento->empresa_id = $request->empresa_id;
        $seguimiento->id_user = $id_user;
        $seguimiento -> save();

		return redirect()->route('seguimiento.edit', $request->proyecto_id)->with('info', 'El seguimiento se guardó correctamente');
        
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
        $seguimiento = Seguimiento::where('proyecto_id', '=', $id)->get()->first();

        if($seguimiento==""){
            return view('sc/seguimiento.create', compact('proyecto'));
        }else{
            return view('sc/seguimiento.edit', compact('proyecto', 'seguimiento'));
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

		$seguimiento = Seguimiento::find($request->id);
        $seguimiento->no1 = $request->no1;
        $seguimiento->no2 = $request->no2;
        $seguimiento->no3 = $request->no3;
        $seguimiento->no6 = $request->no6;
        $seguimiento->no7 = $request->no7;
        $seguimiento->no8 = $request->no8;
        $seguimiento->no9 = $request->no9;
        $seguimiento->no10 = $request->no10;
        $seguimiento->no11 = $request->no11;
        $seguimiento->no12 = $request->no12;
        $seguimiento->no13 = $request->no13;
        $seguimiento->no14 = $request->no14;
        $seguimiento->no15 = $request->no15;
        $seguimiento->no16 = $request->no16;
        $seguimiento->no17 = $request->no17;
        $seguimiento->no18 = $request->no18;
        $seguimiento->no19 = $request->no19;
        $seguimiento->no20 = $request->no20;
        $seguimiento->no21 = $request->no21;
        $seguimiento->is_active = 1;
        $seguimiento->proyecto_id = $request->proyecto_id;
        $seguimiento->empresa_id = $request->empresa_id;
        $seguimiento->id_user = $id_user;
        $seguimiento -> save();
		
        return redirect()->route('seguimiento.edit', $request->proyecto_id)->with('info', 'El seguimiento se modificó correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $seg = Seg_Seguimiento::where('proyecto_id', $id)->delete();
        $seguimiento = Seguimiento::where('proyecto_id', $id)->delete();
        $proyectos = Proyecto::where('empresa_id', '=', session('id_empresa'))->get();
        return redirect()->route('seguimiento.index')->with('info', 'El seguimiento se eliminó correctamente');
    }



    public function guardar_seguimiento(Request $request)
    {

        if($request->ajax()){
            $user_id = auth()->id();
            $id = $request->id;
            
            //GUARDAR
            if($id==""){
                $seguimiento = new Seguimiento();
                $seguimiento->no1 = $request->no1;
                $seguimiento->no2 = $request->no2;
                $seguimiento->no3 = $request->no3;
                $seguimiento->no6 = $request->no6;
                $seguimiento->no7 = $request->no7;
                $seguimiento->no8 = $request->no8;
                $seguimiento->no9 = $request->no9;
                $seguimiento->no10 = $request->no10;
                $seguimiento->no11 = $request->no11;
                $seguimiento->no12 = $request->no12;
                $seguimiento->no13 = $request->no13;
                $seguimiento->no14 = $request->no14;
                $seguimiento->no15 = $request->no15;
                $seguimiento->no16 = $request->no16;
                $seguimiento->no17 = $request->no17;
                $seguimiento->no18 = $request->no18;
                $seguimiento->no19 = $request->no19;
                $seguimiento->no20 = $request->no20;
                $seguimiento->no21 = $request->no21;
                $seguimiento->is_active = 1;
                $seguimiento->proyecto_id = $request->proyecto_id;
                $seguimiento->empresa_id = $request->empresa_id;
                $seguimiento->id_user = $user_id;
                $seguimiento -> save();
                //SACAR EL ID
                $id = $seguimiento->id;
            }
            
            return response($id);
        }
    }



    public function list_seguimiento(Request $request)
    {
        $user_id = auth()->id();
        $empresa_id = $request->empresa_id;
        $proyecto_id = $request->proyecto_id;
        $seguimiento = Seg_Seguimiento::where('proyecto_id', $proyecto_id)
        ->where('empresa_id', $empresa_id)->orderBy('no4')->get();
        
        return datatables()->of($seguimiento)
        ->addColumn('fecha', function ($seguimiento) {
            $html3 = $seguimiento->no4;
            return $html3;
        })
        ->addColumn('resultado', function ($seguimiento) {
            $html4 = $seguimiento->no5;
            return $html4;
        })
        ->addColumn('edit', function ($seguimiento) {
            $html5 = '<a class="btn btn-info btn-sm" title="Editar" href="javascript:void(0)" onclick="edit_seguimiento('.$seguimiento->id.')"><span class="fas fa-edit"></span></a>';
            return $html5;
        })
        ->addColumn('delete', function ($seguimiento) {
            $html6 = '<button type="button" name="delete" id="'.$seguimiento->id.'" onclick="delete_seguimiento('.$seguimiento->id.');" title="Eliminar" class="delete btn btn-danger btn-sm"><span class="fas fa-trash-alt"></span></button>';
            return $html6;
        })
        ->rawColumns(['fecha', 'resultado', 'edit', 'delete'])
        ->make(true);
    }



    public function create_seguimiento(Request $request)
    {
        if($request->ajax()){
            $user_id = auth()->id();
            $id_seguimiento = $request->id_seg;
            $no4 = $request->no4;
            $no5 = $request->no5;
            $empresa_id = $request->empresaid_seguimiento;
            $proyecto_id = $request->proyectoid_seguimiento;
            $seguimiento_id = $request->seguimientoid_seguimiento;

            if($id_seguimiento==""){
                //CONSULTA PARA SABER SI YA ESTA CAPTURADO EL SOCIO EN LA EMPRESA
                $seguimiento = Seg_Seguimiento::where('no4', '=', $no4)
                ->where('empresa_id', '=', $empresa_id)
                ->where('proyecto_id', '=', $proyecto_id)->get()->first();
                //GUARDAR REGISTRO
                if($seguimiento==""){
                    $seg = new Seg_Seguimiento();
                    $seg -> no4 = $request->no4;
                    $seg -> no5 = $request->no5;
                    $seg -> seguimiento_id = $seguimiento_id;
                    $seg -> proyecto_id = $proyecto_id;
                    $seg -> empresa_id = $empresa_id;
                    $seg -> id_user = $user_id;
                    $seg -> save();
                    return response("guardado");
                }else{
                    return response("singuardar");
                }
            }else{
                $seg = Seg_Seguimiento::find($id_seguimiento);
                $seg -> no4 = $request->no4;
                $seg -> no5 = $request->no5;
                $seg -> seguimiento_id = $seguimiento_id;
                $seg -> proyecto_id = $proyecto_id;
                $seg -> empresa_id = $empresa_id;
                $seg -> id_user = $user_id;
                $seg -> save();
                return response("guardado");
            }
        }
    }



    public function edit_seguimiento(Request $request)
    {
        if($request->ajax()){
            $id_seguimiento = $request->id_seg;
            $seguimiento = Seg_Seguimiento::where('id', '=', $id_seguimiento)
            ->get()->toJson();
            return json_encode($seguimiento);
        }
    }



    public function delete_seguimiento(Request $request)
    {
        if($request->ajax()){
            $id_seg = $request->id_seg;
            $seguimiento = Seg_Seguimiento::where('id', $id_seg)->delete();
            return response("eliminado");
        }
    }



}