<?php

namespace App\Http\Controllers\Torneio;

use App\Http\Controllers\Controller;
use App\Models\Equipes;
use App\Models\Torneio;
use Illuminate\Http\Request;

class ControleTorneio extends Controller
{

    public function index(){

        //Tabela time_torneio
        $torneios  = Torneio::all();

        return view('/home', ['torneios' => $torneios]);

    }

    public function create(){
        //redireciona para view
        return view('/criartorneio');
    }

    public function store(Request $request){

        $torneio = new Torneio;

        $validate = $request->validate([
            'nome_torneio' => 'required',
            'pais' => 'required'
        ]);
        //valido os dados

        if($validate){  //se validade

            $torneio->nome_torneio = $request->nome_torneio;
            $torneio->pais_torneio = $request->pais;
            $torneio->save(); //salvo os campos da tabela do banco, com os dados que trouxe da request
            $msg = "Torneio criado com sucesso";

            return redirect()->route('acessoTorneio', ['id' => $torneio->id]);
        }else{
            $msg = "Erro!";
            return redirect()->route('home', ['msg' => $msg]);
        }

    }

    public function detalheTorneio($torneioId){
        //Detalhe dados do torneio em questão, como por exemplo os times incritos

        $torneioId = Torneio::where('id', $torneioId)->first();
        //dentro do model Torneio, pegue o primeiro registro onde a coluna 'id' é igual a variavel $torneioId

        $times = $torneioId->equipes()->get();
        //Com o id do torneio em questão, vá no método equipes, já com a relação declarada no model Torneio, e obtenha os dados

        return view('torneio', [
            'torneio' => $torneioId,
            'equipes' => $times
            ]);
        // Retorne para a view Torneio, o id do torneio em questão e seus times
       }

    public function delete($id_torneio){
        $torneio = Torneio::where('id', $id_torneio)->first();
        $torneio->delete();

        return redirect()->route('home');
    }


        }
