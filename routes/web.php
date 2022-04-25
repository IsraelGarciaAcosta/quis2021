<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\DashController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\SubmenuController;
//EMPRESAS
use App\Http\Controllers\EmpresaController;
//PROYECTOS
use App\Http\Controllers\Administracion\ProyectoController;
//INVENTARIO
use App\Http\Controllers\Administracion\InventarioController;
//DOCUMENTOS
use App\Http\Controllers\DocumentosController;


//SITIO CLINICO
use App\Http\Controllers\SitioClinico\SCController;
//PROYECT SC
use App\Http\Controllers\SitioClinico\ProyectController;
//FACTIBILIDAD SC
use App\Http\Controllers\SitioClinico\FactibilidadController;
//SEGUIMIENTO SC
use App\Http\Controllers\SitioClinico\SeguimientoController;
//SOMETIMIENTO SC
use App\Http\Controllers\SitioClinico\SometimientoController;
//INSTALACION SC
use App\Http\Controllers\SitioClinico\InstalacionController;
//EQUIPAMIENTO SC
use App\Http\Controllers\SitioClinico\EquipamientoController;
//CARPETA FARMACIA SC
use App\Http\Controllers\SitioClinico\CarpetaController;
//SEGURIDAD DE FARMACIA SC
use App\Http\Controllers\SitioClinico\SeguridadController;
//RESGUARDO SC
use App\Http\Controllers\SitioClinico\ResguardoController;


//ADMINISTRACION
//RECEPCION ADM
use App\Http\Controllers\Administracion\RecepcionController;
//CONTRATO ADM
use App\Http\Controllers\Administracion\ContratoController;
//PREPARACION ADM
use App\Http\Controllers\Administracion\PreparacionController;
//FACTURACION ADM
use App\Http\Controllers\Administracion\FacturacionController;
//PAGOS ADM
use App\Http\Controllers\Administracion\PagoController;
//AUXILIAR ADM
use App\Http\Controllers\Administracion\AuxiliarController;
//RECLUTAMIENTO ADM
use App\Http\Controllers\Administracion\ReclutamientoController;
//CONTRATACION ADM
use App\Http\Controllers\Administracion\ContratacionController;
//INDUCCION ADM
use App\Http\Controllers\Administracion\InduccionController;
//DESARROLLO ADM
use App\Http\Controllers\Administracion\DesarrolloController;
//EVALUACION ADM
use App\Http\Controllers\Administracion\EvaluacionController;
//TERMINACION ADM
use App\Http\Controllers\Administracion\TerminacionController;


//CALIDAD
//VERSIONES CALIDAD
use App\Http\Controllers\Calidad\VersionesController;
//REUNIONES CALIDAD
use App\Http\Controllers\Calidad\ReunionesController;
//AUDITORIA CALIDAD
use App\Http\Controllers\Calidad\AuditoriaController;
//MEJORA CALIDAD
use App\Http\Controllers\Calidad\MejoraController;


//CAPACITACIÓN
//DIAGNOSTICO CAPACITACIÓN
use App\Http\Controllers\Capacitacion\DiagnosticoController;
//PLAN CAPACITACIÓN
use App\Http\Controllers\Capacitacion\PlanController;
//CONTENIDOS CAPACITACIÓN
use App\Http\Controllers\Capacitacion\ContenidosController;
//INTERVENCION CAPACITACIÓN
use App\Http\Controllers\Capacitacion\IntervencionController;
//EVALUACION CAPACITACIÓN
use App\Http\Controllers\Capacitacion\EvaluacionCapController;


//REXBIOT
//GANADO REXBIOT
use App\Http\Controllers\Rexbiot\GanadoController;
//POTREROS REXBIOT
use App\Http\Controllers\Rexbiot\PotreroController;
//PASTOREO REXBIOT
use App\Http\Controllers\Rexbiot\PastoreoController;
//INSTALACIONES REXBIOT
use App\Http\Controllers\Rexbiot\InstalacionesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Route::resource('users', UserController::class);

Route::resource('roles', RoleController::class);

Route::resource('permissions', PermissionController::class);

Route::resource('home', InicioController::class);

Route::resource('dashboard', DashController::class);

Route::resource('profile', ProfileController::class);

Route::resource('menus', MenuController::class);

Route::resource('submenus', SubmenuController::class);


Route::get('/dashboard', 'App\Http\Controllers\DashController@index')->name('dashboard');
Route::post('/dashboard/store', 'App\Http\Controllers\DashController@store')->name('dashboard.store');
Route::post('/dashboard/get_empresa', 'App\Http\Controllers\DashController@get_empresa')->name('dashboard.get_empresa');

//RECURSOS EMPRESA
Route::resource('empresas', EmpresaController::class);
//MODAL SOCIOS EMPRESA
Route::post('/empresas/guardar_empresa', 'App\Http\Controllers\EmpresaController@guardar_empresa')->name('empresas.guardar_empresa');
Route::post('/empresas/list_socios', 'App\Http\Controllers\EmpresaController@list_socios')->name('empresas.list_socios');
Route::post('/empresas/create_socios', 'App\Http\Controllers\EmpresaController@create_socios')->name('empresas.create_socios');
Route::post('/empresas/edit_socios', 'App\Http\Controllers\EmpresaController@edit_socios')->name('empresas.edit_socios');
Route::post('/empresas/delete_socios', 'App\Http\Controllers\EmpresaController@delete_socios')->name('empresas.delete_socios');
//MODAL DOMICILIOS EMPRESA
Route::post('/empresas/list_domicilios', 'App\Http\Controllers\EmpresaController@list_domicilios')->name('empresas.list_domicilios');
Route::post('/empresas/create_domicilios', 'App\Http\Controllers\EmpresaController@create_domicilios')->name('empresas.create_domicilios');
Route::post('/empresas/edit_domicilios', 'App\Http\Controllers\EmpresaController@edit_domicilios')->name('empresas.edit_domicilios');
Route::post('/empresas/delete_domicilios', 'App\Http\Controllers\EmpresaController@delete_domicilios')->name('empresas.delete_domicilios');
//MODAL REPRESENTANTE LEGAL EMPRESA
Route::post('/empresas/list_legal', 'App\Http\Controllers\EmpresaController@list_legal')->name('empresas.list_legal');
Route::post('/empresas/create_legal', 'App\Http\Controllers\EmpresaController@create_legal')->name('empresas.create_legal');
Route::post('/empresas/edit_legal', 'App\Http\Controllers\EmpresaController@edit_legal')->name('empresas.edit_legal');
Route::post('/empresas/delete_legal', 'App\Http\Controllers\EmpresaController@delete_legal')->name('empresas.delete_legal');
//MODAL DOCUMENTOS REGULATORIOS EMPRESA
Route::post('/empresas/list_documentos', 'App\Http\Controllers\EmpresaController@list_documentos')->name('empresas.list_documentos');
Route::post('/empresas/create_documentos', 'App\Http\Controllers\EmpresaController@create_documentos')->name('empresas.create_documentos');
Route::post('/empresas/edit_documentos', 'App\Http\Controllers\EmpresaController@edit_documentos')->name('empresas.edit_documentos');
Route::post('/empresas/delete_documentos', 'App\Http\Controllers\EmpresaController@delete_documentos')->name('empresas.delete_documentos');
//MODAL RESPONSABILIDADES EMPRESA
Route::post('/empresas/list_responsabilidades', 'App\Http\Controllers\EmpresaController@list_responsabilidades')->name('empresas.list_responsabilidades');
Route::post('/empresas/create_responsabilidades', 'App\Http\Controllers\EmpresaController@create_responsabilidades')->name('empresas.create_responsabilidades');
Route::post('/empresas/edit_responsabilidades', 'App\Http\Controllers\EmpresaController@edit_responsabilidades')->name('empresas.edit_responsabilidades');
Route::post('/empresas/delete_responsabilidades', 'App\Http\Controllers\EmpresaController@delete_responsabilidades')->name('empresas.delete_responsabilidades');
//MODAL SANITARIO EMPRESA
Route::post('/empresas/list_sanitario', 'App\Http\Controllers\EmpresaController@list_sanitario')->name('empresas.list_sanitario');
Route::post('/empresas/create_sanitario', 'App\Http\Controllers\EmpresaController@create_sanitario')->name('empresas.create_sanitario');
Route::post('/empresas/edit_sanitario', 'App\Http\Controllers\EmpresaController@edit_sanitario')->name('empresas.edit_sanitario');
Route::post('/empresas/delete_sanitario', 'App\Http\Controllers\EmpresaController@delete_sanitario')->name('empresas.delete_sanitario');
//MODAL CUENTAS EMPRESA
Route::post('/empresas/list_cuentas', 'App\Http\Controllers\EmpresaController@list_cuentas')->name('empresas.list_cuentas');
Route::post('/empresas/create_cuentas', 'App\Http\Controllers\EmpresaController@create_cuentas')->name('empresas.create_cuentas');
Route::post('/empresas/edit_cuentas', 'App\Http\Controllers\EmpresaController@edit_cuentas')->name('empresas.edit_cuentas');
Route::post('/empresas/delete_cuentas', 'App\Http\Controllers\EmpresaController@delete_cuentas')->name('empresas.delete_cuentas');
//MODAL PROPIEDAD EMPRESA
Route::post('/empresas/list_propiedad', 'App\Http\Controllers\EmpresaController@list_propiedad')->name('empresas.list_propiedad');
Route::post('/empresas/create_propiedad', 'App\Http\Controllers\EmpresaController@create_propiedad')->name('empresas.create_propiedad');
Route::post('/empresas/edit_propiedad', 'App\Http\Controllers\EmpresaController@edit_propiedad')->name('empresas.edit_propiedad');
Route::post('/empresas/delete_propiedad', 'App\Http\Controllers\EmpresaController@delete_propiedad')->name('empresas.delete_propiedad');
//MODAL VINCULACION EMPRESA
Route::post('/empresas/list_vinculacion', 'App\Http\Controllers\EmpresaController@list_vinculacion')->name('empresas.list_vinculacion');
Route::post('/empresas/create_vinculacion', 'App\Http\Controllers\EmpresaController@create_vinculacion')->name('empresas.create_vinculacion');
Route::post('/empresas/edit_vinculacion', 'App\Http\Controllers\EmpresaController@edit_vinculacion')->name('empresas.edit_vinculacion');
Route::post('/empresas/delete_vinculacion', 'App\Http\Controllers\EmpresaController@delete_vinculacion')->name('empresas.delete_vinculacion');

