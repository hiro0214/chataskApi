<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MessageController extends Controller
{
    public function index(Request $request) {
        $messages = Message::all();
        return $messages;
    }

    public function create(Request $request) {
        $data = $request->all();
        $message = new Message;
        $message->fill($data)->save();
    }

}
