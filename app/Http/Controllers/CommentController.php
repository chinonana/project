<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CommentRequest;
use App\Comment;
use App\Post;


class CommentController extends Controller
{
    //
    public function index(Comment $comment)
    {
    return $comment->get();
    }
    
   
    public function store(CommentRequest $request)
    {
        $savedata = [
            'post_id' => $request->post_id,
            'comment' => $request->comment,
        ];
 
        $comment = new Comment;
        $comment->fill($savedata)->save();
 
        return redirect()->route('show', [$savedata['post_id']])->with('commentstatus','コメントを投稿しました');
    }


 

   
}
