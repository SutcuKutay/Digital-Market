<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function form(){
        return view('admin.category_create_form');
    }

    public function create(Request $request){
        $category = new Category();
        if($request->hasFile('image')){
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('uploads/category', $filename);
            $category->image = $filename;
        }
        $category->name = $request->input('name');
        $category->save();
        return redirect()->route('admin.dashboard')->with('success', 'New Category Created!');
    }
}
