<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view('admin.admin_login');
    }

    public function login(){
        return view();
    }

    public function dashboard(){
        return view('admin.index');
    }
}
