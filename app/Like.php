<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{ 
      // 配列内の要素を書き込み可能にする
    protected $fillable = ['post_id','user_id'];
    
    public function post()
  {
    return $this->belongsTo(Post::class);
  }

  public function user()
  {
    return $this->belongsTo(User::class);
  }
    
    
    
    
    // public function user() 
    // {
    //     //「いいね」は1人のユーザーに対応
    //     return $this->belongsTo('App\Models\User');
    // }
 
    // public function post() 
    // {
    //     //ひとつの投稿に紐づく
    //     return $this->belongsTo('App\Models\Post');
    // }
}
