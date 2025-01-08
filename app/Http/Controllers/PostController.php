<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $posts = Post::with('category')->get();
        // $posts = Post::all();
        // dd($posts->toArray());
        return view('admin.posts.index', ['posts'=>$posts]);
    }

    public function create(){
        $categories = Category::all();
        return view('admin.posts.create', ['categories'=>$categories]);
    }

    public function store(Request $requset){
        // dd($requset->toArray());
        $post = new Post;
        $post->category_id = $requset->category_id;
        $post->title = $requset->title;
        $post->description = $requset->description;
        $post->save();
        return redirect()->route('post.list')->with('success', 'Post Created successfully.');
    }

    public function edit($id){
        $post = Post::findOrFail($id);
        if ($post) {
            return view('admin.posts.edit', ['post'=>$post]);
        }
    }

    public function update(Request $request, $id){
        $post = Post::findOrFail($id);
        // dd($post->toArray());
        $post->category_id = $request->category_id;
        $post->title = $request->title;
        $post->description = $request->description;
        $post->save();
        return redirect()->route('post.list')->with('success', 'Post updated successfully.');
    }
}

