<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

use App\Fosterquestionnaire;
use App\Conservationquestionnaire;
use App\Article;
use App\Favorite;

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

    public function articleList(Request $request)
    {
        $user = \Auth::user();
        $data = $request->all();
        // dd($data);
        if ($user['status'] == 0){
            return redirect()->route('myPage');
        }else{
            $articles = null;
            if (Article::where('user_id', $user['id'])->exists()){
                $articles = Article::where('user_id', $user['id'])->get();
            }
            return view('articleList', compact('user', 'articles'));
        }
    }

    public function articleDelete($id)
    {
        $user = \Auth::user();
        $articles = Article::where('id', $id)->get();
        if ($user['status'] == '0' || $user['id'] != $articles[0]['user_id']){
            return redirect()->route('myPage');
        }else{
            $articles = Article::where('id', $id)->delete();
            return redirect()->route('articleList');
        }
    }

    public function articleFavorite()
    {
        $user = \Auth::user();
        if (Favorite::where('user_id', $user['id'])->exists()){
            $datas = Favorite::where('user_id', $user['id'])->get();
            $ex = array();
            // $ids = array();
            foreach ($datas as $data){
                $extensions = explode('&', $data['extensions']);
                $ex[] = $extensions[0];
                // $ids[] = $data['id'];
            }
            return view('articleFavorite', compact('user', 'key', 'datas', 'ex'));

        }else{
            $datas = null;
            return view('articleFavorite', compact('user', 'datas'));
        }
    }
}
