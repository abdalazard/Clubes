<?php

namespace App\Http\Controllers\Jogador;

use App\Http\Controllers\Controller;
use App\Models\Player;
use Illuminate\Http\Request;

class ControleJogador extends Controller
{
    public function create($id_time, $id_selecao, $_jogador, $pos, $num){
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
