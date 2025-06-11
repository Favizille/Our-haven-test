<?php
namespace App\Facades;

use Illuminate\Support\Facades\Facade;

class MealFacade extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'meal-service';
    }
}
