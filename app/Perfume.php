<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Perfume extends Model
{
    //テストデータ
     // テーブルの関連付け
    protected $table = 'perfumes';
    // 更新可能な項目の設定
    protected $fillable = [
        'name',
        'category_id'
    ];
}
