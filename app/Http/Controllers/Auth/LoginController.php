<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

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
        $this->middleware('auth')->only('logout');
    }

    // protected function authenticated(Request $request, $user)
    // {
    //     switch ($user->role) {
    //         case 'karyawan':
    //             return redirect('/dashboard-karyawan');
    //         case 'manager':
    //             return redirect('/dashboard-manager');
    //         case 'gm':
    //             return redirect('/dashboard-gm');
    //         case 'adminhr':
    //             return redirect('/dashboard-adminhr');
    //         default:
    //             return redirect('/home'); // fallback jika role tidak cocok
    //     }
    // }
}
