<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function singlePost($id){
        $post = Post::findOrFail($id);
        $posts = Post::all();
        $categories = Category::all();
        if ($post) {
            // return response()->json($post);
            // dd($post);
            return view('frontend.pages.single-post', ['post'=> $post, 'posts'=>$posts, 'categories'=>$categories]);
        }
    }
}
