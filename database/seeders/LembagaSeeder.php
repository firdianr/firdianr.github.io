<?php

namespace Database\Seeders;

use App\Models\Lembaga;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LembagaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Lembaga::create([
            'name' => 'Badan Permusyawaratan Desa',
            'slug' => 'badan-permusyawaratan-desa',
            'description' => 'Peraturan Daerah Kabupaten Karanganyar Nomor 11 Tahun 2015 Tentang Lembaga Kemasyarakatan Desa, Badan Permusyawaratan Desa yang selanjutnya disingkat BPD adalah lembaga yang melaksanakan fungsi pemerintahan yang anggotanya merupakan wakil dari penduduk Desa berdasarkan keterwakilan wilayah dan ditetapkan secara demokratis.'
        ]);
        Lembaga::create([
            'name' => 'Kader Pemberdayaan Masyarakat Desa',
            'slug' => 'kader-pemberdayaan-masyarakat-desa',
            'description' => 'Kader Pemberdayaan Masyarakat Desa atau disingkat KPMD adalah anggota masyarakat desa yang memiliki pengetahuan, kemauan dan kemampuan untuk menggerakkan masyarakat berpartisipasi dalam pemberdayaan masyarakat dan pembangunan partisipatif. Mereka berperan sebagai unsur kader yang bertugas memberikan pelayanan kepada masyarakat secara profesional, jujur, adil, dan merata dalam penyelenggaraan tugas negara, pemerintahan, dan pembangunan. '
        ]);
        Lembaga::create([
            'name' => 'Lembaga Pemberdayaan Masyarakat Desa',
            'slug' => 'lembaga-pemberdayaan-masyarakat-desa',
            'description' => 'Lembaga Pemberdayaan Masyarakat Desa (LPMD), sebagaimana diatur dalam Peraturan Daerah Kabupaten Karanganyar Nomor 11 Tahun 2015 tentang Lembaga Kemasyarakatan Desa, adalah sebuah organisasi yang dibentuk atas inisiatif masyarakat dan berperan sebagai mitra Pemerintah Desa dalam menampung serta mewujudkan aspirasi dan kebutuhan masyarakat di bidang pembangunan. Berdasarkan Pasal 21, LPMD memiliki beberapa tugas utama, yaitu menyusun rencana pembangunan secara partisipatif, menggerakkan swadaya gotong royong masyarakat, serta melaksanakan dan mengendalikan pembangunan. Untuk melaksanakan tugas-tugas tersebut, LPMD juga memiliki fungsi penting seperti menanamkan dan memupuk rasa persatuan dan kesatuan di kalangan masyarakat desa, mengoordinasikan perencanaan pembangunan, mengoordinasikan berbagai lembaga kemasyarakatan, merencanakan kegiatan pembangunan yang partisipatif dan terpadu, serta menggali dan memanfaatkan sumber daya kelembagaan untuk mendukung pembangunan di desa.'
        ]);
        Lembaga::create([
            'name' => 'Pemberdayaan Kesejahteraan Keluarga',
            'slug' => 'pemberdayaan-kesejahteraan-keluarga',
            'description' => 'Pemberdayaan Kesejahteraan Keluarga (PKK) yang diatur dalam Peraturan Daerah Kabupaten Karanganyar Nomor 11 Tahun 2015, adalah gerakan nasional yang dikelola dari, oleh, dan untuk masyarakat dengan tujuan mewujudkan keluarga yang beriman, bertaqwa, sehat, sejahtera, dan mandiri. PKK memiliki beberapa Pokja, yaitu Pokja I yang fokus pada Penghayatan dan Pengamalan Pancasila serta Gotong Royong; Pokja II pada Pendidikan dan Ketrampilan; Pokja III pada Pangan, Sandang, dan Perumahan; dan Pokja IV pada Kesehatan dan Lingkungan Hidup. Tugas PKK mencakup merencanakan dan melaksanakan program kerja sesuai kebutuhan masyarakat, serta melakukan supervisi dan evaluasi. Fungsi PKK adalah sebagai penyuluh, motivator, penggerak, dan fasilitator dalam melaksanakan program-program tersebut.'
        ]);
        Lembaga::create([
            'name' => 'Polindes & Posyandu',
            'slug' => 'polindes-posyandu',
            'description' => 'Pemberdayaan Kesejahteraan Keluarga (PKK) dan Posyandu berperan sebagai pusat kegiatan masyarakat dalam pelayanan kesehatan dan keluarga berencana, dengan fokus pada peningkatan kesehatan masyarakat. Di Dusun Cabeyan dan Dusun Celengan, Posyandu Salak dikelola oleh Ibu Sukiyem, dengan pelaksanaan kegiatan pada tanggal 4 setiap bulan. Di Dusun Dukuh, Posyandu Nanas dikelola oleh Rizka Novita Sary, yang kegiatan rutinnya diadakan pada tanggal 8 setiap bulan. Erni Setyoasih bertanggung jawab atas Posyandu Mangga di Dusun Geneng, dengan kegiatan pada tanggal 13 Agustus. Di Dusun Getasan, Sri Haryatmi mengelola Posyandu Jambu, yang diadakan pada tanggal 6 setiap bulan. Aji Setyawan Damar Sayoga bertanggung jawab atas Posyandu Pisang di Dusun Jembangan, yang pelaksanaannya pada tanggal 9 setiap bulan. Sementara itu, Fatima Safira mengelola Posyandu Duku di Dusun Kaling dan Dusun Kauman, yang kegiatan bulanannya diadakan pada tanggal 7.'
        ]);
        Lembaga::create([
            'name' => 'Karang Taruna Bhakti Karya',
            'slug' => 'karang-taruna-bhakti-karya',
            'description' => 'Karang Taruna adalah sebuah organisasi sosial yang berfokus pada pengembangan generasi muda dan memiliki peran penting di berbagai wilayah di Indonesia, baik di desa maupun kota. Menurut Peraturan Daerah Kabupaten Karanganyar Nomor 11 Tahun 2015 tentang Lembaga Kemasyarakatan Desa, Karang Taruna merupakan wadah bagi generasi muda untuk tumbuh dan berkembang berdasarkan kesadaran dan tanggung jawab sosial, dikelola dari, oleh, dan untuk masyarakat, terutama generasi muda di desa. Organisasi ini berperan dalam bidang kesejahteraan sosial dan secara fungsional dibina oleh Pemerintah Desa. Anggota Karang Taruna terdiri dari pemuda dan pemudi berusia sekitar 11 hingga 45 tahun.

Tugas utama Karang Taruna meliputi peningkatan persatuan dan kesatuan pemuda, membantu Pemerintah Desa dalam penyelenggaraan pemerintahan, pelaksanaan pembangunan, keamanan, serta menangani berbagai masalah sosial yang dihadapi generasi muda. Untuk melaksanakan tugas-tugas ini, Karang Taruna juga memiliki fungsi sebagai pelopor pembangunan desa, pembinaan persatuan pemuda, pencegahan kenakalan remaja dan penyalahgunaan narkotika, serta pemeliharaan kebersamaan dan rasa kesetiakawanan sosial.

Di Desa Kaling, Karang Taruna terbagi dalam beberapa sub-organisasi, yaitu: TRIMANUNGGAL di Kauman, TUNAS MUDA di Dukuh, ANDIKA di Kaling, BHAKTI MUDA di Geneng, KALINGGA BESTARI di Perum, SURYA GEMILANG di Cabeyan, CEMERLANG di Getasan, SEKAR ASIH di Jembangan, dan GEMILANG di Celengan. Setiap sub-organisasi ini memainkan peran aktif dalam mendukung kegiatan sosial dan pembangunan di desanya masing-masing.'
        ]);

        Lembaga::create([
            'name' => 'BABINSA',
            'slug' => 'babinsa',
            'description' => 'Bintara Pembina Desa atau disingkat Babinsa adalah pelaksana Danramil, Danposal, dan Danposal dalam melaksanakan fungsi pembinaan yang bertugas pokok melatih rakyat memberikan penyuluhan di bidang Hankam dan Pengawasan fasilitas dan prasarana Hankam di Pedesaan. Dalam pelaksanaan tugas Babinsa melaksanakan tugas sebagai berikut, Melatih satuan perlawanan rakyat, Memimpin perlawanan rakyat di pedesaan, Memberikan penyuluhan kesadaran bela negara, Memberikan penyuluhan pembangunan masyarakat desa di bidang Hankamneg, Melakukan pengawasan fasilitas/prasarana Hankam di pedesaan/kelurahan, Memberikan laporan tentang kondisi sosial di pedesaan secara berkala.'
        ]);
        Lembaga::create([
            'name' => 'BHABINKAMTIBMAS',
            'slug' => 'bhabinkamtibmas',
            'description' => 'Bhayangkara Pembina Keamanan dan Ketertiban Masyarakat (Bhabinkamtibmas) adalah petugas Polri yang bertugas di tingkat desa hingga kelurahan dengan wewenang untuk menjalankan fungsi pre-emtif melalui kemitraan dengan masyarakat. Tugas pokok Bhabinkamtibmas mencakup pembinaan masyarakat, deteksi dini, serta mediasi atau negosiasi guna menciptakan kondisi yang lebih kondusif di wilayah penugasannya. Dalam melaksanakan tugas-tugas ini, Bhabinkamtibmas melakukan berbagai kegiatan, seperti mengunjungi rumah-rumah di wilayah tanggung jawabnya, membantu pemecahan masalah, mengatur dan mengamankan kegiatan masyarakat, menerima informasi terkait tindak pidana, memberikan perlindungan sementara bagi orang yang tersesat atau menjadi korban kejahatan, serta ikut serta dalam membantu korban bencana alam dan wabah penyakit. Selain itu, Bhabinkamtibmas juga memberikan bimbingan dan petunjuk kepada masyarakat atau komunitas terkait permasalahan keamanan dan ketertiban masyarakat (Kamtibmas) serta pelayanan Polri.'
        ]);
        Lembaga::create([
            'name' => 'LINMAS & KST',
            'slug' => 'linmas-kst',
            'description' => 'Peraturan Daerah Kabupaten Karanganyar Nomor 11 Tahun 2015 tentang Lembaga Kemasyarakatan Desa mengatur tentang Perlindungan Masyarakat dan Kader Siaga Trantib, di mana Satuan Perlindungan Masyarakat (SATLINMAS) adalah kelompok warga yang dilatih dan dibekali dengan pengetahuan serta keterampilan untuk mengurangi dampak bencana, serta membantu dalam menjaga keamanan, ketentraman, dan ketertiban masyarakat, serta mendukung kegiatan kemasyarakatan. Berdasarkan Pasal 27, tugas pokok SATLINMAS meliputi merencanakan, menyiapkan, dan mengorganisasi potensi masyarakat dalam perlindungan terhadap bencana, baik itu bencana perang, alam, atau lainnya, serta meminimalkan dampak malapetaka dan gangguan keamanan yang mengancam jiwa dan harta benda. Dalam melaksanakan tugas tersebut, SATLINMAS juga berfungsi untuk mengorganisasi masyarakat, membentuk satuan perlindungan masyarakat dalam penanganan bencana dan gangguan keamanan, serta meningkatkan moral masyarakat dalam menghadapi segala kemungkinan bencana dan gangguan. Selain itu, SATLINMAS mendukung Pemerintah Daerah dalam meningkatkan kesadaran masyarakat dan aparatur pemerintah dalam mengantisipasi bencana serta menjaga keamanan dan ketertiban masyarakat.'
        ]);
        Lembaga::create([
            'name' => 'GAPOKTAN & P3A',
            'slug' => 'gapoktan-p3a',
            'description' => 'Badan Usaha Milik Desa (BUMDes) adalah entitas yang dibentuk untuk mengelola permodalan dan kegiatan usaha di tingkat desa dengan tujuan meningkatkan kesejahteraan sosial ekonomi masyarakat secara berkelanjutan. BUMDes mengoperasikan usahanya secara terbuka, mengupayakan peningkatan pendapatan masyarakat desa, dan wajib menyusun laporan pertanggungjawaban bulanan serta tahunan secara teratur. Salah satu contohnya adalah BUMDes Andal Berdikari yang didirikan pada 4 April 2020 berdasarkan Peraturan Desa (Perdes) Nomor 1 Tahun 2020, yang kemudian disesuaikan dengan Peraturan Menteri Desa Nomor 3 Tahun 2021 menjadi Perdes Nomor 2 Tahun 2021. BUMDes ini memiliki status berbadan hukum dengan sertifikat AHU-00712.AH.01.33.TAHUN 2021 dan beralamat di Kompleks Kantor Desa Kaling RT 003 RW 007, Desa Kaling, Kecamatan Tasikmadu, Kabupaten Karanganyar. Unit usaha yang dijalankan meliputi jasa jual kembali internet dan jasa sewa kipas kabut.'
        ]);
        Lembaga::create([
            'name' => 'BUMDES Andal Berdikari',
            'slug' => 'bumdes-andal-berdikari',
            'description' => 'Pangrukti Tani, atau Gabungan Kelompok Tani (GAPOKTAN), menurut Peraturan Menteri Pertanian Nomor 273/Kpts/ot.160/4/2007 tentang Pedoman Pembinaan Kelembagaan Petani, adalah kumpulan dari beberapa kelompok tani yang bergabung untuk bekerja sama dalam meningkatkan skala ekonomi dan efisiensi usaha. Tujuan dari pembentukan GAPOKTAN adalah agar kelompok tani dapat lebih berdaya guna dan berhasil guna, menyediakan sarana produksi pertanian, memperkuat permodalan, serta memperluas usaha tani dari sektor hulu hingga hilir. Selain itu, GAPOKTAN juga berfungsi untuk meningkatkan kerjasama dan pemasaran produk para petani.

Pengembangan kelompok tani dalam GAPOKTAN diarahkan pada peningkatan kemampuan setiap kelompok dalam melaksanakan fungsinya, meningkatkan kemampuan anggota dalam mengembangkan agribisnis, serta memperkuat kelompok tani menjadi organisasi yang kuat dan mandiri. Kelompok tani yang tergabung dalam GAPOKTAN harus menunjukkan karakteristik kekuatan dan kemandirian, yang dicirikan oleh pertemuan atau rapat anggota dan pengurus yang dilakukan secara berkala, penyusunan dan pelaksanaan rencana kerja bersama yang dievaluasi secara partisipatif, serta adanya aturan yang disepakati bersama. Selain itu, GAPOKTAN harus memiliki pencatatan organisasi yang rapi, memfasilitasi kegiatan usaha bersama di sektor hulu dan hilir, serta berorientasi pada usaha tani yang komersial dan pasar. GAPOKTAN juga berperan sebagai sumber informasi dan teknologi bagi petani, menjalin kerjasama dengan pihak lain, dan memupuk modal usaha baik melalui iuran anggota maupun penyisihan hasil usaha atau kegiatan GAPOKTAN.'
        ]);
    }
}
