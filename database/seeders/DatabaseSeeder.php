<?php

namespace Database\Seeders;
use App\Models\User;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        User::create([
            'name' => 'Mahasiswa',
            'email' => 'mhs@siau.com',
            'npm' => "2108107010031",
            'level' => 'mahasiswa',
            'password' => bcrypt("12345678"),
        ]);

        User::create([
            'name' => 'Admin',
            'email' => 'admin@siau.com',
            'npm' => "1234",
            'level' => 'admin',
            'password' => bcrypt("12345678"),
        ]);

        User::create([
            'name' => 'Dosen',
            'email' => 'dosen@siau.com',
            'npm' => "7890",
            'level' => 'dosen',
            'password' => bcrypt("12345678"),
        ]);
    }
}
