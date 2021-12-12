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


Route::get("/registroselecao", [Main::class, "registroselecao"]);
Route::get("/registroclube", [Main::class, "registroclube"]);
Route::get("/registrojogador", [Main::class, "registrojogador"]);


//detalhe os time do torneio
Route::get("/torneio/{id}", [ControleTorneio::class, "detalheTorneio"])->name('acessoTorneio');


//acessa o homepage, que mostra os torneios em forma de botão
Route::get("/", [ControleTorneio::class, 'index'])->name('home');
