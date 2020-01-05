<?php

namespace App\Observers;

use App\Series;

class SeriesObserver
{
    /**
     * Handle the series "created" event.
     *
     * @param  \App\Series  $series
     * @return void
     */
    public function created(Series $series)
    {
        //
    }

    /**
     * Handle the series "updated" event.
     *
     * @param  \App\Series  $series
     * @return void
     */
    public function updated(Series $series)
    {
        //
    }

    /**
     * Handle the series "deleted" event.
     *
     * @param  \App\Series  $series
     * @return void
     */
    public function deleted(Series $series)
    {
        //
    }

    /**
     * Handle the series "restored" event.
     *
     * @param  \App\Series  $series
     * @return void
     */
    public function restored(Series $series)
    {
        //
    }

    /**
     * Handle the series "force deleted" event.
     *
     * @param  \App\Series  $series
     * @return void
     */
    public function forceDeleted(Series $series)
    {
        //
    }
}
