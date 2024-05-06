<?php

namespace Database\Factories;

use App\Models\Client;

use Illuminate\Database\Eloquent\Factories\Factory;

class ClientFactory extends Factory
{
    protected $model=Client::class;
    public function definition()
    {
        return [
            'nom' => $this->faker->lastName,
            'prenom' => $this->faker->firstName,
            'dateNaiss' => $this->faker->date,
            'tel' => $this->faker->randomNumber(8),
            'adresse' => $this->faker->address,
        ];
    }
}
