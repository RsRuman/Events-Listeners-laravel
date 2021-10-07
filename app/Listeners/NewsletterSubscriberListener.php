<?php

namespace App\Listeners;

use App\Events\NewsletterSubscriberEvent;
use App\Mail\NewsletterSubscribeMail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class NewsletterSubscriberListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle(NewsletterSubscriberEvent $event)
    {
        DB::table('subscribers')->insert([
            'email' => $event->email
        ]);

        Mail::to($event->email)->send(new NewsletterSubscribeMail());
    }
}
