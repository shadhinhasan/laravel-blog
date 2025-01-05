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
        return redirect('/admin/categories')->with('success','Category Added Successfully');
    }

    public function delete ($id){
        // $category = Category::find($id);
        $category = Category::findOrFail($id);
        // dd($category->toArray());
        if ($category) {
            $category->delete();
        }
        return redirect('/admin/categories')->with('success','Category Delete Successfully');
    }

    public function edit($id){
        $category = Category::findOrFail($id);
        // dd($category);
        if ($category) {
            return view('admin.categories.edit', ['category'=>$category]);
        }
    }

    // public function update(Request $requset){
    //     // dd("category.update");
        
    // }

    public function update(Request $request, $id)
    {
    //   $request->validate([
    //     'title' => 'required|max:255',
    //     'body' => 'required',
    //   ]);
      $category = Category::findOrFail($id);
    //   $category->update($request->all());
        $category->name = $request->name;
        $category->save();
      return redirect()->route('category.list')->with('success', 'Category updated successfully.');
    }
}
