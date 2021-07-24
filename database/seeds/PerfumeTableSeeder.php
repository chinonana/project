<?php

use Illuminate\Database\Seeder;

class PerfumeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('perfumes')->insert([
            [
            'name'=>'dior',
            'category_id'=>'1',
            ],
            [
            'name'=>'CC',
            'category_id'=>'2',
            ],
            [
            'name'=>'KK',
            'category_id'=>'3',
            ],
        ]);   
    }
}
