<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Message extends Model
{
    static function store($data){
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
}
