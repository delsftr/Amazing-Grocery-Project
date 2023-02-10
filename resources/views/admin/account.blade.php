@extends('template.template')

@section('content')
<div class="account">
    <table class="table-account" border="1" style="border-collapse: collapse">
        <thead>
            <tr>
                <th>Account</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody style="border: 1px solid black">
            @foreach ($data as $item)
            <tr>
                <td>{{ $item->first_name.' '.$item->last_name }} - {{ $item->role_name}}</td>
                <td><a href="{{ route('account.edit',$item->id) }}">Update Role</a> | <a href="{{ route('account.delete',$item->id) }}">Delete</a></td>
            </tr>
            @endforeach

        </tbody>
    </table>
</div>
@endsection
