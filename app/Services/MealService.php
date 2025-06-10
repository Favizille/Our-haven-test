<?php

namespace App\Services;

use App\Models\Meal;
use App\Events\MealCreated;
use Illuminate\Support\Facades\Auth;

class MealService
{

    public function __construct(protected Meal $meal)
    {}

    public function create(array $data): Meal
    {

        if (Auth::check()) {
            $data['user_id'] = Auth::id();
        }
        
        $meal = $this->meal->create($data);

        MealCreated::dispatch($meal);

        return $meal;
    }
}
