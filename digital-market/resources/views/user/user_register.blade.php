<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Digital Market | User Register Page</title>
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
        <form method="POST" action="/user/register">
            @csrf
            <div class="form-group">
                <label for="name">Username</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
                @error('name')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
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
            <button type="submit" class="btn btn-primary">Register</button>
        </form>
        {{-- <form method="POST" action="/user/register">
            @csrf
            <div>
                <label for="name">Username</label>
                <input id="name" type="text" name="name" placeholder="Username" value="{{ old('name') }}"
                    required>
                @error('name')
                    <p>{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="email">E-mail</label>
                <input id="email" type="email" name="email" placeholder="E-Mail" value="{{ old('email') }}"
                    required>
                @error('email')
                    <p>{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="password">Password</label>
                <input id="password" type="password" name="password" placeholder="Password" required>
                @error('password')
                    <p>{{ $message }}</p>
                @enderror
            </div>
            <div>
                <button type="Submit">
                    Sign up!
                </button>
            </div>
        </form> --}}
    </div>
    <script src="{{ asset('panel/assets/js/bootstrap.min.js') }}"></script>
</body>

</html>
