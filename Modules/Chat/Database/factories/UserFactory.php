<?php

namespace Modules\Chat\Database\factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\Chat\Entities\User;

class UserFactory extends Factory
{

    protected $model = User::class;

    
    public function definition()
    {
        return [
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'password' => bcrypt('secret'),
            
        ];
    }
}

