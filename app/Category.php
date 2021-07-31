<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
   // protected $table = 'category';
    // 更新可能な項目の設定
    protected $fillable = [
        'category',
    ];
    
    // public function getLists()
    // {
    //     $categories = Category::pluck('category', 'id');

    //     return $categories;
    // }
    
    
    //リレーション設定
    public function posts()
    {
        // カテゴリは複数のポストを持つ
        return $this->hasMany('App\Post');
    }
}  
    