//RECURSOS PROYECTOS
Route::resource('proyectos', ProyectoController::class);
Route::post('/proyectos/cargar_investigador', 'App\Http\Controllers\Administracion\ProyectoController@cargar_investigador')->name('proyectos.cargar_investigador');
//RECURSOS INVENTARIO
Route::resource('inventario', InventarioController::class);
//RECURSOS DOCUMENTOS
Route::resource('documentos_sc', DocumentosController::class);
//Documentos_formatos_Select
Route::post('/documentos_sc/list_formatos', 'App\Http\Controllers\DocumentosController@list_formatos')->name('documentos_sc.list_formatos');
Route::post('/documentos_sc/create_formato', 'App\Http\Controllers\DocumentosController@create_formato')->name('documentos_sc.create_formato');
Route::post('/documentos_sc/delete_formato', 'App\Http\Controllers\DocumentosController@delete_formato')->name('documentos_sc.delete_formato');
Route::post('/documentos_sc/edit_formato', 'App\Http\Controllers\DocumentosController@edit_formato')->name('documentos_sc.edit_formato');
Route::post('/documentos_sc/datos_protocolo', 'App\Http\Controllers\DocumentosController@datos_protocolo')->name('documentos.datos_protocolo');
Route::post('/documentos_sc/codigos_nombre', 'App\Http\Controllers\DocumentosController@codigos_nombre')->name('documentos_sc.codigos_nombre');
Route::post('/documentos_sc/has_form', 'App\Http\Controllers\DocumentosController@has_form')->name('documentos_sc.has_form');
// Geenerar pdf (word)
Route::get('/documentos_sc/word/{id}', [DocumentosController::class,'word'])->name('documentos_sc.word');
// Descargar documento
Route::get('/documentos_sc/download_formato/{ruta}', 'App\Http\Controllers\DocumentosController@download_formato')->name('documentos_sc.download_formato');
Route::get('/documentos_sc/descargar/word/{ruta}', [DocumentosController::class, 'download'])->name('documentos_sc.download');



//RECURSOS PROYECT SC
Route::resource('eq-sc', SCController::class);
Route::resource('proyect', ProyectController::class);
//MODAL PROBLEMA PROYECT
Route::post('/proyect/guardar_proyect', 'App\Http\Controllers\SitioClinico\ProyectController@guardar_proyect')->name('proyect.guardar_proyect');
Route::post('/proyect/list_problema', 'App\Http\Controllers\SitioClinico\ProyectController@list_problema')->name('proyect.list_problema');
Route::post('/proyect/create_problema', 'App\Http\Controllers\SitioClinico\ProyectController@create_problema')->name('proyect.create_problema');
Route::post('/proyect/edit_problema', 'App\Http\Controllers\SitioClinico\ProyectController@edit_problema')->name('proyect.edit_problema');
Route::post('/proyect/delete_problema', 'App\Http\Controllers\SitioClinico\ProyectController@delete_problema')->name('proyect.delete_problema');

//RECURSOS FACTIBILIDAD SC
Route::resource('factibilidad', FactibilidadController::class);

//RECURSOS SEGUIMIENTO SC
Route::resource('seguimiento', SeguimientoController::class);
//MODAL SEGUIMIENTO SEG
Route::post('/seguimiento/guardar_seguimiento', 'App\Http\Controllers\SitioClinico\SeguimientoController@guardar_seguimiento')->name('seguimiento.guardar_seguimiento');
Route::post('/seguimiento/list_seguimiento', 'App\Http\Controllers\SitioClinico\SeguimientoController@list_seguimiento')->name('seguimiento.list_seguimiento');
Route::post('/seguimiento/create_seguimiento', 'App\Http\Controllers\SitioClinico\SeguimientoController@create_seguimiento')->name('seguimiento.create_seguimiento');
Route::post('/seguimiento/edit_seguimiento', 'App\Http\Controllers\SitioClinico\SeguimientoController@edit_seguimiento')->name('seguimiento.edit_seguimiento');
Route::post('/seguimiento/delete_seguimiento', 'App\Http\Controllers\SitioClinico\SeguimientoController@delete_seguimiento')->name('seguimiento.delete_seguimiento');

//RECURSOS SOMETIMIENTO SC
Route::resource('sometimiento', SometimientoController::class);
//MODAL EQUIPO SOMETIMIENTO
Route::post('/sometimiento/guardar_sometimiento', 'App\Http\Controllers\SitioClinico\SometimientoController@guardar_sometimiento')->name('sometimiento.guardar_sometimiento');
Route::post('/sometimiento/list_equipo', 'App\Http\Controllers\SitioClinico\SometimientoController@list_equipo')->name('sometimiento.list_equipo');
Route::post('/sometimiento/create_equipo', 'App\Http\Controllers\SitioClinico\SometimientoController@create_equipo')->name('sometimiento.create_equipo');
Route::post('/sometimiento/edit_equipo', 'App\Http\Controllers\SitioClinico\SometimientoController@edit_equipo')->name('sometimiento.edit_equipo');
Route::post('/sometimiento/delete_equipo', 'App\Http\Controllers\SitioClinico\SometimientoController@delete_equipo')->name('sometimiento.delete_equipo');
//MODAL SOMETIMIENTO SOMETIMIENTO
Route::post('/sometimiento/list_som', 'App\Http\Controllers\SitioClinico\SometimientoController@list_som')->name('sometimiento.list_som');
Route::post('/sometimiento/create_som', 'App\Http\Controllers\SitioClinico\SometimientoController@create_som')->name('sometimiento.create_som');
Route::post('/sometimiento/edit_som', 'App\Http\Controllers\SitioClinico\SometimientoController@edit_som')->name('sometimiento.edit_som');
Route::post('/sometimiento/delete_som', 'App\Http\Controllers\SitioClinico\SometimientoController@delete_som')->name('sometimiento.delete_som');
//MODAL RESPUESTA SOMETIMIENTO
Route::post('/sometimiento/list_respuesta', 'App\Http\Controllers\SitioClinico\SometimientoController@list_respuesta')->name('sometimiento.list_respuesta');
Route::post('/sometimiento/create_respuesta', 'App\Http\Controllers\SitioClinico\SometimientoController@create_respuesta')->name('sometimiento.create_respuesta');
Route::post('/sometimiento/edit_respuesta', 'App\Http\Controllers\SitioClinico\SometimientoController@edit_respuesta')->name('sometimiento.edit_respuesta');
Route::post('/sometimiento/delete_respuesta', 'App\Http\Controllers\SitioClinico\SometimientoController@delete_respuesta')->name('sometimiento.delete_respuesta');

