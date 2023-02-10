<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AccountController extends Controller
{
    public function index()
    {
        $data = User::join('roles','roles.id','=','users.role_id')
        ->select('users.*','roles.role_name')
        ->get();
        return view('admin.account',compact('data'));
    }

    public function edit($id)
    {
        $data = User::find($id);
        return view('admin.edit',compact('data'));
    }

    public function update(Request $request,$id)
    {
        $data = User::find($id);
        $data->role_id = $request->role_id;
        $data->save();
        return redirect()->route('account');
    }

    public function delete($id)
    {
        if($id != Auth::user()->id){
            $data = User::find($id);
            $data->delete();
        }
        return redirect()->route('account');
    }
}
