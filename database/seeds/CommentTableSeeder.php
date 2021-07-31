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
        DB::table('comments')->insert([
            [
            'comment'=>'good',
            'post_id'=>'1',
            ],
            [
            'comment'=>'bad',
            'post_id'=>'2',
            ],
            [
            'comment'=>'great',
            'post_id'=>'3',
            ],
        ]);  
    }
}
