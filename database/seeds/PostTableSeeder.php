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
            'body'=>'お値段以上',
            'title'=>'dior',
            'category_id'=>'1',
            ],
            [
            'body'=>'お値段以上2',
            'title'=>'CC',
            'category_id'=>'2',
            ],
            [
            'body'=>'お値段以上3',
            'title'=>'KK',
            'category_id'=>'3',
            ],
        ]);  
        
        
        
    
    }
}
