<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    //
    public function index(Category $category)
    {
    return $category->get();
    }
    
    
    //カテゴリー表示
     public function show(Category $category)
    {
        $category = Category::find($category->id); //idが、リクエストされた$userのidと一致するuserを取得
        $posts = Post::where('category_id', $category->id) //$userによる投稿を取得
            ->orderBy('created_at', 'desc'); // 投稿作成日が新しい順に並べる
            
        return view('categories.show', [
            'category' => $category->category, // $user名をviewへ渡す
            'posts' => $posts, // $userの書いた記事をviewへ渡す
        ]);
    }
}
