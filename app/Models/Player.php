<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Player extends Model
{

    public function equipeJogador() : BelongsTo
    {

        return $this->belongsTo(Time::class, 'time_id');

    }

    public function selecaoJogador() : BelongsTo
    {


        return $this->belongsTo(Selecao::class, 'selecao_id');

    }

    

}
