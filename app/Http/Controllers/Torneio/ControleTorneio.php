<?php

namespace App\Http\Controllers\Torneio;

use App\Http\Controllers\Controller;
use App\Models\Selecao;
use App\Models\Torneio;
use Illuminate\Http\Request;

class ControleTorneio extends Controller
{

    public function index(){
        $torneios  = Torneio::all();
        $selecoes = Selecao::all();

        return view('home', ['torneios' => $torneios, 'selecoes' => $selecoes]);
    }

    public function create(){
        return view('/criartorneio');
    }

    public function store(Request $request){

        $torneio = new Torneio;

        $validate = $request->validate([
            'nome_torneio' => 'required',
            'pais' => 'required'
        ]);

        if($validate){
            $torneio->nome_torneio = $request->nome_torneio;
            $torneio->pais_torneio = $request->pais;
            $torneio->save();
            $msg = "Torneio criado com sucesso";

            return redirect()->route('acessoTorneio', ['id' => $torneio->id]);
        }else{
            $msg = "Erro!";
            return redirect()->route('home', ['msg' => $msg]);
        }
    }

    public function detalheTorneio($torneioId){

        $torneio = Torneio::where('id', $torneioId)->first();

        $times = $torneio->equipes()->get();

        return view('torneio', [
            'torneio' => $torneio,
            'equipes' => $times
            ]);
    }

    public function delete($id_torneio){

        $torneio = Torneio::where('id', $id_torneio)->first();

        if($torneio){
            $times = $torneio->equipes;
            foreach($times as $time){
                $jogadores = $time->jogadores;

                foreach($jogadores as $jogador){
                    $jogador->delete();
                }
                $time->delete();
            }
            $torneio->delete();
        }
        return redirect()->route('home');
    }


}
