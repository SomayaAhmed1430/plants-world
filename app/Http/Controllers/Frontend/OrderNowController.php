<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderNowController extends Controller
{
    public function index($id)
    {
        $product = Menu::where('id',$id)->get();
        return view('order.index', compact('product'));
    }
    
    public function store(Request $request, $id)
    {
        if(Auth::id()){
            $user = Auth::user();
            // dd($user);
            $product = Menu::find($id);
            // dd($product);
            $cart = new Cart;
            $cart->name = $user->name;
            $cart->email = $user->email;
            $cart->phone = $user->phone;
            $cart->address = $user->address;
            $cart->user_id = $user->id;
            $cart->product_title = $product->name;
            $cart->price = $product->price;
            $cart->image = $product->image;
            $cart->product_id = $product->id;
            $cart->quantity = $request->quantity;
            $cart->save();
            return redirect('checkout');
        }
        else{
            return redirect('login');
        }
    }
}
