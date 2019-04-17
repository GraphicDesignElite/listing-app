<?php


namespace App\Services;


class GoogleMap
{
    protected $api_key;

    public function __construct($api_key)
    {
        $this->api_key = $api_key;
    }
    public function getKey(){
        return $this->api_key;
    }

}