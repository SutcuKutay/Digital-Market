<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Jewelry;
use App\Models\Product;

class JewelryController extends Controller
{
    public function show()
    {
        return view('user.jewelry');
    }

    public function list()
    {
        // $products = Jewelry::query()->get();
        $products = Category::find(3)->products;
        return view('admin.admin_jewelry', compact('products'));
    }

    public function form()
    {
        return view('admin.jewelry_create_form');
    }

    public function create()
    {
        // Jewelry::query()->insert([
        //     'name' => request()->name,
        //     'description' => request()->description,
        //     'price' => request()->price,
        // ]);
        Product::create([
            'category_id' => 3,
            'name' => request()->name,
            'description' => request()->description,
            'price' => request()->price,
        ]);
        return redirect('/admin/dashboard/jewelry')->with('success', 'Product added!');
    }
}