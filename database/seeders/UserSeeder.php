<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Faker\Generator as Faker;
use App\Models\User;
use App\Models\Gamelist;
use Database\Seeder\GamelistSeeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //Game::where('name','like','%','Assassin)
        //$platform = Platform::where('name','like','%'.$row["platform_name"].'%')->first();
		$faker = Faker::create();
       // $gamelist = Gamelist::create(['name'=>'favoritos','user_id'=>$user->id]);

        $user = User::create([
            'name' => $faker->name,
            'surname' => Str::random(10),
            'email' => $faker->email,
            'role' => $faker->randomElement(['user' ,'admin', 'staff']),
            'password' => Hash::make('password'),
            'order_prefered'=> rand(0,1),
        ]);


        $gamelist = Gamelist::create([
            'name'=>'Favoritos',
            'user_id'=>$user->id,
        ]);

            }
}
