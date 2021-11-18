<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

use App\User;
use App\Administrator;
use App\Bettor;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
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
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        $users = User::all()->count();

        return Validator::make($data, [
            'first-name' => ['required', 'string', 'max:255'],
            'last-name' => ['required', 'string', 'max:255'],
            'birthday' => [ !!$users ? 'required' : '', 'date'],
            'cpf' => [ !!$users ? 'required' : '', 'cpf', 'max:14'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed']
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $type = User::all()->count() == '0' ? '1' /* Administrator */ : '2' /* User */; 
        
        $user = User::create([
            'first_name' => $data['first-name'],
            'last_name' => $data['last-name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'id_type' => $type
        ]);

        if ($user) {

            if ($type == 1) {
                Administrator::create([
                    'id_user' => $user->id
                ]);
            }

            if ($type == 2) {
                Bettor::create([
                    'id_user' => $user->id,
                    'cpf' => $data['cpf'],
                    'birthday' => $data['birthday'],
                ]);
            }

        }

        return $user;
    }

    public function index() {
        
        $hasUser = User::all()->count() != '0'; 
        
        return view('auth.register', compact('hasUser'));
    }
}
