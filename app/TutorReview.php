<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TutorReview extends Model
{
    protected $table = "tutor_reviews";
    protected $fillable = ['user_id', 'r_name', 'r_email', 'r_rating', 'r_comment'];

    public function user()
    {
    	return $this->belongsTo( User::class);
    }
}
