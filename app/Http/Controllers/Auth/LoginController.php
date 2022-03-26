<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Models\User;


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
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /**
     * Get the login username to be used by the controller.
     *
     *  @param  array  $data
     *  @return \App\Models\user
     */

    public function login(Request $request)
    {
        $this -> validate($request, [
            'email' => 'required|string',
            'password' => 'required|string|min:6'
        ]);

        $loginType = filter_var($request->input('email'), FILTER_VALIDATE_EMAIL) ? 'email' : 'email';
        
        $login = [
            $loginType => $request->input('email'),
            'password' => $request->input('password')
        ];

        if(auth()->attempt($login)){
            return redirect()->route('home');
        }

        return redirect()->route('login')->with('error', 'Email or Password is incorrect');

    }
}
