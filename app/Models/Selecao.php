<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Selecao extends Model
{
    protected $table = 'selecao';

    public function jogadordaSelecao(): HasMany
    {
        return $this->hasMany(Player::class, 'selecao_id', 'id');

    }
}
