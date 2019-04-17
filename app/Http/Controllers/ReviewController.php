<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Review;
use App\CpaListing;

class ReviewController extends Controller
{
    public function store(CpaListing $cpalisting)
    {
        $validated = request()->validate([
            'review_text' => ['required', 'min:1', 'max:255'],
            'rating' => 'required',
            'reviewer_first_name' => ['required', 'max:255'],
            'reviewer_last_name' => ['required', 'max:255'],
            'reviewer_email' => 'required',
            'service_reviewed' => 'required',
            'review_type' => ['required', 'min:3', 'max:3']
        ]);
        $cpalisting->addReview($validated);
        return back()->with('success', 'Thank you, your review has been added successfully.');
    }
    public function addReport($review){
        $this->reviews()->create($review);
    }
    public function upvote(Review $review){
        //TODO
    }
    

}
