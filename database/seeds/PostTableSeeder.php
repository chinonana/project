<?php

use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('posts')->insert([
            [
            'discription'=>'お値段以上',
            'perfume'=>'dior',
            'category_id'=>'1',
            ],
            [
            'discription'=>'お値段以上2',
            'perfume'=>'CC',
            'category_id'=>'2',
            ],
            [
            'discription'=>'お値段以上3',
            'perfume'=>'KK',
            'category_id'=>'3',
            ],
        ]);  
        
        
        
    
    }
}
