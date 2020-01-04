<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Teacher::class, 5)->create()->each(function ($t) {
            $seriesCount = 5;
            for ($i = 0; $i < $seriesCount; $i++) {
                $series = factory(App\Series::class)->make();
                $series->teacher_id = $t->id;
                $series->save();
                $videosCount = 8;
                for ($j = 0; $j < $videosCount; $j++) {
                    $video = factory(App\Video::class)->make();
                    $video->series_id = $series->id;
                    $video->save();
                }
            }
        });
    }
}
