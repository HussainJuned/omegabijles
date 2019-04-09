<?php

namespace App\Http\Controllers;

use App\TutorReview;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Post;
use Session;
use App\User;
use App\TutorCourse;
use App\TutorExperience;
use App\TutorInfo;
use App\Temporarytutorinfo;
use App\Tutorsearch;
use App\TutorTime;
use App\Postcode;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Mail\ContactTutorMail;
use Illuminate\Support\Facades\Mail;
use Auth;

class HomeController extends Controller
{

    public function index()
    {
        return view('frontEnd.home.homeContent');
    }

    public function getContact()
    {
        return view('frontEnd.home.contact');
    }

    public function bijlespagina()
    {
        return view('bijlespagina');
    }

    public function login()
    {
        return view('frontEnd.home.login');
    }

    public function overons()
    {
        return view('frontEnd.home.overons');
    }

    public function wordbijlesgever()
    {
        return view('frontEnd.home.wordbijlesgever');
    }

    public function wordbijlesgever1()
    {
        return view('frontEnd.home.wordbijlesgever1');
    }

    public function wordbijlesgever2()
    {
        return view('frontEnd.home.wordbijlesgever2');
    }

    public function algemenevoorwaarden()
    {
        return view('frontEnd.home.algemenevoorwaarden');
    }

    public function fiveTips()
    {
        return view('frontEnd.home.5tips');
    }

    public function privacy()
    {
        return view('frontEnd.home.privacy');
    }

