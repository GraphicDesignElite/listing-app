<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Listing;
use App\City;
use App\State;
use Auth;
class ListingController extends Controller
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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listings = Listing::where('hide_listing', '!=', true)->get();
        return view('listings.index',compact('listings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        abort_unless(Auth::user()->authorizeRoles(['superadmin', 'admin']), 403);
        return view('listings.create');
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
            'first_name' => ['required','max:255'],
            'last_name' => ['required','max:255'],
            'description' => 'required',
            'phone_number' => 'nullable',
            'fax_number' => 'nullable',
            'email' => 'email', 'nullable',
            'website_url' => 'nullable',
            'street_address' => 'nullable',
            'street_address_2' => 'nullable',
            'city' => 'required',
            'state' => ['required','max:2', 'min:2'],
            'zipcode' => ['nullable','min:5', 'alpha_num'],
        ]);

        $nameslug = str_slug($validated['first_name'] . '-' . $validated['last_name']);
        
        $validated['slug'] = $nameslug;
        
        
        if(request()->state && request()->city){
            $slug = str_slug(request()->city . '-' . request()->state, '-');
            
            $city = City::firstOrNew(
                ['slug' => $slug ], 
                [
                'name' => request()->city, 
                'state_code' => request()->state,
                'zipcode' => request()->zipcode
                ]);
            $city->save();
        }
        
        $listing = Listing::create($validated);
        return redirect('/listings')->with('success', 'The listing has been created.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Listing $listing)
    { 
        
        return view('listings.show', compact('listing'));
    }

    

}
