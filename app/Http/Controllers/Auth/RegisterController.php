<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\RegistFoster;
use App\Fosterquestionnaire;
use App\Conservationquestionnaire;

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
        if($data['status']==0){
            return Validator::make($data, [
                // users部分のバリデーション
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'password' => ['required', 'string', 'min:9', 'confirmed'],
                'kanjiFamilyName' => ['required', 'string','max:25'],
                'kanjiFirstName' => ['required', 'string', 'max:25'],
                'kanaFamilyName' => ['required', 'string', 'min:2','max:25', 'regex:/^[ァ-ヶ 　]+$/u'],
                'kanaFirstName' => ['required', 'string', 'min:2', 'max:25', 'regex:/^[ァ-ヶ 　]+$/u'],
                'phoneNumber' => ['required', 'string', 'regex:/^[0-9]{10}/u','max:11'],
                
                // registFoster部分のバリデーション

                'name' => ['required', 'string', 'min:3', 'max:25'],
                'age' => ['required', 'integer', 'between:18,100'],
                'zip21' => ['required', 'string', 'regex:/^[0-9]{3}/u','max:3'],
                'zip22' => ['required', 'string', 'regex:/^[0-9]{4}/u','max:4'],
                'addr21' => ['required', 'string', 'max:40'],
            ]);
        }else{
            return Validator::make($data, [
                // users部分のバリデーション
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'password' => ['required', 'string', 'min:9', 'confirmed'],
                'kanjiFamilyName' => ['required', 'string','max:25'],
                'kanjiFirstName' => ['required', 'string', 'max:25'],
                'kanaFamilyName' => ['required', 'string', 'min:2','max:25', 'regex:/^[ァ-ヶ 　]+$/u'],
                'kanaFirstName' => ['required', 'string', 'min:2', 'max:25', 'regex:/^[ァ-ヶ 　]+$/u'],
                'phoneNumber' => ['required', 'string', 'regex:/^[0-9]{10}/u','max:11'],
            ]);
        };

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
            $initQuestionnaire = Fosterquestionnaire::insertGetId(['user_email' => $data['email']]);
        }else{
            $initQuestionnaire = Conservationquestionnaire::insertGetId(['user_email' => $data['email']]);
        }
        return User::create([
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'kanjiFamilyName'=> $data['kanjiFamilyName'],
            'kanjiFirstName'=> $data['kanjiFirstName'],
            'kanaFamilyName'=> $data['kanaFamilyName'],
            'kanaFirstName'=> $data['kanaFirstName'],
            'phoneNumber'=> $data['phoneNumber'],
            'status'=> $data['status'],
        ]);
    }
}
