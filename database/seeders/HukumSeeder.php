<?php

namespace Database\Seeders;

use App\Models\Hukum;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HukumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Hukum::create([
            'name' => 'Peraturan Kepala Desa RAPBD 2024',
            'slug' => 'peraturan-desa-rapbd-2024',
        ]);
        Hukum::create([
            'name' => 'Peraturan Tes',
            'slug' => 'peraturan-tes',
        ]);
    }
}
