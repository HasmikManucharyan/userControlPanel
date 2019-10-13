<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AgegroupsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('age_groups')->insert([[
            'ageGroup' => 'under 18'
        ],
    	[
            'ageGroup' => '18-25'
        ],
    	[
            'ageGroup' => '25-40'
        ],
        [
            'ageGroup' => '40+'
        ],]);
    }
}
