<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Faker\Generator as Faker;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {


        $factory->define(App\User::class, function (Faker\Generator $faker) { return [
            'name' => $this->$faker->name(),
            'surname'=> $this->$faker->name(),
            'email' => $this->$faker->unique()->safeEmail(),
            'role_id' => $this->$faker->randomElement(['user' ,'admin', 'staff']),
            'password' => Hash::make('password'),
            'order_prefered'=> rand(0,1)
         
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
     
        }
    
}
