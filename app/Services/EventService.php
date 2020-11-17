<?php

namespace App\Services;

use App\Models\Event;

class EventService
{
    public function latestEvents() {
        return Event::all()->sortByDesc('started_at')->take(2);
    }
}