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

class MessageController extends Controller
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

    public function message()
    {
        $user = \Auth::user();

        if ($user['status'] == '0'){
            return view('fosterMessage', compact('user'));
        }else{
            $messages = null;
            if (Message::where('toId', $user['id'])->exists()){
                $messages = Message::where('toId', $user['id'])->orderBy('created_at', 'desc')->get();
            }
            // dd($messages);
            return view('conservationMessage', compact('user', 'messages'));
        }
    }

    public function messageForm($id, $to)
    {
        $user = \Auth::user();
        $article = Article::where('id', $id)->get();
        $data = $article[0];
        $myDatas = RegistFoster::where('user_email', $user['email'])->get();
        $myData = $myDatas[0];
        // dd($data);
        return view('messageForm', compact('user', 'data', 'to', 'myData', 'id'));
    }

    public function sendMessage(Request $request)
    {
        $user = \Auth::user();
        $data = $request->all();
        
        Message::store($data);
        return redirect()->route('home');
    }
    
}
