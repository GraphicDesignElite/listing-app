<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Listing extends Model
{
    use SoftDeletes;

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
        'user_id',
        'hide_listing',
        'slug'
    ];
     /**
     * Always capitalize the first name when we save it to the database
     */
    public function setFirstNameAttribute($value) {
        $this->attributes['first_name'] = ucfirst($value);
    }

    /**
     * Always capitalize the last name when we save it to the database
     */
    public function setLastNameAttribute($value) {
        $this->attributes['last_name'] = ucfirst($value);
    }

    
    public function reviews(){
        // Listings have many reviews
        return $this->hasMAny(Review::class);
    }
    public function addReview($review){
       return $this->reviews()->create($review);
    }
    public function hideListing(){
        $this->hide_listing = true;
        return $this->save();
    }
    public function showListing(){
        $this->hide_listing = false;
        return $this->save();
    }
}
