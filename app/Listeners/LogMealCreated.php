<?php

namespace App\Listeners;

use App\Events\MealCreated;
use Illuminate\Support\Facades\Log;

class LogMealCreated
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
    public function handle(MealCreated $event): void
    {
        Log::info('Meal created: ' . $event->meal->name . ' (ID: ' . $event->meal->id . ')');
    }
}
