<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\usuariosController;
use App\Http\Controllers\TaskController;


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
    return view('welcome');
});


Route::get('prueba', function () {
    return "hola es una prueba";
});



//Route::get('/users', [usuariosController::class, 'index']);

//Route::get('/tareas', 'TaskController@index');
Route::get('/tareas', [TaskController::class, 'index']);

//Route::put('/tareas/actualizar', 'TaskController@update');
Route::put('/tareas/actualizar', [TaskController::class, 'update']);

//Route::post('/tareas/guardar', 'TaskController@store');
Route::post('/tareas/guardar', [TaskController::class, 'store']);

//Route::delete('/tareas/borrar/{id}', 'TaskController@destroy');
Route::delete('/tareas/borrar/{id}', [TaskController::class, 'destroy']);

//Route::get('/tareas/buscar', 'TaskController@show');
Route::get('/tareas/buscar/{id}', [TaskController::class, 'show']);



