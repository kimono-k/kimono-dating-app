<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

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
        return Validator::make($data, [
            'username' => ['required', 'string', 'max:255'],
            'password' => ['required', 'string'],
            'first_name' => ['required', 'string'],
            'last_name' => ['required', 'string'],
            'email' => ['required', 'string'],
            'country' => ['required', 'string'],
            'province' => ['required', 'string'],
            'date_of_birth' => ['required'],
            'gender' => ['required', 'string'],
            'sexual_orientation' => ['required', 'string'],
            'preference' => ['required', 'string'],
            'university' => ['required', 'string'],
            'passions' => ['required', 'string'],
            'user_picture' => ['required', 'mimes:jpg, png'],
            'about_me' => ['required', 'string']
            //'likes' => ['required', 'numeric'],
            //'likes_given' => ['required', 'numeric'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
            'username' => $data['username'],
            'password' => Hash::make($data['password']),
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'email' => $data['email'],
            'country' => $data['country'],
            'province' => $data['province'],
            'date_of_birth' => $data['date_of_birth'],
            'gender' => $data['gender'],
            'sexual_orientation' => $data['sexual_orientation'],
            'preference' => $data['preference'],
            'university' => $data['university'],
            'passions' => $data['passions'],
            'user_picture' => $data['user_picture'],
            'about_me' => $data['about_me']
            // 'likes' => $data['likes'],
            // 'likes_given' => $data['likes_given']
        ]);
    }
}
