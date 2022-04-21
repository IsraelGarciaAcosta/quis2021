<?php

namespace App\Http\Controllers\SitioClinico;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Administracion\Proyecto;
use App\Models\SitioClinico\Factibilidad;
use Illuminate\Support\Facades\Event;
use App\Models\Menu;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

// Start of uses

class FactibilidadController extends Controller
{
    // Start of traits
	
    //CONSTRUCTOR PARA PROTEGER FILES SOLO PARA LOGEADOS
    public function __construct(){
        //PROTEGRE LAS RUTAS POR EL CONTROLADOR DEPENDIENDO DE ROLES Y PERMISOS
        $this->middleware('can:factibilidad.index');//PROTEGE TODAS LAS RUTAS
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
		return view('sc/factibilidad.index', compact('proyectos'));
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
            $factibilidad = new Factibilidad();
        }else{
            $factibilidad = Factibilidad::find($id);
        }

		//GUARDAR REGISTROS FACTIBILIDAD
        $factibilidad->no1 = $request->no1;
        $factibilidad->no2 = $request->no2;
        $factibilidad->no3 = $request->no3;
        $factibilidad->no4 = $request->no4;
        $factibilidad->no5 = $request->no5;
        $factibilidad->no6 = $request->no6;
        $factibilidad->no7 = $request->no7;
        $factibilidad->no8 = $request->no8;
        $factibilidad->is_active = 1;
        $factibilidad->proyecto_id = $request->proyecto_id;
        $factibilidad->empresa_id = $request->empresa_id;
        $factibilidad->id_user = $id_user;
        $factibilidad -> save();

		return redirect()->route('factibilidad.edit', $request->proyecto_id)->with('info', 'La factibilidad se guardó correctamente');
        
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
        $factibilidad = Factibilidad::where('proyecto_id', '=', $id)->get()->first();

        if($factibilidad==""){
            return view('sc/factibilidad.create', compact('proyecto'));
        }else{
            return view('sc/factibilidad.edit', compact('proyecto', 'factibilidad'));
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

		$factibilidad = Factibilidad::find($request->id);
        $factibilidad->no1 = $request->no1;
        $factibilidad->no2 = $request->no2;
        $factibilidad->no3 = $request->no3;
        $factibilidad->no4 = $request->no4;
        $factibilidad->no5 = $request->no5;
        $factibilidad->no6 = $request->no6;
        $factibilidad->no7 = $request->no7;
        $factibilidad->no8 = $request->no8;
        $factibilidad->is_active = 1;
        $factibilidad->proyecto_id = $request->proyecto_id;
        $factibilidad->empresa_id = $request->empresa_id;
        $factibilidad->id_user = $id_user;
        $factibilidad -> save();
		
        return redirect()->route('factibilidad.edit', $request->proyecto_id)->with('info', 'La factibilidad se modificó correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $factibilidad = Factibilidad::where('proyecto_id', $id)->delete();
        $proyectos = Proyecto::where('empresa_id', '=', session('id_empresa'))->get();
        return redirect()->route('factibilidad.index')->with('info', 'La factibilidad se eliminó correctamente');
    }



}