<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\User;
use App\TutorCourse;
use App\TutorExperience;
use App\Temporarytutorinfo;
use App\TutorInfo;
use App\TutorTime;
use App\Postcode;
use Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use Validator;
class RegisterController extends Controller
{
    
    public function showRegisterForm(){
        // $tempinfo = null;
        return view('frontEnd.home.registers');
    }

    public function registerTutor(Request $request){
        if(Session('reguserid') == null) {
            Session::put('reguserid', request()->ip());
        }
        $temptutorinfo = new Temporarytutorinfo();
        $tempinfo = $temptutorinfo->saveTemporarytutorinfo($request);
        Session::put('tempinfo', $tempinfo);
        Session::put('tempcourse', unserialize($tempinfo->subjects));
        Session::put('tempweek', unserialize($tempinfo->week));
        $error = false;
        if($request->tutorType == 1){
            if($request->class == '') {
                Session::flash('class', 'Veld is vereist!');
                $error = true;
            }
            if($request->schoolname_for_s == '') {
                Session::flash('schoolname_for_s', 'Veld is vereist!');
                $error = true;
            }
        }else{
            if($request->currentstudy_for_fs == '') {
                Session::flash('currentstudy_for_fs', 'Veld is vereist!');
                $error = true;
            }
            if($request->schoolname_for_fs == '') {
                Session::flash('schoolname_for_fs', 'Veld is vereist!');
                $error = true;
            }
            if($request->graduationyear == '') {
                Session::flash('graduationyear', 'Veld is vereist!');
                $error = true;
            }
              
        }

        if($request->oldimage == null && $request->image == null) {
            Session::flash('imageerr', 'Profielfoto is verreist!');
            $error = true;
        }
        $validator = Validator::make($request->all(), [
            'firstname' => 'required|max:50',
            'lastname' => 'required|max:50',
            'email' => 'required|email|unique:users,email',
            'telephone' => 'required|max:20',
            'street' => 'required',
            'houseno' => 'required',
            'tutorpostcode' => 'required',
            'residence' => 'required',
            'birthdate' => 'required|date',
            'password' => 'required|min:8|max:20',
            'password_confirmation' => 'required|min:8|max:20',
            'briefintroduction' => 'required',
            'helpthestudent' => 'required',
            'abitmore' => 'required',
            'course' => 'required',
            'week' => 'required',
            'confirmcheck' => 'required',
            'experiencewithtutoring' => 'required',
            'experiencewithgiftedness' => 'required',
            'experiencewithaddpdd' => 'required',
            'experiencewithadhd' => 'required',
            'experiencewithautisme' => 'required',
        ],
        [
            'firstname.required' => 'Voornaam is vereist!',
            'firstname.max' => 'voornaam mag niet langer zijn dan 50 tekens!',
            'lastname.required' => 'Achternaam is vereist!',
            'lastname.max' => 'achternaam mag niet langer zijn dan 50 tekens!',
            'email.required' => 'E-mailadres is vereist!',
            'email.email' => 'Moet een geldig e-mail adres zijn!',
            'email.unique' => 'E-mail moet uniek zijn!',
            'telephone.required' => 'Telefoonnummer is vereist!',
            'telephone.max' =>'mag niet langer zijn dan 20 tekens!',
            'street.required' => 'Straat is vereist!',
            'houseno.required' => 'Huisnummer is vereist!',
            'tutorpostcode.required' => 'Postcode is vereist!',
            'residence.required' => 'Woonplaats is vereist!',
            'birthdate.required' => 'geboortedatum is vereist!',
            'birthdate.date' => 'datumformaat moet dd-mm-jjjj zijn.',
            'password.required' => 'Wachtwoord is vereist!',
            'password.min' => 'wachtwoord moet minimaal 8 tekens lang zijn!',
            'password.max' => 'wachtwoord mag niet langer zijn dan 20 tekens!',
            'password_confirmation.required' => 'Herhaal wachtwoord is vereist!',
            'password_confirmation.min' => 'wachtwoord moet minimaal 8 tekens lang zijn!',
            'password_confirmation.max'  =>'wachtwoord mag niet langer zijn dan 20 tekens!',
            'briefintroduction.required' =>'Veld is vereist!',
            'helpthestudent.required' => 'Veld is vereist!',
            'abitmore.required' => 'Veld is vereist!',
            'image.required' => 'Profielfoto is verreist!',
            'image.image' => 'Moet een afbeelding zijn!',
            'image.mimes' =>'alleen jpeg, png, jpg, gif, svg formaten worden ondersteund!',
            'image.max' => 'Max. 5 MB groot. Is jouw bestand groter? Verklein hem dan via bijv. tinyjpg.com',
            'course.required' => 'cursus is vereist!',
            'week.required' => 'Veld is vereist!',
            'confirmcheck.required' => 'Dit moet aangevinkt zijn!',
            'experiencewithtutoring.required' => 'Veld is vereist!',
            'experiencewithgiftedness.required' => 'Veld is vereist!',
            'experiencewithaddpdd.required' => 'Veld is vereist!',
            'experiencewithadhd.required' => 'Veld is vereist',
            'experiencewithautisme.required' => 'Veld is vereist!',
            'lat.required' => 'Ongeldige postcode',
            'long.required' => 'Ongeldige postcode',


        ]);
    	
        if ($validator->fails()) {
            return view('frontEnd.home.aanmeldenbase')
                    ->withErrors($validator->errors());
        }
        
        if($error == true) {    
            return view('frontEnd.home.aanmeldenbase');
        }

        if($request->tutorType == 1){
            $schoolname = $request->schoolname_for_s;
        }else{
            $schoolname = $request->schoolname_for_fs;
        }

        // $imageExtension = $request->image->getClientOriginalExtension();
        // $card = str_random(10);
        // $imageName = 'user'.time().$card.'.'.$imageExtension;
        // $uploadedFile = $request->image->move(public_path('uploads'),$imageName);

        // $postcode = new Postcode();
        // $checkpostcode = $postcode->checkPostcode($request->tutorpostcode);
        // if($checkpostcode) {
        //     $postcode->savePostcode($request);
        // }

        if (strpos($request->experiencewithtutoring, '3') !== false) {
            $experience = '3';
        }elseif(strpos($request->experiencewithtutoring, '1-2') !== false){
            $experience = '2';
        }else{
            $experience = '1';
        }
         DB::beginTransaction();



         try {
            $user = new User();
	        $user->email = $request->email;
	        $user->password = bcrypt($request->password);
	        $user->save();

	        $tutorInfo = new TutorInfo();
	        $tutorInfo->user_id = $user->id;
            $tutorInfo->tutor_type = $request->tutorType;
	        $tutorInfo->current_class_for_student = $request->class;
	        $tutorInfo->schoolname = $schoolname;
            $tutorInfo->current_study_for_former_student = $request->currentstudy_for_fs;
	        $tutorInfo->graduation_year = $request->graduationyear;
	        $tutorInfo->firstname = $request->firstname;
	        $tutorInfo->lastname = $request->lastname;
	        $tutorInfo->phone = $request->telephone;
	        $tutorInfo->street = $request->street;
	        $tutorInfo->house = $request->houseno;
	        $tutorInfo->postalcode = $request->tutorpostcode;
	        $tutorInfo->residence = $request->residence;
	        $tutorInfo->birthdate = date_format(date_create($request->birthdate),"Y/m/d");
	        $tutorInfo->sex = $request->gender;
	        $tutorInfo->Briefintroduction = $request->briefintroduction;
	        $tutorInfo->helpthestudent = $request->helpthestudent;
	        $tutorInfo->abitmore = $request->abitmore;
	        $tutorInfo->image = $tempinfo->image;
            $tutorInfo->experience = $experience;
	        $tutorInfo->save();

	        foreach ($request->course as $key => $value) {
	        	$classlist = implode(",",$value);
	        	$tutorCourse = new tutorCourse();
	        	$tutorCourse->user_id = $user->id;
	        	$tutorCourse->coursename = $key;
	        	$tutorCourse->classes = $classlist;
	        	$tutorCourse->save();
	        }

	        $tutorTime = new tutorTime();
	        $tutorTime->user_id = $user->id;
	        // $tutorTime->user_id = 1;
	        $tutorTime->sat = isset($request->week['sat'])?implode(",", $request->week['sat']):null;
	        $tutorTime->sun = isset($request->week['sun'])?implode(",", $request->week['sun']):null;
	        $tutorTime->mon = isset($request->week['mon'])?implode(",", $request->week['mon']):null;
	        $tutorTime->tue = isset($request->week['tue'])?implode(",", $request->week['tue']):null;
	        $tutorTime->wed = isset($request->week['wed'])?implode(",", $request->week['wed']):null;
	        $tutorTime->thus = isset($request->week['thu'])?implode(",", $request->week['thu']):null;
	        $tutorTime->fri = isset($request->week['fri'])?implode(",", $request->week['fri']):null;
	        $tutorTime->save();

	        $tutorExperience = new TutorExperience();
	        $tutorExperience->user_id = $user->id;
	        // $tutorExperience->user_id = 1;
	        $tutorExperience->experiencewithtutoring = $request->experiencewithtutoring;
	        $tutorExperience->experiencewithgiftedness = $request->experiencewithgiftedness;
	        $tutorExperience->experiencewithaddpdd = $request->experiencewithaddpdd;
            $tutorExperience->experiencewithadhd = $request->experiencewithadhd;
	        $tutorExperience->experiencewithautisme = $request->experiencewithautisme;
	        $tutorExperience->save();

            DB::commit();
            Temporarytutorinfo::where(['user_id' => Session('reguserid')])->delete();
            return redirect('/applytutorsuccess');
        } catch (\Exception $e) {
            DB::rollback();
            dd($e);
           Session::flash('error','Er ging iets fout, probeer opnieuw!');
          return Redirect::back();
        }
    }

    
}
