@extends('admin.form_master')
@section('title')
    Add Product
@endsection
@section('css')
<link rel="stylesheet" href="{{asset('css/category_selector.css')}}">
@endsection
@section('form')
    <div class="wrapper">
        <!-- contnet wrapper -->
        <div class="content_wrapper">
            <!-- page content -->
            <div class="login_page center_container">
                <div class="center_content">
                    <div class="logo">
                        <img src="{{ asset('images/logo.png') }}" alt="" class="img-fluid" width="200" height="100">
                    </div>
                    <div>
                        <p>In which category you want to add your product?</p>
                    </div>
                    <div class="categories-div">
                        <ul>
                            @foreach($categories as $category)
                                <li>
                                    @if($category->id == 1)
                                    <a href="/admin/dashboard/electronics/addproduct">Electronic</a>
                                    @endif
                                    @if($category->id == 2)
                                    <a href="/admin/dashboard/fashion/addproduct">Fashion</a>
                                    @endif
                                    @if($category->id == 3)
                                    <a href="/admin/dashboard/jewelry/addproduct">Jewelry</a>
                                    @endif
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
