<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="topbar">
        <h1 class="heading-topbar">Amazing E-Grocery</h1>
    </div>
    <div class="content">
        <br>
        <form action="{{ route('register.action') }}" method="post" enctype="multipart/form-data">
        @csrf
        @if($errors->any())
            <div class="alert">
                <ul class="">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                </ul>
            </div>
        @endif
        <table cellpadding="2" class="center">
            <tr>
                <td colspan="4"><h2><u>Register</u></h2></td>
            </tr>
            <tr>
                <td>First Name:</td>
                <td><input type="text" name="first_name"></td>
                <td>Last Name:</td>
                <td><input type="text" name="last_name"></td>
            </tr>
            <tr>
                <td>Email:</td>
                <td><input type="email" name="email"></td>
                <td>Role:</td>
                <td>
                    <select name="role" id="">
                        <option value="1">User</option>
                        <option value="2">Admin</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Gender:</td>
                <td><input type="radio" name="gender" value="1"> Male
                    <input type="radio" name="gender" value="2"> Female
                </td>
                <td>Display Picture:</td>
                <td><input type="file" name="picture"></td>
            </tr>
            <tr>
                <td>Password:</td>
                <td><input type="password" name="password"></td>
                <td>Confirm Password:</td>
                <td><input type="password" name="password_confirmation"></td>
            </tr>
            <tr>
                <td colspan="4" style="text-align:center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </td>
            </tr>
            <tr>
                <td colspan="4" style="text-align: center">
                    <a href="{{ route('login') }}">Already have an account? click here to log in</a>
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