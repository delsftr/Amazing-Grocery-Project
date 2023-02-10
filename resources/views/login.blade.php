<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <div class="topbar">
        <h1 class="heading-topbar">Amazing E-Grocery</h1>
    </div>
    <div class="content">
        <h2><u>Login</u></h2>
        <br>
        <form action="{{ route('login.action') }}" method="post">
            @csrf
            <table cellpadding="2">
                <tr>
                    <td>Email Address:</td>
                    <td><input type="text" name="email"></td>
                </tr>
                <tr>
                    <td>Password:</td>
                    <td><input type="password" name="password" id=""></td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align:center">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align: center">
                        <a href="{{ route('register') }}">Don't have an account? click here to sign up</a>
                    </td>
                </tr>
            </table>
        </form>
    </div>
    <footer>
        <p class="heading-footer" style="text-align: center">Amazing E-Grocery 2023</p>
    </footer>
</body>

</html>
