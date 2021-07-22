<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function show(Request $request, $id)
{
    $post = Post::findOrFail($id);
 
    return view('posts.show', [
        'post' => $post,
    ]);

}
}