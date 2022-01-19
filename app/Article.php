<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Article extends Model
{
    static function test($data, $user){
        $uuid = (string) Str::uuid();
        
        for ($i = 1; $i <= 5; $i++) {
            $file = $data["img{$i}"];
            $profileLogoName = "{$uuid}({$i}).".$data["img{$i}"]->getClientOriginalExtension();
            // dd($profileLogoName);
            $target_path = public_path('article_images/');
            $file->move($target_path, $profileLogoName);
        }

        if ($data['switch'] == '犬'){
            $store = Article::insertGetId([
                'status' => '募集中',
                'id' => $uuid,
                'user_id' => $user,
                'pet' => $data['switch'],
                'species' => $data['speciesDog'], 
                'title' => $data['title'], 
                'size' => $data['size'],
                'age' => "{$data['age']}{$data['month']}",
                'gender' => $data['gender'],
                'vaccination' => $data['vaccination'],
                'castration' => $data['castration'],
                'singlePerson' => $data['singlePerson'],
                'elderPerson' => $data['elderPerson'],
                'recruitmentPeriod' => $data['recruitmentPeriod'],
                'place' => $data['place'],
                'name' => $data['name'],
                'pattern' => $data['pattern'],
                'background' => $data['background'],
                'personality' => $data['personality'],
                'health' => $data['health'],
                'transaction' => $data['transaction'],
                'remarks' => $data['remarks'],
            ]);
        }else if ($data['switch'] == '猫'){
            $store = Article::insertGetId([
                'id' => $uuid,
                'user_id' => $user,
                'status' => '募集中',
                'pet' => $data['switch'],
                'species' => $data['speciesCat'], 
                'title' => $data['title'], 
                'size' => $data['size'],
                'age' => "{$data['age']}+{$data['month']}",
                'gender' => $data['gender'],
                'vaccination' => $data['vaccination'],
                'castration' => $data['castration'],
                'singlePerson' => $data['singlePerson'],
                'elderPerson' => $data['elderPerson'],
                'recruitmentPeriod' => $data['recruitmentPeriod'],
                'place' => $data['place'],
                'name' => $data['name'],
                'pattern' => $data['pattern'],
                'background' => $data['background'],
                'personality' => $data['personality'],
                'health' => $data['health'],
                'transaction' => $data['transaction'],
                'remarks' => $data['remarks'],
            ]);
        }
    }

    static function validator($request){
        $validatedData = $request->validate([
            'img1' => ['required'], 'img2' => ['required'], 'img3' => ['required'], 'img4' => ['required'], 'img5' => ['required'],
            'title' => ['required', 'string', 'min:10', 'max:30'],
            'name' => ['required', 'string', 'min:2', 'max:15'],
            'pattern'=> ['required', 'min:2', 'max:20'],
            'background' => ['required', 'min:10', 'max:200'],
            'personality' => ['required', 'min:10', 'max:100'],
            'health' => ['required', 'string', 'min:10', 'max:100'],
            'transaction' => ['required', 'min:10', 'max:100'],
            'remarks' => ['required', 'min:10', 'max:200'],
        ]);
    }
}