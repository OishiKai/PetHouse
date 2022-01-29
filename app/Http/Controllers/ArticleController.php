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

    
}
