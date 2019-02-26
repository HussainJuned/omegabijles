<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Session;
use App\User;
use App\Mail\PasswordResetTokenMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Hash;
class ForgetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |
    */
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function index(){
        return view('tutor.forgetpass');
    }
    public function sendTokenToMail(Request $request){
        $this->validate($request, [
            'email' => 'required|email',
        ]);

        $user = User::where(['email' => $request->email])->first();
        if($user){
            $token = str_random(32);
            $updated = User::where(['id' => $user->id])->update([
                'password_reset_token' => $token
            ]);
            if($updated){
                Mail::to($user->email)->send(new PasswordResetTokenMail($user,$token));
                Session::flash('forgetemailsuccess', 'Er is een e-mail verzonden naar uw e-mailadres. Voer de stappen uit om uw wachtwoord opnieuw in te stellen');
                return view('tutor.forgetpass');
            }
        }else{
            Session::flash('invalidtokenerror', 'Geen gebruiker gevonden gekoppeld aan dit e-mailadres');
            return view('tutor.forgetpass');
        }
    } 

    public function verifyToken($token){
        $user = User::where(['password_reset_token' => $token])->first();
        if($user){
            User::where(['id' => $user->id])->update([
                'password_reset_token' => null
            ]);
            Session::put('resetpassword',true);
            Session::put('userId',$user->id);
            $changepass = true;
            return view('tutor.forgetchangepass',compact('changepass'));
        }else{
            Session::flash('invalidtokenerror', 'Ongeldige wachtwoordherstel-token');
            return view('tutor.forgetpass');
        }
    }  


    public function changePassword(Request $request){
        $this->validate($request, [
            'password' => 'required|min:8|max:20|confirmed',
            'password_confirmation' => 'required|min:8|max:20'
        ]);

        $resetpassword = session('resetpassword');
        $id = session('userId');

        if($resetpassword){
            $password = Hash::make($request['password']);
            $updated = User::where(['id' => $id])->update([
                'password' => $password
            ]);
            Session::put('resetpassword',false);
            Session::put('userId',null);
            if($updated){
                return redirect('tutor/login');
            }else{
                Session::flash('invalidtokenerror', 'Er ging iets mis');
                return view('tutor.forgetpass');
                
            }

        }

    }
}