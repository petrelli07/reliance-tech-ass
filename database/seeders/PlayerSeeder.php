<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Player;

class PlayerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $player = Player::factory()->count(2000)->make();

        $chunks = $player->chunk(100);

        $chunks->each(function ($chunk) {
            Player::insert($chunk->toArray());
        });
    }
}

