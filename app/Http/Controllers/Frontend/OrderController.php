<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Cart;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Checkout;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class OrderController extends Controller
{
    public function index()
    {
        if(Auth::id()){
            $id = Auth::user()->id;
            $cart = Cart::where('user_id','=',$id)->get();
            return view('checkout.index', compact('cart'));
        }else{
            return redirect('login');
        }
    }

    public function cashorder()
    {
        $user = Auth::user();
        $userid = $user->id;
        // dd($userid);
        $data = Cart::where('user_id','=',$userid)->get();
        // dd($data);
        foreach($data as $data){
            $order = new Checkout;
            $order->name = $data->name;
            $order->email = $data->email;
            $order->phone = $data->phone;
            $order->address = $data->address;
            $order->user_id = $data->user_id;
            $order->product_title = $data->product_title;
            $order->product_id = $data->product_id;
            $order->quantity = $data->quantity;
            $order->price = $data->price * $data->quantity + 30;
            $order->image = $data->image;
            $order->payment_status = 'cash on delivery';
            $order->delivery_status = 'processing';
            $order->save();
            $cart_id = $data->id;
            $cart = Cart::find($cart_id);
            $cart->delete();
        }
        return redirect()->back()->with('success','We Have Received Your Order. We will Connect With You Soon...');
    }

    public function removecart($id)
    {
        $cart = Cart::find($id);
        // Storage::delete($cart->image);
        $cart->delete();

        return redirect()->back()->with('danger', 'Cart deleted successfully');
    }
}
