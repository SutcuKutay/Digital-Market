<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function homePage(){
        $electronics = Category::find(1)->products;
        $fashions = Category::find(2)->products;
        $jewelries = Category::find(3)->products;
        return view('home_page', compact('electronics', 'fashions', 'jewelries'));
    }
}
