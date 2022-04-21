<?php

namespace App\Http\Controllers\SitioClinico;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\SitioClinico\Seguridad_Revision;
use App\Models\SitioClinico\Seguridad_Cadena;
use App\Models\Administracion\Reclutamiento;

// Start of uses

class SeguridadController extends Controller
{
    // Start of traits
	
    //CONSTRUCTOR PARA PROTEGER FILES SOLO PARA LOGEADOS
    public function __construct(){
        //PROTEGRE LAS RUTAS POR EL CONTROLADOR DEPENDIENDO DE ROLES Y PERMISOS
        $this->middleware('can:seguridad.index');//PROTEGE TODAS LAS RUTAS
        //$this->middleware('can:users.index')->only('index');//SOLO PROTEGE LO QUE ESPECIFIQUEMOS
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $empleados = Reclutamiento::pluck('no62', 'id');
        return view('sc/seguridad.index', compact('empleados'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

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
    public function show(Carpeta $carpeta)
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
        
    }



    public function list_revision(Request $request)
    {
        $user_id = auth()->id();
        $empresa_id = $request->empresa_id;
        $revision = Seguridad_Revision::where('empresa_id', $empresa_id)
        ->orderBy('no1')->get();
        
        return datatables()->of($revision)
        ->addColumn('fecha', function ($revision) {
            $html3 = $revision->no1;
            return $html3;
        })
        ->addColumn('edit', function ($revision) {
            $html5 = '<a class="btn btn-info btn-sm" title="Editar" href="javascript:void(0)" onclick="edit_revision('.$revision->id.')"><span class="fas fa-edit"></span></a>';
            return $html5;
        })
        ->addColumn('delete', function ($revision) {
            $html6 = '<button type="button" name="delete" id="'.$revision->id.'" onclick="delete_revision('.$revision->id.');" title="Eliminar" class="delete btn btn-danger btn-sm"><span class="fas fa-trash-alt"></span></button>';
            return $html6;
        })
        ->rawColumns(['fecha', 'edit', 'delete'])
        ->make(true);
    }



    public function create_revision(Request $request)
    {
        if($request->ajax()){
            $user_id = auth()->id();
            $id_revision = $request->id_revision;
            $no1 = $request->no1;
            $empresa_id = $request->empresaid_revision;

            if($id_revision==""){
                $revision = Seguridad_Revision::where('no1', '=', $no1)
                ->where('empresa_id', '=', $empresa_id)
                ->get()->first();
                //GUARDAR REGISTRO
                if($revision==""){
                    $cons = new Seguridad_Revision();
                    $cons -> no1 = $request->no1;
                    $cons -> no2 = $request->no2;
                    $cons -> no3 = $request->no3;
                    $cons -> no4 = $request->no4;
                    $cons -> no5 = $request->no5;
                    $cons -> no6 = $request->no6;
                    $cons -> no7 = $request->no7;
                    $cons -> no8 = $request->no8;
                    $cons -> no9 = $request->no9;
                    $cons -> no10 = $request->no10;
                    $cons -> empresa_id = $empresa_id;
                    $cons -> id_user = $user_id;
                    $cons -> save();
                    return response("guardado");
                }else{
                    return response("singuardar");
                }
            }else{
                $cons = Seguridad_Revision::find($id_revision);
                $cons -> no1 = $request->no1;
                $cons -> no2 = $request->no2;
                $cons -> no3 = $request->no3;
                $cons -> no4 = $request->no4;
                $cons -> no5 = $request->no5;
                $cons -> no6 = $request->no6;
                $cons -> no7 = $request->no7;
                $cons -> no8 = $request->no8;
                $cons -> no9 = $request->no9;
                $cons -> no10 = $request->no10;
                $cons -> empresa_id = $empresa_id;
                $cons -> id_user = $user_id;
                $cons -> save();
                return response("guardado");
            }
        }
    }



    public function edit_revision(Request $request)
    {
        if($request->ajax()){
            $id_revision = $request->id_revision;
            $revision = Seguridad_Revision::where('id', '=', $id_revision)
            ->get()->toJson();
            return json_encode($revision);
        }
    }



    public function delete_revision(Request $request)
    {
        if($request->ajax()){
            $id_revision = $request->id_revision;
            $revision = Seguridad_Revision::where('id', $id_revision)->delete();
            return response("eliminado");
        }
    }






    public function list_cadena(Request $request)
    {
        $user_id = auth()->id();
        $empresa_id = $request->empresa_id;
        $cadena = Seguridad_Cadena::where('empresa_id', $empresa_id)->orderBy('no11')->get();
        
        return datatables()->of($cadena)
        ->addColumn('fecha', function ($cadena) {
            $html3 = $cadena->no11;
            return $html3;
        })
        ->addColumn('responsable', function ($cadena) {
            $id_res = $cadena->no13;
            $recl = Reclutamiento::where('id', '=', $id_res)
            ->first();
            $html2 = $recl->no62;
            return $html2;
        })
        ->addColumn('edit', function ($cadena) {
            $html5 = '<a class="btn btn-info btn-sm" title="Editar" href="javascript:void(0)" onclick="edit_cadena('.$cadena->id.')"><span class="fas fa-edit"></span></a>';
            return $html5;
        })
        ->addColumn('delete', function ($cadena) {
            $html6 = '<button type="button" name="delete" id="'.$cadena->id.'" onclick="delete_cadena('.$cadena->id.');" title="Eliminar" class="delete btn btn-danger btn-sm"><span class="fas fa-trash-alt"></span></button>';
            return $html6;
        })
        ->rawColumns(['fecha', 'responsable', 'edit', 'delete'])
        ->make(true);
    }



    public function create_cadena(Request $request)
    {
        if($request->ajax()){
            $user_id = auth()->id();
            $id_cadena = $request->id_cadena;
            $no11 = $request->no11;
            $empresa_id = $request->empresaid_cadena;

            if($id_cadena==""){
                $cadena = Seguridad_Cadena::where('no11', '=', $no11)
                ->where('empresa_id', '=', $empresa_id)
                ->get()->first();
                //GUARDAR REGISTRO
                if($cadena==""){
                    $cons = new Seguridad_Cadena();
                    $cons -> no11 = $request->no11;
                    $cons -> no12 = $request->no12;
                    $cons -> no13 = $request->no13;
                    $cons -> empresa_id = $empresa_id;
                    $cons -> id_user = $user_id;
                    $cons -> save();
                    return response("guardado");
                }else{
                    return response("singuardar");
                }
            }else{
                $cons = Seguridad_Cadena::find($id_cadena);
                $cons -> no11 = $request->no11;
                $cons -> no12 = $request->no12;
                $cons -> no13 = $request->no13;
                $cons -> empresa_id = $empresa_id;
                $cons -> id_user = $user_id;
                $cons -> save();
                return response("guardado");
            }
        }
    }



    public function edit_cadena(Request $request)
    {
        if($request->ajax()){
            $id_cadena = $request->id_cadena;
            $cadena = Seguridad_Cadena::where('id', '=', $id_cadena)
            ->get()->toJson();
            return json_encode($cadena);
        }
    }



    public function delete_cadena(Request $request)
    {
        if($request->ajax()){
            $id_cadena = $request->id_cadena;
            $cadena = Seguridad_Cadena::where('id', $id_cadena)->delete();
            return response("eliminado");
        }
    }




}