<?php

namespace Database\Seeders;

use App\Models\Desa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DesaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Desa::create([
            'name' => 'Kaling',
            'slug' => 'kaling',
            'description' => 'Kantor Kepala Desa Kaling',
            'negara' => 'Indonesia',
            'provinsi' => 'Jawa Tengah',
            'kabupaten' => 'Karanganyar',
            'kecamatan' => 'Tasikmadu',
            'kode_pos' => '57722',
            'latar_belakang' => 'Desa Kaling, yang terletak di Kecamatan Tasikmadu, Kabupaten Karanganyar, dikenal dengan komunitas yang dinamis dan beragam. 
            Wilayah desa ini dikelilingi oleh lahan persawahan yang subur, di mana padi menjadi tanaman utama. 
            Selain bertani, banyak warga yang bekerja sebagai PNS, buruh pabrik, atau mengelola usaha kecil menengah (UMKM). 
            Desa ini memiliki delapan dusun, yang masing-masing dipimpin oleh kepala dusun, dan dilengkapi dengan fasilitas pendidikan seperti taman kanak-kanak, sekolah dasar, serta sekolah menengah pertama. 
            Pelayanan kesehatan tersedia melalui puskesmas pembantu yang terletak di Dusun Kaling. 
            Desa ini juga mempertahankan tradisi dan budaya lokal, seperti upacara bersih desa yang masih dilaksanakan di beberapa dusun. 
            Asal usul nama desa konon pada zaman dahulu di dekat sungai Ndung Dermo yang terletak di Dusun Kaling, berdiri sebuah kerajaan ghaib bernama kerajaan Mbono Keling. Dari nama kerajaan ini kemudian terciptalah nama Desa Kaling. 
            Selain itu, masyarakat Desa Kaling dikenal aktif dalam berbagai organisasi kemasyarakatan, terutama karang taruna yang telah meraih berbagai prestasi di tingkat nasional. 
            Organisasi ini juga berperan penting dalam menggerakkan pemuda-pemudi desa untuk berpartisipasi dalam kegiatan sosial dan pengembangan masyarakat, termasuk dalam memajukan industri kerajinan yang menjadi salah satu kekuatan ekonomi desa, seperti mebel, kerajinan kulit, sangkar burung, dan batu bata.
            Dengan lingkungan yang kaya akan budaya dan sumber daya alam, Desa Kaling terus berkembang sebagai komunitas yang mandiri dan inovatif, tetap menjaga kearifan lokal sambil beradaptasi dengan perkembangan zaman.',
            'luas_wilayah' => '415',
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
        ]);
    }
}
