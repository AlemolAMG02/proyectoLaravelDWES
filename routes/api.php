<?php

use App\Http\Controllers\FestivalControllerAPI as festAPI;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/festivalAPI', [festAPI::class, 'index']); //muestra todos los registros
Route::post('/festivalAPI', [festAPI::class, 'store']); // crea un registro
Route::put('/festivalAPI/{id}', [festAPI::class, 'update']); // actualiza un registro
Route::delete('/festivalAPI/{id}', [festAPI::class, 'destroy']); //elimina un registro
