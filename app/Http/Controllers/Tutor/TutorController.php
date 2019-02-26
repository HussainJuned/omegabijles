<?php

namespace App\Http\Controllers\Tutor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Post;
use Mail;
use Session;
use App\User;
use App\TutorCourse;
use App\TutorExperience;
use App\TutorInfo;
use App\TutorTime;
use Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
class TutorController extends Controller
{
    
    public function __construct(){
        $this->middleware('auth');
    }

    public function persoonlijkeinfo(){
      $id  = Auth::user()->id;
      $tutor = TutorInfo::where(['user_id' => $id])->first();
      $user = User::find($id);
      return view('tutor.persoonlijkeInfo', compact('tutor','user'));
    }

    public function tutorInfoUpdate(Request $request){
      $this->validate($request, [
        $request, 
            'firstname' => 'required|max:50',
            'lastname' => 'required|max:50',
            'email' => 'required|email|unique:users,email,'.$request->userid,
            'telephone' => 'required|max:20',
            'street' => 'required',
            'houseno' => 'required',
            'tutorpostcode' => 'required',
            'residence' => 'required',
            'birthdate' => 'required|date',
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
        ]);
        if($request->tutorType == 1){
          if($request->class == ''){
            Session::flash('class', 'Klasse is vereist!');
            return Redirect::back();
          }
        }else{
          if($request->graduationyear == ''){
            Session::flash('graduationyear', 'Graduation Year is vereist!');
            return Redirect::back();
          }elseif($request->currentstudy == ''){
            Session::flash('currentstudy', 'Veld is vereist!');
            return Redirect::back();
          } 
        }
        DB::beginTransaction();

        try {
          $tutorupdate =   TutorInfo::where(['user_id' => Auth::user()->id])->update([
              'current_class_for_student' => $request->class,
              'graduation_year' => $request->graduationyear,
              'current_study_for_former_student' => $request->currentstudy,
              'firstname' => $request->firstname,
              'lastname' => $request->lastname,
              'phone' => $request->telephone,
              'street' => $request->street,
              'house' => $request->houseno,
              'postalcode' => $request->tutorpostcode,
              'residence' => $request->residence,
              'sex' => $request->sex,
              'birthdate' => date_format(date_create($request->birthdate),"Y/m/d")
            ]);
            $user = User::where(['id' => Auth::user()->id])->update([
              'email' => $request->email
            ]);
            DB::commit();
            return redirect('/tutor/persoonlijkeinfo');
        } catch (\Exception $e) {
            DB::rollback();
           Session::flash('error','Er ging iets fout, probeer opnieuw!');
          return Redirect::back();
        }
    
    }

   public function mijnvakken(){
      $courses = [];
      $id = Auth::user()->id;
      $tutorcourse = TutorCourse::where(['user_id' => $id])->get();
      foreach ($tutorcourse as $value) {
        $class = explode(",",$value->classes);
        $courses[] = ['id'=>$value->id,'coursename' => $value->coursename, 'classes' => $class]; 
      }
      return view('tutor.mijnVakken',compact('courses'));
    }

    public function updateMijnvakken(Request $request){
      $this->validate($request, [
        $request, 
            'course' => 'required',
        ],
        [
            'course.required' => 'cursus is vereist!',
        ]);
        TutorCourse::where(['user_id' => Auth::user()->id])->delete();

        foreach ($request->course as $key => $value) {
          $classlist = implode(",",$value);
          $tutorCourse = new tutorCourse();
          $tutorCourse->user_id = Auth::user()->id;
          $tutorCourse->coursename = $key;
          $tutorCourse->classes = $classlist;
          $tutorCourse->save();
        }

        return redirect('/tutor/mijnvakken');
    }

    public function mijnprofiel(){
      $tutorexperience = TutorExperience::where(['user_id' => Auth::user()->id])->first();
      $tutortime = TutorTime::where(['user_id' => Auth::user()->id])->first();
      $tutortime->sat = explode(',', $tutortime->sat);
      $tutortime->sun = explode(',', $tutortime->sun);
      $tutortime->mon = explode(',', $tutortime->mon);
      $tutortime->tue = explode(',', $tutortime->tue);
      $tutortime->wed = explode(',', $tutortime->wed);
      $tutortime->thus = explode(',', $tutortime->thus);
      $tutortime->fri = explode(',', $tutortime->fri);
      $tutorinfo = TutorInfo::where(['user_id' => Auth::user()->id])->first();
      return view('tutor.mijnProfiel', compact('tutorexperience','tutortime','tutorinfo'));
    }
    

