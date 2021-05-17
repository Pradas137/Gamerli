<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Game_Genre;

class Games_GenresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        Game_Genre::factory()
            ->count(103)
            ->create();
    }
}
