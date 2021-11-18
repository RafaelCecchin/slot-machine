<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;
use App\User;

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
        $this->middleware('guest:web')->except('logout');
        $this->middleware('guest:admin')->except('logout');
    }


    public function validateLogin(Request $request) {

        $validator = validator($request->all(), [
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'string', 'min:8']
        ]);

        if ($validator->fails()) {
            return redirect()->route('login')
                ->withErrors($validator)
                ->withInput();
        }

        $credentials = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if ( Auth::attempt($credentials) ) {
            
            $user = Auth::user();

            if ($user->id_type == 1) {
                Auth::guard('admin')->attempt($credentials);
            }

            return redirect()->route('home');

        } else {
            return redirect()->route('login')
                ->withErrors(['password' => trans('auth.failed')])
                ->withInput();
        }
    }

    public function index() {
        
        $hasUser = User::all()->count() != '0'; 
        
        if (!$hasUser) {
            return redirect()->route('register');
        }
        
        return view('auth.login');
    }
}
