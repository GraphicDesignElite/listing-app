<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    protected $fillable = [
        'title', 
        'description',
        'first_name',
        'last_name',
        'phone_number',
        'fax_number',
        'email',
        'website_url',
        'street_address',
        'street_address_2',
        'city',
        'state',
        'zipcode',
        'user_id'
    ];
    public function reviews(){
        // Listings have many reviews
        return $this->hasMAny(Review::class);
    }
    public function addReview($review){
       return $this->reviews()->create($review);
    }
}
