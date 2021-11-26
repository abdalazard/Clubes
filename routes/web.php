<?php

use App\Http\Controllers\Main;
use App\Http\Controllers\RegistroClube;
use App\Http\Controllers\RegistroJogador;
use App\Http\Controllers\RegistroSelecao;
use App\Http\Controllers\RegistroTorneio;
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


Route::get("/registroselecao", [RegistroSelecao::class, "registroselecao"]);
Route::get("/registroclube", [RegistroClube::class, "registroclube"]);
Route::get("/registrojogador", [RegistroJogador::class, "registroJogador"]);
Route::get("/registrotorneio", [RegistroTorneio::class, "registroTorneio"]);

Route::get("/", [Main::class, "time"])->name('home');
