<?php

namespace App\Http\Controllers;

use App\Models\Player;

class RegistroJogador extends Controller
{
    //===========================================================================

    public $id_time = 2;
    public $id_selecao = 1;
    public $_jogador = "Gabriel Barbosa";
    public $pos = "CA";
    public $num = "9";





    public function registrojogador(){
        //cadastro um jogador
        $novo_jogador = new Player();

        $novo_jogador->time_id = $this->id_time;
        $novo_jogador->selecao_id = $this->id_selecao;
        $novo_jogador->nome_jogador = $this->_jogador;
        $novo_jogador->posicao = $this->pos;
        $novo_jogador->numero = $this->num;
        $novo_jogador->save();

        if($novo_jogador->save()){
            return redirect()->route('home');
        }
        else{
            echo "!ok";
        }


    }
}
