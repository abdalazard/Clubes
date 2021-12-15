<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Equipes extends Model{

    protected $table = "equipe";

    public function torneios(): BelongsToMany
    {

        return $this->belongsToMany(Torneio::class);
    }

    public function torcidasSelecao(): BelongsToMany
    {
        return $this->BelongsToMany(Selecao::class, "selecao_time", "time_id");
    }

    public function jogadores(): HasMany
    {
        return $this->hasMany(Player::class, 'time_id', 'id');
    }

}
