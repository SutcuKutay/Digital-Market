@extends('admin.admin_master')
@section('title')
    Login Page
@endsection
@section('wrapper-classes')
    without_header_sidebar
@endsection
@section('content')
    <!-- contnet wrapper -->
    <div class="content_wrapper">
        <!-- page content -->
        <div class="login_page center_container">
            <div class="center_content">
                <div class="logo">
                    <img src="{{ asset('panel/assets/images/logo.png') }}" alt="" class="img-fluid">
                </div>
                @if (Session::has('error'))
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <strong>{{Session::get('error')}} </strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
                @if (Session::has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>{{Session::get('success')}} </strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @endif
                <form action="{{route('admin.login')}}" class="d-block" method="post">
                @csrf
                    <div class="form-group icon_parent">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" placeholder="Email Address">
                        <span class="icon_soon_bottom_right"><i class="fas fa-envelope"></i></span>

                    </div>
                    <div class="form-group icon_parent">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Password">

                        <span class="icon_soon_bottom_right"><i class="fas fa-unlock"></i></span>
                    </div>
                    <div class="form-group">
                        <label class="chech_container">Remember me
                            <input type="checkbox" name="remember" id="remember">
                            <span class="checkmark"></span>
                        </label>
                    </div>
                    <div class="form-group">
                        <a class="registration" href="{{route('admin.register')}}">Create new account</a><br>
                        <a href=" " class="text-white">I forgot my password</a>
                        <button type="submit" class="btn btn-blue">Login</button>
                    </div>
                </form>
                <div class="footer">
                    <p>Copyright &copy; 2020 <a href="https://easylearningbd.com/">easy Learning</a>. All rights
                        reserved.</p>
                </div>

            </div>
        </div>
    </div>
    <!--/ content wrapper -->
@endsection
