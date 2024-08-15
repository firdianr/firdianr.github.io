<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name' => 'UMKM',
            'slug' => 'umkm',
            'color' => 'bg-red-200',
        ]);

        Category::create([
            'name' => 'Berita',
            'slug' => 'berita',
            'color' => 'bg-blue-200',
        ]);
    }
}
