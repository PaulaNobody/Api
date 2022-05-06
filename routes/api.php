<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();

});
Route::apiResource('clientes',ClienteController::class);
// ruta de acceso a la URI
// Route::resource('clientes','ClienteController.php');
// Route::get('clientes','ClienteController@index');
// Route::put('clientes','ClienteController@update');
// Route::post('clientes','ClienteController@store');
// Route::delete('clientes','ClienteController@destroy');
// Route::get('clientes','ClienteController@show');




