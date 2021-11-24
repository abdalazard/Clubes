<?php

namespace App\Http\Controllers;

use App\Models\Player;
use App\Models\Time;
use App\Models\Torneio;

class Main extends Controller
{

    public function registroTorneio(){
        //cadastro de torneio
        $builder = new Torneio();
        $builder->nome_torneio = "Libertadores";
        $novo_torneio = $builder;
        $novo_torneio->save();

        if($novo_torneio){

            echo "ok";
        }else{
            echo "!ok";
        }

    }





    //================================================================


    public function registroclube(){
        //cadastro de clube
        $novo_time = new Time;
        $novo_time->time_id = 4;
        $novo_time->nome_time = "Vasco";



        if($novo_time->save()){

            return redirect()->route('home');
        }
        else{
            echo "!ok";
        }
    }


//===========================================================================


    public function registrojogador(){
        //cadastro um jogador
        $novo_jogador = new Player;

        $novo_jogador->time_id = 2;
        $novo_jogador->nome_jogador = "Diego Ribas";
        $novo_jogador->posicao = "MAT";
        $novo_jogador->numero = 10;
        $novo_jogador->save();

        if($novo_jogador->save()){
            return redirect()->route('home');
        }
        else{
            echo "!ok";
        }


    }

//===========================================================================

    public function time(){
            $id = 2;
            $times = Time::all();  //transformo a variavel em um conceito de time
            $time = $times->find($id); ////encontro o time que eu quero, contando que esteja no banco

            //Listo os times que tenho no banco
            $alltimes = Time::select()->get();
            echo "<hr>";
            echo "<b>Times: </b>";
            foreach($alltimes as $todos_times){
                echo $todos_times->nome_time . " | ";
            }

            //----
            //Aqui eu digo o nome do time selecionado
            echo "<hr>";
            echo  "<b>Time selecionado:</b> " . $time->nome_time; //Aqui diz o nome do time
            echo "<hr>";

            //===================================================================

            //Dados do torneio desse time



            $query = $time->where('id', $id);
            $torneios = $query->first()->torneios;
            echo "<b>Torneios inscritos: </b>";
            foreach($torneios as $torneio){
                echo $torneio->nome_torneio . ' | ';
            }
            echo "<hr>";






            //===================================================================


            //Dados de jogadores desse time
            $elenco = $time->where('id', $id); //Com o id do time, onde na tabela "Time" com o time_id = $id
            $jogadores = $elenco->first()->jogadordoTime; //traga dados
            foreach($jogadores as $jogador){ //para cada jogador, faça
                echo $jogador->nome_jogador."  |   ";
                echo $jogador->posicao. "   |   ";
                echo $jogador->numero."<br><br>";
            }
    }







}
