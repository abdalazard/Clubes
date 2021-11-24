<?php

namespace App\Http\Controllers;

use App\Models\Player;
use App\Models\Time;




class Main extends Controller
{


    public function registroclube(){

        $novo_time = new Time;
        $novo_time->time_id = 6;
        $novo_time->nome_time = "Manchester United";

        if($novo_time->save()){

            return redirect()->route('home');
        }
        else{
            echo "!ok";
        }
    }


    public function registrojogador(){

        $novo_jogador = new Player;

        $novo_jogador->time_id = 5;
        $novo_jogador->nome_jogador = "Virgil Van Dijk";
        $novo_jogador->posicao = "ZC";
        $novo_jogador->numero = 4;
        $novo_jogador->save();

        if($novo_jogador->save()){
            return redirect()->route('home');
        }
        else{
            echo "!ok";
        }


    }



    public function time(){
            $id = 5;
            $times = Time::all();  //transformo a variavel em um conceito de time
            $time = $times->find($id); ////encontro o time que eu quero, contando que esteja no banco


            $alltimes = Time::select()->get();
            echo "<hr>";
            echo "<b>Times: </b>";
            foreach($alltimes as $todos_times){
                echo $todos_times->nome_time . " | ";
            }


            echo "<hr>";
            echo  "<b>Time selecionado:</b> " . $time->nome_time; //Aqui diz o nome do time
            echo "<hr>";

            //===================================================================


            //Dados de jogadores desse time
            $elenco = $time->where('time_id', $id); //Com o id do time, onde na tabela "Time" com o time_id = $id
            $jogadores = $elenco->first()->jogadordoTime; //traga dados
            foreach($jogadores as $jogador){
                echo $jogador->nome_jogador."  ";
                echo $jogador->posicao. "   ";
                echo $jogador->numero."<br>";
            }
        }




}
