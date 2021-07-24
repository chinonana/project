<?php

use Illuminate\Database\Seeder;

class CommentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('categories')->insrt([
            [
            'response'=>'good',
            'post_id'=>'1',
            ],
            [
            'response'=>'bad',
            'post_id'=>'2',
            ],
            [
            'response'=>'great',
            'post_id'=>'3',
            ],
        ]);  
    }
}
