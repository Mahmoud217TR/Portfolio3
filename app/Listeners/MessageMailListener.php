<?php

namespace App\Listeners;

use App\Mail\ContactFormMail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class MessageMailListener
{
    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
        Mail::to('mahmoudtr@gmail.com')->send(new ContactFormMail($event->data));
    }
}
