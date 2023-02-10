<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-Grocery</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="topbar">
        <h1 class="heading-topbar">Amazing E-Grocery</h1>
        @if (Auth::user())
        <h3 class="menu-topbar"><a href="{{ route('logout') }}" class="btn btn-primary">Logout</a></h3>
        @else 
        <h3 class="menu-topbar"><a href="{{ route('login') }}" class="btn btn-primary">Login</a> | <a href="{{ route('register') }}" class="btn btn-primary">Register</a></h3>
        @endif
    </div>
    @if(Auth::user())
    <div class="topbar-menu">
        <div class="topbar-menu-button">
            <a href="{{ route('home') }}" class="menu-button-topbar">Home</a>
            <a href="{{ route('cart') }}" class="menu-button-topbar">Cart</a>
            <a href="{{ route('profile') }}" class="menu-button-topbar">Profile</a>
            @if(Auth::user()->role_id == 2)
            <a href="{{ route('account') }}" class="menu-button-topbar">Account Maintenance</a>
            @endif
        </div>
    </div>
    @endif
    <div class="content">
        @yield('content')
    </div>
    <footer>
        <p class="heading-footer" style="text-align: center">Amazing E-Grocery 2023</p>
    </footer>
</body>
</html>