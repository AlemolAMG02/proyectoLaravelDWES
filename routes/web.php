<?php

use App\Http\Controllers\FestivalController;
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
    return view('welcome');
})->name('inicio');

Route::get('/menuInicio', function () {
    return view('menuInicio');
})->middleware(['auth'])->name('menuInicio');


Route::resource('festival', FestivalController::class)->middleware(['auth']);;

require __DIR__.'/auth.php';
