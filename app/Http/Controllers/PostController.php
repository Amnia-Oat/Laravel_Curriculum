<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(Post $post)
    {
        // postsという変数に$postの全データget()を取得
        // view側へデータを渡す
        return view('index')->with(['posts'=>$post->get()]);
    }
}

?>