//RECURSOS INSTALACION SC
Route::resource('instalacion', InstalacionController::class);
//MODAL INSTALACION
Route::post('/instalacion/list_instalacion', 'App\Http\Controllers\SitioClinico\InstalacionController@list_instalacion')->name('instalacion.list_instalacion');
Route::post('/instalacion/create_instalacion', 'App\Http\Controllers\SitioClinico\InstalacionController@create_instalacion')->name('instalacion.create_instalacion');
Route::post('/instalacion/edit_instalacion', 'App\Http\Controllers\SitioClinico\InstalacionController@edit_instalacion')->name('instalacion.edit_instalacion');
Route::post('/instalacion/delete_instalacion', 'App\Http\Controllers\SitioClinico\InstalacionController@delete_instalacion')->name('instalacion.delete_instalacion');

//RECURSOS EQUIPAMIENTO SC
Route::resource('equipamiento', EquipamientoController::class);
//MODAL EQUIPAMIENTO
Route::post('/equipamiento/list_equipamiento', 'App\Http\Controllers\SitioClinico\EquipamientoController@list_equipamiento')->name('equipamiento.list_equipamiento');
Route::post('/equipamiento/create_equipamiento', 'App\Http\Controllers\SitioClinico\EquipamientoController@create_equipamiento')->name('equipamiento.create_equipamiento');
Route::post('/equipamiento/edit_equipamiento', 'App\Http\Controllers\SitioClinico\EquipamientoController@edit_equipamiento')->name('equipamiento.edit_equipamiento');
Route::post('/equipamiento/delete_equipamiento', 'App\Http\Controllers\SitioClinico\EquipamientoController@delete_equipamiento')->name('equipamiento.delete_equipamiento');

//RECURSOS CARPETA FARMACIA SC
Route::resource('carpeta', CarpetaController::class);
//MODAL FARMACISTA CARPETA FARMACIA
Route::post('/carpeta/guardar_carpeta', 'App\Http\Controllers\SitioClinico\CarpetaController@guardar_carpeta')->name('carpeta.guardar_carpeta');
Route::post('/carpeta/list_farmacista', 'App\Http\Controllers\SitioClinico\CarpetaController@list_farmacista')->name('carpeta.list_farmacista');
Route::post('/carpeta/create_farmacista', 'App\Http\Controllers\SitioClinico\CarpetaController@create_farmacista')->name('carpeta.create_farmacista');
Route::post('/carpeta/edit_farmacista', 'App\Http\Controllers\SitioClinico\CarpetaController@edit_farmacista')->name('carpeta.edit_farmacista');
Route::post('/carpeta/delete_farmacista', 'App\Http\Controllers\SitioClinico\CarpetaController@delete_farmacista')->name('carpeta.delete_farmacista');
//MODAL CONTROL CARPETA FARMACIA
Route::post('/carpeta/list_control', 'App\Http\Controllers\SitioClinico\CarpetaController@list_control')->name('carpeta.list_control');
Route::post('/carpeta/create_control', 'App\Http\Controllers\SitioClinico\CarpetaController@create_control')->name('carpeta.create_control');
Route::post('/carpeta/edit_control', 'App\Http\Controllers\SitioClinico\CarpetaController@edit_control')->name('carpeta.edit_control');
Route::post('/carpeta/delete_control', 'App\Http\Controllers\SitioClinico\CarpetaController@delete_control')->name('carpeta.delete_control');
//MODAL TRAMITE CARPETA FARMACIA
Route::post('/carpeta/list_tramite', 'App\Http\Controllers\SitioClinico\CarpetaController@list_tramite')->name('carpeta.list_tramite');
Route::post('/carpeta/create_tramite', 'App\Http\Controllers\SitioClinico\CarpetaController@create_tramite')->name('carpeta.create_tramite');
Route::post('/carpeta/edit_tramite', 'App\Http\Controllers\SitioClinico\CarpetaController@edit_tramite')->name('carpeta.edit_tramite');
Route::post('/carpeta/delete_tramite', 'App\Http\Controllers\SitioClinico\CarpetaController@delete_tramite')->name('carpeta.delete_tramite');
//MODAL VERIFICACION CARPETA FARMACIA
Route::post('/carpeta/list_verificacion', 'App\Http\Controllers\SitioClinico\CarpetaController@list_verificacion')->name('carpeta.list_verificacion');
Route::post('/carpeta/create_verificacion', 'App\Http\Controllers\SitioClinico\CarpetaController@create_verificacion')->name('carpeta.create_verificacion');
Route::post('/carpeta/edit_verificacion', 'App\Http\Controllers\SitioClinico\CarpetaController@edit_verificacion')->name('carpeta.edit_verificacion');
Route::post('/carpeta/delete_verificacion', 'App\Http\Controllers\SitioClinico\CarpetaController@delete_verificacion')->name('carpeta.delete_verificacion');
//MODAL ATENCION CARPETA FARMACIA
Route::post('/carpeta/list_atencion', 'App\Http\Controllers\SitioClinico\CarpetaController@list_atencion')->name('carpeta.list_atencion');
Route::post('/carpeta/create_atencion', 'App\Http\Controllers\SitioClinico\CarpetaController@create_atencion')->name('carpeta.create_atencion');
Route::post('/carpeta/edit_atencion', 'App\Http\Controllers\SitioClinico\CarpetaController@edit_atencion')->name('carpeta.edit_atencion');
Route::post('/carpeta/delete_atencion', 'App\Http\Controllers\SitioClinico\CarpetaController@delete_atencion')->name('carpeta.delete_atencion');

//RECURSOS SEGURIDAD DE FARMACIA SC
Route::resource('seguridad', SeguridadController::class);
//MODAL REVISION SEGURIDAD DE FARMACIA
Route::post('/seguridad/list_revision', 'App\Http\Controllers\SitioClinico\SeguridadController@list_revision')->name('seguridad.list_revision');
Route::post('/seguridad/create_revision', 'App\Http\Controllers\SitioClinico\SeguridadController@create_revision')->name('seguridad.create_revision');
Route::post('/seguridad/edit_revision', 'App\Http\Controllers\SitioClinico\SeguridadController@edit_revision')->name('seguridad.edit_revision');
Route::post('/seguridad/delete_revision', 'App\Http\Controllers\SitioClinico\SeguridadController@delete_revision')->name('seguridad.delete_revision');
//MODAL CADENA SEGURIDAD DE FARMACIA
Route::post('/seguridad/list_cadena', 'App\Http\Controllers\SitioClinico\SeguridadController@list_cadena')->name('seguridad.list_cadena');
Route::post('/seguridad/create_cadena', 'App\Http\Controllers\SitioClinico\SeguridadController@create_cadena')->name('seguridad.create_cadena');
Route::post('/seguridad/edit_cadena', 'App\Http\Controllers\SitioClinico\SeguridadController@edit_cadena')->name('seguridad.edit_cadena');
Route::post('/seguridad/delete_cadena', 'App\Http\Controllers\SitioClinico\SeguridadController@delete_cadena')->name('seguridad.delete_cadena');

