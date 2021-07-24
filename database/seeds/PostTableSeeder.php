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
        DB::table('posts')->insrt([
            [
            'discription'=>'お値段以上',
            'perfume_id'=>'1'
            ],
            [
            'discription'=>'お値段以上2',
            'perfume_id'=>'2'
            ],
            [
            'discription'=>'お値段以上3',
            'perfume_id'=>'3'
            ],
        ]);  
        
        
        
    
    }
}
