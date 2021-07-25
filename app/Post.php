<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // テストデータ用テーブルの関連付け
    protected $table = 'posts';
    // 更新可能な項目の設定
    protected $fillable = [
    'body',
    'title',
    'category_id',
    ];
    
    //ページネーション
    public function getPaginateByLimit(int $limit_count = 10)
    {
    // updated_atで降順に並べたあと、limitで件数制限をかける
    return $this->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
    
    
    //リレーション
    public function comments()
    {
        // 投稿は複数のコメントを持つ(1対多)
        return $this->hasMany('App\Comment');
    }
 
    public function category()
    {
        // 投稿は1つのカテゴリーに属する（多対1）
        return $this->belongsTo('App\Category');
    }
}
