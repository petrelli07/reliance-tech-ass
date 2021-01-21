<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});


$router->get('games/players/all','PlayerController@getAllPlayersWithGames');

$router->get('games/all','PlayerController@getAllGames');

$router->get('games/game-plays','PlayerController@getGamePlayedBetween');

$router->get('games/grouped-game-plays','PlayerController@getGamesPlayedByDayWithPlayers');

$router->get('games/top','PlayerController@topPlayers');

$router->get('games/get-games-played/{player}/{year}/{month}','PlayerController@userGames');

