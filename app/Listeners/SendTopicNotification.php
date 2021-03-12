<?php

namespace App\Listeners;

use App\MessagePublished;
use App\Http\Resources\MessageResource;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Traits\MessageTrait;

class SendTopicNotification
{
    use MessageTrait;
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
     * @param  MessagePublished  $event
     * @return void
     */
    public function handle($event)
    {
        return $this->sendToSubscribers($event->message);
    }
}
