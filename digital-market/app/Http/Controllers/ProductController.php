<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function list(){
        $products = Product::all();
        return view('admin.all_products', compact('products'));
    }

    public function categorySelect(){
        $categories = Category::all();
        return view('admin.category_selector', compact('categories'));
    }
}
