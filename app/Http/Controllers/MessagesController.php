<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\OrderShipped;

class MessagesController extends Controller
{
    public $validatedData;

    public function __construct()
    {
  
    }

    public function message()
    {
        return view('message');
    }

    public function store(Request $request)
    {
        $text = $request->validate([
                'company_name' => 'required|min:3'
            ]);


        $name = 'urara';      
        $to = 'dnakv321@163.com';
        Mail::to($to)->send(new OrderShipped($name, $text));

        return dd($text);
    }

    // public function MessageNotification()
    // {

    //     $name = 'uraratarou';
    //     $text = $validatedData;
    //     $to = 'dnakv321@163.com';
    //     Mail::to($to)->send(new OrderShipped($name, $text));
    // }

}
