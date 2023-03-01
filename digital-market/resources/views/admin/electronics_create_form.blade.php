@extends('admin.form_master')
@section('title')
    Add Electronic
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
                    <form action="/admin/dashboard/electronics/addproduct" method="post">
                        @csrf
                        <div class="form-group icon_parent">
                            <label for="name">Product Name</label>
                            <input id="name" type="text" class="form-control" name="name" required>
                        </div>
                        <div class="form-group icon_parent">
                            <label for="description">Description</label>
                            <input id="description" type="text" class="form-control" name="description" required>
                        </div>
                        {{-- <div>
                            <label for="picture">Picture URL</label>
                            <input id="picture" type="text" class="form-control" name="picture">
                        </div> --}}
                        <div class="form-group icon_parent">
                            <label for="price">Price</label>
                            <input id="price" type="text" class="form-control" name="price" required>
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
