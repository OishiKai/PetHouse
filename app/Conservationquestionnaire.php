<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Conservationquestionnaire extends Model
{
    public $timestamps = false;
    
    static function validator($request){
        $validatedData = $request->validate([
            'activityName' => ['required', 'string', 'min:2', 'max:20'],
            'zip21' => ['required', 'string', 'regex:/^[0-9]{3}/u','max:3'],
            'zip22' => ['required', 'string', 'regex:/^[0-9]{4}/u','max:4'],
            'addr21' => ['required', 'string', 'max:40'],
            'shelter'=> ['required'],
            'pet' => ['required'],
            'area' => ['required'],
            'url' => ['required'],
            'profile' => ['required', 'string', 'min:20', 'max:150'],
        ]);
    }

    static function store($data, $user){
        $shelter = $data['shelter'];
        if ($data['otherText'] != null){
            $shelter[] = "{{$data['otherText']}}";
        }
        Conservationquestionnaire::where('user_email', $user['email'])->update([
            'answered' => '1',
            'conservationStatus' => $data['conservationStatus'],
            'activityName' => $data['activityName'],
            'address' => $data['address'],
            'postalCode' => $data['zipCode'],
            'shelter' => implode('&', $shelter),
            'pet' => implode('&', $data['pet']),
            'url' => implode('&', $data['url']),
            'profile' => $data['profile'],
        ]);
    }
}
