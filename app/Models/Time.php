<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Player;
use App\Models\Time_torneio;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Time extends Model
{

    protected $table = "times";



        public function jogadordoTime() : HasMany
        {

            return $this->hasMany(Player::class, "time_id", "id");

        }

        public function torneios() : BelongsToMany
        {

            /*Retorne nesta mesma classe: a tabela com os dados do torneio, envie para a tabela "time_torneio", com a foreignPivotKey(torneio_id)
            e

            */
            return $this->belongsToMany(Torneio::class, 'time_torneio', 'time_id', 'torneio_id');

        }


}
