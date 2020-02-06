<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{

    public function index(Request $request) {
        $messages = Message::where('group_id', $request->group_id)->with('user')->get();
        return $messages;
    }

    public function create(Request $request) {
        $data = $request->all();
        $message = new Message;
        $message->fill($data)->save();
    }

}
