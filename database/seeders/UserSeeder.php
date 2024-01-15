<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Zoya Nujula Ramadhoni',
            'email' => 'C050422022@mahasiswa.poliban.ac.id',
            'email_verified_at' => now(),
            'password' => Hash::make('1234'),
            'roles' => 'mahasiswa',
        ]);

        User::factory(20)->create();
    }
}
