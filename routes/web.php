<?php

use App\Http\Controllers\Jogador\ControleJogador;
use App\Http\Controllers\Selecao\ControleSelecao;
use App\Http\Controllers\Time\ControleEquipe;
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

//Torneio
//Seleção
    //acessa a homepage, que mostra os torneios em forma de botão
    //Também envia para a homepage uma lista das seleções presentes no banco
Route::get('/', [ControleTorneio::class, 'index'])->name('home');
Route::get('excluir_torneio/{id_torneio}', [ControleTorneio::class, 'delete'])->name('excluirTorneio');
Route::get('excluir_selecao/{id}', [ControleSelecao::class, 'delete'])->name('excluirSelecao');

//Torneio
Route::get('/criartorneio', [ControleTorneio::class, 'create'])->name('criartorneio');
Route::post('/grava_torneio', [ControleTorneio::class, 'store'])->name('grava_torneio');

Route::get('/acessoTorneio/{id}', [ControleTorneio::class, 'detalheTorneio'])->name('acessoTorneio');

//Time
Route::get('inscreveEquipe/{id}', [ControleEquipe::class, 'create'])->name('inscreverEquipe');

Route::post('/grava_equipe', [ControleEquipe::class, 'store'])->name('grava_equipe');

Route::get('excluir_time/{id_time}', [ControleEquipe::class, 'delete'])->name('excluirTime');

Route::get('/detalhe_time/{id_time}', [ControleEquipe::class, 'listarJogadores'])->name('detalheTime');
//Jogadores
Route::get('/insereJogador/{time_id}', [ControleJogador::class, 'create'])->name('insereJogador');
Route::post('/grava_jogador', [ControleJogador::class, 'store'])->name('grava_jogador');
Route::get('excluir_jogador/{id_jogador}', [ControleJogador::class, 'delete'])->name('excluir_jogador');

//Seleção
//Exclui jogador da convocação da seleção
Route::get('/desconvoca/{id}', [ControleJogador::class, 'desconvoca'])->name('desconvoca');

Route::get('/registroSelecao', [ControleSelecao::class, 'create'])->name('inscreverSelecao');
Route::post('/gravaselecao', [ControleSelecao::class, 'store'])->name('gravaSelecao');
