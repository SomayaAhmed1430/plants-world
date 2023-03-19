<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrderNowController extends Controller
{
    public function index()
    {
        return view('order.index');
    }
}
