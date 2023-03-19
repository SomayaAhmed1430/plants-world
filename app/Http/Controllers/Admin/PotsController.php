<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\PotsAndPlanters;
use App\Http\Controllers\Controller;
use App\Http\Requests\PotStoreRequest;
use Illuminate\Support\Facades\Storage;

class PotsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pot = PotsAndPlanters::all();
        return view('admin.pots.index', compact('pot'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pots.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PotStoreRequest $request)
    {
        $image = $request->file('image')->store('public/pots');

        PotsAndPlanters::create([
            'name'=>$request->name,
            'description'=>$request->description,
            'image'=>$image,
            'price'=>$request->price,
        ]);

        return to_route('admin.pots.index')->with('success', 'pot created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PotsAndPlanters $pot)
    {
        return view('admin.pots.edit', compact('pot'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PotsAndPlanters $pot)
    {
        $request->validate([
            'name'=>'required',
            'description'=>'required',
            'price'=>'required',
        ]);
        $image = $pot->image;
        if($request->hasFile('image')){
            Storage::delete($pot->image);
            $image = $request->file('image')->store('public/pots');
        }

        $pot->update([
            'name'=>$request->name,
            'description'=>$request->description,
            'image'=>$image,
            'price'=>$request->price
        ]);
        return to_route('admin.pots.index')->with('success', 'pots updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PotsAndPlanters $pot)
    {
        Storage::delete($pot->image);
        $pot->delete();
        return to_route('admin.pots.index')->with('danger', 'Pot deleted successfully');
    }
}
