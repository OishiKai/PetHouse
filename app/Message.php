<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Message extends Model
{
    static function storeF($data){
        $store = Message::insertGetId([
            'fromId' => $data['fromUserId'],
            'toId' => $data['toUserId'],
            'articleId' => $data['articleId'],
            'fromName' => $data['fromName'],
            'fromGender' => $data['fromGender'],
            'fromAge' => $data['fromAge'],
            'subject' => $data['subject'],
            'comment' => $data['comments'],
            'created_at' => Carbon::now()
        ]);
    }

    static function storeC($data){
        $store = Message::insertGetId([
            'fromId' => $data['fromUserId'],
            'toId' => $data['toUserId'],
            'articleId' => $data['articleId'],
            'fromName' => 'none',
            'fromGender' => 'none',
            'fromAge' => 'none',
            'subject' => $data['subject'],
            'comment' => $data['comments'],
            'created_at' => Carbon::now()
        ]);
    }
}
