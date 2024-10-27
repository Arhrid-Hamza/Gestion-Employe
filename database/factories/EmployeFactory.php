<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Employe;
use App\Models\Departement;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employe>
 */
class EmployeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'registration_number' => fake()->numberBetween(),
            'fullname' => fake()->name(),
            'departement_id' => \App\Models\Departement,
            'poste'=> fake()->word(),
            'hire_date'=> fake()->date(),
            'e_mail'=> fake()->unique()->safeEmail(),
            'phone'=> fake()->numberBetween(),
            'address'=> fake()->address(),
            'city'=> fake()->city(),
        ];
    }
}
