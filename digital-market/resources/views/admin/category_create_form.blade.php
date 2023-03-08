@extends('admin.form_master')
@section('title')
    Add Category
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
                    <form action="/admin/dashboard/addcategory" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group icon_parent">
                            <label for="name">Category Name</label>
                            <input id="name" type="text" class="form-control" name="name" required>
                        </div>
                        <div class="form-group icon_parent">
                            <label for="image">Image</label>
                            <input id="image" type="file" class="form-control" name="image">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-blue">Create</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
