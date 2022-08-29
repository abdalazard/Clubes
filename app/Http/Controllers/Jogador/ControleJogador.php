<?php

namespace App\Http\Controllers\Jogador;

use App\Http\Controllers\Controller;
use App\Models\Equipes;
use App\Models\Player;
use App\Models\Selecao;
use Illuminate\Http\Request;

class ControleJogador extends Controller
{
    public function create($time_id)
    {
        $time = Equipes::where("id", $time_id)->first();
        $selecao = Selecao::all();
        //redireciona para a pagina de registro de jogadores o tim em questão
        return view('/insereJogador', ['time' => $time, 'selecoes' => $selecao]);
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'nome_jogador' => 'required',
            'posicao' => 'required',
            'camisa' => 'required',
            'pais' => 'required',
            'time_id' => 'required',
            'selecao' => 'nullable'
        ]);

        if ($validate) {
            $novo_jogador = new Player();

            $novo_jogador->time_id = $request->time_id;
            $novo_jogador->nome_jogador = $request->nome_jogador;
            $novo_jogador->posicao = $request->posicao;
            $novo_jogador->numero = $request->camisa;
            $novo_jogador->pais = $request->pais;
            $novo_jogador->selecao_id = $request->selecao;

            $novo_jogador->save();
            $msg = "Jogador cadastrado!";
        } else {
            $msg = "Erro ao cadastrar jogador!";
        }

        return redirect()->route('detalheTime', ["id_time" => $novo_jogador->time_idm, "msg" => $msg]);
    }

    public function delete($id_jogador)
    {
        $jogador = Player::where('id', $id_jogador)->first();
        $time_id = $jogador->time_id;
        $jogador->delete();

        return redirect()->route('detalheTime', ['id_time' => $time_id]);
    }

    public function desconvoca($id)
    {
        $jogador = Player::findOrFail($id);
        $selecaoId = $jogador->first()->selecao_id;
        $jogador->update(['selecao_id' => null]);

        return redirect()->route('acessarSelecao',['id' => $selecaoId]);
    }
}
