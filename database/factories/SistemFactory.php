<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Sistem>
 */
class SistemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'no_ktp' => $this->faker->unique()->bothify('6###############'),
            'nama' => $this->faker->name(),
            'kelamin' => $this->faker->randomElement(['laki-laki', 'perempuan']),
            'agama' => $this->faker->randomElement(['islam', 'protestan', 'katholik', 'hindu', 'budha', 'khonghucu']),
            'gol_darah' => $this->faker->randomElement(['A', 'AB', 'O', 'B']),
            'nama_ayah' => $this->faker->name(),
            'nama_ibu' => $this->faker->name(),
            'nama_dusun' => $this->faker->word(),
            'alamat' => $this->faker->address(),
            'rt' => $this->faker->randomElement(['01', '02', '03', '04', '05']),
            'rw' => $this->faker->randomElement(['01', '02', '03', '04', '05']),
            'no_telepon' => $this->faker->bothify('08##########'),
            'tempat_lhr' => $this->faker->city(),
            'tgl_lhr' => $this->faker->date(),
            'foto' => null,
            'kl_fisik' => $this->faker->randomElement(['sehat', 'sakit']),
            'kl_mental' => $this->faker->randomElement(['sehat', 'sakit']),
            'pendidikan' => $this->faker->randomElement(['SD', 'SMP', 'SMA', 'D1', 'D2', 'D3', 'S1', 'S2', 'S3']),
            'status_nikah' => $this->faker->randomElement(['nikah', 'belum nikah']),
            'warga_negara' => $this->faker->randomElement(['WNI', 'WNA']),
            'status_hidup' => $this->faker->randomElement(['hidup', 'mati']),
            'pekerjaan_id' => \App\Models\Pekerjaan::inRandomOrder()->first()->id,
            
        ];
    }
}
