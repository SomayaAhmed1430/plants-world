<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GuideController extends Controller
{
    public function index()
    {
        return view('guide.index');
    }

    public function store(Request $request)
    {
        if (Auth::id()) {
            $comment = new Comment;
            $comment->user_id = Auth::user()->id;
            $comment->name = Auth::user()->name;
            $comment->email = Auth::user()->email;
            $comment->comment = $request->comment;
            $comment->save();
            return redirect()->back()->with('success','We Have Received Your Comment. Our Specialist will Response All Your Questions Soon...');
        } else {
            return redirect('login');
        }
    }
}
