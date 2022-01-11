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
//FACTIBILIDAD SC
use App\Http\Controllers\SitioClinico\FactibilidadController;
//SOMETIMIENTO SC
use App\Http\Controllers\SitioClinico\SometimientoController;
//INSTALACION SC
use App\Http\Controllers\SitioClinico\InstalacionController;
//EQUIPAMIENTO SC
use App\Http\Controllers\SitioClinico\EquipamientoController;
//CARPETA FARMACIA SC
use App\Http\Controllers\SitioClinico\CarpetaController;

//Documentos
use App\Http\Controllers\DocumentosController;
use App\Models\Documentos;

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

//RECURSOS FACTIBILIDAD SC
Route::resource('factibilidad', FactibilidadController::class);
//MODAL SEGUIMIENTO FACTIBILIDAD
Route::post('/factibilidad/guardar_factibilidad', 'App\Http\Controllers\SitioClinico\FactibilidadController@guardar_factibilidad')->name('factibilidad.guardar_factibilidad');
Route::post('/factibilidad/list_seguimiento', 'App\Http\Controllers\SitioClinico\FactibilidadController@list_seguimiento')->name('factibilidad.list_seguimiento');
Route::post('/factibilidad/create_seguimiento', 'App\Http\Controllers\SitioClinico\FactibilidadController@create_seguimiento')->name('factibilidad.create_seguimiento');
Route::post('/factibilidad/edit_seguimiento', 'App\Http\Controllers\SitioClinico\FactibilidadController@edit_seguimiento')->name('factibilidad.edit_seguimiento');
Route::post('/factibilidad/delete_seguimiento', 'App\Http\Controllers\SitioClinico\FactibilidadController@delete_seguimiento')->name('factibilidad.delete_seguimiento');

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

//Documentos
Route::resource('documentos', DocumentosController::class);
//Documentos_formatos_Select
Route::post('/documentos/list_formatos', 'App\Http\Controllers\DocumentosController@list_formatos')->name('documentos.list_formatos');
Route::post('/documentos/create_formato', 'App\Http\Controllers\DocumentosController@create_formato')->name('documentos.create_formato');
Route::post('/documentos/delete_formato', 'App\Http\Controllers\DocumentosController@delete_formato')->name('documentos.delete_formato');
Route::post('/documentos/edit_formato', 'App\Http\Controllers\DocumentosController@edit_formato')->name('documentos.edit_formato');
Route::post('/documentos/download_formato', 'App\Http\Controllers\DocumentosController@download_formato')->name('documentos.download_formato');
Route::post('/documentos/list_proyectos', 'App\Http\Controllers\DocumentosController@list_proyectos')->name('documentos.list_proyectos');
//TODO: crear ruta o metodo para descargar el archivo
// Route::post('/documentos/download_formato_proyecto', 'App\Http\Controllers\DocumentosController@download_formato_proyecto')->name('documentos.download_formato_proyecto');