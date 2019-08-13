<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $fillable = [
        'name', 
        'state_code',
        'zipcode',
        'slug'
    ];
    public function state(){
        // Listings have many reviews
        return $this->hasOne(State::class);
    }
}
