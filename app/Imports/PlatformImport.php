<?php

namespace App\Imports;

use App\Models\Platform;
use Illuminate\Support\Facades\Log;
use App\Models\Company;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithCustomCsvSettings;


class PlatformImport implements ToModel, WithHeadingRow, WithCustomCsvSettings
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        Log::debug(implode("|",$row));
        $company = Company::where('name','like','%'.$row["company_name"].'%')->first();

        return new Platform([
            //
            'name'=> $row["name"],
            'company_id'=> $company->id,
        ]);

    }


    public function getCsvSettings(): array
    {
        return [
            'delimiter' => ";"
        ];
    }
}
