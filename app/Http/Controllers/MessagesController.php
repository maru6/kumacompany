<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;
use App\Http\Requests\MessageRequest;

class MessagesController extends Controller
{

    public function message()
    {
        return view('message');
    }

    public function store(MessageRequest $request, Message $message)
    {
        $message->fill($request->all());
        $message->save();

        return view('message');
    }

}
