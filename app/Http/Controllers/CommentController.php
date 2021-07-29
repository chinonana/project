<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CommentRequest;
use App\Comment;

class CommentController extends Controller
{
    //
    public function index(Comment $comment)
    {
    return $comment->get();
    }
    
    //口コミ保存用案
    //public function store(Comment $comment,PostRequest $request)
//    {
  //      $input = $request['comment'];
    //    $comment->fill($input)->save();
      //  return redirect('/comments/' . $comment->id);
    //}
    
    //口コミ実装案2
    /**
     * バリデーション、登録データの整形など
     */
    /**
     * バリデーション、登録データの整形など
     */
    public function store(CommentRequest $request)
    {
        $savedata = [
            'post_id' => $request->post_id,
            'response' => $request->response,
        ];
 
        $comment = new Comment;
        $comment->fill($savedata)->save();
 
       return redirect()->route('show', [$savedata['post_id']])->with('commentstatus','コメントを投稿しました');
           }
    
    
    
    // public function store(Post $post, PostRequest $request)
    // {
    //     $input = $request['post'];
    //     $post->fill($input)->save();
    //     return redirect('/posts/' . $post->id);
   //表示するときのリダイレクト
   //turn redirect()
          // ->action('PostsController@show', $post->id);
 
   
   
}
