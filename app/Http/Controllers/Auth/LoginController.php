<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

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

    public function authenticate(Request $request)
    {
        $credentials = [
            'email' => $request['email'],
            'password' => $request['password'],
            'status' => 1,
            'is_deleted' => 0
        ];

        if (Auth::attempt($credentials)) {
            return \Redirect::intended(route('admin.home'));
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records or account does not exist. Please try again.',
        ]);
    }

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

    public function logout()
    {
        Session::flush();

        Auth::logout();

        return redirect()->route('login');
    }
}
