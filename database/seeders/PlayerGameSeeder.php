<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Game;
use App\Models\Player;
use App\Models\GamePlayer;
use DB;

class PlayerGameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $allGames = Game::inRandomOrder()->limit(5)->get();
        $players = Player::all();


        foreach($players as $player){
            foreach($allGames as $allGame){
                DB::table('game_player')->insert(
                    [
                        "player_id"=>$player->id,
                        "game_id"=>$allGame->id
                    ]
                    );
            }
        }
    }
}
