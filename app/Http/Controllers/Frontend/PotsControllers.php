<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\PotsAndPlanters;
use Illuminate\Http\Request;

class PotsControllers extends Controller
{
    public function index()
    {
        $pot = PotsAndPlanters::all();
        return view('pots.index', compact('pot'));
    }
}
