<?php

namespace Database\Seeders;

use JeroenZwart\CsvSeeder\CsvSeeder;
use Illuminate\Support\Facades\DB;
use App\Models\Company;



class PlatformsSeeder extends CsvSeeder 
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function __construct()
	{
		$this->table = 'platforms';
		$this->csv_delimiter = ';';
		$this->filename = base_path().'/database/seeders/csvs/platforms.csv';
		$this->parsers = ['company_id' => function ($value){return Company::searchId($value);}];
}
    public function run()
    {
        //
    	DB::disableQueryLog();
    	DB::statement('SET FOREIGN_KEY_CHECKS=0;');
		// Uncomment the below to wipe the table clean before populating
		DB::table($this->table)->truncate();
		DB::statement('SET FOREIGN_KEY_CHECKS=1;');

		parent::run();
    }
}