<?php
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
})->middleware('checkAuth');;
// Route::get('/simulacro', function () {
//     return view('templates.notaF1');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/autenticacion', 'userController@index');
//rutas administrador
Route::post('/addAlumno', 'alumnoController@store');
Route::post('/editAlumno', 'alumnoController@update');
Route::get('/getAlumnos', 'alumnoController@index');
Route::get('/getAlumnoz', 'alumnoController@show');
Route::get('/deleteAlumno/{id}', 'alumnoController@destroy');
Route::get('/boleta', 'alumnoController@boleta');
Route::get('/boletainformativa', 'alumnoController@boletainformativa');

Route::post('/addDocente', 'docenteController@store');
Route::get('/getDocentes', 'docenteController@index');
Route::get('/docentescurso/{nivel}', 'docenteController@create');
// Route::get('/getCursos/{grado}', 'docenteController@cursos');
Route::get('/getDocente', 'docenteController@show');
Route::post('/updateDocente', 'docenteController@update');
Route::post('/estadoDocente', 'docenteController@edit');

Route::post('/addDocentecurso','DocentecursoController@store');
Route::get('/getDocentecurso','DocentecursoController@index');
Route::get('/getCursosAsignados/{grado}','DocentecursoController@show');

Route::post('/addNivel','NivelController@store');
Route::post('/editNivel','NivelController@update');
Route::get('/getNiveles', 'NivelController@index');
Route::get('/deleteNivel/{id}', 'NivelController@destroy');

Route::get('/getGrados', 'GradoController@index');
Route::get('/getGrados/{nivel}','GradoController@show');
Route::get('/Grados/{nivel}','GradoController@grados');
Route::get('/getSecciones/{nivel}/{grado}','GradoController@secciones');
Route::post('/addGrado','GradoController@store');
Route::get('/deleteGrado/{id}', 'GradoController@destroy');

Route::post('/addCosto','CostosController@store');
Route::get('/getCostos', 'CostosController@index');
Route::get('/getProductos', 'CostosController@productos');
Route::get('/getCosto', 'CostosController@show');
Route::post('/editCosto','CostosController@update');
Route::get('/deleteCosto/{id}', 'CostosController@destroy');

Route::post('/matricular','MatriculaController@store');
Route::get('/getMatriculados','MatriculaController@index');
Route::get('/lista/{idgrado}', 'MatriculaController@show');
Route::get('/getNummatriculados','MatriculaController@matriculados');
Route::get('/gradosM','MatriculaController@grados');
Route::get('/matriculados/{id}','MatriculaController@alumnos');

Route::post('/addCurso','CursosController@store');
Route::get('/getCursos', 'CursosController@index');
Route::get('/getCursos/{id}', 'CursosController@show');
Route::post('/editCurso','CursosController@update');
Route::get('/deleteCurso/{id}', 'CursosController@destroy');

Route::post('/asignGradoCurso','GradocursoController@store');

Route::get('/getpensiones', 'PensionesController@index');
Route::get('/cuotaspendientes/{tipo}', 'PensionesController@lista');
Route::get('/getpension/{dni}', 'PensionesController@show');
Route::post('/pagarPensiones', 'PensionesController@store');
Route::post('/sendWSP', 'PensionesController@sendWSP');

Route::get('/getSimulacros', 'SimulacrosController@index');
Route::post('/addSimulacro', 'SimulacrosController@store');
Route::get('/getSimulacro/{bimestre}', 'SimulacrosController@show');

Route::post('/addNotasimulacro', 'NotasimulacroController@store');
Route::post('/ordensimulacro', 'NotasimulacroController@ordenados');
Route::get('/getNotasimulacro', 'NotasimulacroController@index');
Route::get('/notasimulacro/{grado}/{simulacro}', 'NotasimulacroController@show');
Route::get('/listasimulacros', 'NotasimulacroController@simulacros');
Route::get('/notasIndividuales/{bimestre}', 'NotasimulacroController@notasIndividuales');

Route::post('/addCapacidad', 'CapacidadController@store');
Route::get('/getCapacidades', 'CapacidadController@index');
Route::get('/deleteCapacidad/{id}', 'CapacidadController@destroy');
Route::post('/editCapacidad','CapacidadController@update');

Route::post('/addArea', 'AreaController@store');
Route::get('/getAreas', 'AreaController@index');
Route::get('/getAreas/{curso}', 'AreaController@show');
Route::post('/editArea','AreaController@update');
Route::get('/deleteArea/{id}', 'AreaController@destroy');

Route::post('/addDocenteArea','DocenteareaController@store');
Route::get('/DocenteArea','DocenteareaController@index');
Route::get('/getAreasasignadas', 'DocenteareaController@showgrades');
Route::get('/showareas/{grado}', 'DocenteareaController@showareas');
Route::get('/showcapacities/{area}', 'DocenteareaController@showcapacities');

Route::post('/addApoderado','ApoderadoController@store');
Route::get('/getAlumno/{dni}', 'ApoderadoController@show');

Route::post('/addTutor','TutorController@store');

Route::get('/getIngresos', 'IngresosController@index');
Route::post('/getVentas', 'IngresosController@show');
Route::post('/addVenta', 'IngresosController@store');
Route::get('/reporte/{desde}/{hasta}', 'IngresosController@create');

Route::get('/listaalumnos/{grado}/{bimestre}', 'RegistropreController@show');

Route::get('/getAsistencia', 'AsistenciaController@index');
Route::get('/addAsistencia/{dni}', 'AsistenciaController@create');
Route::get('/addSalida/{dni}', 'AsistenciaController@salir');
Route::get('/getSalida', 'AsistenciaController@show');

Route::get('/getAuxiliares', 'AuxiliarController@index');
Route::post('/addAuxiliar', 'AuxiliarController@store');

//fin rutas administrador

//rutas docente

Route::post('/registrarNotas', 'RegistropreController@store');

Route::get('{path}', 'HomeController@index');

//rutas para admin/predio