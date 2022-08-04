<?php

namespace App\Http\Controllers\Time;

use App\Http\Controllers\Controller;
use App\Models\Equipes;
use App\Models\Torneio;
use Illuminate\Http\Request;

class ControleEquipe extends Controller
{
    public function create($idTorneio){
        $torneio = Torneio::where('id', $idTorneio)->first();

        return view('/inscreverEquipe', ['torneio' => $torneio]);
    }

    public function listarJogadores($id_time){
        $time = Equipes::where('id', $id_time)->first();
        $jogadores = $time->jogadores()->get();

        return view('/detalhe_time', ['jogadores' => $jogadores,
                                      'time' => $time->nome_time,
                                      'Idtime' => $time->id]);
    }

    public function store(Request $request){
        $novo_time = new Equipes();

        $validate = $request->validate([
            'nome_time' => 'required',
            'pais' => 'required',
            'torneio_id' => 'required'
        ]);

        if($validate){
            $novo_time->nome_time = $request->nome_time;
            $novo_time->pais_time = $request->pais;
            $novo_time->torneio_id = $request->torneio_id;
            $novo_time->save();

            $msg = "Time inscrito com sucesso!";
            return redirect()->route('home', ['msg' => $msg]);
        }else{
            $msg = "Erro!";

            return redirect()->route('acessotorneio', ['msg' => $msg]);
        }
    }

    public function delete($id_time){
        $time = Equipes::where('id', $id_time)->first();
        $torneioId = $time->torneio_id;
        $time->delete();

        return redirect()->route('acessoTorneio', ['id' => $torneioId]);

      }
}
