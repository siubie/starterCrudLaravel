<?php

namespace Database\Factories;

use App\Models\Mahasiswa;
use Illuminate\Database\Eloquent\Factories\Factory;

class MahasiswaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Mahasiswa::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'nama'=>$this->faker->name,
            'kelas' => $this->faker->address,
            'jurusan' => $this->faker->country,
            'nomor_handphone'=>$this->faker->phoneNumber,
        ];
    }
}
