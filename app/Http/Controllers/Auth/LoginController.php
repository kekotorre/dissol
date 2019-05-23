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
  protected $redirectTo = '/';

  /**
  * Create a new controller instance.
  *
  * @return void
  */
  public function __construct()
  {
    $this->middleware('guest')->except('logout');
  }



    public function authenticated(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');
        if (!Auth::attempt(['email' => $email, 'password' => $password, 'confirmed' => 1])) {
            auth()->logout();
            return back()->with('confirmation', 'Necesita confirmar su cuenta. Revise su correo.');
        }
        return redirect($this->redirectPath());
    }


  public function redirectPath()
  {
    if (auth()->check() && auth()->user()->admin === 1) {
      return '/home';
    }else if (auth()->check() && auth()->user()->admin === 0) {
      return '/';
    }
  }
}
