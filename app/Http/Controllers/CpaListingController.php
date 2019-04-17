<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CpaListing;
class CpaListingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listings = CpaListing::all();
        return view('cpa-listings.index',compact('listings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cpa-listings.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = request()->validate([
            'title' => ['required', 'min:3', 'max:255'],
            'description' => 'required'
        ]);
     
        CpaListing::create($validated);
        return redirect('/cpa-listings')->with('success', 'The listing has been created.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(CpaListing $cpaListing)
    { 
        
        return view('cpa-listings.show', compact('cpaListing'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(CpaListing $cpaListing)
    {
        return view('cpa-listings.edit', compact('cpaListing'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CpaListing $cpaListing)
    {
        $validated = request()->validate([
            'title' => ['required', 'min:3', 'max:255'],
            'description' => 'required'
        ]);
        $cpaListing->title = request('title');
        $cpaListing->description = request('description');
        $cpaListing->save();
        return redirect('/cpa-listings')->with('success', 'Your listing has been updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(CpaListing $cpaListing)
    {
        $cpaListing->delete();
        return redirect('/cpa-listings')->with('danger', 'The listing has been permanently deleted.');

    }
}
