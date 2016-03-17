<?php
/**
 * Created by PhpStorm.
 * User: wal13
 * Date: 17/03/16
 * Time: 10:34
 */

namespace App\Http\Controllers;


use App\Chat;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Redirect;


class ChatController extends Controller
{
    public function chat(){

        $chat = new Chat();
        $messages = $chat->afficheMessage();

        return view('pages/chat', [
            'messages' => $messages
        ]);
    }

    public function store(Request $request){

        //Nouvel objet movie
        $chat = new Chat();

        $input = $request->all();

        foreach($input as $key => $value) {
            if($key != "_token" && $key != 'submit'){
                $chat->$key = $value;
            }
        }

        //Sauvegarde base de donnée
        $chat->save();


        return Redirect::to(route('chat'));
    }

    public function chatAjax(){
        $chat = new Chat();

        $lastMessage = $chat->lastMessage();

        return['lastMessage' => $lastMessage];
    }

}