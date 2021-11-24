<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Player extends Model
{
    protected $primaryKey = "id_jogador";

    public function equipeJogador() : BelongsTo
    {

        return $this->belongsTo(Time::class, 'time_id', 'time_id');

    }

}