//RECURSOS RESGUARDO SC
Route::resource('resguardo', ResguardoController::class);
//MODAL INTEGRIDAD RESGUARDO
Route::post('/resguardo/list_integridad', 'App\Http\Controllers\SitioClinico\ResguardoController@list_integridad')->name('resguardo.list_integridad');
Route::post('/resguardo/create_integridad', 'App\Http\Controllers\SitioClinico\ResguardoController@create_integridad')->name('resguardo.create_integridad');
Route::post('/resguardo/edit_integridad', 'App\Http\Controllers\SitioClinico\ResguardoController@edit_integridad')->name('resguardo.edit_integridad');
Route::post('/resguardo/delete_integridad', 'App\Http\Controllers\SitioClinico\ResguardoController@delete_integridad')->name('resguardo.delete_integridad');
//MODAL ENTRADA RESGUARDO
Route::post('/resguardo/list_entrada', 'App\Http\Controllers\SitioClinico\ResguardoController@list_entrada')->name('resguardo.list_entrada');
Route::post('/resguardo/create_entrada', 'App\Http\Controllers\SitioClinico\ResguardoController@create_entrada')->name('resguardo.create_entrada');
Route::post('/resguardo/edit_entrada', 'App\Http\Controllers\SitioClinico\ResguardoController@edit_entrada')->name('resguardo.edit_entrada');
Route::post('/resguardo/delete_entrada', 'App\Http\Controllers\SitioClinico\ResguardoController@delete_entrada')->name('resguardo.delete_entrada');
//MODAL MATERIAL RESGUARDO
Route::post('/resguardo/list_material', 'App\Http\Controllers\SitioClinico\ResguardoController@list_material')->name('resguardo.list_material');
Route::post('/resguardo/create_material', 'App\Http\Controllers\SitioClinico\ResguardoController@create_material')->name('resguardo.create_material');
Route::post('/resguardo/edit_material', 'App\Http\Controllers\SitioClinico\ResguardoController@edit_material')->name('resguardo.edit_material');
Route::post('/resguardo/delete_material', 'App\Http\Controllers\SitioClinico\ResguardoController@delete_material')->name('resguardo.delete_material');
//MODAL EQUIPO RESGUARDO
Route::post('/resguardo/list_equipo', 'App\Http\Controllers\SitioClinico\ResguardoController@list_equipo')->name('resguardo.list_equipo');
Route::post('/resguardo/create_equipo', 'App\Http\Controllers\SitioClinico\ResguardoController@create_equipo')->name('resguardo.create_equipo');
Route::post('/resguardo/edit_equipo', 'App\Http\Controllers\SitioClinico\ResguardoController@edit_equipo')->name('resguardo.edit_equipo');
Route::post('/resguardo/delete_equipo', 'App\Http\Controllers\SitioClinico\ResguardoController@delete_equipo')->name('resguardo.delete_equipo');




//RECURSOS RECEPCION ADMINISTRACION
Route::resource('recepcion', RecepcionController::class);
//MODAL MENSAJES RECEPCION 
Route::post('/recepcion/list_mensaje', 'App\Http\Controllers\Administracion\RecepcionController@list_mensaje')->name('recepcion.list_mensaje');
Route::post('/recepcion/create_mensaje', 'App\Http\Controllers\Administracion\RecepcionController@create_mensaje')->name('recepcion.create_mensaje');
Route::post('/recepcion/edit_mensaje', 'App\Http\Controllers\Administracion\RecepcionController@edit_mensaje')->name('recepcion.edit_mensaje');
Route::post('/recepcion/delete_mensaje', 'App\Http\Controllers\Administracion\RecepcionController@delete_mensaje')->name('recepcion.delete_mensaje');
//MODAL PAQUETERIA RECEPCION
Route::post('/recepcion/list_paqueteria', 'App\Http\Controllers\Administracion\RecepcionController@list_paqueteria')->name('recepcion.list_paqueteria');
Route::post('/recepcion/create_paqueteria', 'App\Http\Controllers\Administracion\RecepcionController@create_paqueteria')->name('recepcion.create_paqueteria');
Route::post('/recepcion/edit_paqueteria', 'App\Http\Controllers\Administracion\RecepcionController@edit_paqueteria')->name('recepcion.edit_paqueteria');
Route::post('/recepcion/delete_paqueteria', 'App\Http\Controllers\Administracion\RecepcionController@delete_paqueteria')->name('recepcion.delete_paqueteria');
//MODAL CAJA RECEPCION
Route::post('/recepcion/list_caja', 'App\Http\Controllers\Administracion\RecepcionController@list_caja')->name('recepcion.list_caja');
Route::post('/recepcion/create_caja', 'App\Http\Controllers\Administracion\RecepcionController@create_caja')->name('recepcion.create_caja');
Route::post('/recepcion/edit_caja', 'App\Http\Controllers\Administracion\RecepcionController@edit_caja')->name('recepcion.edit_caja');
Route::post('/recepcion/delete_caja', 'App\Http\Controllers\Administracion\RecepcionController@delete_caja')->name('recepcion.delete_caja');
//MODAL PROVEEDORES RECEPCION
Route::post('/recepcion/list_proveedor', 'App\Http\Controllers\Administracion\RecepcionController@list_proveedor')->name('recepcion.list_proveedor');
Route::post('/recepcion/create_proveedor', 'App\Http\Controllers\Administracion\RecepcionController@create_proveedor')->name('recepcion.create_proveedor');
Route::post('/recepcion/edit_proveedor', 'App\Http\Controllers\Administracion\RecepcionController@edit_proveedor')->name('recepcion.edit_proveedor');
Route::post('/recepcion/delete_proveedor', 'App\Http\Controllers\Administracion\RecepcionController@delete_proveedor')->name('recepcion.delete_proveedor');
//MODAL FACTURACION RECEPCION
Route::post('/recepcion/list_facturacion', 'App\Http\Controllers\Administracion\RecepcionController@list_facturacion')->name('recepcion.list_facturacion');
Route::post('/recepcion/create_facturacion', 'App\Http\Controllers\Administracion\RecepcionController@create_facturacion')->name('recepcion.create_facturacion');
Route::post('/recepcion/edit_facturacion', 'App\Http\Controllers\Administracion\RecepcionController@edit_facturacion')->name('recepcion.edit_facturacion');
Route::post('/recepcion/delete_facturacion', 'App\Http\Controllers\Administracion\RecepcionController@delete_facturacion')->name('recepcion.delete_facturacion');

//RECURSOS CONTRATO ADMINISTRACION
Route::resource('contrato', ContratoController::class);

//RECURSOS PREPARACION ADMINISTRACION
Route::resource('preparacion', PreparacionController::class);
//MODAL VISITA PREPARACION
Route::post('/preparacion/guardar_preparacion', 'App\Http\Controllers\Administracion\PreparacionController@guardar_preparacion')->name('preparacion.guardar_preparacion');
Route::post('/preparacion/cargar_estudios', 'App\Http\Controllers\Administracion\PreparacionController@cargar_estudios')->name('preparacion.cargar_estudios');
Route::post('/preparacion/cargar_precio', 'App\Http\Controllers\Administracion\PreparacionController@cargar_precio')->name('preparacion.cargar_precio');
Route::post('/preparacion/list_visita', 'App\Http\Controllers\Administracion\PreparacionController@list_visita')->name('preparacion.list_visita');
Route::post('/preparacion/create_visita', 'App\Http\Controllers\Administracion\PreparacionController@create_visita')->name('preparacion.create_visita');
Route::post('/preparacion/edit_visita', 'App\Http\Controllers\Administracion\PreparacionController@edit_visita')->name('preparacion.edit_visita');
Route::post('/preparacion/delete_visita', 'App\Http\Controllers\Administracion\PreparacionController@delete_visita')->name('preparacion.delete_visita');
//MODAL ESTUDIO PREPARACION
Route::post('/preparacion/list_estudio', 'App\Http\Controllers\Administracion\PreparacionController@list_estudio')->name('preparacion.list_estudio');
Route::post('/preparacion/create_estudio', 'App\Http\Controllers\Administracion\PreparacionController@create_estudio')->name('preparacion.create_estudio');
Route::post('/preparacion/edit_estudio', 'App\Http\Controllers\Administracion\PreparacionController@edit_estudio')->name('preparacion.edit_estudio');
Route::post('/preparacion/delete_estudio', 'App\Http\Controllers\Administracion\PreparacionController@delete_estudio')->name('preparacion.delete_estudio');
//MODAL PROVEEDOR PREPARACION
Route::post('/preparacion/list_proveedor', 'App\Http\Controllers\Administracion\PreparacionController@list_proveedor')->name('preparacion.list_proveedor');
Route::post('/preparacion/create_proveedor', 'App\Http\Controllers\Administracion\PreparacionController@create_proveedor')->name('preparacion.create_proveedor');
Route::post('/preparacion/edit_proveedor', 'App\Http\Controllers\Administracion\PreparacionController@edit_proveedor')->name('preparacion.edit_proveedor');
Route::post('/preparacion/delete_proveedor', 'App\Http\Controllers\Administracion\PreparacionController@delete_proveedor')->name('preparacion.delete_proveedor');

//RECURSOS FACTURACION ADMINISTRACION
Route::resource('facturacion', FacturacionController::class);
//MODAL COBROS FACTURACION
Route::post('/facturacion/list_cobro', 'App\Http\Controllers\Administracion\FacturacionController@list_cobro')->name('facturacion.list_cobro');
Route::post('/facturacion/create_cobro', 'App\Http\Controllers\Administracion\FacturacionController@create_cobro')->name('facturacion.create_cobro');
Route::post('/facturacion/edit_cobro', 'App\Http\Controllers\Administracion\FacturacionController@edit_cobro')->name('facturacion.edit_cobro');
Route::post('/facturacion/delete_cobro', 'App\Http\Controllers\Administracion\FacturacionController@delete_cobro')->name('facturacion.delete_cobro');

