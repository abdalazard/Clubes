<?php

namespace App\Http\Controllers\Jogador;

use App\Http\Controllers\Controller;
use App\Models\Equipes;
use App\Models\Player;
use Illuminate\Http\Request;

class ControleJogador extends Controller
{

    public function create($time_id){

        $time = Equipes::where("id", $time_id)->first();

       //redireciona para a pagina de registro de jogadores o tim em questão
       return view('/insereJogador', ['time' => $time]);

    }

    public function store(Request $request){



        $validate = $request->validate([
            'nome_jogador' => 'required',
            'posicao' => 'required',
            'camisa' => 'required',
            'pais' => 'required',
            'time_id' => 'required',
            'selecao' => 'nullable'
        ]);

        if($validate){
            $novo_jogador = new Player();

            $novo_jogador->time_id = $request->time_id;
            $novo_jogador->nome_jogador = $request->nome_jogador;
            $novo_jogador->posicao = $request->posicao;
            $novo_jogador->numero = $request->camisa;
            $novo_jogador->pais = $request->pais;
            $novo_jogador->selecao_id = $request->selecao;

            $novo_jogador->save();
            $msg = "Jogador cadastrado!";

        }else{
            $msg = "Erro ao cadastrar jogador!";

        }

        return redirect()->route('home');
    }

}
