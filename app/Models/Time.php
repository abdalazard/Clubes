<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Player;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Time extends Model
{

protected $table = "times";
protected $primaryKey = "time_id";



    public function jogadordoTime() : hasMany    
    {

        return $this->hasMany(Player::class, "time_id", "time_id");

    }

}