//RECURSOS PAGOS ADMINISTRACION
Route::resource('pago', PagoController::class);
//MODAL PAGOS_RECIBIDOS PAGOS
Route::post('/pago/list_recibido', 'App\Http\Controllers\Administracion\PagoController@list_recibido')->name('pago.list_recibido');
Route::post('/pago/cargar_precio', 'App\Http\Controllers\Administracion\PagoController@cargar_precio')->name('pago.cargar_precio');
Route::post('/pago/cargar_factura', 'App\Http\Controllers\Administracion\PagoController@cargar_factura')->name('pago.cargar_factura');
Route::post('/pago/create_recibido', 'App\Http\Controllers\Administracion\PagoController@create_recibido')->name('pago.create_recibido');
Route::post('/pago/edit_recibido', 'App\Http\Controllers\Administracion\PagoController@edit_recibido')->name('pago.edit_recibido');
Route::post('/pago/delete_recibido', 'App\Http\Controllers\Administracion\PagoController@delete_recibido')->name('pago.delete_recibido');
//MODAL PAGOS_REALIZADOS PAGOS
Route::post('/pago/list_realizado', 'App\Http\Controllers\Administracion\PagoController@list_realizado')->name('pago.list_realizado');
Route::post('/pago/create_realizado', 'App\Http\Controllers\Administracion\PagoController@create_realizado')->name('pago.create_realizado');
Route::post('/pago/edit_realizado', 'App\Http\Controllers\Administracion\PagoController@edit_realizado')->name('pago.edit_realizado');
Route::post('/pago/delete_realizado', 'App\Http\Controllers\Administracion\PagoController@delete_realizado')->name('pago.delete_realizado');

//RECURSOS AUXILIAR ADMINISTRACION
Route::resource('auxiliar', AuxiliarController::class);
//MODAL AUXILIAR
Route::post('/auxiliar/list_auxiliar', 'App\Http\Controllers\Administracion\AuxiliarController@list_auxiliar')->name('auxiliar.list_auxiliar');
Route::post('/auxiliar/create_auxiliar', 'App\Http\Controllers\Administracion\AuxiliarController@create_auxiliar')->name('auxiliar.create_auxiliar');
Route::post('/auxiliar/edit_auxiliar', 'App\Http\Controllers\Administracion\AuxiliarController@edit_auxiliar')->name('auxiliar.edit_auxiliar');
Route::post('/auxiliar/delete_auxiliar', 'App\Http\Controllers\Administracion\AuxiliarController@delete_auxiliar')->name('auxiliar.delete_auxiliar');

//RECURSOS RECLUTAMIENTO ADMINISTRACION
Route::resource('reclutamiento', ReclutamientoController::class);
//MODAL PUESTO RECLUTAMIENTO
Route::post('/reclutamiento/guardar_reclutamiento', 'App\Http\Controllers\Administracion\ReclutamientoController@guardar_reclutamiento')->name('reclutamiento.guardar_reclutamiento');
Route::post('/reclutamiento/list_puesto', 'App\Http\Controllers\Administracion\ReclutamientoController@list_puesto')->name('reclutamiento.list_puesto');
Route::post('/reclutamiento/create_puesto', 'App\Http\Controllers\Administracion\ReclutamientoController@create_puesto')->name('reclutamiento.create_puesto');
Route::post('/reclutamiento/edit_puesto', 'App\Http\Controllers\Administracion\ReclutamientoController@edit_puesto')->name('reclutamiento.edit_puesto');
Route::post('/reclutamiento/delete_puesto', 'App\Http\Controllers\Administracion\ReclutamientoController@delete_puesto')->name('reclutamiento.delete_puesto');


//RECURSOS CONTRATACION ADMINISTRACION
Route::resource('contratacion', ContratacionController::class);
//MODAL CONTRATO CONTRATACION
Route::post('/contratacion/guardar_contratacion', 'App\Http\Controllers\Administracion\ContratacionController@guardar_contratacion')->name('contratacion.guardar_contratacion');
Route::post('/contratacion/list_contrato', 'App\Http\Controllers\Administracion\ContratacionController@list_contrato')->name('contratacion.list_contrato');
Route::post('/contratacion/create_contrato', 'App\Http\Controllers\Administracion\ContratacionController@create_contrato')->name('contratacion.create_contrato');
Route::post('/contratacion/edit_contrato', 'App\Http\Controllers\Administracion\ContratacionController@edit_contrato')->name('contratacion.edit_contrato');
Route::post('/contratacion/delete_contrato', 'App\Http\Controllers\Administracion\ContratacionController@delete_contrato')->name('contratacion.delete_contrato');

//RECURSOS INDUCCION ADMINISTRACION
Route::resource('induccion', InduccionController::class);

//RECURSOS DESARROLLO ADMINISTRACION
Route::resource('desarrollo', DesarrolloController::class);
//MODAL PERMISO CON GOCE DESARROLLO
Route::post('/desarrollo/list_permisocgoce', 'App\Http\Controllers\Administracion\DesarrolloController@list_permisocgoce')->name('desarrollo.list_permisocgoce');
Route::post('/desarrollo/create_permisocgoce', 'App\Http\Controllers\Administracion\DesarrolloController@create_permisocgoce')->name('desarrollo.create_permisocgoce');
Route::post('/desarrollo/edit_permisocgoce', 'App\Http\Controllers\Administracion\DesarrolloController@edit_permisocgoce')->name('desarrollo.edit_permisocgoce');
Route::post('/desarrollo/delete_permisocgoce', 'App\Http\Controllers\Administracion\DesarrolloController@delete_permisocgoce')->name('desarrollo.delete_permisocgoce');
//MODAL PERMISO SIN GOCE DESARROLLO
Route::post('/desarrollo/list_permisosgoce', 'App\Http\Controllers\Administracion\DesarrolloController@list_permisosgoce')->name('desarrollo.list_permisosgoce');
Route::post('/desarrollo/create_permisosgoce', 'App\Http\Controllers\Administracion\DesarrolloController@create_permisosgoce')->name('desarrollo.create_permisosgoce');
Route::post('/desarrollo/edit_permisosgoce', 'App\Http\Controllers\Administracion\DesarrolloController@edit_permisosgoce')->name('desarrollo.edit_permisosgoce');
Route::post('/desarrollo/delete_permisosgoce', 'App\Http\Controllers\Administracion\DesarrolloController@delete_permisosgoce')->name('desarrollo.delete_permisosgoce');
//MODAL VACACIONES DESARROLLO
Route::post('/desarrollo/list_vacaciones', 'App\Http\Controllers\Administracion\DesarrolloController@list_vacaciones')->name('desarrollo.list_vacaciones');
Route::post('/desarrollo/create_vacaciones', 'App\Http\Controllers\Administracion\DesarrolloController@create_vacaciones')->name('desarrollo.create_vacaciones');
Route::post('/desarrollo/edit_vacaciones', 'App\Http\Controllers\Administracion\DesarrolloController@edit_vacaciones')->name('desarrollo.edit_vacaciones');
Route::post('/desarrollo/delete_vacaciones', 'App\Http\Controllers\Administracion\DesarrolloController@delete_vacaciones')->name('desarrollo.delete_vacaciones');

