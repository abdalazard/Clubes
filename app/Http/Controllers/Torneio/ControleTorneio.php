<?php

namespace App\Http\Controllers\Torneio;

use App\Http\Controllers\Controller;
use App\Models\Torneio;
use Illuminate\Http\Request;

class ControleTorneio extends Controller
{

    public $nome_time;
    public $builder;
    private $torneioId;

    public function index(){

        //Tabela time_torneio
        $torneios  = Torneio::all();
        
        return view('/home', ['torneios' => $torneios]);
    
    }

    public function create($nome_time){

        
        //cadastro de torneio
        $builder = new Torneio();
        $builder->nome_torneio = $this->torneio;
        $novo_torneio = $builder;
        $novo_torneio->save();

        if($novo_torneio){

            return redirect()->route('home');
        }else{
            echo "!ok";
        }

    }

    public function detalheTorneio($torneioId){

        

    }
}