    public function postContact(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:4',
            'subject' => 'required|min:3',
            'email' => 'required|email',
            'phone' => '',
            'message' => 'required|min:10'
        ],
            ['name.required' => 'Dit veld mag niet leeg zijn!',
                'name.min' => 'moet minimaal 4 tekens lang zijn!',
                'subject.required' => 'Dit veld mag niet leeg zijn!',
                'subject.min' => 'moet minimaal 3 tekens lang zijn!',
                'email.required' => 'Dit veld mag niet leeg zijn!',
                'email.email' => 'moet een e-mail zijn!',
                'message.required' => 'Dit veld mag niet leeg zijn!',
                'message.min' => 'moet minimaal 10 tekens lang zijn!'
            ]);
        $data = array(
            'name' => $request->name,
            'subject' => $request->subject,
            'email' => $request->email,
            'Phone' => $request->phone,
            'bodyMessage' => $request->message
        );

        Mail::send('emails.contactForm', $data, function ($message) use ($data) {
            $message->from($data['email']);
            $message->to('info@omegabijles.nl');
            $message->subject($data['subject']);
        });

        $request->session()->flash('alert-success', 'Uw e-mail is met succes verzonden!');

        return redirect('/contact');
    }

    public function howitworks()
    {
        return view('frontEnd.home.howitworks');
    }

    public function becomeatutor()
    {
        Session::put('tempinfo', null);
        Session::put('tempcourse', null);
        Session::put('tempweek', null);
        Temporarytutorinfo::where(['user_id' => request()->ip()])->delete();
        return view('frontEnd.home.aanmeldenbase');
    }

    public function tutorprofile($id)
    {
        $users = User::find($id);
        $tutorInfo = TutorInfo::where(['user_id' => $id])->first();
        $tutorCourse = TutorCourse::where(['user_id' => $id])->get();
        $tutorExperience = TutorExperience::where(['user_id' => $id])->first();
        $tutorTime = TutorTime::where(['user_id' => $id])->first();
        $ratings = TutorReview::where('user_id', $id)->latest()->get();
        $avg_rating = DB::table('tutoravgrating')->where(['user_id' => $id])->first();

        if ($avg_rating) {
            $avg_rating = round($avg_rating->avgrating);
        } else {
            $avg_rating = 0;
        }

        return view('frontEnd.home.tutorprofile', compact('users', 'tutorInfo', 'tutorCourse', 'tutorExperience', 'tutorTime', 'avg_rating', 'ratings'));
    }


    public function applytutorsuccess()
    {
        return view('frontEnd.home.applytutorsuccess');
    }

    public function search($postcode, $subject)
    {
        $tutorinfo = null;

        if ($postcode != null && $subject != null) {
            $postcodes = new Postcode();
            $singlepost = $postcodes->checkAndUpdatePostcode($postcode);

            if ($singlepost != false) {
                $current_lat = $singlepost->lat;
                $current_lng = $singlepost->lng;
                $postlistarray = [];
                $postlistarray[] = $postcode;
                // $postlist        = DB::select( "SELECT *,( 6371 * acos( cos( radians('$lat') ) * cos( radians( `lat` ) ) * cos( radians( `lng` ) -radians('$lng') ) +sin( radians('$lat') ) * sin( radians( `lat` ) ) ) ) AS distance FROM `postcode` HAVING distance <= 7 ORDER BY distance ASC" );

                $postlist = DB::select("SELECT postcode , (
                                        6371 * acos (
                                        cos ( radians('$current_lat') )
                                        * cos( radians( lat ) )
                                        * cos( radians( lng ) - radians('$current_lng') )
                                        + sin ( radians('$current_lat') )
                                        * sin( radians( lat ) )
                                        )) AS distance from postcode HAVING distance <= 7 ORDER BY distance ASC");

                if (count($postlist) <= 0) {
                    return view('frontEnd.home.search_profiles', compact('subject', 'tutorinfo', 'postcode'));
                }

                foreach ($postlist as $value) {
                    $postlistarray[] = $value->postcode;
                }

                Session::put('postlist', $postlistarray);

                // $tutorinfo = Tutorinfo::whereIn( 'postalcode',$postlistarray)->paginate(2);
                $tutorinfo = DB::table('tutorinfo')->select('tutorinfo.*', 'tutorexperience.*', 'coursesnames.coursename', 'tutortotime.*', 'tutoravgrating.avgrating', 'users.useractive')
                    ->join('tutorexperience', 'tutorexperience.user_id', '=', 'tutorinfo.user_id')
                    ->join('coursesnames', 'coursesnames.user_id', '=', 'tutorinfo.user_id')
                    ->join('tutortotime', 'tutortotime.user_id', '=', 'tutorinfo.user_id')
                    ->leftjoin('tutoravgrating', 'tutoravgrating.user_id', '=', 'tutorinfo.user_id')
                    ->join('users', 'users.id', '=', 'tutorinfo.user_id')
                    ->where(['users.useractive' => 1])
                    ->where('coursesnames.coursename', 'LIKE', '%' . $subject . '%')
                    ->whereIn('tutorinfo.postalcode', $postlistarray)->orderBy('tutorinfo.id', 'DESC')->paginate(50);
                $tutorsearch = new Tutorsearch();
                $tutorsearch->saveTutorSearch($postcode, $subject);

                return view('frontEnd.home.search_profiles', compact('tutorinfo', 'subject', 'postcode'));
            } else {
                return view('frontEnd.home.search_profiles', compact('tutorinfo', 'subject', 'postcode'));
            }
        } else {
            return redirect('/');
        }
    }

    public function filterData(Request $request)
    {
        $tutorinfo = new TutorInfo();
        $data = $tutorinfo->searchFilter($request);
        return $data;
    }

    public function contactTutor(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:50',
            'email' => 'required|email|max:50',
            'tutortype' => 'required',
            'tutorid' => 'required',
            'description' => 'required',
        ],
            [
                'name.required' => 'naam is vereist!',
                'name.max' => 'naam mag niet langer zijn dan 50 tekens!',
                'email.required' => 'E-mailadres is vereist!',
                'email.email' => 'Moet een geldig e-mail adres zijn!',
                'tutortype.required' => 'leermeester is vereist',
                'description.required' => 'Beschrijving is vereist'
            ]
        );
        try {
            $tutor = TutorInfo::where(['id' => $request->tutorid])->first();
            $user = User::where(['id' => $tutor->user_id])->first();
            Mail::to('info@omegabijles.nl')->send(new ContactTutorMail($request, $tutor));
            Mail::to($user->email)->send(new ContactTutorMail($request, $tutor));
            Session::flash('tsuccess', 'Goede keuze! We hebben het bericht verzonden. De bijlesgever neemt zo snel mogelijk contact op.');
            return back();
        } catch (Exception $e) {
            // dd($e);
            Session::flash('terror', 'Er ging iets fout, probeer opnieuw');
            return back();
        }
    }

    public function sendIntentMail(Request $request)
    {
        $data = array(
            'name' => $request->name,
            'phone' => $request->phone,
            'postcode' => $request->postcode
        );

        Mail::send('emails.intentemail', $data, function ($message) use ($data) {
            $message->from('info@omegabijles.nl');
            //$message->to('emrul7427@gmail.com');
            $message->to('info@omegabijles.nl');
            $message->subject('Exit Intent Message');
        });

        return 'success';
    }
}
