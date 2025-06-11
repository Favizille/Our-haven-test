<?php

namespace App\GraphQL\Mutations;

use App\Facades\MealFacade;
use Illuminate\Support\Arr;

class MealResolver
{

    public function create($_, array $args)
    {
        return MealFacade::create(Arr::get($args, 'input'));
    }
}

