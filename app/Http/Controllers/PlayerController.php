<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Models\Player;

use App\Models\Game;

use App\Models\GamePlay;

use DB;

use App\Http\Resources\GameResource as GameResource;



class PlayerController extends Controller
{
    /**
     * Retrieve the user for the given ID.
     *
     * @param  int  $id
     * @return Response
     */

    public function getAllPlayersWithGames()
    {
     
        try{

            $player = Player::with('games')->with('game_plays')->paginate(10);

            $mem_peak = memory_get_usage(false);
     
             return response()->json([$player],200)->withHeaders([
                 'X-Memory'=>round($mem_peak/1024)."kb"
             ]);

        }catch(Exception $e){
            $mem_peak = memory_get_usage(false);
     
             return response()->json([$e],500)->withHeaders([
                 'X-Memory'=>round($mem_peak/1024)."kb"
             ]);
        }
    }

    public function getAllGames(){
        
        try{

            $allGames = Game::all();

            $mem_peak = memory_get_usage(false);
     
             return response()->json([$allGames],200)->withHeaders([
                 'X-Memory'=>round($mem_peak/1024)."kb"
             ]);

        }catch(Exception $e){
            $mem_peak = memory_get_usage(false);
     
             return response()->json([$e],500)->withHeaders([
                 'X-Memory'=>round($mem_peak/1024)."kb"
             ]);
        }
    }

    public function getGamePlayedBetween(Request $request){
        
        try{

            $endDate = $request->end_date;
            $startDate = $request->start_date;

            $gamePlay = GamePlay::whereBetween('datePlayed',[$startDate,$endDate])->paginate(5);

            if(count($gamePlay) > 0){

                $mem_peak = memory_get_usage(false);
     
                return response()->json([$gamePlay],200)->withHeaders([
                    'X-Memory'=>round($mem_peak/1024)."kb"
                ]);
            }

            $mem_peak = memory_get_usage(false);
     
            return response()->json(["error"=>"No results to show"],204)->withHeaders([
                'X-Memory'=>round($mem_peak/1024)."kb"
            ]);


        }catch(Exception $e){
            $mem_peak = memory_get_usage(false);
     
            return response()->json([$e],500)->withHeaders([
                'X-Memory'=>round($mem_peak/1024)."kb"
            ]);
        }
    }   

    
    public function getGamesPlayedByDayWithPlayers()
    {
     
        try{

            
            $gamesPlayed = GamePlay::orderBy('datePlayed')->with('players')->with('games')->get()->groupBy(function($item) {
                return $item->datePlayed;
           });
           

            $mem_peak = memory_get_usage(false);
     
             return response()->json([$gamesPlayed],200)->withHeaders([
                 'X-Memory'=>round($mem_peak/1024)."kb"
             ]);

        }catch(Exception $e){
            $mem_peak = memory_get_usage(false);
     
             return response()->json([$e],500)->withHeaders([
                 'X-Memory'=>round($mem_peak/1024)."kb"
             ]);
        }
    }

    public function topPlayers(Request $request){

        try{
            $gameDates =  GamePlay::selectRaw('YEAR(datePlayed) as year ,MONTH(datePlayed) as  month')->groupBy(['year','month'])->get();

        $resultArray = array();

        foreach($gameDates as $gameDate){

           $result =  GamePlay::selectRaw("player_id,COUNT(id) as played")->groupBy("player_id")->whereYear("datePlayed",$gameDate->year)->whereMonth("datePlayed",$gameDate->month)->orderBy("played",'desc')->limit(100)->get();

           if(!isset($resultArray[$gameDate->year])){
               $resultArray[$gameDate->year] = [];
           }
           $result->toArray();
           foreach($result as $res){
                $res["link"] =  [
                    'href' => 'http://localhost:8000/games/get-games-played/'.$res['player_id'].'/'.$gameDate->year.'/'.$gameDate->month
                ];
           }
           
           $resultArray[$gameDate->year][$gameDate->month] = $result;
        }
        
        $mem_peak = memory_get_usage(false);
        return response()->json(["data"=>$resultArray],200)->withHeaders([
            'X-Memory'=>round($mem_peak/1024)."kb"
        ]);
        }catch(Exception $e){
            return response()->json(["error"=>$e],500)->withHeaders([
                'X-Memory'=>round($mem_peak/1024)."kb"
            ]);
        }

    }

    public function userGames(Request $request,$player,$year,$month){
       return GamePlay::where('player_id',$player)->whereYear("datePlayed",$year)->whereMonth("datePlayed",$month)->orderBy("datePlayed",'desc')->get();
    }


    public function toArray($request)
    {
        return [
            'data' => $this->collection,
            'links' => [
                'self' => 'link-value',
            ],
        ];
    }
    
}