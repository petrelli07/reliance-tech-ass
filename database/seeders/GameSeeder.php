<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Game;
use Carbon\Carbon;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

     public function gameLists(){
        $games = [
            [
                'name' => "Call of Duty" ,
                'version' => '2010',
                'dateAdded' => '2010-12-12',
                'created_at'=> Carbon::now()->toDateTimeString(),
                'updated_at'=> Carbon::now()->toDateTimeString(),
            ],
            [
                'name' => "Call of Duty" ,
                'version' => '2011',
                'dateAdded' => '2011-12-12',
                'created_at'=> Carbon::now()->toDateTimeString(),
                'updated_at'=> Carbon::now()->toDateTimeString(),
            ],
            [
                'name' => "Call of Duty" ,
                'version' => '2012',
                'dateAdded' => '2012-12-12',
                'created_at'=> Carbon::now()->toDateTimeString(),
                'updated_at'=> Carbon::now()->toDateTimeString(),
            ],
            [
                'name' => "Call of Duty" ,
                'version' => '2013',
                'dateAdded' => '2013-12-12',
                'created_at'=> Carbon::now()->toDateTimeString(),
                'updated_at'=> Carbon::now()->toDateTimeString(),
            ],
            [
                'name' => "Call of Duty" ,
                'version' => '2014',
                'dateAdded' => '2014-12-12',
                'created_at'=> Carbon::now()->toDateTimeString(),
                'updated_at'=> Carbon::now()->toDateTimeString(),
            ],
            [
                'name' => "Call of Duty" ,
                'version' => '2015',
                'dateAdded' => '2015-12-12',
                'created_at'=> Carbon::now()->toDateTimeString(),
                'updated_at'=> Carbon::now()->toDateTimeString(),
            ],
            [
                'name' => "Call of Duty" ,
                'version' => '2016',
                'dateAdded' => '2016-12-12',
                'created_at'=> Carbon::now()->toDateTimeString(),
                'updated_at'=> Carbon::now()->toDateTimeString(),
            ],
            [
                'name' => "Call of Duty" ,
                'version' => '2017',
                'dateAdded' => '2017-12-12',
                'created_at'=> Carbon::now()->toDateTimeString(),
                'updated_at'=> Carbon::now()->toDateTimeString(),
            ],
            [
                'name' => "Call of Duty" ,
                'version' => '2018',
                'dateAdded' => '2018-12-12',
                'created_at'=> Carbon::now()->toDateTimeString(),
                'updated_at'=> Carbon::now()->toDateTimeString(),
            ],
            [
                'name' => "Call of Duty" ,
                'version' => '2019',
                'dateAdded' => '2019-12-12',
                'created_at'=> Carbon::now()->toDateTimeString(),
                'updated_at'=> Carbon::now()->toDateTimeString(),
            ],
            [
                'name' => "Call of Duty" ,
                'version' => '2020',
                'dateAdded' => '2020-12-12',
                'created_at'=> Carbon::now()->toDateTimeString(),
                'updated_at'=> Carbon::now()->toDateTimeString(),
            ],

            [
                'name' => "Mortal Kombat" ,
                'version' => '2010',
                'dateAdded' => '2010-12-12',
                'created_at'=> Carbon::now()->toDateTimeString(),
                'updated_at'=> Carbon::now()->toDateTimeString(),
            ],
            [
                'name' => "Mortal Kombat" ,
                'version' => '2011',
                'dateAdded' => '2011-12-12',
                'created_at'=> Carbon::now()->toDateTimeString(),
                'updated_at'=> Carbon::now()->toDateTimeString(),
            ],
            [
                'name' => "Mortal Kombat" ,
                'version' => '2012',
                'dateAdded' => '2012-12-12',
                'created_at'=> Carbon::now()->toDateTimeString(),
                'updated_at'=> Carbon::now()->toDateTimeString(),
            ],
            [
                'name' => "Mortal Kombat" ,
                'version' => '2013',
                'dateAdded' => '2013-12-12',
                'created_at'=> Carbon::now()->toDateTimeString(),
                'updated_at'=> Carbon::now()->toDateTimeString(),
            ],
            [
                'name' => "Mortal Kombat" ,
                'version' => '2014',
                'dateAdded' => '2014-12-12',
                'created_at'=> Carbon::now()->toDateTimeString(),
                'updated_at'=> Carbon::now()->toDateTimeString(),
            ],
            [
                'name' => "Mortal Kombat" ,
                'version' => '2015',
                'dateAdded' => '2015-12-12',
                'created_at'=> Carbon::now()->toDateTimeString(),
                'updated_at'=> Carbon::now()->toDateTimeString(),
            ],
            [
                'name' => "Mortal Kombat" ,
                'version' => '2016',
                'dateAdded' => '2016-12-12',
                'created_at'=> Carbon::now()->toDateTimeString(),
                'updated_at'=> Carbon::now()->toDateTimeString(),
            ],
            [
                'name' => "Mortal Kombat" ,
                'version' => '2017',
                'dateAdded' => '2017-12-12',
                'created_at'=> Carbon::now()->toDateTimeString(),
                'updated_at'=> Carbon::now()->toDateTimeString(),
            ],
            [
                'name' => "Mortal Kombat" ,
                'version' => '2018',
                'dateAdded' => '2018-12-12',
                'created_at'=> Carbon::now()->toDateTimeString(),
                'updated_at'=> Carbon::now()->toDateTimeString(),
            ],
            [
                'name' => "Mortal Kombat" ,
                'version' => '2019',
                'dateAdded' => '2019-12-12',
                'created_at'=> Carbon::now()->toDateTimeString(),
                'updated_at'=> Carbon::now()->toDateTimeString(),
            ],
            [
                'name' => "Mortal Kombat" ,
                'version' => '2020',
                'dateAdded' => '2020-12-12',
                'created_at'=> Carbon::now()->toDateTimeString(),
                'updated_at'=> Carbon::now()->toDateTimeString(),
            ],

            [
                'name' => "FIFA" ,
                'version' => '2010',
                'dateAdded' => '2010-12-12',
                'created_at'=> Carbon::now()->toDateTimeString(),
                'updated_at'=> Carbon::now()->toDateTimeString(),
            ],
            [
                'name' => "FIFA" ,
                'version' => '2011',
                'dateAdded' => '2011-12-12',
                'created_at'=> Carbon::now()->toDateTimeString(),
                'updated_at'=> Carbon::now()->toDateTimeString(),
            ],
            [
                'name' => "FIFA" ,
                'version' => '2012',
                'dateAdded' => '2012-12-12',
                'created_at'=> Carbon::now()->toDateTimeString(),
                'updated_at'=> Carbon::now()->toDateTimeString(),
            ],
            [
                'name' => "FIFA" ,
                'version' => '2013',
                'dateAdded' => '2013-12-12',
                'created_at'=> Carbon::now()->toDateTimeString(),
                'updated_at'=> Carbon::now()->toDateTimeString(),
            ],
            [
                'name' => "FIFA" ,
                'version' => '2014',
                'dateAdded' => '2014-12-12',
                'created_at'=> Carbon::now()->toDateTimeString(),
                'updated_at'=> Carbon::now()->toDateTimeString(),
            ],
            [
                'name' => "FIFA" ,
                'version' => '2015',
                'dateAdded' => '2015-12-12',
                'created_at'=> Carbon::now()->toDateTimeString(),
                'updated_at'=> Carbon::now()->toDateTimeString(),
            ],
            [
                'name' => "FIFA" ,
                'version' => '2016',
                'dateAdded' => '2016-12-12',
                'created_at'=> Carbon::now()->toDateTimeString(),
                'updated_at'=> Carbon::now()->toDateTimeString(),
            ],
            [
                'name' => "FIFA" ,
                'version' => '2017',
                'dateAdded' => '2017-12-12',
                'created_at'=> Carbon::now()->toDateTimeString(),
                'updated_at'=> Carbon::now()->toDateTimeString(),
            ],
            [
                'name' => "FIFA" ,
                'version' => '2018',
                'dateAdded' => '2018-12-12',
                'created_at'=> Carbon::now()->toDateTimeString(),
                'updated_at'=> Carbon::now()->toDateTimeString(),
            ],
            [
                'name' => "FIFA" ,
                'version' => '2019',
                'dateAdded' => '2019-12-12',
                'created_at'=> Carbon::now()->toDateTimeString(),
                'updated_at'=> Carbon::now()->toDateTimeString(),
            ],
            [
                'name' => "FIFA" ,
                'version' => '2020',
                'dateAdded' => '2020-12-12',
                'created_at'=> Carbon::now()->toDateTimeString(),
                'updated_at'=> Carbon::now()->toDateTimeString(),
            ],
            [
                'name' => "Just Cause" ,
                'version' => '2010',
                'dateAdded' => '2010-12-12',
                'created_at'=> Carbon::now()->toDateTimeString(),
                'updated_at'=> Carbon::now()->toDateTimeString(),
            ],
            [
                'name' => "Just Cause" ,
                'version' => '2011',
                'dateAdded' => '2011-12-12',
                'created_at'=> Carbon::now()->toDateTimeString(),
                'updated_at'=> Carbon::now()->toDateTimeString(),
            ],
            [
                'name' => "Just Cause" ,
                'version' => '2012',
                'dateAdded' => '2012-12-12',
                'created_at'=> Carbon::now()->toDateTimeString(),
                'updated_at'=> Carbon::now()->toDateTimeString(),
            ],
            [
                'name' => "Just Cause" ,
                'version' => '2013',
                'dateAdded' => '2013-12-12',
                'created_at'=> Carbon::now()->toDateTimeString(),
                'updated_at'=> Carbon::now()->toDateTimeString(),
            ],
            [
                'name' => "Just Cause" ,
                'version' => '2014',
                'dateAdded' => '2014-12-12',
                'created_at'=> Carbon::now()->toDateTimeString(),
                'updated_at'=> Carbon::now()->toDateTimeString(),
            ],
            [
                'name' => "Just Cause" ,
                'version' => '2015',
                'dateAdded' => '2015-12-12',
                'created_at'=> Carbon::now()->toDateTimeString(),
                'updated_at'=> Carbon::now()->toDateTimeString(),
            ],
            [
                'name' => "Just Cause" ,
                'version' => '2016',
                'dateAdded' => '2016-12-12',
                'created_at'=> Carbon::now()->toDateTimeString(),
                'updated_at'=> Carbon::now()->toDateTimeString(),
            ],
            [
                'name' => "Just Cause" ,
                'version' => '2017',
                'dateAdded' => '2017-12-12',
                'created_at'=> Carbon::now()->toDateTimeString(),
                'updated_at'=> Carbon::now()->toDateTimeString(),
            ],
            [
                'name' => "Just Cause" ,
                'version' => '2018',
                'dateAdded' => '2018-12-12',
                'created_at'=> Carbon::now()->toDateTimeString(),
                'updated_at'=> Carbon::now()->toDateTimeString(),
            ],
            [
                'name' => "Just Cause" ,
                'version' => '2019',
                'dateAdded' => '2019-12-12',
                'created_at'=> Carbon::now()->toDateTimeString(),
                'updated_at'=> Carbon::now()->toDateTimeString(),
            ],
            [
                'name' => "Just Cause" ,
                'version' => '2020',
                'dateAdded' => '2020-12-12',
                'created_at'=> Carbon::now()->toDateTimeString(),
                'updated_at'=> Carbon::now()->toDateTimeString(),
            ],
            [
                'name' => "Apex Legend" ,
                'version' => '2010',
                'dateAdded' => '2010-12-12',
                'created_at'=> Carbon::now()->toDateTimeString(),
                'updated_at'=> Carbon::now()->toDateTimeString(),
            ],
            [
                'name' => "Apex Legend" ,
                'version' => '2011',
                'dateAdded' => '2011-12-12',
                'created_at'=> Carbon::now()->toDateTimeString(),
                'updated_at'=> Carbon::now()->toDateTimeString(),
            ],
            [
                'name' => "Apex Legend" ,
                'version' => '2012',
                'dateAdded' => '2012-12-12',
                'created_at'=> Carbon::now()->toDateTimeString(),
                'updated_at'=> Carbon::now()->toDateTimeString(),
            ],
            [
                'name' => "Apex Legend" ,
                'version' => '2013',
                'dateAdded' => '2013-12-12',
                'created_at'=> Carbon::now()->toDateTimeString(),
                'updated_at'=> Carbon::now()->toDateTimeString(),
            ],
            [
                'name' => "Apex Legend" ,
                'version' => '2014',
                'dateAdded' => '2014-12-12',
                'created_at'=> Carbon::now()->toDateTimeString(),
                'updated_at'=> Carbon::now()->toDateTimeString(),
            ],
            [
                'name' => "Apex Legend" ,
                'version' => '2015',
                'dateAdded' => '2015-12-12',
                'created_at'=> Carbon::now()->toDateTimeString(),
                'updated_at'=> Carbon::now()->toDateTimeString(),
            ],
            [
                'name' => "Apex Legend" ,
                'version' => '2016',
                'dateAdded' => '2016-12-12',
                'created_at'=> Carbon::now()->toDateTimeString(),
                'updated_at'=> Carbon::now()->toDateTimeString(),
            ],
            [
                'name' => "Apex Legend" ,
                'version' => '2017',
                'dateAdded' => '2017-12-12',
                'created_at'=> Carbon::now()->toDateTimeString(),
                'updated_at'=> Carbon::now()->toDateTimeString(),
            ],
            [
                'name' => "Apex Legend" ,
                'version' => '2018',
                'dateAdded' => '2018-12-12',
                'created_at'=> Carbon::now()->toDateTimeString(),
                'updated_at'=> Carbon::now()->toDateTimeString(),
            ],
            [
                'name' => "Apex Legend" ,
                'version' => '2019',
                'dateAdded' => '2019-12-12',
                'created_at'=> Carbon::now()->toDateTimeString(),
                'updated_at'=> Carbon::now()->toDateTimeString(),
            ],
            [
                'name' => "Apex Legend" ,
                'version' => '2020',
                'dateAdded' => '2020-12-12',
                'created_at'=> Carbon::now()->toDateTimeString(),
                'updated_at'=> Carbon::now()->toDateTimeString(),
            ],
        ];
        return $games;
     }

    public function run()
    {
        $games = $this->gameLists();  
        
        Game::insert($games);
    }
}
