<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

use App\Fosterquestionnaire;
use App\Conservationquestionnaire;
use App\Article;

class ArticleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function article()
    {
        $user = \Auth::user();
        if ($user['status'] != '1'){
            return redirect()->route('myPage');
        }else{
            $question = Conservationquestionnaire::where('user_email', $user['email'])->get();
            // dd($question);
            if ($question[0]['answered'] == 'none'){
                return redirect()->route('myPage');
            }else{
                return view('articleRegister1', compact('user'));
            }
        }
    }
    
    public function articleRegisterA(Request $request)
    {
        $user = \Auth::user();
        $data = $request->all();
        // dd($data);
        // $uuid = (string) Str::uuid();
        // $ex = Article::storeImg($data['img'], $uuid, $user);
        // $data['uuid'] = $uuid;
        return view('articleRegister2', compact('user', 'data'));
    }

    public function articleRegisterB(Request $request)
    {
        $user = \Auth::user();
        $data = $request->all();
        // dd($data);
        return view('articleRegister3', compact('user', 'data'));
    }

    public function confirmArticle(Request $request)
    {
        $user = \Auth::user();
        $data = $request->all();
        // dd($data);
        $uuid = (string) Str::uuid();
        $ex = Article::storeImg($data['img'], $uuid, $user);
        $data['uuid'] = $uuid;
        // dd($ex);
        return view('articleConfirm', compact('user', 'data', 'ex'));
    }

    public function articleStore(Request $request)
    {
        $user = \Auth::user();
        $data = $request->all();
        // dd($data);
        Article::store($data, $user['id']);
        return view('home', compact('user'));
    }
}
