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
})->name('inicio');

Route::get('/welcome', function () {
    //return view('welcome');
    return redirect('/');
})->name('welcome');

// Vista para administrar la página web.
Route::get('/admin', function () {
    return view('admin.vistaAdmin');
})->middleware('auth', 'verified')->name('admin');
//})->middleware('auth', 'verified', 'admin')->name('admin');


Route::resource('festival', FestivalController::class)->middleware(['auth', 'verified']);
Route::resource('user', UserController::class)->middleware(['auth', 'verified']);
Route::resource('artist', ArtistController::class)->middleware(['auth', 'verified']);
Route::resource('ticket', TicketController::class)->middleware(['auth', 'verified']);

Route::get('/listaFest', [FestivalController::class, 'listaFest'])->middleware('auth', 'verified')->name('listaFest');
Route::get('/listaArtist', [ArtistController::class, 'listaArtist'])->middleware('auth', 'verified')->name('listaArtist');
Route::get('/listaUsers', [UserController::class, 'listaUsers'])->middleware('auth', 'verified')->name('listaUsers');
Route::get('/listaTickets', [TicketController::class, 'listaTicket'])->middleware('auth', 'verified')->name('listaTickets');
Route::post('/compraEntrada/{idFest}', [TicketController::class, 'comprarEntrada'])->middleware('auth', 'verified')->name('compraEntrada');

Route::get('/activarFest/{id}', [FestivalController::class, 'activar'])->middleware('auth', 'verified')->name('activaFest');
Route::get('/activarUser/{id}', [UserController::class, 'activar'])->middleware('auth', 'verified')->name('activarUser');
Route::get('/activarArtist/{id}', [ArtistController::class, 'activar'])->middleware('auth', 'verified')->name('activarArtist');
Route::get('/activarTicket/{id}', [TicketController::class, 'activar'])->middleware('auth', 'verified')->name('activarTicket');

require __DIR__ . '/auth.php';
