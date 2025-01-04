<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index (){
        $categories = Category::all();
        return view('admin.categories.index', ['categories'=>$categories]);
    }

    public function create (){
        return view('admin.categories.create');
    }

    public function store (Request $requset){
        $category = new Category;
        $category->name = $requset->name;
        // $category->name = $requset->input('name');
        $category->save();
        return redirect('/admin/categories')->with('status','Category Added Successfully');
    }

    public function delete ($id){
        // $category = Category::find($id);
        $category = Category::findOrFail($id);
        // dd($category->toArray());
        if ($category) {
            $category->delete();
        }
        return redirect('/admin/categories')->with('status','Category Delete Successfully');
    }
}
