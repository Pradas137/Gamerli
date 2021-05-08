<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

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
		$faker = Faker::create();
        DB::table('users')->insert([
            'name' =>  $faker->name,
            'surname' => Str::random(10),
            'role' => $faker->randomElement(['user' ,'admin', 'staff']),
            'email' => $faker->email,
            'password' => Hash::make('password'),
            'order_prefered'=> rand(0,1)

        ]);    }
}
