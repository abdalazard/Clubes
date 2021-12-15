<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Player extends Model
{

    public function equipeAtual(): BelongsTo
    {
        return $this->belongsTo(Equipes::class, "time_id", "id");
    }

    public function selecao(): BelongsTo
    {
        return $this->belongsTo(Selecao::class, "selecao_id", "id");
    }

}
