<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\RegistFoster;
use App\Fosterquestionnaire;
use App\Conservationquestionnaire;
use App\Article;
use App\Favorite;
use App\Message;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (Auth::check()) {
            $user = \Auth::user();
            return view('home', compact('user'));
        }
        return view('home');
    }

    public function home()
    {
        if (Auth::check()) {
            $user = \Auth::user();
            return view('home', compact('user'));
        }
        return view('home');
    }

    public function myPage()
    {
        $user = \Auth::user();
        if ($user['status'] == 0){
            return view('fosterMyPage', compact('user'));
        }else{
            return view('conservationMyPage', compact('user'));
        }
    }

    public function faq()
    {
        if (Auth::check()) {
            $user = \Auth::user();
            return view('faq', compact('user'));
        }
        return view('faq');
    }

    public function inquiry()
    {
        $user = \Auth::user();
        return view('inquiry', compact('user'));
    }

    public function questionnaire()
    {   
        $user = \Auth::user();

        if ($user['status'] == 0){
            // dd($user);
            return view('fosterQuestionnaire', compact('user'));
        }else{
            return view('conservationQuestionnaire', compact('user'));
        }
    }

    public function confirmQuestionnaire(Request $request)
    {   
        $user = \Auth::user();
        $data = $request->all();
        if ($user['status'] == 0){
            return view('confirmQuestionnaireF', compact('user', 'data'));
        }else{
            Conservationquestionnaire::validator($request);
            Conservationquestionnaire::storeImg($data['profileImg'], $user);
            $ex = $data['profileImg']->getClientOriginalExtension();
            $data['profileImg'] = $ex;
            // dd($data);
            return view('confirmQuestionnaireC', compact('user', 'data'));
        }
    }

    public function answerQuestionnaire(Request $request)
    {
        $data = $request->all();
        $user = \Auth::user();

        if ($user['status'] == 0){
            Fosterquestionnaire::store($data, $user);
            return view('home', compact('user'));
        }else{
            Conservationquestionnaire::store($data, $user);
            return view('home', compact('user'));
        }
    }

    public function articleDetail($id)
    {
        $user = \Auth::user();
        $article = Article::where('id', $id)->get();
        $data = $article[0];
        $extensions = explode('&', $data['extensions']);
        $files = array();
        for ($i = 0;$i < count($extensions); $i++){
            $j = $i + 1;
            $files[] = "{$id}({$j}).{$extensions[$i]}";
        }

        $favJudge = false;
        if (Favorite::where('user_id', $user['id'])->where('article_id', $id)->exists()){
            $favJudge = true;
        }else{
            $favJudge = false;
        }

        return view('detail', compact('data','user','id','files', 'favJudge'));
    }

    public function search($key)
    {
        $user = \Auth::user();
        $data = Article::where('species', $key)->get();
        return view('search', compact('user', 'key', 'data'));
    }

    public function favorite($id)
    {
        $user = \Auth::user();
        
        Favorite::insertGetId([
            'user_id' => $user['id'],
            'article_id' => $id
        ]);

        return redirect()->route('articleDetail', ['id' => $id]);
    }
}
