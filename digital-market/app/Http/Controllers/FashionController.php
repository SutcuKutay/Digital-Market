<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class FashionController extends Controller
{
    public function show()
    {
        $products = Category::find(2)->products;
        return view('user.fashion', compact('products'));
    }

    public function list()
    {
        // $products = Fashion::query()->get();
        $products = Category::find(2)->products;
        return view('admin.admin_fashion', compact('products'));
    }

    public function form()
    {
        return view('admin.fashion_create_form');
    }

    public function create(Request $request)
    {
        // Fashion::query()->insert([
        //     'name' => request()->name,
        //     'description' => request()->description,
        //     'price' => request()->price,
        // ]);
        // Product::create([
        //     'category_id' => 2,
        //     'name' => request()->name,
        //     'description' => request()->description,
        //     'price' => request()->price,
        // ]);
        $product = new Product();
        $product->category_id = 2;
        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->price = $request->input('price');
        if($request->hasFile('image')){
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('uploads/products', $filename);
            $product->image = $filename;
        }
        else{
            $product->image = 'default.png';
        }
        $product->save();
        return redirect('/admin/dashboard/fashion')->with('success', 'Product added!');
    }
}