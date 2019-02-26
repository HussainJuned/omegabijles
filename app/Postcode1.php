<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Postcode extends Model
{
    protected $table = 'postcode';

    function checkPostcode($value){
    	$postcode = Postcode::where(['postcode' => $value])->get();

    	if(count($postcode) > 0){
    		return false;
    	}
    	return true;
    }

    function savePostcode($request) {
    	$postcode = new Postcode();
    	$postcode->postcode = str_replace(" ", "", $request->tutorpostcode);
    	$postcode->lat = $request->lat;
    	$postcode->lng = $request->long;

    	if($postcode->save()){
    		return true;
    	}

    	return false;
    }

    function checkAndUpdatePostcode($postcode) {
        $checkpostcode = Postcode::where(['postcode' => $postcode])->first();
        if($checkpostcode){
            return $checkpostcode;
        }else{
            $postcode = str_replace(" ", "", $postcode);
            $geocode = file_get_contents('https://maps.googleapis.com/maps/api/geocode/json?key=AIzaSyCPns7mDksSvNSzRWdLGc6RASWjqe2FrSc&address='.$postcode);
            $geocode = json_decode($geocode);
            if($geocode->status == 'OK'){
                $lat = $geocode->results[0]->geometry->location->lat;
                $lng = $geocode->results[0]->geometry->location->lng;


                $postcodes = new Postcode();
                $postcodes->postcode = $postcode;
                $postcodes->lat = (string)$lat;
                $postcodes->lng = (string)$lng;
                $postcodes->save();
                return $postcodes;
            }else{
                return false;
            }
            
        }
    }
}
