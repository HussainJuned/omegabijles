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
    	$postcode->postcode = $request->tutorpostcode;
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
            return false;
        }
    }
}
