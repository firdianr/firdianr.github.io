<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Desa>
 */
class DesaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
{
    return [
        'name' => 'Kaling',
        'slug' => 'kaling',
        'negara' => 'Indonesia',
        'provinsi' => 'Jawa Tengah',
        'kabupaten' => 'Karanganyar',
        'kecamatan' => '57722',
        'kode_pos' => 'Kaling',
        'latar_belakang' => 'Kaling adalah desa di kecamatan Tasikmadu, Karanganyar, Jawa Tengah, Indonesia. Desa Kaling 8 buah dusun yaitu Celengan, Getasan, Kaling, Kauman, Cabeyan, Jembangan, Dukuh, dan Geneng. Walaupun terdapat 8 Dusun, namun desa Kaling dibagi ke dalam 6 Kebayanan (Kepala Dusun) yaitu Celengan-Cabeyan, Getasan, Kaling-Kauman, Jembangan, Dukuh, dan Geneng.Desa Kaling terletak di dekat perbatasan kecamatan Tasikmadu-Kebakkramat. ',
        'luas_wilayah' => '6835',
        'batas_utara' => 'Desa Macanan, Desa Nangsri, Desa Alastuwo',
        'batas_selatan' => 'Desa Pandeyan, Desa Karangmojo',
        'batas_timur' => 'Desa Pandeyan',
        'batas_barat' => 'Desa Brujul',
        'jumlah_penduduk' => '5234',
        'jumlah_penduduk_laki_laki' => '2218',
        'jumlah_penduduk_perempuan' => '3016',
        'jumlah_rw' => '12',
        'jumlah_rt' => '85',
        'jumlah_kk' => '1168',
        'wni_laki_laki' => '2403',
        'wni_perempuan' => '1417',
        'wna_laki_laki' => '10',
        'wna_perempuan' => '1',
        'islam' => '5124',
        'katholik' => '838',
        'protestan' => '571',
        'hindu' => '434',
        'budha' => '268',
        'lain_lain' => '19',
    ];
}
}
