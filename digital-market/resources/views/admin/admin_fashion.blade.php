@extends('admin.admin_master')
@section('title')
    Fashion
@endsection
@section('css')
    <link rel="stylesheet" href="{{ asset('css/admin_product.css') }}">
@endsection
@section('content')
    <!-- table area -->
    <section class="table_area">
        @if (Session::has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>{{ Session::get('success') }} </strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        <div class="panel">
            <div class="panel_header">
                <div class="panel_title">
                    <span>Product List</span>
                </div>
            </div>
            <div class="panel_body">
                <div class="table-responsive">
                    <table class="table table-bordered" style="overflow-y: scroll">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Price</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                                <tr>
                                    <td>{{ $product->id }}</td>
                                    <td>{{ $product->name }}</td>
                                    <td>{{ $product->description }}</td>
                                    <td>{{ $product->price }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div> <!-- /table -->
        <div class="add-button-div">
            <a class="add-button" href="/admin/dashboard/fashion/addproduct">New Product</a>
        </div>
    @endsection
