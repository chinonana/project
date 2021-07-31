<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;
use App\User;
use App\Like;
use App\Comment;
//use App\Http\Controllers\Auth;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\PostRequest;

class PostController extends Controller
{
    

    
        //カテゴリサイト表示
      //index表示
    public function index(Post $post)
    {
    $posts=Post::with('category')->get();
    return view('index')->with(['posts' => $posts]);
    //$post->getPaginateByLimit()＝ポストテーブルの中身
    //'posts' =>＄ポストにポスつという名前にする
    }    
        
    //kennsaku
     /*==================================
    検索フォームのみ表示(show)
    ==================================*/
    // public function index(Request $request)
    // {
    //     //フォームを機能させるために各情報を取得し、viewに返す
    //     $category = new Category;
    //     $categories = $category->getLists();
    //     $categoryId = $request->input('categoryId');

    //     return view('index', [
    //         'categories' => $categories,
    //         'categoryId' => $categoryId
    //     ]);
    // }
    
    //  /*==================================
    // 検索メソッド(searchproduct)
    // ==================================*/
    // public function search(Request $request)
    // {
    //     //入力される値nameの中身を定義する
    //     $categoryId = $request->input('categoryId'); //カテゴリの値
    //     //カテゴリが選択された場合、m_categoriesテーブルからcategory_idが一致する商品を$queryに代入
    //     if (isset($categoryId)) {
    //         $query->where('category_id', $categoryId);
    //     }

    //     //$queryをcategory_idの昇順に並び替えて$productsに代入
    //     $posts = $query->orderBy('category_id', 'asc');

    //     //m_categoriesテーブルからgetLists();関数でcategory_nameとidを取得する
    //     $category = new Category;
    //     $categories = $category->getLists();

    //     return view('searchproduct', [
    //         'posts' => $posts,
    //         'categories' => $categories,
    //         'categoryId' => $categoryId
    //     ]);
    // }
    
    
    // //header表示
    // //flowerpage
    // public function flower(Post $post)
    // {
    // $posts=Post::with('category')->get();
    // return view('flower')->with(['posts' => $posts]);
    // }
    // //plant
    // public function plant(Post $post)
    // {
    // $posts=Post::with('category')->get();
    // return view('plant')->with(['posts' => $posts]);
    // }
    // //animal
    // public function animal(Post $post)
    // {
    // $posts=Post::with('category')->get();
    // return view('animal')->with(['posts' => $posts]);
    // }
    // //human
    // public function human(Post $post)
    // {
    // $posts=Post::with('category')->get();
    // return view('human')->with(['posts' => $posts]);
    // }
    //create.blade記事投稿
    public function create(Category $category)
    {
    //カテゴリーの情報をカテゴリーズから持ってくる
    return view('create')->with(['categories'=>$category->get()]);
    //一緒にcategoriesのデータも渡すwithで
    }
    
    
    //個別ページ表示
    public function show(Post $post)
    {
    return view('show')->with(['post' => $post]);
    }
    
    

    
    //投稿保存用->create
    public function store(Post $post, PostRequest $request)
    {
        $input = $request['post'];
        $post->fill($input)->save();
        return redirect('/posts/' . $post->id);
    }
   
    
    
    
    //修正用
    public function update(PostRequest $request, Post $post)
    {
    $input_post = $request['post'];
    $post->fill($input_post)->save();

    return redirect('/posts/' . $post->id);
    }
    
    
}