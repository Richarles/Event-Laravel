<?php

namespace App\Listeners;

use App\Events\EventNavegation;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class CountNavegation implements ShouldQueue
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
     * @param  \App\Events\EventNavegation  $event
     * @return void
     */
    public function handle(EventNavegation $event)
    {
        $event->products->qt_acessos++;
        $event->products->save();
    }
}
