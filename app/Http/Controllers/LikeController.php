<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Post;
use App\Like;
use Illuminate\Support\Facades\Auth;


class LikeController extends Controller
{
    //
    public function index(Like $like)
    {
    return $like->get();
    }
    
    //お気に入り用
    public function like(Post $post, Request $request){
        $like=New Like();
        $like->post_id=$post->id;
        $like->user_id=Auth::user()->id;
        $like->save();
        return back();
    }
    
    //お気に入り解除
    public function unlike(Post $post, Request $request){
        $user=Auth::user()->id;
        $like=Like::where('post_id', $post->id)->where('user_id', $user)->first();
        $like->delete();
        return back();
    }
}
