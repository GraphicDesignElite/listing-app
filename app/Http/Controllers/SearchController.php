<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\State;
use App\Listing;
use App\City;

class SearchController extends Controller
{
    public function index()
    {
        $states = State::all();
        return view('states.index',compact('states'));
    }
    public function stateSearch($stateSlug)
    { 
        // Get the state from the slug
        $state = State::where('slug', $stateSlug)->first();
        // Get the listings and the cities for the view
        $cities = City::where('state_code', $state->code)->get();
        $listings = Listing::where('state', $state->code)->get();

        $data['state'] = $state;
        $data['cities'] = $cities;
        $data['listings'] = $listings;

        return view('search.by-state', compact('data'));
    }

    public function citySearch($stateSlug, $citySlug)
    { 
        // Get the state from the slug

        $state = State::where('slug', $stateSlug)->first();
        $city = City::where('slug', $citySlug)->first();
        // Get the listings and the cities for the view
        
       
        $listings = Listing::where([['state', $state->code], ['city', $city->name]])->get();

        $data['state'] = $state;
        $data['city'] = $city;
        $data['listings'] = $listings;
        

        
        return view('search.by-city', compact('data'));
    }
}
