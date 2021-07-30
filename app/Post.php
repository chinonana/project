<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

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
    //お気に入りセット
    public function user() 
    {
        //ひとつの投稿は、ひとりのユーザーに紐づく
        return $this->belongsTo('App\User');
    }
 
    public function like() 
    {
        //ひとつの投稿は、たくさんの「いいね」を獲得する可能性がある
        return $this->hasMany('App\Like');
        //return $this->hasMany(Like::class, 'post_id');
    }
    
    /**
  * リプライにLIKEを付いているかの判定
  *
  * @return bool true:Likeがついてる false:Likeがついてない
  */
  public function is_liked_by_auth_user()
  {
    $id = Auth::id();

    $likers = array();
    foreach($this->likes as $like) {
      array_push($likers, $like->user_id);
    }

    if (in_array($id, $likers)) {
      return true;
    } else {
      return false;
    }
  }
    

}
