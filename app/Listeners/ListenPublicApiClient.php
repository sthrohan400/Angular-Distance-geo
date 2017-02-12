<?php

namespace App\Listeners;

use App\Events\AddPublicApiClient;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class ListenPublicApiClient
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
     * @param  AddPublicApiClient  $event
     * @return void
     */
    public function handle(AddPublicApiClient $event)
    {
        
        return $event->addClient();
    }
}
