<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Player;
use App\Models\PlayerGame;
use App\Models\GamePlay;
use App\Models\Game;

class GamePlaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    
    public function getRandomUser(){
        
        $randomId = rand(1,1000);

        $multiply = $randomId * 10;

        if($randomId == 1 || 10){
            $userId = $randomId;
        }

        $userId = $multiply + 1;

        return $userId;

    }


    public function run()
    {
        
        $playerGameData = [];
        $userData = [];

        for($i = 1; $i <= 3836;  $i++){//for loop for number of days of gaming
            
            $x=1;
            while($x < 1550){ //while loop for number of games per day


                $userId = $this->getRandomUser();
                
                $playerGameData = Player::find($userId)->games()->inRandomOrder()->limit(1)->get();

                $currentDate = date("Y-m-d",strtotime("+".$i."days",strtotime("2013-02-28")));
                
                foreach($playerGameData as $playerData){
                    $playerId = $playerData["pivot"]["player_id"];
                    $playerGameId = $playerData["pivot"]["game_id"];
                }

                array_push($userData,$i);


                // //get games which the user has
                $getGameReleases = Game::find($playerGameId)->inRandomOrder()->limit(1)->get();


                foreach($getGameReleases as $getGameRelease){
                    $dateAdded = $getGameRelease->dateAdded;
                }


                //check if the current date is later than the date of release of game
                if($currentDate > $dateAdded){
                    
                $checkRecords = GamePlay::where('player_id','=',$playerId)->where('datePlayed','=',$currentDate)->get();

                    if(count($checkRecords) == 0){
                            GamePlay::insert([
                                'player_id'=>$playerId,
                                'datePlayed'=>$currentDate,
                                'game_id'=>$playerGameId
                        ]);
                        $x++; 
                    }
                } 
            }
        }
    }
}
