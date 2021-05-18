<?php

namespace App\Imports;

use App\Models\Game;
use Maatwebsite\Excel\Concerns\ToModel;
use App\Models\Genre;
use App\Models\Game_Genre;
use Illuminate\Support\Facades\Log;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithCustomCsvSettings;

class Game_GenreImport implements ToModel, WithHeadingRow, WithCustomCsvSettings
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        Log::debug(implode("|",$row));
        $game = Game::where('name','like','%'.$row["game_name"].'%')->first();
        $genre = Genre::where('name','like','%'.$row["genre_name"].'%')->first();

        return new Game_Genre([
            //
            'game_id'=> $game->id,
            'genre_id'=> $genre->id,
            ////
            
        ]);

    }


    public function getCsvSettings(): array
    {
        return [
            'delimiter' => ";"
        ];
    }
}
