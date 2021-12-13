<?php

use App\Http\Controllers\Jogador\ControleJogador;
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
    //acessa o homepage, que mostra os torneios em forma de botão
    Route::get("/", [ControleTorneio::class, 'index'])->name('home');

    //acessa a criação de um novo torneio
    Route::get('/criartorneio', [ControleTorneio::class, "create"])->name('criartorneio');
            //Cadastra um torneio
            Route::post('/grava_torneio', [ControleTorneio::class, 'store'])->name('grava_torneio');

    //detalhe dos torneios(times, e etc)
    Route::get("/acessoTorneio/{id}", [ControleTorneio::class, "detalheTorneio"])->name('acessoTorneio');

            //Time
                //Redireciona para a pagina de criação de times
                Route::get('inscreveEquipe/{id}', [ControleEquipe::class, "create"])->name("inscreverEquipe");

                            //Inscreve os times no torneio em questão
                            Route::post('/grava_equipe', [ControleEquipe::class, "store"])->name('grava_equipe');

                //Acessa Dados dos times(Elenco e etc)
                Route::get('/detalhe_time/{id_time}', [ControleEquipe::class, 'listarJogadores'])->name('lista_jogadores');
                        //Jogadores
                            //Redireciona para registrar um jogador no time em questão
                            Route::get('/insereJogador/{time_id}', [ControleJogador::class, 'create'])->name("insereJogador");
                                        //Cadastra jogadores no time em questão
                                        Route::post('/grava_jogador', [ControleJogador::class, 'store'])->name('grava_jogador');
