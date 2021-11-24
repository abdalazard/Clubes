<?php

namespace App\Http\Controllers;

use App\Models\Player;
use App\Models\Time;
use Illuminate\Http\Request;

class Main extends Controller
{


    public function registroClube(){

        $novo_time = new Time;

        $novo_time->time_id = 2;
        $novo_time->nome_time = "Flamengo";

        $novo_time->save();

        return redirect()->route("home");

    }


    public function registroJogador(){

        $novo_jogador = new Player;

        $novo_jogador->time_id = 2;
        $novo_jogador->nome_jogador = "Gustavo Mosquito";
        $novo_jogador->posicao = "PTE";
        $novo_jogador->numero = 19;
        $novo_jogador->save();

        return redirect()->route("home");

    }



    public function time(){
            $id = 1;
            $times = Time::all();  //transformo a variavel em um conceito de time
            $time = $times->find($id); ////encontro o time que eu quero, contando que esteja no banco
            echo $time->nome_time; //Aqui diz o nome do time
            echo "<hr>";
            

            //Dados de jogadores desse time            
            $elenco = $time->where('time_id', $id); //Com o id do time, onde na tabela "Time" com o time_id = $id
            $jogadores = $elenco->first()->jogadordoTime; //traga dados


            foreach($jogadores as $jogador){
            echo $jogador->nome_jogador."  ";
            echo $jogador->posicao. "   ";
            echo $jogador->numero."<br>";
            }
        }

    /* public function jogador(){
        
    

    } */
}
