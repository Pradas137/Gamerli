<?php

namespace App\Imports;

use App\Models\Game;
use Maatwebsite\Excel\Concerns\ToModel;
use App\Models\Platform;
use Illuminate\Support\Facades\Log;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithCustomCsvSettings;

class GameImport implements ToModel, WithHeadingRow, WithCustomCsvSettings
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        Log::debug(implode("|",$row));
        $platform = Platform::where('name','like','%'.$row["platform_name"].'%')->first();

        return new Game([
            //
            'name'=> $row["name"],
            'developer'=> $row["developer"],
            'director'=> $row["director"],
            'publisher'=> $row["publisher"],
            'date'=> $row["date"],
            'pegi'=> $row["pegi"],
            'summary'=> $row["summary"],
            'page_reference'=> $row["page_reference"],
            'image'=> $row["image"],
            'validate'=> $row["validate"],
            'saga'=> $row["saga"],
            'platform_id'=> $platform->id,
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

