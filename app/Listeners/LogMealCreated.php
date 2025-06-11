<?php

namespace App\Listeners;

use App\Events\MealCreated;
use App\Mail\MealCreatedMail;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Contracts\Queue\ShouldQueue;

class LogMealCreated implements ShouldQueue
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

        Mail::to(auth()->user)->send(new MealCreatedMail($event->meal));
    }
}
