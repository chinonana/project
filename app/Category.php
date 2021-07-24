<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'category';
    // 更新可能な項目の設定
    protected $fillable = [
        'category',
        'post_id',
    ];
    
    
    
    
    public function posts()
    {
        // カテゴリは複数のポストを持つ
        return $this->hasMany('App\Post');
    }
}  
    
