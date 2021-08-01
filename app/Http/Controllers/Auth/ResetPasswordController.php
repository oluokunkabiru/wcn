<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Support\Facades\Auth;

class ResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;

    /**
     * Where to redirect users after resetting their password.
     *
     * @var string
     */
    // protected $redirectTo = RouteServiceProvider::HOME;
    protected $redirectTo;
    public function redirectTo()
    {
        switch(Auth::user()->role){
            case 'admin':
            $this->redirectTo = route('admindashboard'); //'/'. app()->getLocale(). '/users/admin';
            return $this->redirectTo;
                break;
            case 'user':
                    $this->redirectTo = route('usersdashboard'); //'/'. app()->getLocale(). '/users/dashboard';
                return $this->redirectTo;
                break;
            default:
                $this->redirectTo = route('login') ;//'/'. app()->getLocale(). '/login';
                return $this->redirectTo;
        }
    }

}
