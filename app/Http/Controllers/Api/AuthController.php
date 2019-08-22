<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class AuthController extends Controller
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
    // protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(){
      // $token =  $user->createToken('MyApp')-> accessToken;

    }

    public function register(Request $request){
      // $token =  $user->createToken('MyApp')-> accessToken;
      return User::create([
          'name' => $data['name'],
          'email' => $data['email'],
          'password' => Hash::make($data['password']),
          'firstname' => $data['firstname'],
          'lastname' => $data['lastname'],
          'phone' => $data['phone'],
          'role' => $data['role'],
          'gender' => $data['gender'],
          // 'address' => $data['address'],
          // 'state' => $data['state'],
          // 'city' => $data['city'],
          // 'postalcode' => $data['postalcode'],
          // 'country' => $data['country'],
      ]);
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:40'],
            'firstname' => ['required', 'string', 'max:40'],
            'lastname' => ['required', 'string', 'max:40'],
            'phone' => ['required', 'string', 'max:11'],
            'role' => ['required', 'string', 'max:255'],
            'gender' => ['required'],
            'email' => ['required', 'string', 'email', 'max:40', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
        ]);
    }


}
