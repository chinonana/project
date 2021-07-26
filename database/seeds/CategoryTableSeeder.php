<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    //テストデータ
    public function run()
    {
        DB::table('categories')->insert([
            [
            'category'=>'花',
            ],
            [
            'category'=>'植物',
            ],
            [
            'category'=>'動物',
            ],
            [
            'category'=>'人工',
            ],
        ]);
    }
}
