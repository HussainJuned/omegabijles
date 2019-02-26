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
use Hash;
use Illuminate\Support\Facades\Route;

class HomeController extends Controller
{
    
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        return view('tutor.home');  
    }

    public function evaluatie(){
      return view('tutor.evaluatie');
    }
    public function maandevaluatie(){
      return view('tutor.maandevaluatie');
    }

    public function documenten(){
      return view('tutor.documenten');
    }

    public function email(){
      return view('tutor.email');
    }

    public function uren(){
      return view('tutor.uren');
    }

    public function changePassForm(){
        return view('tutor.changepass');
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
          'confirm_password.required' => 'bevestig  wachtwoord moet minder dan 21 tekens lang zijn',
          'confirm_password.min' => 'bevestig wachtwoord moet meer dan 7 tekens bevatten',
          'confirm_password.max' => 'bevestig wachtwoord moet minder dan 21 tekens lang zijn',
          'confirm_password.same' => 'nieuw wachtwoord en wachtwoord bevestigen is niet correct',
        ]);

        $id = Auth::id();
        $newpassword = Hash::make($request['new_password']);

        $password = User::find($id)->password;

        if(Hash::check($request['old_password'], $password))
        { 
            $user = new User();
            $user->where('id', $id)
            ->update(['password' => $newpassword]);
            return redirect('tutor/home');
        }else{
            Session::flash('mismatch', 'Oud wachtwoord komt niet overeen');
            return redirect('/tutor/changepassword');
        }
    }

    
}


