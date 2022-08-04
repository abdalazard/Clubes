<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Torneio extends Model
{

    protected $table = "torneio";

    public function equipes() : HasMany
    {
        return $this->hasMany(Equipes::class, 'torneio_id', 'id');
    }

}
