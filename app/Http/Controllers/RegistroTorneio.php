<?php

namespace App\Http\Controllers;

use App\Models\Torneio;
use Illuminate\Http\Request;

class RegistroTorneio extends Controller
{
    public function registroTorneio($nome_time){
        //cadastro de torneio
        $builder = new Torneio();
        $builder->nome_torneio = $this->nome_time;
        $novo_torneio = $builder;
        $novo_torneio->save();

        if($novo_torneio){

            return redirect()->route('home');
        }else{
            echo "!ok";
        }

    }


}
