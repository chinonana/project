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
        factory(\App\Perfume::class, 50)->create();    
    }
}
