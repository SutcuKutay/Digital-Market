<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Electronic;
use App\Models\Product;
use Illuminate\Http\Request;

class ElectronicController extends Controller
{
    public function show()
    {
        return view('user.electronics');
    }

    public function list()
    {
        // $products = Electronic::query()->get();
        $products = Category::find(1)->products;
        return view('admin.admin_electronics', compact('products'));
    }

    public function form()
    {
        return view('admin.electronics_create_form');
    }

    public function create()
    {
        // Electronic::query()->insert([
        //     'name' => request()->name,
        //     'description' => request()->description,
        //     'price' => request()->price,
        // ]);
        Product::create([
            'category_id' => 1,
            'name' => request()->name,
            'description' => request()->description,
            'price' => request()->price,
        ]);
        return redirect('/admin/dashboard/electronics')->with('success', 'Product added!');
    }
}