<?php

namespace Database\Factories;

use App\Models\Eleve;
use App\Models\Model;
use Illuminate\Database\Eloquent\Factories\Factory;

class EleveFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Eleve::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "nom"=>$this->faker->firstName,
            "age"=>$this->faker->numberBetween($min = 10, $max = 100),
            "demandeur_emploi"=>$this->faker->boolean,
        ];
    }
}
