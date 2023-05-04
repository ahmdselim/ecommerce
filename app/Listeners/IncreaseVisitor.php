<?php

namespace App\Listeners;

use App\Events\AdVisitor;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class IncreaseVisitor
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(AdVisitor $event): void
    {

        if (!isset($_COOKIE["visitor"])) {
            setcookie("visitor",  $event->adModel->visitors + 1, time() + (86400 * 30), route('endUser.ads.show', request()->id)); // 86400 = 1 day

            $event->adModel->update([
                "visitors" => $event->adModel->visitors + 1
            ]);
        }
    }
}
