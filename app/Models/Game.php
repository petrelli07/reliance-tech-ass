<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\GamePlay;

class Game extends Model 
{
    protected $fillable = [
        'name', 'version','dateAdded'
    ];

    public function game_plays(){
        return $this->hasMany(GamePlay::class);
    }

}
