<?php

namespace App\Observers;

use App\Models\Subscription;

class SubscriptionObserver
{
    /**
     * Handle the subscribe "created" event.
     *
     * @param  \App\Models\Subscription  $subscribe
     * @return void
     */
    public function created(Subscription $subscribe)
    {
        //
    }
}
