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


    return $this->hasMany(Time::class, 'time_id');

    }


    public function torneio() : HasMany
    {


    return $this->hasMany(Torneio::class, 'torneio_id');

    }

}
