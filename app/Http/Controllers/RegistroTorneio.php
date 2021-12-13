<?php

namespace App\Http\Controllers;

use App\Models\Torneio;
use Illuminate\Http\Request;

class RegistroTorneio extends Controller
{

    public $torneio = "La liga";

    public function registroTorneio(){
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


}
