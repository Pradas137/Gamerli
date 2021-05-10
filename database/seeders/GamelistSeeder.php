<?php

namespace Database\Seeders;

use Flynsarmy\CsvSeeder\CsvSeeder;
use Illuminate\Support\Facades\DB;

class GamelistSeeder extends CsvSeeder 
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function __construct()
	{
		$this->table = 'gamelists';
		$this->csv_delimiter = ',';
		$this->filename = base_path().'/database/seeders/csvs/gamelists.csv';
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