//RECURSOS EVALUACION ADMINISTRACION
Route::resource('empleados_evaluacion', EvaluacionController::class);
//MODAL EVALUACION VERIFICACION
Route::post('/empleados_evaluacion/guardar_evaluacion', 'App\Http\Controllers\Administracion\EvaluacionController@guardar_evaluacion')->name('empleados_evaluacion.guardar_evaluacion');
Route::post('/empleados_evaluacion/list_verificacion', 'App\Http\Controllers\Administracion\EvaluacionController@list_verificacion')->name('empleados_evaluacion.list_verificacion');
Route::post('/empleados_evaluacion/create_verificacion', 'App\Http\Controllers\Administracion\EvaluacionController@create_verificacion')->name('empleados_evaluacion.create_verificacion');
Route::post('/empleados_evaluacion/edit_verificacion', 'App\Http\Controllers\Administracion\EvaluacionController@edit_verificacion')->name('empleados_evaluacion.edit_verificacion');
Route::post('/empleados_evaluacion/delete_verificacion', 'App\Http\Controllers\Administracion\EvaluacionController@delete_verificacion')->name('empleados_evaluacion.delete_verificacion');
//MODAL EVALUACION CAPACITACION
Route::post('/empleados_evaluacion/list_capacitacion', 'App\Http\Controllers\Administracion\EvaluacionController@list_capacitacion')->name('empleados_evaluacion.list_capacitacion');
Route::post('/empleados_evaluacion/create_capacitacion', 'App\Http\Controllers\Administracion\EvaluacionController@create_capacitacion')->name('empleados_evaluacion.create_capacitacion');
Route::post('/empleados_evaluacion/edit_capacitacion', 'App\Http\Controllers\Administracion\EvaluacionController@edit_capacitacion')->name('empleados_evaluacion.edit_capacitacion');
Route::post('/empleados_evaluacion/delete_capacitacion', 'App\Http\Controllers\Administracion\EvaluacionController@delete_capacitacion')->name('empleados_evaluacion.delete_capacitacion');

//RECURSOS TERMINACION ADMINISTRACION
Route::resource('terminacion', TerminacionController::class);




//RECURSOS VERSIONES A-CALIDAD 
Route::resource('versiones', VersionesController::class);
//RECURSOS REUNIONES A-CALIDAD
Route::resource('reuniones', ReunionesController::class);
//MODAL ASUNTOS REUNIONES A-CALIDAD
Route::post('/reuniones/guardar_reunion', 'App\Http\Controllers\Calidad\ReunionesController@guardar_reunion')->name('reuniones.guardar_reunion');
Route::post('/reuniones/list_asunto', 'App\Http\Controllers\Calidad\ReunionesController@list_asunto')->name('reuniones.list_asunto');
Route::post('/reuniones/create_asunto', 'App\Http\Controllers\Calidad\ReunionesController@create_asunto')->name('reuniones.create_asunto');
Route::post('/reuniones/edit_asunto', 'App\Http\Controllers\Calidad\ReunionesController@edit_asunto')->name('reuniones.edit_asunto');
Route::post('/reuniones/delete_asunto', 'App\Http\Controllers\Calidad\ReunionesController@delete_asunto')->name('reuniones.delete_asunto');
//RECURSOS AUDITORIA A-CALIDAD
Route::resource('auditoria', AuditoriaController::class);
//MODAL EQUIPO AUDITORIA A-CALIDAD
Route::post('/auditoria/guardar_auditoria', 'App\Http\Controllers\Calidad\AuditoriaController@guardar_auditoria')->name('auditoria.guardar_auditoria');
Route::post('/auditoria/list_equipo', 'App\Http\Controllers\Calidad\AuditoriaController@list_equipo')->name('auditoria.list_equipo');
Route::post('/auditoria/create_equipo', 'App\Http\Controllers\Calidad\AuditoriaController@create_equipo')->name('auditoria.create_equipo');
Route::post('/auditoria/edit_equipo', 'App\Http\Controllers\Calidad\AuditoriaController@edit_equipo')->name('auditoria.edit_equipo');
Route::post('/auditoria/delete_equipo', 'App\Http\Controllers\Calidad\AuditoriaController@delete_equipo')->name('auditoria.delete_equipo');
//MODAL REQUISITO AUDITORIA A-CALIDAD
Route::post('/auditoria/list_requisito', 'App\Http\Controllers\Calidad\AuditoriaController@list_requisito')->name('auditoria.list_requisito');
Route::post('/auditoria/create_requisito', 'App\Http\Controllers\Calidad\AuditoriaController@create_requisito')->name('auditoria.create_requisito');
Route::post('/auditoria/edit_requisito', 'App\Http\Controllers\Calidad\AuditoriaController@edit_requisito')->name('auditoria.edit_requisito');
Route::post('/auditoria/delete_requisito', 'App\Http\Controllers\Calidad\AuditoriaController@delete_requisito')->name('auditoria.delete_requisito');
//RECURSOS MEJORA A-CALIDAD 
Route::resource('mejora', MejoraController::class);




