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
        $firstName = $this->faker->name();
        $lastName = $this->faker->lastName();
        $phoneNumber = $this->faker->phoneNumber();
        $dateOfBirth = $this->faker->dateTimeThisDecade();

        return [
            'first_name' => $firstName,
            'last_name' => $lastName,
            'phone_number' => $phoneNumber,
            'date_of_birth' => $dateOfBirth

        ];
    }
}
