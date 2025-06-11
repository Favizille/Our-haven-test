<?php

namespace App\GraphQL\Mutations\Auth;

use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
class LoginResolver
{
    public function __invoke($_, array $args)
    {
        $credentials = [
            'email' => $args['email'],
            'password' => $args['password'],
        ];

        if (!Auth::attempt($credentials)) {
            throw ValidationException::withMessages([
                'email' => ['The provided credentials are incorrect.'],
            ]);
        }

        $user = Auth::user();

        return [
            'token' => $user->createToken('graphql-token')->plainTextToken,
            'user' => $user,
        ];
    }
}
