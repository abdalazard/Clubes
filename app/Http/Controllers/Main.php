<?php

namespace App\Http\Controllers;

use App\Models\Time;
use Illuminate\Http\Request;

class Main extends Controller
{
    public function time(){
            $id = 1;
            $time = Time::find($id);
            echo $time->nome_time;

    }
}
