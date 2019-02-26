<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Post;
use Mail;
use Session;
use App\User;
use App\Admin;
use App\TutorReview;
use App\TutorCourse;
use App\TutorExperience;
use App\TutorInfo;
use App\TutorTime;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon ;
use Hash;
class HomeController extends Controller
{

    public function __construct(){
        $this->middleware('auth.admin');
    }
    public function index(){
        $tutorinfo = DB::table('tutorinfo')->select('tutorinfo.*','tutorexperience.*','coursesnames.coursename', 'tutoravgrating.avgrating','users.useractive','users.email')
                  ->join('tutorexperience','tutorexperience.user_id','=','tutorinfo.user_id')
                  ->join('coursesnames','coursesnames.user_id','=','tutorinfo.user_id')
                  ->leftjoin('tutoravgrating','tutoravgrating.user_id','=','tutorinfo.user_id')
                  ->join('users', 'users.id','=', 'tutorinfo.user_id')
                  ->orderBy('tutorinfo.id', 'ASC')
                  ->get();
        
        $totalTutors = count($tutorinfo);
        $today = date("Y/m/d");
        $totaltutorlast7days = DB::table('users')->where('created_at', '>=', Carbon::now()->subDays(7))->count();
        return view('admin.home', compact('tutorinfo','totalTutors','totaltutorlast7days'));
    }

    public function changeStatus($id){

      $user = User::find($id);
      if($user->useractive == User::ACTIVE){
          $status = User::INACTIVE;
      }else{
        $status = User::ACTIVE;
      }
      $user = new User();
      $user->where(['id' => $id])->update([
              'useractive' => $status
              ]);
      return redirect('/admin');
    }

    public function tutorprofile($id){
        $users = User::find($id);
        $tutorInfo = TutorInfo::where(['user_id' => $id])->first();
        $tutorCourse = TutorCourse::where(['user_id' => $id])->get();
        $tutorExperience = TutorExperience::where(['user_id' => $id])->first();
        $tutorTime = TutorTime::where(['user_id' => $id])->first();

        $ratings = TutorReview::where('user_id', $id)->latest()->get();

		    $avg_rating = DB::table('tutoravgrating')->where(['user_id' => $id])->first();
        if($avg_rating){
          $avg_rating = round($avg_rating->avgrating);
        }else{
          $avg_rating = 0;
        }
        return view('frontEnd.home.tutorprofile', compact('users','tutorInfo','tutorCourse','tutorExperience','tutorTime', 'avg_rating', 'ratings'));
    }

    public function changePassForm(){
        return view('admin.changepass');
    }

     public function changepass(Request $request){
        $this->validate($request, [
            'old_password' => 'required',
            'new_password' => 'required|min:8|max:20',
            'confirm_password' => 'required|min:8|max:20|same:new_password',
        ],
        [
          'old_password.required' => 'oud wachtwoord is vereist',
          'new_password.required' => 'nieuw wachtwoord is vereist',
          'new_password.min' => 'nieuw wachtwoord moet meer dan 7 tekens bevatten',
          'new_password.max' => 'nieuw wachtwoord moet minder dan 21 tekens lang zijn',
          'confirm_password.required' => 'bevestig  wachtwoord is vereist',
          'confirm_password.min' => 'bevestig wachtwoord moet meer dan 7 tekens bevatten',
          'confirm_password.max' => 'bevestig wachtwoord moet minder dan 21 tekens lang zijn',
          'confirm_password.same' => 'nieuw wachtwoord en wachtwoord bevestigen is niet correct',
        ]);

        $id = Auth()->guard('admins')->id();
        $newpassword = Hash::make($request['new_password']);

        $password = Admin::find($id)->password;

        if(Hash::check($request['old_password'], $password))
        { 
            $admin = new Admin();
            $admin->where('id', $id)
            ->update(['password' => $newpassword]);
            return redirect('admin');
        }else{
            Session::flash('mismatch', 'Oud wachtwoord komt niet overeen');
            return redirect('/admin/changepassword');
        }
    }

    public function showEmail(){
      return view('admin.email');
    }
}
