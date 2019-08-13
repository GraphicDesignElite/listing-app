<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Listing;
use Auth;
class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $listings = Listing::where('owner_id', auth()->id())->get();
        
        /** Access for Admin*/
        if(Auth::user()->hasRole(['superadmin', 'admin'])){
            $listings = Listing::where('owner_id', 0 )->get();
        }
        
        return view('dashboard.home', compact('listings'));
    }
    /**
     * Edit Your Listing
     **/
    public function editlisting(Listing $listing){
        {
            abort_if($listing->owner_id !== auth()->id(), 403);
            return view('dashboard.edit-listing', compact('listing'));
        }
    }
    public function updatelisting(Listing $listing){
        abort_if($listing->owner_id !== auth()->id(), 403);

        $validated = request()->validate([
            'title' => ['required', 'min:3', 'max:255'],
            'description' => 'required'
        ]);
        $listing->title = request('title');
        $listing->description = request('description');
        $listing->save();
        return back()->with('success', 'Your listing has been updated.');
    }
    public function hidelisting(Listing $listing)
    {
        abort_if($listing->owner_id !== auth()->id(), 403);
        $listing->hideListing();
        
        return redirect('/listings')->with('danger', 'Your listing is now hidden.');

    }
    public function showlisting(Listing $listing)
    {
        abort_if($listing->owner_id !== auth()->id(), 403);
        $listing->showListing();
        
        return redirect('/listings')->with('success', 'Your listing is now visible.');

    }
}
