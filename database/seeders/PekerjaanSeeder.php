<?php

namespace Database\Seeders;

use App\Models\Pekerjaan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PekerjaanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pekerjaan::create(['pekerjaan' => "PNS"]);
        Pekerjaan::create(['pekerjaan' => "Wiraswasta"]);
        Pekerjaan::create(['pekerjaan' => "Pedagang"]);
        Pekerjaan::create(['pekerjaan' => "Petani"]);
        Pekerjaan::create(['pekerjaan' => "Buruh"]);
        Pekerjaan::create(['pekerjaan' => "TNI"]);
    }
}
