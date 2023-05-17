<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\MataKuliah;

class MataKuliahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MataKuliah::create([
            'kodemk' => 'INF206',
            'namamk' => 'RPL',
            'sks' => '3',
            'kelas' => 'A',
            'pengajar' => 'Rahmad Dawood',
            'ruang' => 'E03.01',
        ]);
        MataKuliah::create([
            'kodemk' => 'INF207',
            'namamk' => 'Graf',
            'sks' => '3',
            'kelas' => 'A',
            'pengajar' => 'Alim Misbullah',
            'ruang' => 'E03.02',
        ]);
    }
}
