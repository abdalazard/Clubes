<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Time;
use App\Models\Torneio;

class Time_torneio extends Model
{



    public function time() : HasMany
    {


    return $this->hasMany(Time::class, 'time_id', 'time_id');
                //É necessário identificar qual são os ids: o que vem do model time, e o que está no banco

    }


    public function torneio() : HasMany
    {

                //É necessário identificar qual são os ids: o que vem do model torneio, e o que está no banco
    return $this->hasMany(Torneio::class, 'torneio_id', 'torneio_id');

    }

}
