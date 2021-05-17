<?php

namespace Database\Factories;

use App\Models\Game_Genre;
use App\Models\Game;
use App\Models\Genre;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

class Game_GenreFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Game_Genre::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
       /* $game = Game::all();
        $genre = Genre::all()
*/
//$factory->define(Game_Genre::class, function (Faker $faker) {     
        
        //return [

        $game = Game::all()->random()->pluck('id');
        $game_id=explode(',', $game->random(1);

        $genre = Genre::all()->random()->pluck('id');
        $genre_id=explode(',', $genre->random(1);

        DB::table('game_genre')->insert(['game_id' => $game_id,'genre_id' => $genre_id]
);
           /* $game_genre = Game_Genre::factory()  
            ->count(103)
            ->hasAttached($game)
            ->create();*/
            //
         
    /*Game_Genre::factory()
            ->count(3)
            ->hasAttached($roles, ['active' => true])
            ->create();*/
        //];
   // });
   // }
}
}
