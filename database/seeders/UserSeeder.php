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
        //
        $users = Gamelist::all()->pluck('id')->toArray();
        $gamelist = randomElement($users);
		$faker = Faker::create();

        DB::table('users')->insert([
            'name' =>  $faker->name,

            'surname' => Str::random(10),
            'role' => $faker->randomElement(['user' ,'admin', 'staff']),
            'email' => $faker->email,
            'password' => Hash::make('password'),
            'order_prefered'=> rand(0,1),
            'gamelist_id'=> $gamelist,


            }
}
