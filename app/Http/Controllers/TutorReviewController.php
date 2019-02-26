<?php

namespace App\Http\Controllers;

use App\TutorCourse;
use App\TutorExperience;
use App\TutorInfo;
use App\TutorReview;
use App\TutorTime;
use App\User;
use Illuminate\Http\Request;

class TutorReviewController extends Controller
{
    public function store($id, Request $request)
    {
//		$user = User::find($id);
	    $this->validate( $request, [
	    	'r_name' => 'required|min:4',
	    	'r_email' => 'required|email',
	    	'r_rating' => 'required|integer|min:1|max:5',
	    	'r_comment' => 'required||max:5000',
	    	'g-recaptcha-response' => 'required|captcha'
	    ]);

	    $review = TutorReview::create([
		    'user_id' => $id,
		    'r_name' => $request->input('r_name'),
		    'r_email' => $request->input('r_email'),
		    'r_rating' => $request->input('r_rating'),
		    'r_comment' => $request->input('r_comment'),

	    ]);
	    /*$users = User::find($id);
	    $tutorInfo = TutorInfo::where(['user_id' => $id])->first();
	    $tutorCourse = TutorCourse::where(['user_id' => $id])->get();
	    $tutorExperience = TutorExperience::where(['user_id' => $id])->first();
	    $tutorTime = TutorTime::where(['user_id' => $id])->first();

	    return view('frontEnd.home.tutorprofile', compact('users','tutorInfo','tutorCourse','tutorExperience','tutorTime'));*/

	    if($review) {
		    $request->session()->flash('review_success', 'Bedankt! De review is succesvol toegevoegd.');
	    }

	    return redirect()->back();
    }
}
