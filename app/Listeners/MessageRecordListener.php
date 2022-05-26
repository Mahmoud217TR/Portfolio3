<?php

namespace App\Listeners;

use App\Models\Message;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class MessageRecordListener
{
    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
        Message::create($event->data);
    }
}
