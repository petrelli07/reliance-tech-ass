## Instalation Instruction

-Clone the repository from this repository : https://github.com/petrelli07/reliance-tech-ass
-Create a .env file and enter your database credentials
-Run composer install command
-Run php artisan:migrate
-Run php artisan db:seed
-Make sure php of version PHP >= 7.3 is installed locally
-Run php -S localhost:{your preferred port} -t public

## Explanation of App Logic
-The following tables were created and seeded: players,games,player-games,game-plays
-The player-games held data for the games the players has access to and the version as well
-All these are seeded and entered automatically into the database
-For game-plays, this was simulated by choosing a start date for the 3835 days of gaming and running it in a loop. a while loop was run inside the same for loop to simulate the game plays. 
-Users in the game play were chosen by their ids at random
-All these were seeded to create all the results