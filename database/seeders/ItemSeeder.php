<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $i = 0;
        while ($i < 10){
            DB::table('t_item')->insert([
                'text' => Str::random(10),
                'description' => Str::random(10)
            ]);
            $i++;
        }

    }
}
