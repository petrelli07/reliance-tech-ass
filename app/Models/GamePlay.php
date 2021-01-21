<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\Player;

use App\Models\Game;

class GamePlay extends Model 
{
    
    public function players(){
        return $this->belongsTo(Player::class,'player_id');
    }

    public function games(){
        return $this->belongsTo(Game::class,'game_id');
    }
}