//RECURSOS DIAGNOSTICO B-CAPACITACION 
Route::resource('diagnostico', DiagnosticoController::class);
//MODAL FECHA DIAGNOSTICO B-CAPACITACION 
Route::post('/diagnostico/guardar_diagnostico', 'App\Http\Controllers\Capacitacion\DiagnosticoController@guardar_diagnostico')->name('diagnostico.guardar_diagnostico');
Route::post('/diagnostico/list_fecha', 'App\Http\Controllers\Capacitacion\DiagnosticoController@list_fecha')->name('diagnostico.list_fecha');
Route::post('/diagnostico/create_fecha', 'App\Http\Controllers\Capacitacion\DiagnosticoController@create_fecha')->name('diagnostico.create_fecha');
Route::post('/diagnostico/edit_fecha', 'App\Http\Controllers\Capacitacion\DiagnosticoController@edit_fecha')->name('diagnostico.edit_fecha');
Route::post('/diagnostico/delete_fecha', 'App\Http\Controllers\Capacitacion\DiagnosticoController@delete_fecha')->name('diagnostico.delete_fecha');
//MODAL CONOCIMIENTO DIAGNOSTICO B-CAPACITACION 
Route::post('/diagnostico/list_conocimiento', 'App\Http\Controllers\Capacitacion\DiagnosticoController@list_conocimiento')->name('diagnostico.list_conocimiento');
Route::post('/diagnostico/create_conocimiento', 'App\Http\Controllers\Capacitacion\DiagnosticoController@create_conocimiento')->name('diagnostico.create_conocimiento');
Route::post('/diagnostico/edit_conocimiento', 'App\Http\Controllers\Capacitacion\DiagnosticoController@edit_conocimiento')->name('diagnostico.edit_conocimiento');
Route::post('/diagnostico/delete_conocimiento', 'App\Http\Controllers\Capacitacion\DiagnosticoController@delete_conocimiento')->name('diagnostico.delete_conocimiento');
//MODAL HABILIDAD DIAGNOSTICO B-CAPACITACION 
Route::post('/diagnostico/list_habilidad', 'App\Http\Controllers\Capacitacion\DiagnosticoController@list_habilidad')->name('diagnostico.list_habilidad');
Route::post('/diagnostico/create_habilidad', 'App\Http\Controllers\Capacitacion\DiagnosticoController@create_habilidad')->name('diagnostico.create_habilidad');
Route::post('/diagnostico/edit_habilidad', 'App\Http\Controllers\Capacitacion\DiagnosticoController@edit_habilidad')->name('diagnostico.edit_habilidad');
Route::post('/diagnostico/delete_habilidad', 'App\Http\Controllers\Capacitacion\DiagnosticoController@delete_habilidad')->name('diagnostico.delete_habilidad');
//MODAL APTITUD DIAGNOSTICO B-CAPACITACION 
Route::post('/diagnostico/list_aptitud', 'App\Http\Controllers\Capacitacion\DiagnosticoController@list_aptitud')->name('diagnostico.list_aptitud');
Route::post('/diagnostico/create_aptitud', 'App\Http\Controllers\Capacitacion\DiagnosticoController@create_aptitud')->name('diagnostico.create_aptitud');
Route::post('/diagnostico/edit_aptitud', 'App\Http\Controllers\Capacitacion\DiagnosticoController@edit_aptitud')->name('diagnostico.edit_aptitud');
Route::post('/diagnostico/delete_aptitud', 'App\Http\Controllers\Capacitacion\DiagnosticoController@delete_aptitud')->name('diagnostico.delete_aptitud');
//MODAL CAPACITACION DIAGNOSTICO B-CAPACITACION 
Route::post('/diagnostico/list_capacitacion', 'App\Http\Controllers\Capacitacion\DiagnosticoController@list_capacitacion')->name('diagnostico.list_capacitacion');
Route::post('/diagnostico/create_capacitacion', 'App\Http\Controllers\Capacitacion\DiagnosticoController@create_capacitacion')->name('diagnostico.create_capacitacion');
Route::post('/diagnostico/edit_capacitacion', 'App\Http\Controllers\Capacitacion\DiagnosticoController@edit_capacitacion')->name('diagnostico.edit_capacitacion');
Route::post('/diagnostico/delete_capacitacion', 'App\Http\Controllers\Capacitacion\DiagnosticoController@delete_capacitacion')->name('diagnostico.delete_capacitacion');
//MODAL AREA DIAGNOSTICO B-CAPACITACION 
Route::post('/diagnostico/list_area', 'App\Http\Controllers\Capacitacion\DiagnosticoController@list_area')->name('diagnostico.list_area');
Route::post('/diagnostico/create_area', 'App\Http\Controllers\Capacitacion\DiagnosticoController@create_area')->name('diagnostico.create_area');
Route::post('/diagnostico/edit_area', 'App\Http\Controllers\Capacitacion\DiagnosticoController@edit_area')->name('diagnostico.edit_area');
Route::post('/diagnostico/delete_area', 'App\Http\Controllers\Capacitacion\DiagnosticoController@delete_area')->name('diagnostico.delete_area');
//MODAL GRADO DIAGNOSTICO B-CAPACITACION 
Route::post('/diagnostico/list_grado', 'App\Http\Controllers\Capacitacion\DiagnosticoController@list_grado')->name('diagnostico.list_grado');
Route::post('/diagnostico/create_grado', 'App\Http\Controllers\Capacitacion\DiagnosticoController@create_grado')->name('diagnostico.create_grado');
Route::post('/diagnostico/edit_grado', 'App\Http\Controllers\Capacitacion\DiagnosticoController@edit_grado')->name('diagnostico.edit_grado');
Route::post('/diagnostico/delete_grado', 'App\Http\Controllers\Capacitacion\DiagnosticoController@delete_grado')->name('diagnostico.delete_grado');
//MODAL PROPUESTA DIAGNOSTICO B-CAPACITACION 
Route::post('/diagnostico/list_propuesta', 'App\Http\Controllers\Capacitacion\DiagnosticoController@list_propuesta')->name('diagnostico.list_propuesta');
Route::post('/diagnostico/create_propuesta', 'App\Http\Controllers\Capacitacion\DiagnosticoController@create_propuesta')->name('diagnostico.create_propuesta');
Route::post('/diagnostico/edit_propuesta', 'App\Http\Controllers\Capacitacion\DiagnosticoController@edit_propuesta')->name('diagnostico.edit_propuesta');
Route::post('/diagnostico/delete_propuesta', 'App\Http\Controllers\Capacitacion\DiagnosticoController@delete_propuesta')->name('diagnostico.delete_propuesta');
//RECURSOS PLAN B-CAPACITACION 
Route::resource('plan', PlanController::class);
//RECURSOS CONTENIDOS B-CAPACITACION 
Route::resource('contenidos', ContenidosController::class);
//MODAL MODULO CONTENIDOS B-CAPACITACION
Route::post('/contenidos/cargar_modulos', 'App\Http\Controllers\Capacitacion\ContenidosController@cargar_modulos')->name('contenidos.cargar_modulos');
Route::post('/contenidos/cargar_temas', 'App\Http\Controllers\Capacitacion\ContenidosController@cargar_temas')->name('contenidos.cargar_temas'); 
Route::post('/contenidos/total_modulos', 'App\Http\Controllers\Capacitacion\ContenidosController@total_modulos')->name('contenidos.total_modulos');
Route::post('/contenidos/total_temas', 'App\Http\Controllers\Capacitacion\ContenidosController@total_temas')->name('contenidos.total_temas'); 
Route::post('/contenidos/guardar_contenidos', 'App\Http\Controllers\Capacitacion\ContenidosController@guardar_contenidos')->name('contenidos.guardar_contenidos');
Route::post('/contenidos/list_modulo', 'App\Http\Controllers\Capacitacion\ContenidosController@list_modulo')->name('contenidos.list_modulo');
Route::post('/contenidos/create_modulo', 'App\Http\Controllers\Capacitacion\ContenidosController@create_modulo')->name('contenidos.create_modulo');
Route::post('/contenidos/edit_modulo', 'App\Http\Controllers\Capacitacion\ContenidosController@edit_modulo')->name('contenidos.edit_modulo');
Route::post('/contenidos/delete_modulo', 'App\Http\Controllers\Capacitacion\ContenidosController@delete_modulo')->name('contenidos.delete_modulo');
//MODAL TEMA CONTENIDOS B-CAPACITACION 
Route::post('/contenidos/list_tema', 'App\Http\Controllers\Capacitacion\ContenidosController@list_tema')->name('contenidos.list_tema');
Route::post('/contenidos/create_tema', 'App\Http\Controllers\Capacitacion\ContenidosController@create_tema')->name('contenidos.create_tema');
Route::post('/contenidos/edit_tema', 'App\Http\Controllers\Capacitacion\ContenidosController@edit_tema')->name('contenidos.edit_tema');
Route::post('/contenidos/delete_tema', 'App\Http\Controllers\Capacitacion\ContenidosController@delete_tema')->name('contenidos.delete_tema');
//MODAL ACTIVIDAD CONTENIDOS B-CAPACITACION 
Route::post('/contenidos/list_actividad', 'App\Http\Controllers\Capacitacion\ContenidosController@list_actividad')->name('contenidos.list_actividad');
Route::post('/contenidos/create_actividad', 'App\Http\Controllers\Capacitacion\ContenidosController@create_actividad')->name('contenidos.create_actividad');
Route::post('/contenidos/edit_actividad', 'App\Http\Controllers\Capacitacion\ContenidosController@edit_actividad')->name('contenidos.edit_actividad');
Route::post('/contenidos/delete_actividad', 'App\Http\Controllers\Capacitacion\ContenidosController@delete_actividad')->name('contenidos.delete_actividad');
//MODAL EVALUACION CONTENIDOS B-CAPACITACION 
Route::post('/contenidos/list_evaluacion', 'App\Http\Controllers\Capacitacion\ContenidosController@list_evaluacion')->name('contenidos.list_evaluacion');
Route::post('/contenidos/create_evaluacion', 'App\Http\Controllers\Capacitacion\ContenidosController@create_evaluacion')->name('contenidos.create_evaluacion');
Route::post('/contenidos/edit_evaluacion', 'App\Http\Controllers\Capacitacion\ContenidosController@edit_evaluacion')->name('contenidos.edit_evaluacion');
Route::post('/contenidos/delete_evaluacion', 'App\Http\Controllers\Capacitacion\ContenidosController@delete_evaluacion')->name('contenidos.delete_evaluacion');
//MODAL RECURSO CONTENIDOS B-CAPACITACION 
Route::post('/contenidos/list_recurso', 'App\Http\Controllers\Capacitacion\ContenidosController@list_recurso')->name('contenidos.list_recurso');
Route::post('/contenidos/create_recurso', 'App\Http\Controllers\Capacitacion\ContenidosController@create_recurso')->name('contenidos.create_recurso');
Route::post('/contenidos/edit_recurso', 'App\Http\Controllers\Capacitacion\ContenidosController@edit_recurso')->name('contenidos.edit_recurso');
Route::post('/contenidos/delete_recurso', 'App\Http\Controllers\Capacitacion\ContenidosController@delete_recurso')->name('contenidos.delete_recurso');
//RECURSOS INTERVENCION B-CAPACITACION 
Route::resource('intervencion', IntervencionController::class);
//MODAL PARTICIPANTES INTERVENCION B-CAPACITACION
Route::post('/intervencion/guardar_intervencion', 'App\Http\Controllers\Capacitacion\IntervencionController@guardar_intervencion')->name('intervencion.guardar_intervencion');
Route::post('/intervencion/participante_intervencion', 'App\Http\Controllers\Capacitacion\IntervencionController@participante_intervencion')->name('intervencion.participante_intervencion');
Route::post('/intervencion/list_participante', 'App\Http\Controllers\Capacitacion\IntervencionController@list_participante')->name('intervencion.list_participante');
Route::post('/intervencion/create_participante', 'App\Http\Controllers\Capacitacion\IntervencionController@create_participante')->name('intervencion.create_participante');
Route::post('/intervencion/edit_participante', 'App\Http\Controllers\Capacitacion\IntervencionController@edit_participante')->name('intervencion.edit_participante');
Route::post('/intervencion/delete_participante', 'App\Http\Controllers\Capacitacion\IntervencionController@delete_participante')->name('intervencion.delete_participante');
//RECURSOS EVALUACION B-CAPACITACION 
Route::resource('evaluacion_capacitacion', EvaluacionCapController::class);
//MODAL ELEMENTO EVALUACION B-CAPACITACION
Route::post('/evaluacion_capacitacion/guardar_evaluacion_cap', 'App\Http\Controllers\Capacitacion\EvaluacionCapController@guardar_evaluacion_cap')->name('evaluacion_capacitacion.guardar_evaluacion_cap');
Route::post('/evaluacion_capacitacion/numero_constancia', 'App\Http\Controllers\Capacitacion\EvaluacionCapController@numero_constancia')->name('evaluacion_capacitacion.numero_constancia');
Route::post('/evaluacion_capacitacion/list_elemento', 'App\Http\Controllers\Capacitacion\EvaluacionCapController@list_elemento')->name('evaluacion_capacitacion.list_elemento');
Route::post('/evaluacion_capacitacion/create_elemento', 'App\Http\Controllers\Capacitacion\EvaluacionCapController@create_elemento')->name('evaluacion_capacitacion.create_elemento');
Route::post('/evaluacion_capacitacion/edit_elemento', 'App\Http\Controllers\Capacitacion\EvaluacionCapController@edit_elemento')->name('evaluacion_capacitacion.edit_elemento');
Route::post('/evaluacion_capacitacion/delete_elemento', 'App\Http\Controllers\Capacitacion\EvaluacionCapController@delete_elemento')->name('evaluacion_capacitacion.delete_elemento');
//MODAL CONSTANCIA EVALUACION B-CAPACITACION
Route::post('/evaluacion_capacitacion/list_constancia', 'App\Http\Controllers\Capacitacion\EvaluacionCapController@list_constancia')->name('evaluacion_capacitacion.list_constancia');
Route::post('/evaluacion_capacitacion/create_constancia', 'App\Http\Controllers\Capacitacion\EvaluacionCapController@create_constancia')->name('evaluacion_capacitacion.create_constancia');
Route::post('/evaluacion_capacitacion/edit_constancia', 'App\Http\Controllers\Capacitacion\EvaluacionCapController@edit_constancia')->name('evaluacion_capacitacion.edit_constancia');
Route::post('/evaluacion_capacitacion/delete_constancia', 'App\Http\Controllers\Capacitacion\EvaluacionCapController@delete_constancia')->name('evaluacion_capacitacion.delete_constancia');




