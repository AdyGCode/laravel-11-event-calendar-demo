<?php

namespace Database\Seeders;


use App\Models\Calendar;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class CalendarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $events = [
        [
            'id' => 1,
            'title' => 'Breakfast',
            'description' => 'Pancakes! 🥞',
            'start_at' => Carbon::today()->subDays(10),
        ],
        [
            'id' => 2,
            'title' => 'Meeting with Pamela',
            'description' => 'Work stuff',
            'start_at' => Carbon::tomorrow(),
            'end_at' => Carbon::tomorrow(),
        ],

        ];

        foreach ($events as $event) {

            Calendar::create($event);
        }

    }
}
