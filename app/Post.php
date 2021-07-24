<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // テストデータ用テーブルの関連付け
    protected $table = 'posts';
    // 更新可能な項目の設定
    protected $fillable = [
    'discription',
    ];
    
    
    
    
    
    
    
    //ページネーション
    public function getPaginateByLimit(int $limit_count = 10)
    {
    // updated_atで降順に並べたあと、limitで件数制限をかける
    return $this->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
}
