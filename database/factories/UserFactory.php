<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

class UserFactory extends Factory
{
    protected $model = User::class;

    public function definition()
    {
        return [
            'name' => $this->faker->userName,  // Nama pengguna (username)
            'firstname' => $this->faker->firstName, // Nama depan
            'lastname' => $this->faker->lastName, // Nama belakang
            'email' => $this->faker->unique()->safeEmail, // Email unik
            'email_verified_at' => $this->faker->optional()->dateTime(), // Waktu verifikasi email (optional)
            'password' => bcrypt('password'), // Password terenkripsi
            'remember_token' => Str::random(10), // Token untuk 'remember me'
            'homebase' => $this->faker->numberBetween(1, 10), // Angka acak untuk homebase
        ];
    }
}
