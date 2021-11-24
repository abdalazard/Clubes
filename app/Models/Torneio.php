<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use App\Models\Time_torneio;


class Torneio extends Model
{

    protected $table = "torneio";

    public function times() : BelongsToMany
    {

        return $this->belongsToMany(Time::class, 'time_torneio', 'torneio_id', 'time_id');
    }

}
