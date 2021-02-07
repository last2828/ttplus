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

    /**
     * Handle the subscribe "updated" event.
     *
     * @param  \App\Models\Subscription  $subscribe
     * @return void
     */
    public function updated(Subscription $subscribe)
    {
        //
    }

    /**
     * Handle the subscribe "deleted" event.
     *
     * @param  \App\Models\Subscription  $subscribe
     * @return void
     */
    public function deleted(Subscription $subscribe)
    {
        //
    }

    /**
     * Handle the subscribe "restored" event.
     *
     * @param  \App\Models\Subscription  $subscribe
     * @return void
     */
    public function restored(Subscription $subscribe)
    {
        //
    }

    /**
     * Handle the subscribe "force deleted" event.
     *
     * @param  \App\Models\Subscription  $subscribe
     * @return void
     */
    public function forceDeleted(Subscription $subscribe)
    {
        //
    }
}