    public function updateMijnProfile(Request $request){
      $this->validate($request, [
        $request, 
            'briefintroduction' => 'required',
            'helpthestudent' => 'required',
            'abitmore' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:5120',
            'week' => 'required',
            'experiencewithtutoring' => 'required',
            'experiencewithgiftedness' => 'required',
            'experiencewithaddpdd' => 'required',
            'experiencewithadhd' => 'required',
            'experiencewithautisme' => 'required'
        ],
        [
            'briefintroduction.required' =>'Veld is vereist!',
            'helpthestudent.required' => 'Veld is vereist!',
            'abitmore.required' => 'Veld is vereist!',
            'image.required' => 'Profielfoto is verreist!',
            'image.image' => 'Moet een afbeelding zijn!',
            'image.mimes' =>'alleen jpeg, png, jpg, gif, svg formaten worden ondersteund!',
            'image.max' => 'Max. 5 MB groot. Is jouw bestand groter? Verklein hem dan via bijv. tinyjpg.com',
            'week.required' => 'Veld is vereist!',
            'confirmcheck.required' => 'Dit moet aangevinkt zijn!',
            'experiencewithtutoring.required' => 'Veld is vereist!',
            'experiencewithgiftedness.required' => 'Veld is vereist!',
            'experiencewithaddpdd.required' => 'Veld is vereist!',
            'experiencewithadhd.required' => 'Veld is vereist',
            'experiencewithautisme.required' => 'Veld is vereist!'
        ]);

        $imageSize = filesize($request->image);
        if( $imageSize > 0 ){
            $filename = public_path('/uploads/').$request->oldimage;
            \File::delete($filename);
            $imageExtension = $request->image->getClientOriginalExtension();
            $card = str_random(10);
            $imageName = 'option'.time().$card.'.'.$imageExtension;

            $uploadedFile = $request->image->move(public_path('/uploads/'),$imageName);
        }else{
            $imageName = $request['oldimage'];
        }


        DB::beginTransaction();

        try {
          $tutorupdate =   TutorInfo::where(['user_id' => Auth::user()->id])->update([
              'image' => $imageName,
              'Briefintroduction' => $request->briefintroduction,
              'helpthestudent' => $request->helpthestudent,
              'abitmore' => $request->abitmore,
            ]);

          $tutortimeupdate = TutorTime::where(['user_id' => Auth::user()->id])->update([
            'sat' => isset($request->week['sat'])?implode(",", $request->week['sat']):null,
            'sun' => isset($request->week['sun'])?implode(",", $request->week['sun']):null,
            'mon' => isset($request->week['mon'])?implode(",", $request->week['mon']):null,
            'tue' => isset($request->week['tue'])?implode(",", $request->week['tue']):null,
            'wed' => isset($request->week['wed'])?implode(",", $request->week['wed']):null,
            'thus' => isset($request->week['thus'])?implode(",", $request->week['thus']):null,
            'fri' => isset($request->week['fri'])?implode(",", $request->week['fri']):null
          ]);
           
           $tutorexpupdate = TutorExperience::where(['user_id' => Auth::user()->id])->update([
            'experiencewithtutoring' => $request->experiencewithtutoring,
            'experiencewithgiftedness' => $request->experiencewithgiftedness,
            'experiencewithaddpdd' => $request->experiencewithaddpdd,
            'experiencewithadhd' => $request->experiencewithadhd,
            'experiencewithautisme' => $request->experiencewithautisme,
         
          ]);
            DB::commit();
            return redirect('/tutor/mijnprofiel');
        } catch (\Exception $e) {
            DB::rollback();
            dd($e);
           Session::flash('error','Er ging iets fout, probeer opnieuw!');
          return Redirect::back();
        }


    }
}


