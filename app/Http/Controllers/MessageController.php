<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $messages = Message::with('user')->get();
        return view('chat',compact('messages'));
    }


    public function store(Request $request)
    {
//        return $request->all();
        $messages = new Message;
        $messages->text = $request->text;
        $messages->user_id = auth()->user()->id;
        $messages->save();
        return redirect('/chat');

    }
}
