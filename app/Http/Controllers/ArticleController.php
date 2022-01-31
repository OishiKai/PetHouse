<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
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
        return view('articleRegister1', compact('user'));
    }
    
    public function articleRegisterA(Request $request)
    {
        $user = \Auth::user();
        $data = $request->all();
        // dd($data);
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
        return view('articleConfirm', compact('user', 'data'));
    }

    public function articleStore(Request $request)
    {
        $user = \Auth::user();
        $data = $request->all();
        dd($data);
        return view('articleConfirm', compact('user', 'data'));
    }
}
