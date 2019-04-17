<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = [
        'reviewer_first_name',
        'reviewer_last_name',
        'rating',
        'review_text',
        'reviewer_email',
        'cpa_listing_id',
        'service_reviewed',
        'review_type'
    ];
    public function cpa_listing() {
        return $this->belongsTo(CpaListing::class);
    }
    public function reports(){
        // Review can have multiple reports
        return $this->hasMAny(Report::class);
    }
    public function addReport($report){
        return $this->reports()->create($report);
    }
}
