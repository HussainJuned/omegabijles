<?php



namespace App;



use Illuminate\Database\Eloquent\Model;

use Auth;

use Illuminate\Support\Facades\DB;
use Session;


class Temporarytutorinfo extends Model

{

    protected $table = 'temporarytutorinfo';



    public function saveTemporarytutorinfo($request) {
         if($request->tutorType == 1){
            $schoolname = $request->schoolname_for_s;
        }else{
            $schoolname = $request->schoolname_for_fs;
        }
    	$tutorUpdate = Temporarytutorinfo::where(['user_id' => Session('reguserid')])->first();
    	if($tutorUpdate) {
    		$imageSize = filesize($request->image);
    		if($imageSize > 0) {
                if($tutorUpdate->image != null){
                    \File::delete(public_path().'/uploads/'.$tutorUpdate->image);
                }
    			$imageExtension = $request->image->getClientOriginalExtension();
	            $card = str_random(10);
	            $imageName = 'course'.time().$card.'.'.$imageExtension;
	            $uploadedFile = $request->image->move(public_path('uploads'),$imageName);
    		}else{
    			$imageName = $request->oldimage;
    		}
    		$tutorupdate = new Temporarytutorinfo();
    		$tutorupdate->where(['user_id' => Session('reguserid')])->update([
    			'tutor_type' => $request->tutorType,
    			'class' => $request->class,
    			'school' => $schoolname,
    			'currentstudy' => $request->currentstudy_for_fs,
                'graduation_year' => $request->graduationyear,
    			'firstname' => $request->firstname,
    			'lastname' => $request->lastname,
    			'email' => $request->email,
    			'phone' => $request->telephone,
    			'street' => $request->street,
    			'houseno' => $request->houseno,
    			'tutorpostcode' => $request->tutorpostcode,
    			'residence' => $request->residence,
    			'birthdate' => $request->birthdate,
    			'gender' => $request->gender,
    			'briefintroduction' => $request->briefintroduction,
    			'helpthestudent' => $request->helpthestudent,
    			'abitmore' => $request->abitmore,
    			'image' => $imageName,
    			'experiencewithtutoring' => $request->experiencewithtutoring,
    			'experiencewithgiftedness' => $request->experiencewithgiftedness,
    			'experiencewithaddpdd' => $request->experiencewithaddpdd,
    			'experiencewithadhd' => $request->experiencewithadhd,
    			'experiencewithautisme' => $request->experiencewithautisme,
    			'subjects' => serialize($request->course),
    			'week' => serialize($request->week)
    		]);
            
        }else{
        	$imageSize = filesize($request->image);
        	if($imageSize > 0) {
        		$imageExtension = $request->image->getClientOriginalExtension();
	            $card = str_random(10);
	            $imageName = 'course'.time().$card.'.'.$imageExtension;
	            $uploadedFile = $request->image->move(public_path('uploads'),$imageName);
        	} else {
        		$imageName = null;
        	}
        	
            $tutorInfo = new Temporarytutorinfo();
	        $tutorInfo->user_id = Session('reguserid');
            $tutorInfo->tutor_type = $request->tutorType;
	        $tutorInfo->class = $request->class;
	        $tutorInfo->school = $schoolname;
            $tutorInfo->currentstudy = $request->currentstudy_for_fs;
	        $tutorInfo->graduation_year = $request->graduationyear;
	        $tutorInfo->firstname = $request->firstname;
	        $tutorInfo->lastname = $request->lastname;
	        $tutorInfo->email = $request->email;
	        $tutorInfo->phone = $request->telephone;
	        $tutorInfo->street = $request->street;
	        $tutorInfo->houseno = $request->houseno;
	        $tutorInfo->tutorpostcode = $request->tutorpostcode;
	        $tutorInfo->residence = $request->residence;
	        $tutorInfo->birthdate = $request->birthdate;
	        $tutorInfo->gender = $request->gender;
	        $tutorInfo->briefintroduction = $request->briefintroduction;
	        $tutorInfo->helpthestudent = $request->helpthestudent;
	        $tutorInfo->abitmore = $request->abitmore;
	        $tutorInfo->image = $imageName;
            $tutorInfo->experiencewithtutoring = $request->experiencewithtutoring;
            $tutorInfo->experiencewithgiftedness = $request->experiencewithgiftedness;
            $tutorInfo->experiencewithaddpdd = $request->experiencewithaddpdd;
            $tutorInfo->experiencewithadhd = $request->experiencewithadhd;
            $tutorInfo->experiencewithautisme = $request->experiencewithautisme;
            $tutorInfo->subjects = serialize($request->course);
            $tutorInfo->week = serialize($request->week);
	        $tutorInfo->save();


        }

        return Temporarytutorinfo::where(['user_id' => Session('reguserid')])->first();
    }

}

