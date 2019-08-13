<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    protected $guarded = [];

    public function cities(){
        return $this->hasMany(City::class);
    }
    public function getCode($state){
        return $this->code;
    }
    public function getName($state){
        return $this->name;
    }
    
}
