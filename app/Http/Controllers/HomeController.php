<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\User;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    public function welcome()
    {
        return view('welcome');
    }

    public function index()
    {
        $data = Item::paginate(10);
        return view('home',compact('data'));
    }

    public function detail($id)
    {
        $data = Item::find($id);
        return view('detail',compact('data'));
    }

    public function buy($id)
    {
        $item = Item::find($id);

        Order::create([
            'user_id' => Auth::user()->id,
            'item_id' => $id,
            'price' => $item->price,
        ]);

        return redirect()->route('cart');
    }

    public function cart()
    {
        $data = Order::join('items','items.id','=','orders.item_id')
        ->where('user_id',Auth::user()->id)
        ->select('orders.id','items.price','items.item_name')
        ->get();
        $price = Order::where('user_id',Auth::user()->id)->sum('price');
        return view('cart',compact('data','price'));
    }

    public function checkout()
    {
        $data = Order::where('user_id',Auth::user()->id)->first();
        $data->delete();
        return view('notification_success');
    }

    public function cart_delete($id)
    {
        $data = Order::find($id);
        $data->delete();
        return redirect()->route('cart');
    }
    
    public function profile()
    {
        $data = User::join('roles','roles.id','=','users.role_id')
        ->join('genders','genders.id','=','users.gender_id')
        ->where('users.id',Auth::user()->id)
        ->first();
        return view('profile',compact('data'));
    }

    public function profile_update(Request $request)
    {
        $request->validate([
            'first_name' =>  'required',
            'last_name' => 'required',
            'email' => 'required',
            'gender_id' => 'required',
            'display_picture' => 'required',
            'password' => 'required|confirmed',
        ]);
        $img = request()->file('display_picture');
        $imgname = time() .'.'. $img->getClientOriginalExtension();
        $imgpath = public_path('/image/');
        $img->move($imgpath,$imgname);

        $data = User::find(Auth::user()->id);
        $data->first_name = $request->first_name;
        $data->last_name = $request->last_name;
        $data->email = $request->email;
        $data->gender_id = $request->gender_id;
        $data->password = Hash::make($request->password);
        $data->display_picture_link = $imgname;
        $data->save();
        return redirect()->route('profile');
    }
    
    public function notification()
    {
        return view('notification');
    }
}
