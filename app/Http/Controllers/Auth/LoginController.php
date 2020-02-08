<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function username()
    {
        return "dni";
    }
    public function showLoginForm()
    {
        return view("layouts.login.template");
    }
    public function login(Request $request)
    {
        $this->validate($request, [
            'dni' => 'required|max:255',
            'password' => 'required',
        ]);
        if (Auth::attempt(['dni' => $request->dni, 'password' => $request->password, 'lock' => 0]))
        {
            return redirect()->intended('home')->with('alert', 'Bienvendo de nuevo!');
        }
        else
        {
           return back()->with("msg");
        }
    }

    }
