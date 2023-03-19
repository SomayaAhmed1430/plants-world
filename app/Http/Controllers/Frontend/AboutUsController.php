<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\ContactGuide;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    public function index()
    {
        return view('about.index');
    }

    public function create(Request $request)
    {
        $this->validate($request, [
            'name'=>'required',
            'email'=>'required|email',
            'phone'=>'required',
            'subject'=>'required',
            'message'=>'required',
        ]);

        ContactGuide::create($request->all());
        return back()->with('success', 'We Have Reseved Your Message And Would Like To Thank You For Writing To Us.');
    }

    // public function store()
    // {
        
    // }
}
