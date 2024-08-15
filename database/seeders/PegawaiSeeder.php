<?php

namespace Database\Seeders;

use App\Models\Pegawai;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pegawai::create([
            'nama' => 'Noto Birowo, SE',
            'jabatan' => 'Kepala Desa',
            'slug' => 'kepala-desa',
        ]);

        Pegawai::create([
            'nama' => 'Sartoto',
            'jabatan' => 'Sekretaris Desa',
            'slug' => 'sekretaris-desa',
        ]);

        Pegawai::create([
            'nama' => 'Verry Agus Merdekawan, S.Pd',
            'jabatan' => 'Kadus Kaling - Kauman',
            'slug' => 'kadus-kaling-kauman',
        ]);

        Pegawai::create([
            'nama' => 'Aji Setyawan Damar Sayoga',
            'jabatan' => 'Kadus Jembangan - Perum Kalingga',
            'slug' => 'kadus-jembangan-perum-kalingga',
        ]);

        Pegawai::create([
            'nama' => 'Trias Timbul Winarno, A.Md',
            'jabatan' => 'Kadus Dukuh',
            'slug' => 'kadus-dukuh',
        ]);

        Pegawai::create([
            'nama' => 'Tri Haryanto',
            'jabatan' => 'Kadus Geneng',
            'slug' => 'kadus-geneng',
        ]);
    
        Pegawai::create([
            'nama' => 'Suwarno',
            'jabatan' => 'Kadus Celengan - Cabeyan',
            'slug' => 'kadus-celengan-cabeyan',
        ]);
        
        Pegawai::create([
            'nama' => 'Suhardi, A.Md',
            'jabatan' => 'Kadus Getasan',
            'slug' => 'kadus-getasan',
        ]);

        Pegawai::create([
            'nama' => 'Irianto Raharjo',
            'jabatan' => 'Kasi Pemerintahan',
            'slug' => 'kasi-pemerintahan',
        ]);

        Pegawai::create([
            'nama' => 'Rossy Khoirul Anam',
            'jabatan' => 'Kasi Pelayanan',
            'slug' => 'kasi-pelayanan',
        ]);

        Pegawai::create([
            'nama' => 'Suroto',
            'jabatan' => 'Kasi Kesra',
            'slug' => 'kasi-kesra',
        ]);

        Pegawai::create([
            'nama' => 'Ari Dwi Indarti, SE',
            'jabatan' => 'Kaur Umum dan TU',
            'slug' => 'kaur-umum-dan-tu',
        ]);

        Pegawai::create([
            'nama' => 'Eni Dwi Hastuti, ST',
            'jabatan' => 'Kaur Perencanaan',
            'slug' => 'kaur-perencanaan',
        ]);
    }
}
