<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

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

    public function store(Request $request){

        // dd($requset->toArray());
        $post = new Post;
        $post->category_id = $request->category_id;
        $post->title = $request->title;
        $post->description = $request->description;

        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('uploads/images'), $imageName);
        $post->img = $imageName;

        $post->save();
        return redirect()->route('post.list')->with('success', 'Post Created successfully.');
    }

    public function edit($id){
        $post = Post::findOrFail($id);
        $categories = Category::all();
        // dd($post->toArray(), $categories->toArray());
        if ($post) {
            return view('admin.posts.edit', ['post'=>$post, 'categories'=>$categories]);
        }
    }

    public function update(Request $request, $id){
        $post = Post::findOrFail($id);
        // dd($request->toArray());
        $post->category_id = $request->category_id;
        $post->title = $request->title;
        $post->description = $request->description;
        if ($request->image) {
            if ($post->img) {
                $image_path = "uploads/images/".$post->img;  // Value is not URL but directory file path
                if(File::exists($image_path)) {
                    File::delete($image_path);
                }
            }

            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('uploads/images'), $imageName);
            $post->img = $imageName;
        }

        $post->save();
        return redirect()->route('post.list')->with('success', 'Post updated successfully.');
    }
}

