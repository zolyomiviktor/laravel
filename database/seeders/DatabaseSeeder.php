<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table( "perfumes")->insert([
            "name" => "Yankee Candle Afternoon Escape",
            "type" => "viaszos gyertya",
            "price" => "970",
           
        ]);
    }
}
