<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

/**
 * Class movies
 * @package App
 * Modélise toutes mes requètes concernant la table movies
 */
class Chat extends Model
{
    protected $table = 'chat';

    public function afficheMessage(){
        $messages = DB::table('chat')
            ->orderBy('id', 'asc')
            ->get();

        return $messages;
    }

    public function lastMessage(){
        $messages = DB::table('chat')
            ->orderBy('id', 'desc')
            ->first();

        return $messages;
    }
}