<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::paginate(20);
        return view('posts.index', [
        'posts'=>$posts
    ]);
    }
    public function store(Request $request)
    {
        $this->validate($request,[
            'title'=>'required',
            'body'=>'required',
        ]);
        $request->user()->posts()->create([
            'title' => $request->title,
            'body'=> $request->body,
        ]);

        return back();
    }
}
