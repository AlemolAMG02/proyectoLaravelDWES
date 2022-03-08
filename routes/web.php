<?php

use App\Http\Controllers\ArtistController;
use App\Http\Controllers\FestivalController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\UserController;
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
    return view('menuInicio');
})->middleware('auth')->name('inicio');

Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');

// Vista para administrar la página web.
Route::get('/admin', function () {
    return view('admin.vistaAdmin');
})->middleware('auth')->name('admin');


Route::resource('festival', FestivalController::class)->middleware(['auth']);
Route::resource('user', UserController::class)->middleware(['auth']);
Route::resource('artist', ArtistController::class)->middleware('auth');
Route::resource('ticket', TicketController::class)->middleware('auth');

Route::get('/listaFest', [FestivalController::class, 'listaFest'])->middleware('auth')->name('listaFest');
Route::get('/listaArtist', [ArtistController::class, 'listaArtist'])->middleware('auth')->name('listaArtist');
Route::get('/listaUsers', [UserController::class, 'listaUsers'])->middleware('auth')->name('listaUsers');
Route::post('/compraEntrada/{idFest}', [TicketController::class, 'comprarEntrada'])->middleware('auth')->name('compraEntrada');

require __DIR__ . '/auth.php';
