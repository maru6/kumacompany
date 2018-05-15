<?php

namespace App\Observers;

use App\Models\Message;
use App\Notifications\Messaged;


// creating, created, updating, updated, saving,
// saved,  deleting, deleted, restoring, restored

class ReplyObserver
{
    public function created(Message $massage)
    {
        $message->notify(new Messaged($message));
    }
}
