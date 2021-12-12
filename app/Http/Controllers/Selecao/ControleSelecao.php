<?php

namespace App\Http\Controllers\Selecao;

use App\Http\Controllers\Controller;
use App\Models\Selecao;
use Illuminate\Http\Request;

class ControleSelecao extends Controller
{
      //cadastro de clube
      public $_selecao;

      public function create($_selecao){
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
