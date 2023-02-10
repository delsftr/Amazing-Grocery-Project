@extends('template.template')

@section('content')
<h3>User</h3>
<form action="{{ route('account.update',$data->id) }}" method="post">
@csrf
<table>
    <tr>
        <td>Role:</td>
        <td><select name="role_id" id="">
            <option value="1" {{ $data->role_id == 1 ? 'selected' : '' }}>User</option>
            <option value="2" {{ $data->role_id == 2 ? 'selected' : '' }}>Admin</option>
        </select>
        </td>
    </tr>
    <tr>
        <td colspan="2" style="text-align: center;padding-top:20px">
            <button type="submit" class="btn btn-primary">Save</button>
        </td>
    </tr>
</table>
</form>

@endsection