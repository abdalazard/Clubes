<?php

namespace App\Http\Controllers;


use App\Models\Time;

class Main extends Controller
{

   


   





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

            



            //Aqui eu digo o nome do time selecionado
            echo "<hr>";
            echo  "<b>Time selecionado:</b> " . $time->nome_time; //Aqui diz o nome do time
            echo "<hr>";

            



            //Dados do torneio desse time
            $query = $time->where('id', $id);
            $torneios = $query->first()->torneios;
            echo "<b>Torneios inscritos: </b>";
            foreach($torneios as $torneio){
                echo $torneio->nome_torneio . ' | ';
            }
            echo "<hr>";


            



            


            //Dados de jogadores desse time
            $elenco = $time->where('id', $id)->first(); //Com o id do time, onde na tabela "Time" com o time_id = $id
            $jogadores = $elenco->jogadordoTime;  //traga dados

            //Dados da seleção que este jogador pertence
            $selecao;
             //traga dados
            
            foreach($jogadores as $jogador){ //para cada jogador, faça
                echo $jogador->nome_jogador."  |   ";
                echo $jogador->posicao. "   |   ";
                echo $jogador->numero."  |  ";
                echo "Convocado pela seleção: <br><br>" . $jogador->convocacao;
                
            }



    }







}
