<?php

namespace App\Http\Controllers\Time;

use App\Http\Controllers\Controller;
use App\Models\Equipes;
use Illuminate\Http\Request;

class ControleEquipe extends Controller
{

    public function create($idTorneio){
        //redireciona para a pagina de criação de times
        return view('/inscreverEquipe', ['torneio_id' => $idTorneio]);

    }

    public function listarJogadores($id_time){
        //Lista todos os jogadores de um determinado time
        $time = Equipes::where('id', $id_time)->first();
        $jogadores = $time->jogadores()->get();
        //verifico o time no model Equipes e depois, dentro desta equipe, obtenho os jogadores vinculados ao time
        return view('/detalhe_time', ['jogadores' => $jogadores, 'time' => $time->nome_time, 'Idtime' => $time->id]);
    }

    public function store(Request $request){

        $novo_time = new Equipes();

        $validate = $request->validate([
            'nome_time' => 'required',
            'pais' => 'required',
            'torneio_id' => 'required'
        ]);
        //dados validados

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
}
