<?php

namespace Database\Factories;

use App\Models\Game_Genre;
use App\Models\Game;
use App\Models\Genre;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\Factory;
//use Faker\Generator as Faker;

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
        $game_id=$game->random(1);
        

        $genre = Genre::all()->random()->pluck('id');
        $genre_id=$genre->random(1);


        $game_genre = new Game_Genre;
        $game_genre->game_id = $game_id[0];
        $game_genre->genre_id = $genre_id[0];

        $game_genre->save();


        /*
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('game_genre')->insertGetId(array(
            'game_id'=>$game_id,
            'genre_id'=>$genre_id
        ));
        //DB::insert('insert into game_genre (game_id, genre_id) values (?, ?)', [(int)$game_id, (int)$genre_id]);
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');*/
       /* DB::table('game_genre')->insert([
            'game_id' => $game_id,
            'genre_id' => $genre_id,
        ]);*/
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
