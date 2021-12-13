<?php

namespace App\Http\Controllers;

use App\Models\Selecao;
use Illuminate\Http\Request;

class RegistroSelecao extends Controller
{
    //===========================================================================

     //cadastro de clube
    public $_selecao = "Brasil";

     public function registroSelecao($_selecao){
        $nova_selecao = new Selecao();
        $nova_selecao->nome_selecao= $this->_selecao;



        if($nova_selecao->save()){

            return redirect()->route('home');
        }
        else{
            echo "!ok";
        }
    }
}
