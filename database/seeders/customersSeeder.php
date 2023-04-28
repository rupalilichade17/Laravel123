<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Str;

class customersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
         DB::table('customers')->insert([
            'id'=>int::random(10),
            'c_name'=>Str::random(10),
            'c_product'=>Str::random(10),
            'c_city'=>Str::random(10),

        ]);
    }
}
