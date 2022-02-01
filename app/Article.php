<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\File;
use Carbon\Carbon;

class Article extends Model
{
    public $timestamps = true;
    static function store($data, $user){
        // dd($data);
        Article::storeS3($data['exts'], $data['uuid'], $user);
        $store = Article::insertGetId([
            'status' => '募集中',
            'id' => $data['uuid'],
            'user_id' => $user,
            'pet' => $data['switch'],
            'species' => $data['species'], 
            'title' => $data['title'], 
            'size' => $data['size'],
            'age' => "{$data['age']}{$data['month']}",
            'gender' => $data['gender'],
            'vaccination' => $data['vaccination'],
            'castration' => $data['castration'],
            'singlePerson' => $data['singlePerson'],
            'elderPerson' => $data['elderPerson'],
            'keeper' => $data['keeper'],
            'name' => $data['name'],
            'pattern' => $data['pattern'],
            'background' => $data['background'],
            'personality' => $data['personality'],
            'health' => $data['health'],
            'transaction' => "{$data['zipCode']}{$data['prefecture']}{$data['city']}{$data['building']}",
            'remarks' => $data['remarks'],
            'extensions' => implode('&', $data['exts']),
            'created_at' => Carbon::now() 
        ]);
        
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

    static function storeImg($files, $uuid, $user){
        $ite = 1;
        $target_path = public_path("uploads/id={$user['id']}/");
        
        if (file_exists($target_path)) {
            $images = glob(public_path("uploads/id={$user['id']}/*"));
            foreach ($images as $img){
                unlink($img);
            }
            
        }

        foreach( $files as $file){
            $fileName = "{$uuid}({$ite}).".$file->getClientOriginalExtension();
            $file->move($target_path, $fileName);
            $ite = $ite + 1;
            $extensions[] = $file->getClientOriginalExtension();
        }
        
        return $extensions;
    }

    static function storeS3($imgs, $uuid, $user){
        $ite = 1;
        
        foreach ($imgs as $img){
            $path = Storage::disk('s3')->putFileAs('/article', new File("uploads/id={$user}/{$uuid}({$ite}).{$img}"), "{$uuid}({$ite}).{$img}", 'public');
            $ite = $ite + 1;
        }
    }
}
