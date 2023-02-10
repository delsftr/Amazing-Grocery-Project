@extends('template.template')

@section('content')
<div class="flex">
    <div class="img-detail">
        <img src="{{ asset('image/'.$data->display_picture_link) }}" width="150" alt="" srcset="">
    </div><br>
    <div class="profile-detail">
        @if($errors->any())
            <div class="alert">
                <ul class="">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('profile.update') }}" method="post" enctype="multipart/form-data">
        @csrf
        <table>
            <tr>
                <td style="width: 90px">First Name:</td>
                <td style="padding-right: 40px"><input type="text" name="first_name" value="{{ $data->first_name }}" placeholder="First"></td>
                <td>Last Name:</td>
                <td><input type="text" value="{{ $data->last_name }}" placeholder="Last" name="last_name"></td>
            </tr>
            <tr>
                <td>Email:</td>
                <td style="padding-right: 40px"><input type="text" value="{{ $data->email }}" name="email" placeholder="Email"></td>
                <td>Role:</td>
                <td><input type="text" value="{{ $data->role_name }}" readonly></td>
            </tr>
            <tr>
                <td>Gender:</td>
                <td style="padding-right: 40px"><input type="radio" name="gender_id" value="1" {{ $data->gender_id == '1' ? 'checked' : '' }}>Male <input type="radio" name="gender_id" value="2" {{ $data->gender_id == 2 ? 'checked' : '' }}>Female </td>
                <td style="width: 90px">Display Picture:</td>
                <td><input type="file" name="display_picture" placeholder="Last"></td>
            </tr>
            <tr>
                <td>Password:</td>
                <td style="padding-right: 40px"><input type="password" name="password" placeholder="Password"></td>
                <td style="width: 180px">Confirm Password:</td>
                <td><input type="password" name="password_confirmation" placeholder="Password Confirmation"></td>
            </tr>
            <tr>
                <td colspan="4" style="text-align: center;padding-top:30px"><button type="submit" class="btn btn-primary">Save</button></td>
            </tr>
        </table>
        </form>
    </div>
</div>
@endsection