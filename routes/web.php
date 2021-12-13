<?php

use App\Http\Controllers\Main;
use App\Http\Controllers\Torneio\ControleTorneio;
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


//acessa o homepage, que mostra os torneios em forma de botão
Route::get("/", [ControleTorneio::class, 'index'])->name('home');

//acessa a criação de torneio
Route::get('/criartorneio', [ControleTorneio::class, "create"])->name('create');

//Cadastra um torneio
Route::post('/grava_torneio', [ControleTorneio::class, 'store'])->name('grava_torneio');


//detalhe os time do torneio
Route::get("/acessoTorneio/{id}", [ControleTorneio::class, "detalheTorneio"])->name('acessoTorneio');

