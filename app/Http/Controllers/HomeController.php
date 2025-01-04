<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    // public function index(){
    //     // dd("hello");
    //     return view("home");
    // }
    public function home(){
        // dd("hello");
        $posts = Post::all();
        // return response()->json($posts);
        return view("home",['posts'=> $posts ]);
    }
    
    public function about(){
        return view("about");
    }

    public function shadhin(){
        return view("shadhin");
    }

    public function aboutUs(){
        return view("about-us");
    }

    public function blogEntries(){
        return view("/blog-entries");
    }

    public function postDetails(){
        return view("/post-details");
    }

    public function contactUs(){
        return view("/contact-us");
    }

}
