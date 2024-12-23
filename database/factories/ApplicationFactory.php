<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ApplicationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'application' => $this->faker->randomElement(['Under Graduate', 'Graduate']),
            'session' => $this->faker->randomElement(['January', 'June']),
            'interested_course' => $this->faker->word,
            'name' => $this->faker->name,
            'photo' => $this->faker->imageUrl(),
            'contact_number' => $this->faker->phoneNumber,
            'email' => $this->faker->safeEmail,
            'passport_number' => $this->faker->optional()->bothify('??########'),
            'nationality' => $this->faker->country,
            'date_of_birth' => $this->faker->date(),
            'religion' => $this->faker->randomElement(['Islam', 'Buddhism', 'Hinduism', 'Christianity', 'Others']),
            'gender' => $this->faker->randomElement(['Male', 'Female', 'Others']),
            'blood_group' => $this->faker->randomElement(['A+', 'A-', 'B+', 'B-', 'O+', 'O-', 'AB+', 'AB-']),
            'address' => $this->faker->address,
            'post_code' => $this->faker->postcode,
            'city' => $this->faker->city,
            'state' => $this->faker->state,
            'country' => $this->faker->country,

            'father_name' => $this->faker->name('male'),
            'father_contact_number' => $this->faker->phoneNumber,
            'father_email' => $this->faker->safeEmail,
            'father_occupation' => $this->faker->jobTitle,
            'father_passport_number' => $this->faker->optional()->bothify('??########'),

            'mother_name' => $this->faker->name('female'),
            'mother_contact_number' => $this->faker->phoneNumber,
            'mother_email' => $this->faker->safeEmail,
            'mother_occupation' => $this->faker->jobTitle,
            'mother_passport_number' => $this->faker->optional()->bothify('??########'),

            'ssc' => $this->faker->word,
            'ssc_group' => $this->faker->word,
            'ssc_year' => $this->faker->year,
            'ssc_institution_name' => $this->faker->company,
            'ssc_grade_or_marks' => $this->faker->randomFloat(2, 3, 5),
            'ssc_ministary_of_education' => $this->faker->word,

            'hsc' => $this->faker->word,
            'hsc_group' => $this->faker->word,
            'hsc_year' => $this->faker->year,
            'hsc_institution_name' => $this->faker->company,
            'hsc_grade_or_marks' => $this->faker->randomFloat(2, 3, 5),
            'hsc_ministary_of_education' => $this->faker->word,

            'honors_degree' => $this->faker->word,
            'course' => $this->faker->word,
            'honors_degree_year' => $this->faker->year,
            'honors_degree_institution_name' => $this->faker->company,
            'honors_degree_grade_or_marks' => $this->faker->randomFloat(2, 3, 5),

            'attachments' => json_encode(['file1' => $this->faker->url, 'file2' => $this->faker->url]),
        ];
    }
}
