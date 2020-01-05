<?php

namespace App\Observers;

use App\Video;

class VideosObserver
{
    private function checkPublish(Video $video)
    {
        if ($video->serie->videos()->count() > config('series.count')) {
            $video->serie->publish = true;
        } else {
            $video->serie->publish = false;
        }
        $video->serie->save();
    }

    /**
     * Handle the video "created" event.
     *
     * @param  \App\Video $video
     * @return void
     */
    public function created(Video $video)
    {
        $this->checkPublish($video);
    }

    /**
     * Handle the video "updated" event.
     *
     * @param  \App\Video $video
     * @return void
     */
    public function updated(Video $video)
    {
        $this->checkPublish($video);
    }

    /**
     * Handle the video "deleted" event.
     *
     * @param  \App\Video $video
     * @return void
     */
    public function deleted(Video $video)
    {
        $this->checkPublish($video);
    }
}
