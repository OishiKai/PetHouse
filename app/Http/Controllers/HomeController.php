<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Fosterquestionnaire;
use App\Conservationquestionnaire;
use App\Article;

class HomeController extends Controller
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
            // dd($data);
            return view('confirmQuestionnaireC', compact('user', 'data'));
        }
    }

    public function answerQuestionnaire(Request $request)
    {
        // dd($request);
        $data = $request->all();
        
        $user = \Auth::user();
        // dd($data);

        if ($user['status'] == 0){
            Fosterquestionnaire::store($data, $user);
            return view('home', compact('user'));
        }else{
            Conservationquestionnaire::store($data, $user);
            return view('home', compact('user'));
        }
    }

    public function article()
    {
        $user = \Auth::user();

        if ($user['status'] == '1'){
            return view('article');
        }else{
            return view('home');
        }
    }

    public function articleStore(Request $request)
    {
        $user = \Auth::user();
        $data = $request->all();
        // dd($data);
        Article::validator($request);
        
        Article::test($data, $user['id']);
        return view('home');
    }

    public function articleDetail($id)
    {
        $user = \Auth::user();
        $article = Article::where('id', $id)->get();
        $data = $article[0];

        // dd($data);
        return view('detail', compact('data','user','id'));
    }
}
