<?php

use App\Http\Controllers\Selecao\ControleSelecao;
use App\Http\Controllers\Time\ControleTime;
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

//Registro de seleção
Route::post("/cadastrar/registroclube", [ControleSelecao::class, "create"]);

//Registro de clube
Route::post("/cadastrar/clube", [ControleTime::class, "create"]);

//Registra um jogador
Route::post("/cadastrar/registrojogador", [ControleJogador::class, "create"]);

//Registra um torneio
Route::post("/cadastrar/registrotorneio", [ControleTorneio::class, "create"]);

//Lista times com todos os seus dados(torneios, jogadores e se estes jogadores foram convocados)
Route::get("/", [ControleTime::class, "list"])->name('home');
