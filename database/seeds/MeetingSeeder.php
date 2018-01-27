<?php

use Illuminate\Database\Seeder;

class MeetingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Meeting::class, 500)
            ->create()
            ->each(function ($meeting) {
                $race = factory(App\Race::class)
                    ->create();
                for ($i = 1; $i < random_int(6, 8); $i++) {
                    $race->competitors()->save(factory(App\Competitor::class)->make(['position' => $i]));
                }
                $meeting->races()->save($race);


            });

    }
}
