<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Like;

class LikeController extends Controller
{
    //
    public function index(Like $like)
    {
    return $like->get();
    }
}
