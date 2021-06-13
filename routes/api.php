<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\usuariosController;
use App\Http\Controllers\TaskController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('usuarios', [usuariosController::class, 'index']);

Route::post('/tareas/guardar', [TaskController::class, 'store']);

Route::get('/tareas/buscar/{id}', [TaskController::class, 'show']);

Route::get('/tareas/buscar', [TaskController::class, 'show1']);

Route::delete('/tareas/borrar/{id}', [TaskController::class, 'destroy']);

Route::delete('/tareas/borrar1', [TaskController::class, 'destroy1']);


