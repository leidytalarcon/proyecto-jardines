<?php

use Illuminate\Support\Facades\Route;


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
    return view('login');
});

Route::get('inicio/', [
    'uses' =>'ApiController@inicio', 
    'as' => 'inicio' 
]);

Route::get('/informacionJardin',function(){
    return view('jardines');
});

Route::get('institucion/', [
    'uses' =>'institucionController@listar', 
    'as' => 'institucion.listar' 
]);

Route::get('institucion/nuevo/', [
    'uses' =>'institucionController@nuevo', 
    'as' => 'institucion.nuevo' 
]);

Route::post('/institucion/guardar','institucionController@guardar');

Route::post('institucion/actualizar/{id_jardin}/', [
    'uses'=>'institucionController@actualizar',
    'as'=>'institucion.actualizar'
]);

Route::get('institucion/editar/{id_jardin}/',[
    'uses'=> 'institucionController@editar',
    'as'=> 'institucion.editar'
]);

//estudiante
Route::get('estudiante/index', [
    'uses' =>'estudianteController@index', 
   'as' => 'estudiante.index' 
]);

Route::get('estudiante/', [
    'uses' =>'estudianteController@listar', 
    'as' => 'estudiante.listar' 
]);

Route::get('estudiante/editar/{id_estudiante}/', [
    'uses' =>'estudianteController@editar',   
    'as' => 'estudiante.editar'
]);

Route::get('estudiante/nuevo/', [
    'uses' =>'estudianteController@nuevo',   
    'as' => 'estudiante.nuevo'
]);

Route::post('/estudiante/guardar', 'estudianteController@guardar');

Route::post('estudiante/actualizar/{id_estudiante}/', [
    'uses' =>'estudianteController@actualizar',   
    'as' => 'estudiante.actualizar'
]);


//curso
Route::get('curso/index', [
    'uses' =>'cursoController@index', 
   'as' => 'curso.index' 
]);



Route::get('curso/editar/{id_curso}/', [
    'uses' =>'cursoController@editar',   
    'as' => 'curso.editar'
]);

Route::get('curso/estudiantes/{id_curso}/', [
    'uses' =>'cursoController@estudiantes',   
    'as' => 'curso.estudiantes'
]);

Route::get('curso/estudiantes/nuevo/{id_curso}/', [
    'uses' =>'cursoController@estudiantes_nuevo',   
    'as' => 'curso.estudiantes.nuevo'
]);


Route::get('curso/docente/{id_curso}/', [
    'uses' =>'cursoController@docente',   
    'as' => 'curso.docente'
]);
Route::post('/curso/docente/buscar', 'cursoController@docente_buscar');



Route::get('curso/docente/guardar/{id_curso}/{id_docente}', [
    'uses' =>'cursoController@docente_guardar',   
    'as' => 'curso.docente.guardar'
]);

Route::get('curso/estudiantes/guardar/{id_curso}/{id_estudiante}', [
    'uses' =>'cursoController@estudiantes_guardar',   
    'as' => 'curso.estudiantes.guardar'
]);

Route::post('/curso/estudiantes/buscar', 'cursoController@estudiantes_buscar');

Route::get('curso/estudiantes/eliminar/{idcursoestudiante}', [
    'uses' =>'cursoController@estudiantes_eliminar',   
    'as' => 'curso.estudiantes.eliminar'
]);

Route::get('curso/nuevo/', [
    'uses' =>'cursoController@nuevo',   
    'as' => 'curso.nuevo'
]);

Route::post('/curso/guardar', 'cursoController@guardar');

Route::post('curso/actualizar/{id_curso}/', [
    'uses' =>'cursoController@actualizar',   
    'as' => 'curso.actualizar'
]);
//Docente
Route::get('docente/', [
    'uses' =>'docenteController@listar', 
    'as' => 'docente_listar' 
]);

Route::get('docente/editar/{id_docente}/', [
    'uses' =>'docenteController@editar',   
    'as' => 'docente.editar'
]);

Route::get('docente/nuevo/', [
    'uses' =>'docenteController@nuevo',   
    'as' => 'docente_crear'
]);

Route::post('/docente/guardar', 'docenteController@guardar');

Route::post('docente/actualizar/{id_docente}/', [
    'uses' =>'docenteController@actualizar',   
    'as' => 'docente.actualizar'
]);

Route::get('tarea/', [
    'uses' =>'tareaController@listar', 
    'as' => 'tarea_listar' 
]);

Route::get('tarea/nuevo/', [
    'uses' =>'tareaController@nuevo', 
    'as' => 'tarea_crear' 
]);

Route::post('/tarea/guardar','tareaController@guardar');

Route::post('tarea/actualizar/{idtarea}/', [
    'uses'=>'tareaController@actualizar',
    'as'=>'tarea.actualizar'
]);

