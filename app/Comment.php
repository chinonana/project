<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //リレーション設定
    public function post()
    {
        // コメントは1つの投稿に所属する
        return $this->belongsTo('App\Post');
    }
    
    
    // テーブルの関連付け
    protected $table = 'comments';
    // 更新可能な項目の設定
    protected $fillable = [
        'comment',
        'post_id',
    ];
}
