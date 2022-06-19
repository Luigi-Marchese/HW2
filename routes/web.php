<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\caricamentoController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\catalogoController;
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
    return view('home');
})->name('home');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/logout', function () {
    Session::flush();
    return view('home');
})->name('logout');
Route::post('/login_server', 'App\Http\Controllers\loginController@login');

Route::get('/registrazione', function () {
    return view('registrazione');
})->name('registrazione');
Route::post('/registrazione_server', 'App\Http\Controllers\registrazioneController@registra');
Route::get('/reg/{nome_utente}/{email}/{cellulare}', 'App\Http\Controllers\registrazioneController@controlloUtente');

Route::get('/caricaBrand', 'App\Http\Controllers\caricamentoController@riempiBrand');
Route::get('/caricaContenuto', 'App\Http\Controllers\caricamentoController@riempiContenuto');
Route::get('/caricaCatalogo', 'App\Http\Controllers\caricamentoController@riempiCatalogo');
Route::get('/caricaCarrello', 'App\Http\Controllers\caricamentoController@riempiCarrello');
Route::get('/catalogo', 'App\Http\Controllers\loginController@controlloLogin')->name('catalogo');
Route::get('/carrello', 'App\Http\Controllers\loginController@controlloLoginCarrello')->name('carrello');
Route::get('/ricerca_catalogo/{parametro}', 'App\Http\Controllers\catalogoController@ricerca');
Route::get('/elimina_elemento/{parametro}', 'App\Http\Controllers\carrelloController@elimina');
Route::get('/aggiungi_carrello/{parametro}', 'App\Http\Controllers\carrelloController@aggiungi');

Route::get('/verificaDispositivo','App\Http\Controllers\versioneController@version');

