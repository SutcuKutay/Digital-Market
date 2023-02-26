<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JewelryController extends Controller
{
    public function show(){
        return view('user.jewelry');
    }
}
