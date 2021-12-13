<?php

namespace App\Http\Controllers\Torneio;

use App\Http\Controllers\Controller;
use App\Models\Torneio;
use Illuminate\Http\Request;

class ControleTorneio extends Controller
{

    public $nome_time;
    public $torneio_pais;
    private $torneioId;

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
            
            $msg = "Ok!";
            return view('home', ['msg' => $msg]);
        }

    }
    

    public function detalheTorneio($torneioId){

        $torneio = Torneio::where('id', $torneioId)->first();

       return view('torneio', ['torneio' => $torneio]);

        }
}
