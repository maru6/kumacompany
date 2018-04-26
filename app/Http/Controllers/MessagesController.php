<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessagesController extends Controller
{
    public function message()
    {
        return view('message');
    }

    public function store()

}
