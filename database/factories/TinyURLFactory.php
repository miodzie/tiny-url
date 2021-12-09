<?php

namespace Database\Factories;

use App\Models\TinyUrl;
use Illuminate\Database\Eloquent\Factories\Factory;

class TinyURLFactory extends Factory
{
  public function definition()
  {
    return [
      'full_url' => $this->faker->url(),
      'token' => TinyUrl::generateUniqueToken(),
    ];
  }
}