<?php

namespace Database\Seeders;

use JeroenZwart\CsvSeeder\CsvSeeder;
use Illuminate\Support\Facades\DB;

class CompaniesSeeder extends CsvSeeder 
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function __construct()
	{
        $this->file ='/database/seeders/csvs/companies.csv';
		$this->tablename = 'companies';
		$this->delimiter = ';';
	
	}

    public function run()
    {
        //
    	DB::disableQueryLog();
    	DB::statement('SET FOREIGN_KEY_CHECKS=0;');
		// Uncomment the below to wipe the table clean before populating
		DB::table($this->tablename)->truncate();
		DB::statement('SET FOREIGN_KEY_CHECKS=1;');

		parent::run();
    }
}
