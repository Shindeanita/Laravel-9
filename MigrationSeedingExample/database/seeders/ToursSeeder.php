<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ToursSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for($i=1;$i<=100;$i++){
            DB::table('tours')->insert([
                'tour_name'=>Str::random(10),
                'tour_des'=>Str::random(10)
            ]);
        }
        
    }
}
