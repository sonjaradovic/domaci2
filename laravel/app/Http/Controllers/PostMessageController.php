<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Message;

use Illuminate\Support\Facades\Redirect;

class PostMessageController extends Controller
{
    public function save(Request $req)
    {
        $message=new Message;
        $message->subject=$req->title;
        $message->message=$req->poruka;
        $message->professor_id=1;
        $message->save();

        return Redirect::back()->with('message','Operation Successful !');
    }

    public function saveProfessor(Request $req)
    {
        $message=new Message;
        $message->subject=$req->title;
        $message->message=$req->poruka;
        $message->professor_id=0;
        $message->save();

        return Redirect::back()->with('message','Operation Successful !');
    }
}