//RECURSOS GANADO REXBIOT 
Route::resource('ganado', GanadoController::class);
//MODAL VACUNA REXBIOT
Route::post('/ganado/create_manejos', 'App\Http\Controllers\Rexbiot\GanadoController@create_manejos')->name('ganado.create_manejos');
Route::post('/ganado/guardar_ganado', 'App\Http\Controllers\Rexbiot\GanadoController@guardar_ganado')->name('ganado.guardar_ganado');
Route::post('/ganado/list_vacuna', 'App\Http\Controllers\Rexbiot\GanadoController@list_vacuna')->name('ganado.list_vacuna');
Route::post('/ganado/create_vacuna', 'App\Http\Controllers\Rexbiot\GanadoController@create_vacuna')->name('ganado.create_vacuna');
Route::post('/ganado/edit_vacuna', 'App\Http\Controllers\Rexbiot\GanadoController@edit_vacuna')->name('ganado.edit_vacuna');
Route::post('/ganado/delete_vacuna', 'App\Http\Controllers\Rexbiot\GanadoController@delete_vacuna')->name('ganado.delete_vacuna');
//MODAL MANEJO1 REXBIOT
Route::post('/ganado/list_manejo1', 'App\Http\Controllers\Rexbiot\GanadoController@list_manejo1')->name('ganado.list_manejo1');
Route::post('/ganado/create_manejo1', 'App\Http\Controllers\Rexbiot\GanadoController@create_manejo1')->name('ganado.create_manejo1');
Route::post('/ganado/edit_manejo1', 'App\Http\Controllers\Rexbiot\GanadoController@edit_manejo1')->name('ganado.edit_manejo1');
Route::post('/ganado/delete_manejo1', 'App\Http\Controllers\Rexbiot\GanadoController@delete_manejo1')->name('ganado.delete_manejo1');
//MODAL MANEJO2 REXBIOT
Route::post('/ganado/list_manejo2', 'App\Http\Controllers\Rexbiot\GanadoController@list_manejo2')->name('ganado.list_manejo2');
Route::post('/ganado/create_manejo2', 'App\Http\Controllers\Rexbiot\GanadoController@create_manejo2')->name('ganado.create_manejo2');
Route::post('/ganado/edit_manejo2', 'App\Http\Controllers\Rexbiot\GanadoController@edit_manejo2')->name('ganado.edit_manejo2');
Route::post('/ganado/delete_manejo2', 'App\Http\Controllers\Rexbiot\GanadoController@delete_manejo2')->name('ganado.delete_manejo2');

//RECURSOS POTREROS REXBIOT
Route::resource('potreros', PotreroController::class);
//MODAL PERIODO REXBIOT 
Route::post('/potreros/list_periodo', 'App\Http\Controllers\Rexbiot\PotreroController@list_periodo')->name('potreros.list_periodo');
Route::post('/potreros/create_periodo', 'App\Http\Controllers\Rexbiot\PotreroController@create_periodo')->name('potreros.create_periodo');
Route::post('/potreros/edit_periodo', 'App\Http\Controllers\Rexbiot\PotreroController@edit_periodo')->name('potreros.edit_periodo');
Route::post('/potreros/delete_periodo', 'App\Http\Controllers\Rexbiot\PotreroController@delete_periodo')->name('potreros.delete_periodo');
//MODAL POTRERO REXBIOT
Route::post('/potreros/list_potrero', 'App\Http\Controllers\Rexbiot\PotreroController@list_potrero')->name('potreros.list_potrero');
Route::post('/potreros/create_potrero', 'App\Http\Controllers\Rexbiot\PotreroController@create_potrero')->name('potreros.create_potrero');
Route::post('/potreros/edit_potrero', 'App\Http\Controllers\Rexbiot\PotreroController@edit_potrero')->name('potreros.edit_potrero');
Route::post('/potreros/delete_potrero', 'App\Http\Controllers\Rexbiot\PotreroController@delete_potrero')->name('potreros.delete_potrero');

//RECURSOS PASTOREO REXBIOT
Route::resource('pastoreo', PastoreoController::class);
//MODAL PASTOREOS REXBIOT 
Route::post('/pastoreo/list_pastoreo', 'App\Http\Controllers\Rexbiot\PastoreoController@list_pastoreo')->name('pastoreo.list_pastoreo');
Route::post('/pastoreo/create_pastoreo', 'App\Http\Controllers\Rexbiot\PastoreoController@create_pastoreo')->name('pastoreo.create_pastoreo');
Route::post('/pastoreo/edit_pastoreo', 'App\Http\Controllers\Rexbiot\PastoreoController@edit_pastoreo')->name('pastoreo.edit_pastoreo');
Route::post('/pastoreo/delete_pastoreo', 'App\Http\Controllers\Rexbiot\PastoreoController@delete_pastoreo')->name('pastoreo.delete_pastoreo');

//RECURSOS INSTALACIONES REXBIOT
Route::resource('instalaciones', InstalacionesController::class);
//MODAL INSTALACION REXBIOT 
Route::post('/instalaciones/list_instalacion', 'App\Http\Controllers\Rexbiot\InstalacionesController@list_instalacion')->name('instalaciones.list_instalacion');
Route::post('/instalaciones/create_instalacion', 'App\Http\Controllers\Rexbiot\InstalacionesController@create_instalacion')->name('instalaciones.create_instalacion');
Route::post('/instalaciones/edit_instalacion', 'App\Http\Controllers\Rexbiot\InstalacionesController@edit_instalacion')->name('instalaciones.edit_instalacion');
Route::post('/instalaciones/delete_instalacion', 'App\Http\Controllers\Rexbiot\InstalacionesController@delete_instalacion')->name('instalaciones.delete_instalacion');
//MODAL MANTENIMIENTO REXBIOT
Route::post('/instalaciones/list_mantenimiento', 'App\Http\Controllers\Rexbiot\InstalacionesController@list_mantenimiento')->name('instalaciones.list_mantenimiento');
Route::post('/instalaciones/create_mantenimiento', 'App\Http\Controllers\Rexbiot\InstalacionesController@create_mantenimiento')->name('instalaciones.create_mantenimiento');
Route::post('/instalaciones/edit_mantenimiento', 'App\Http\Controllers\Rexbiot\InstalacionesController@edit_mantenimiento')->name('instalaciones.edit_mantenimiento');
Route::post('/instalaciones/delete_mantenimiento', 'App\Http\Controllers\Rexbiot\InstalacionesController@delete_mantenimiento')->name('instalaciones.delete_mantenimiento');
