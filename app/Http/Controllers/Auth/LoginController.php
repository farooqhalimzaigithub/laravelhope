<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use \Illuminate\Http\Request;
use App\Models\User;
use Auth;
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
     // protected $redirectTo = RouteServiceProvider::HOME;
    protected $redirectTo='/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

// ================this method use to remove the encrypt password====================
    protected function attemptLogin(Request $request)
{
    // dd($request->all());
    $user = User::where('email', $request->email)
        ->where('password', $request->password)
        ->first();
        // dd($user);
    if(!isset($user)){
        // dd('no');
        return false;
    }
    Auth::login($user);
    // dd('okk');
       return true;
}
// ================this method use to remove the encrypt password====================
}
