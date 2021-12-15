<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Selecao extends Model
{

    protected $table="selecao";


    public function jogadordaSelecao() : HasMany
    {

        return $this->hasMany(Player::class, "selecao_id", "id");

    }


    public function torcidasEquipes(): BelongsToMany
    {
        return $this->BelongsToMany(Equipes::class, "selecao_time", "selecao_id");
    }
}
