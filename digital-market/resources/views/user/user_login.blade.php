<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Digital Market | User Login Page</title>
    <meta name="title" content="User Register Page">
    <meta name="description" content="User registration page.">
    <meta name="author" content="Kutay Sütçü">
    <link rel="stylesheet" href="{{ asset('panel/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/user_auth.css') }}">
</head>

<body>
    <div class="logo-div">
        <img src="{{asset('images/logo.png')}}" alt="" width="400" height="70">
    </div>
    <div class="form-div">
        <form method="POST" action="/user/login">
            @csrf
            <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}">
                @error('email')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password">
                @error('password')
                    <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
    </div>
    <script src="{{ asset('panel/assets/js/bootstrap.min.js') }}"></script>
</body>

</html>
