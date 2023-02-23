<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.admin_login');
    }

    public function login(Request $request)
    {
        // dd($request->all());
        // $check = $request->all();
        if(Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password])){
            return redirect()->route('admin.dashboard')->with('success', 'Logged in as an administrator.');
        }else{
            return back()->with('error', 'Email or password is not found.');
        }
    }

    public function register(){
        return view('admin.admin_register');
    }

    public function registerCreate(Request $request){
        // dd($request->all());
        Admin::insert([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'created_at' => Carbon::now(),
        ]);
        return redirect()->route('login_form')->with('success', 'Registration successful.');
    }

    public function dashboard()
    {
        return view('admin.index');
    }

    public function logout(){
        Auth::guard('admin')->logout();
        return redirect()->route('login_form')->with('success', 'Logged out successfully.');
    }
}