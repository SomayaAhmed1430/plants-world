<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {


        // user_id auth()->id()
        // subject
        // message

        // order
        //     customer_id
            
        // order_items
        //     order_id
        //     item_id
        //     qty
        //     price


        $bestsellers = Category::where('name', 'Best Sellers')->first();
        return view('welcome',compact('bestsellers'));
    }

    public function thankyou()
    {
        return view('thankyou');
    }
}
