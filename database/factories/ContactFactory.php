<?php

namespace Database\Factories;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Contact>
 */
class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $name = $this->faker->name();
        $phoneNumber = $this->faker->phoneNumber();
        $description = $this->faker->text();
        $dateOfBirth = $this->faker->date();

        return [
            'name' => $name,
            'phone_number' => $phoneNumber,
            'description' => $description,
            'date_of_birth' => $dateOfBirth

        ];
    }
}
