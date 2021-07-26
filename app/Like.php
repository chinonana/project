<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    public function user() 
    {
        //「いいね」は1人のユーザーに対応
        return $this->belongsTo('App\Models\User');
    }
 
    public function post() 
    {
        //ひとつの投稿に紐づく
        return $this->belongsTo('App\Models\Post');
    }
}
