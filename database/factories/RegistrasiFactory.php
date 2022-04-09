<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Registrasi;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\registrasi>
 */
class RegistrasiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nama' => $this->faker->name(),
            'jk' => $this->faker->randomElement(['Laki-Laki', 'Perempuan']),
            'alamat' => $this->faker->address(),
            'agama' => $this->faker->randomElement(['Islam', 'Kristen', 'Katolik', 'Buddha', 'Hindu', 'Kong Hu Chu']),
            'asal' => $this->faker->company(),
            'jurusan' => $this->faker->randomElement(['RPL', 'TKJ', 'MMD', 'BDP', 'OTKP', 'TBG', 'HTL']),
        ];
    }
}
