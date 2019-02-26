<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tutorsearch extends Model
{
    protected $table = 'tutorsearch';

    public function saveTutorSearch($postcode, $subject) {
    	$tutorsearch = new Tutorsearch();
    	$tutorsearch->subject = $subject;
    	$tutorsearch->postcode = $postcode;
    	$tutorsearch->save();
    	return true;
    }
}
