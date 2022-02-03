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
        $messages = null;
        if (Message::where('toId', $user['id'])->exists()){
            $messages = Message::where('toId', $user['id'])->orderBy('id', 'desc')->get();
        }
        if ($user['status'] == '0'){
            if ( $messages != null) {
                foreach( $messages as $msg) {
                    $article = Article::where('id', $msg['articleId'])->get();
                    $titles[] = $article[0]['title'];
                }
                return view('fosterMessage', compact('user', 'messages', 'titles'));
            }else{
                return view('fosterMessage', compact('user', 'messages'));
            }
        }else{
            return view('conservationMessage', compact('user', 'messages'));
        }
    }

    public function messageForm($id, $to)
    {
        $user = \Auth::user();
        $article = Article::where('id', $id)->get();
        $data = $article[0];

        if ($user['status'] == '0'){  
            $myDatas = RegistFoster::where('user_email', $user['email'])->get();
            $myData = $myDatas[0];
            // dd($data);
            return view('messageForm', compact('user', 'data', 'to', 'myData', 'id'));
        }else{
            $msgData = Message::where('id', $to)->get();
            $msg = $msgData[0];
            return view('messageForm', compact('user', 'data', 'msg', 'id'));
        }
    }


    public function sendMessage(Request $request)
    {
        $user = \Auth::user();
        $data = $request->all();
        
        if ($user['status'] == '0'){
            Message::storeF($data);
        }else{
            // dd($data);
            Message::storeC($data);
        }
        return redirect()->route('home');
    }
    
    public function messageDetail($id)
    {
        $user = \Auth::user();
        
        $message = Message::where('id', $id)->get();
        $msg = $message[0];
        $article = Article::where('id', $msg['articleId'])->get();
        $art= $article[0];
        $ext = explode('&', $art['extensions']);
        $ex = $ext[0];
        return view('messageDetail', compact('user', 'msg', 'art', 'ex'));
    }
}
