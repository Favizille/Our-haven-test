<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Nuwave\Lighthouse\Testing\MakesGraphQLRequests;

class MealMutationTest extends TestCase
{
    use RefreshDatabase, MakesGraphQLRequests;

    /** @test */
    public function it_creates_a_meal()
    {
        $query = /** @lang GraphQL */ '
            mutation CreateMeal($input: CreateMealInput!) {
                createMeal(input: $input) {
                    id
                    name
                    description
                    price
                }
            }
        ';

        $variables = [
            'input' => [
                'name' => 'Jellof Rice',
                'description' => 'Sweet part jellof',
                'price' => 5000.00
            ]
        ];

        $response = $this->graphQL($query, $variables);

        $response
            ->assertJson([
                'data' => [
                    'createMeal' => [
                        'name' => 'Jellof Rice',
                        'description' => 'Sweet part jellof',
                        'price' => 5000.00
                    ]
                ]
            ]);

        $this->assertDatabaseHas('meals', [
            'name' => 'Jellof Rice',
            'description' => 'Sweet part jellof',
            'price' => 5000.00
        ]);
    }
}
