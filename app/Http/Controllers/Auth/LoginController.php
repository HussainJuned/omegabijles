<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;
use Session;
class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/tutor/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function showLoginForm(){
        return view('frontEnd.home.login');
    }

    public function authenicate(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:8|max:20',
        ],
        ['email.required' => 'E-mailadres is vereist!',
        'password.required' => 'Wachtwoord is vereist!',
        'password.min' => 'wachtwoord moet minimaal 8 tekens lang zijn!',
        'password.max' => 'wachtwoord mag niet langer zijn dan 20 tekens!']);
        $credentials  = ['email' => $request->email, 'password' => $request->password,'useractive' => 1];
        if (Auth::attempt($credentials, $request->has('remember'))){
                return redirect()->intended($this->redirectPath());
        }
        return redirect('/tutor/login')
            ->withInput($request->only('email', 'remember'))
            ->withErrors([
                'email' => 'de referentie komt niet overeen',
            ]);
    }

     protected function logout(Request $request){

        $this->guard()->logout();

        $request->session()->flush();

        $request->session()->regenerate();

        return redirect('/login');
    }
}
