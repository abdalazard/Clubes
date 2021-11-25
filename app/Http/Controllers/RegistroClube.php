<?php

namespace App\Http\Controllers;

use App\Models\Time;
use Illuminate\Http\Request;

class RegistroClube extends Controller
{
    //================================================================
        //cadastro de clube


        public function registroclube($nome_time){
            $novo_time = new Time();
            $novo_time->nome_time = $this->nome_time;
            
    
    
    
            if($novo_time->save()){
    
                return redirect()->route('home');
            }
            else{
                echo "!ok";
            }
        }
}
