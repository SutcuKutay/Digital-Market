@extends('admin.admin_master')
@section('title')
    Register Page
@endsection
@section('wrapper-classes')
    without_header_sidebar
@endsection
@section('content')
    <!-- contnet wrapper -->
    <div class="content_wrapper">
        <!-- page content -->
        <div class="registration_page center_container">
            <div class="center_content">
                <div class="logo">
                    <img src="panel/assets/images/logo.png" alt="" class="img-fluid">
                </div>
                <form action="{{ route('admin_register_create') }}" method="post">
                    @csrf
                    <div class="form-group icon_parent">
                        <label for="uname">Username</label>
                        <input id="uname" type="text" class="form-control" name="name" required
                            placeholder="Full Name">
                        <span class="icon_soon_bottom_right"><i class="fas fa-user"></i></span>
                    </div>
                    <div class="form-group icon_parent">
                        <label for="email">E-mail</label>
                        <input id="email" type="email" class="form-control" name="email" required
                            placeholder="Email Address">
                        <span class="icon_soon_bottom_right"><i class="fas fa-envelope"></i></span>
                    </div>
                    <div class="form-group icon_parent">
                        <label for="password">Password</label>
                        <input id="password" type="password" class="form-control" name="password" required
                            placeholder="Password">
                        <span class="icon_soon_bottom_right"><i class="fas fa-unlock"></i></span>
                    </div>
                    <div class="form-group icon_parent">
                        <label for="rtpassword">Re-type Password</label>
                        <input id="rtpassword" type="password" class="form-control" name="password_confirmation" required
                            placeholder="Confirm Password">
                        <span class="icon_soon_bottom_right"><i class="fas fa-unlock"></i></span>
                    </div>
                    <div class="form-group">
                        <a class="registration" href="{{ route('login_form') }}">Already have an account</a><br>
                        <button type="submit" class="btn btn-blue">Signup</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--/ content wrapper -->
@endsection
