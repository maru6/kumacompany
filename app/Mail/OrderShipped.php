<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class OrderShipped extends Mailable
{
    use Queueable, SerializesModels;

    protected $title;
    public $text;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name='haiping',$text='text')
    {
        $this->title = sprintf('%，谢谢您。', $name);
        $this->text = $text;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('email.emailcontent')
                    ->text('email.emailcontet_plain')
                    ->subject($this->title)
                    ->with([
                        'text' => $this->text,
                    ]);
    }
}
