<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ElectronicController extends Controller
{
    public function show(){
        return view('user.electronics');
    }
}
