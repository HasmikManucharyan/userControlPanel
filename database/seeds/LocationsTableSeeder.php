<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LocationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('locations')->insert([[
            'location' => 'europe'
        ],
    	[
            'location' => 'asia'
        ],
    	[
            'location' => 'america'
        ],
        [
            'location' => 'africa'
        ],
        [
            'location' => 'australia'
        ],]);
    }
}
