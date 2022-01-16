<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Panier;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
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
    //protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    protected function authenticated()
    {
        Panier::where('user_id',0)->update(['user_id'=>Auth::user()->id]);
        if( Auth::user()->hasRole('administrator'))
        {
            return redirect(Route('Dashboard'));
        }
        if( Auth::user()->hasRole('user'))
        {
            return redirect(Route('site.home.index'));
        }
    }
    public function __construct()
    {
        $this->middleware('guest')->except('logout');    
    }
}
