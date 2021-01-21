<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Game;
use App\Models\GamePlay;

class Player extends Model 
{
    use HasFactory;

    public function games()
    {
        return $this->belongsToMany(Game::class);
    }


    public function game_plays(){
        return $this->hasMany(GamePlay::class);
    }
}
