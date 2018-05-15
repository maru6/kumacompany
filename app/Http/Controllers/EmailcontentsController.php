<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Message;

class EmailcontentsController extends Controller
{
    public function show(Message $message)
    {
        $this->$message = $message;

    }
}
