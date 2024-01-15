<?php

namespace Database\Seeders;

use App\Models\Sistem;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SistemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Sistem::factory(30)->create();
    }
}
