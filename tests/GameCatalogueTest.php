<?php

use Laravel\Lumen\Testing\DatabaseMigrations;
use Laravel\Lumen\Testing\DatabaseTransactions;

class GameCatalogue extends TestCase
{
    
    use DatabaseMigrations;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testShouldReturnAllGames()
    {
        $response = $this->call('GET', '/games/all');

        $this->assertTrue(200, $response->status());
    }

    public function testShouldReturnAllGamePlayers()
    {
        $response = $this->call('GET', '/games/players/all');

        $this->assertTrue(200, $response->status());
    }

    public function testShouldReturnAllGamesAsGroup()
    {
        $response = $this->call('GET', 'games/grouped-game-plays');

        $this->assertTrue(200, $response->status());
    }
}
