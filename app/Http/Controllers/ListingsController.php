<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Listing;
use App\City;
use App\State;
class ListingsController extends Controller
{
    public function show($stateSlug, $citySlug, Listing $listing, $slug)
    { 
        return view('listings.show', compact('listing'));
    }
}