Route::get('tarea/editar/{idtarea}/',[
    'uses'=> 'tareaController@editar',
    'as'=> 'tarea.editar'
]);
Route::get('tema/', [
    'uses' =>'temaController@listar', 
    'as' => 'tema_listar' 
]);

Route::get('tema/nuevo/', [
    'uses' =>'temaController@nuevo', 
    'as' => 'tema_crear' 
]);

Route::post('/tema/guardar','temaController@guardar');

Route::post('tema/actualizar/{idtema}/', [
    'uses'=>'temaController@actualizar',
    'as'=>'tema.actualizar'
]);

Route::get('tema/editar/{idtema}/',[
    'uses'=> 'temaController@editar',
    'as'=> 'tema.editar'
]);
/////////////////////RECTOR////////////////////////////////////////

Route::get('rector/', [
    'uses'=>'RectorController@listar',
    'as' => 'rector_listar'
]);

Route::get('rector/nuevo/', [
    'uses'=>'RectorController@create',
    'as' => 'rector_crear']);

Route::get('rector/editar/{id_rector}/',[
    'uses'=> 'rectorController@editar',
    'as'=> 'rector.editar'
]);    
Route::post('rector/editar/{id_rector}/', [
    'uses'=>'rectorController@editar',
    'as' => 'rector_editar'
]); 
Route::post('/rector/guardar','rectorController@guardar');

////////////LOGIN///////////////
Route::get('/autenticar','LoginController@autenticar')->name('auth');

Route::get('/login', function () {
    return view('Login.Login');
});

////////////////consumo de servicio/////////////////

//foro

Route::get('foro/index', [
    'uses' =>'foroController@index', 
   'as' => 'foro.index' 
]);


Route::get('foro/editar/{idforo}/', [
    'uses' =>'foroController@editar',   
    'as' => 'foro.editar'
]);
Route::post('foro/actualizar/{idforo}/', [
    'uses' =>'foroController@actualizar',   
    'as' => 'foro.actualizar'
]);
Route::get('foro/comentario/{idforo}/', [
    'uses' =>'foroController@comentario',   
    'as' => 'foro.comentarios'
]);
Route::get('foro/nuevo/{idforo}/', [
    'uses' =>'foroController@nuevoComentario', 
    'as' => 'comentario.nuevo' 
]);
Route::post('/foro/comentario/guardar','foroController@guardar_comentario');

Route::get('foro/nuevo/', [
    'uses' =>'foroController@nuevo', 
    'as' => 'foro.nuevo' 
]);
Route::post('/foro/guardar','foroController@guardar');


Route::post('/foro/respuesta/guardar','foroController@guardar_respuesta');

Route::get('respuesta/eliminar/{idrespuesta}/', [
    'uses' =>'foroController@eliminar_respuesta',   
    'as' => 'respuesta.eliminar'
]);


//entrega

Route::get('entrega/', [
    'uses' =>'entregaController@listar', 
    'as' => 'entrega_listar' 
]);

Route::get('entrega/nuevo/', [
    'uses' =>'entregaController@nuevo', 
    'as' => 'entrega_crear' 
]);


Route::get('entrega/ver/{identrega}/',[
    'uses'=> 'entregaController@ver',
    'as'=> 'entrega_ver'
]);

Route::post('/entrega/guardar','entregaController@guardar');

Route::post('entrega/actualizar/{identrega}/', [
    'uses'=>'entregaController@actualizar',
    'as'=>'entrega.actualizar'
]);
Route::post('entrega/actualizar2/{identrega}/', [
    'uses'=>'entregaController@actualizar2',
    'as'=>'entrega.actualizar2'
]);
Route::get('entrega/editar/{identrega}/',[
    'uses'=> 'entregaController@editar',
    'as'=> 'entrega.editar'
]);
//login
Route::get('/longin',function(){
    return view('login');
});

// PDF
Route::get('/pdf/prueba', 'PDFController@PDF')->name('descargarPDF');
Route::get('/pdf/estudiantes', 'PDFController@PDFEstudiantes')->name('descargarPDFEstudiantes');


Route::post('register', 'ApiController@register');

Route::post('auth/login/', [
    'uses' =>'ApiController@login', 
   'as' => 'auth.login' 
]);
 
Route::group(['middleware' => 'auth.jwt'], function () {
    Route::get('logout', 'ApiController@logout');
 
    Route::get('user', 'ApiController@getAuthUser');
    Route::get('foro/', [
        'uses' =>'foroController@listar', 
       'as' => 'foro.listar' 
   ]);

   Route::get('curso/', [
    'uses' =>'cursoController@listar', 
    'as' => 'curso.listar' 
]);
});