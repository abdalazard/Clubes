<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Equipes extends Model{

    protected $table = "equipe";

    public function torneios(): BelongsTo
    {

        return $this->belongsTo(Torneio::class);
    }

    public function jogadores(): HasMany
    {
        return $this->hasMany(Player::class, 'time_id', 'id');
    }

}
