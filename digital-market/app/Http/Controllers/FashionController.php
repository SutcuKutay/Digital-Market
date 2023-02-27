<?php

namespace App\Http\Controllers;

use App\Models\Fashion;
use Illuminate\Http\Request;

class FashionController extends Controller
{
    public function show()
    {
        return view('user.fashion');
    }

    public function list()
    {
        $products = Fashion::query()->get();
        return view('admin.admin_fashion', compact('products'));
    }

    public function form()
    {
        return view('admin.fashion_create_form');
    }

    public function create()
    {
        Fashion::query()->insert([
            'name' => request()->name,
            'description' => request()->description,
            'price' => request()->price,
        ]);
        return redirect('/admin/dashboard/fashion')->with('success', 'Product added!');
    }
}