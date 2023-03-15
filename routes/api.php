<?php

use App\Http\Controllers\Jogador\ControleJogador;
use App\Http\Controllers\Selecao\ControleSelecao;
use App\Http\Controllers\Time\ControleEquipe;
use App\Http\Controllers\Torneio\ControleTorneio;
use Illuminate\Http\Request;
use Illuminate\Routing\Router;
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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
    
// });


Route::group([
    'middleware' => ['auth:sanctum', 'ability:1st-party'],
    'prefix' => '/v1',
], function (Router $router) {
    //Dashboard
    $router->get('/dashboard', [ControleTorneio::class, 'index'])->name('dashboard');

    //Torneio
    $router->get('/criartorneio', [ControleTorneio::class, 'create'])->name('criartorneio');
    $router->post('/grava_torneio', [ControleTorneio::class, 'store'])->name('grava_torneio');
    $router->get('/acessoTorneio/{id}', [ControleTorneio::class, 'detalheTorneio'])->name('acessoTorneio');
    $router->get('excluir_torneio/{id_torneio}', [ControleTorneio::class, 'delete'])->name('excluirTorneio');

    //Time
    $router->get('inscreveEquipe/{id}', [ControleEquipe::class, 'create'])->name('inscreverEquipe');
    $router->post('/grava_equipe', [ControleEquipe::class, 'store'])->name('grava_equipe');
    $router->get('/detalhe_time/{id_time}', [ControleEquipe::class, 'listarJogadores'])->name('detalheTime');
    $router->get('excluir_time/{id_time}', [ControleEquipe::class, 'delete'])->name('excluirTime');

    //Jogadores
    $router->get('/insereJogador/{time_id}', [ControleJogador::class, 'create'])->name('insereJogador');
    $router->post('/grava_jogador', [ControleJogador::class, 'store'])->name('grava_jogador');
    $router->get('excluir_jogador/{id_jogador}', [ControleJogador::class, 'delete'])->name('excluir_jogador');

    //Seleção
    $router->get('/registroSelecao', [ControleSelecao::class, 'create'])->name('inscreverSelecao');
    $router->post('/gravaselecao', [ControleSelecao::class, 'store'])->name('gravaSelecao');
    $router->get('/desconvoca/{id}', [ControleJogador::class, 'desconvoca'])->name('desconvoca');
    $router->get('excluir_selecao/{id}', [ControleSelecao::class, 'delete'])->name('excluirSelecao');
});