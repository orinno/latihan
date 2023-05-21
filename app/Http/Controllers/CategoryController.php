<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        $categories = Category::all();

        return view('category.index', compact('categories'));
    }

    public function store(Request $request){
        Category::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name)
        ]);
        return redirect()->back();
    }

    public function update(Request $request, $id){
        $category = Category::find($id);
        $category->update([
            'name' => $request->name,
            'slug' => Str::slug($request->name)
        ]);
        return redirect()->back();
    }

    public function destroy($id){
        $category = Category::find($id);
        $category->delete();
        return redirect()->back();
    }
}
