<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SeasonsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $seasons = [
            ['season' => '春'],
            ['season' => '夏'],
            ['season' => '秋'],
            ['season' => '冬'],
        ];

        DB::table('seasons')->insert($seasons);
    }
}
