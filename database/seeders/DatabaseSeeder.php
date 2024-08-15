<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Desa;
use App\Models\Dusun;
use App\Models\Pegawai;
use App\Models\Post;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class, 
            CategorySeeder::class, 
            DesaSeeder::class, 
            DusunSeeder::class, 
            PegawaiSeeder::class,
            LembagaSeeder::class,
            HukumSeeder::class,
        ]);
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // $firdian = User::create([
        //     'name' => 'Firdian Rahmawan',
        //     'username' => 'firdian_r',
        //     'email' => 'firdiangaming123@gmail.com',
        //     'email_verified_at' => now(),
        //     'password' => Hash::make('password'),
        //     'remember_token' => Str::random(10),
        // ]);

        // $umkm = Category::create([
        //     'name' => 'UMKM',
        //     'slug' => 'umkm',
        // ]);

        // Post::create([
        //     'title' => 'Desa Kaling',
        //     'author_id' => 1,
        //     'category_id' => 1,
        //     'slug' => 'desa-kaling',
        //     'body'=> 'Kaling adalah desa di kecamatan Tasikmadu, Karanganyar, Jawa Tengah, Indonesia. 
        //     Memiliki 7 buah dusun yaitu Celengan, Getasan, Kaling, Cabeyan, Jembangan, Dukuh dan Geneng. 
        //     Terletak di dekat perbatasan kecamatan Tasikmadu-Kebakkramat.
            
        //     Pekerjaan Penduduk desa Kaling adalah sebagai PNS, buruh pabrik, petani, pembuat batu bata, pembuat genting, tukang bangunan,tukang pijit, laundry, pedagang, bengkel dll. Di Desa Kaling terdapat sebuah pasar, yaitu Pasar Kaling.
            
        //     Lembaga pendidikan yang ada di Desa Kaling, antara lain:
        //     3 TK
        //     SD Negeri 01 Kaling
        //     SD Negeri 02 Kaling
        //     SD Negeri 03 Kaling
        //     SMP Negeri 3 Tasikmadu',
        // ]);

        // Post::factory(100)->recycle([
        //     $umkm,
        //     Category::factory(5)->create(),
        //     $firdian,
        //     User::factory(10)->create()
        // ])->create();
        // Post::factory(30)->recycle([
        //     User::all(),
        //     Category::all(),
        //     Dusun::all(),
        // ])->create();
    }
}
