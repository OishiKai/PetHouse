<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\RegistFoster;

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
    protected $redirectTo = '/home';

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
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'kanjiFamiliyName' => ['required', 'string', 'max:25'],
            'kanjiFirstName' => ['required', 'string', 'max:25'],
            'kanaFamiliyName' => ['required', 'string', 'max:25'],
            'kanaFirstName' => ['required', 'string', 'max:25'],
            'phonenumber' => ['required', 'integer', 'max:25'],
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
        // dd($data);
        if($data['status'] == 0){
            $postalcode = "{$data['zip21']}-{$data['zip22']}";
            $registfoster = RegistFoster::insertGetId([
                'user_email' => $data['email'],
                'name' => $data['name'], 
                'gender' => $data['gender'],
                'age' => $data['age'],
                'postalCode' => $postalcode,
                'address' => $data['addr21'],
            ]);
        }
        return User::create([
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'kanjiFamiliyName'=> $data['kanjiFamiliyName'],
            'kanjiFirstName'=> $data['kanjiFirstName'],
            'kanaFamiliyName'=> $data['kanaFamiliyName'],
            'kanaFirstName'=> $data['kanaFirstName'],
            'phonenumber'=> $data['phonenumber'],
            'status'=> $data['status'],
        ]);
    }
}
