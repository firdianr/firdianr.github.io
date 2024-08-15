<?php

namespace Database\Seeders;

use App\Models\Dusun;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DusunSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Dusun::create([
            'name' => 'Cabeyan',
            'slug' => 'cabeyan',
            'kadus' => 'Suwarno',
            'rw' => 1,
            'rt' => 5,
            'latar_belakang' => 'Dusun Cabeyan terletak di sisi … Desa Kaling yang berbatasan langsung dengan Desa Pandeyan. Karena letaknya, Dusun Cabeyan terbagi menjadi dua bagian yang berada di dua Desa yang berbeda yakni Desa Kaling dan Desa Pandeyan. Dusun Cabeyan sendiri memiliki … RW dan … RT. Hanya memiliki luas wilayah sekitar …., Dusun Cabeyan dihuni oleh … jiwa dengan mayoritas warga bekerja sebagai … .'
        ]);
        Dusun::create([
            'name' => 'Celengan',
            'slug' => 'celengan',
            'kadus' => 'Suwarno',
            'rw' => 1,
            'rt' => 5,
            'latar_belakang' => 'Dusun Celengan merupakan salah satu dusun yang kepemimpinannya (kebayanan) diatur dibawah satu orang yang sama bersamaan dengan dusun lain, yaitu Dusun Cabeyan. Dusun ini memiliki 1 RW dan 5 RT dengan warga berjumlah … jiwa. Meskipun tidak seramai dusun lainnya, Dusun Celengan menjadi dusun yang memiliki … penting seperti Kantor kepala Desa Kaling dan SD Negeri 3 Kaling. '
        ]);
        Dusun::create([
            'name' => 'Dukuh',
            'slug' => 'dukuh',
            'kadus' => 'Trias Timbul Winarno, A.Md',
            'rw' => 1,
            'rt' => 6,
            'latar_belakang' => 'Dusun Dukuh merupakan dusun yang terletak di'
        ]);
        Dusun::create([
            'name' => 'Geneng',
            'slug' => 'geneng',
            'kadus' => 'Tri Haryanto',
            'rw' => 2,
            'rt' => 10
        ]);
        Dusun::create([
            'name' => 'Getasan',
            'slug' => 'getasan',
            'kadus' => 'Suhardi, A.Md',
            'rw' => 1,
            'rt' => 5
        ]);
        Dusun::create([
            'name' => 'Jembangan',
            'slug' => 'jembangan',
            'kadus' => 'Aji Setyawan Damar Sayoga',
            'rw' => 2,
            'rt' => 11
        ]);
        Dusun::create([
            'name' => 'Kaling',
            'slug' => 'kaling',
            'kadus' => 'Verry Agus Merdekawan,S.Pd',
            'rw' => 1,
            'rt' => 4
        ]);
        Dusun::create([
            'name' => 'Kauman',
            'slug' => 'kauman',
            'kadus' => 'Verry Agus Merdekawan,S.Pd',
            'rw' => 1,
            'rt' => 4
        ]);
    }
}
