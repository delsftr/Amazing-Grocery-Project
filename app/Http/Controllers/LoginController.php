<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        // validasi data
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        try {
            $akun = $request->only('email', 'password');
            if (Auth::attempt($akun)) {
                return redirect()->route('home');
            } else {
                return redirect()->route('login')->with(['error' => 'Wrong email or password!']);
            }
        } catch (QueryException $e) {
            // return response()->json([
            //     'message' => "Failed " . $e->errorInfo
            // ]);
            return redirect()->route('login')->with(['error' => $e->errorInfo]);
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('home');
    }

    public function register()
    {
        return view('register');
    }

    public function register_action(Request $request)
    {
        $request->validate([
            'first_name' =>  'required',
            'last_name' => 'required',
            'email' => 'required',
            'role' => 'required',
            'gender' => 'required',
            'picture' => 'required',
            'password' => 'required|confirmed',
        ]);

        $img = request()->file('picture');
        $imgname = time() .'.'. $img->getClientOriginalExtension();
        $imgpath = public_path('/image/');
        $img->move($imgpath,$imgname);

        $user = User::create([
            'first_name' =>  $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'role_id' => $request->role,
            'gender_id' => $request->gender,
            'display_picture_link' => $imgname,
            'password' => Hash::make($request->password),
        ]);

        Auth::login($user);

        return redirect()->route('home');
    }
}
