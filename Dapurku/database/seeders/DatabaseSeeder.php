<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Menu;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Menu::factory()->create([
            'namaMenu' => 'RENDANG',
            'catatanMenu' => 'Rendang adalah salah satu makanan tradisional Indonesia yang paling terkenal dan dicintai. Asalnya dari Minangkabau, Sumatera Barat, rendang adalah hidangan daging sapi yang dimasak perlahan dalam santan dan campuran rempah-rempah selama beberapa jam hingga daging menjadi sangat lembut dan bumbu meresap sempurna.',
            'bahanMenu' => '',
            'caraBuatMenu' => '',
        ]);

        Menu::factory()->create([
            'namaMenu' => 'SOTO LAMOGAN',
            'catatanMenu' => 'Soto Lamongan adalah salah satu variasi soto yang berasal dari Lamongan, Jawa Timur, Indonesia. Soto ini terkenal dengan kuahnya yang gurih dan berwarna kuning kecoklatan, hasil dari rempah-rempah seperti kunyit dan ketumbar.',
            'bahanMenu' => '',
            'caraBuatMenu' => '',
        ]);

        Menu::factory()->create([
            'namaMenu' => 'NASI GORENG',
            'catatanMenu' => 'Nasi Goreng dalah hidangan nasional Indonesia yang telah mendapatkan pengakuan internasional. Ini adalah hidangan serbaguna yang dapat disajikan sebagai makanan pokok, sarapan, makan siang, atau makan malam.Nasi Goreng dibuat dengan menumis nasi putih yang sudah dimasak sebelumnya dengan kecap manis (saus kedelai manis), dan biasanya ditambahkan telur, ayam, dan udang.',
            'bahanMenu' => '',
            'caraBuatMenu' => '',
        ]);

        Menu::factory()->create([
            'namaMenu' => 'SATE PADANG',
            'catatanMenu' => 'Sate Padang adalah hidangan sate khas dari Padang, Sumatera Barat, Indonesia. Sate ini terbuat dari daging sapi, lidah, atau usus yang dipotong kecil-kecil dan ditusuk dengan tusukan sate. Yang membuat Sate Padang unik adalah bumbunya. Daging dimarinasi dengan campuran rempah-rempah seperti bawang putih, kunyit, jahe, dan serai sebelum dipanggang.',
            'bahanMenu' => '',
            'caraBuatMenu' => '',
        ]);

        Menu::factory()->create([
            'namaMenu' => 'ES CAMPUR',
            'catatanMenu' => 'Es Campur adalah minuman khas Indonesia yang sangat populer, terutama saat cuaca panas. Nama “Es Campur” secara harfiah berarti “es yang dicampur”, merujuk pada berbagai bahan yang dicampur bersama untuk membuat minuman ini.
            Es Campur biasanya terdiri dari campuran manis dan segar dari potongan buah-buahan seperti kelapa muda, alpukat, dan nangka, ditambah dengan cincau, agar-agar, dan mutiara sagu.',
            'bahanMenu' => '',
            'caraBuatMenu' => '',
        ]);

        Menu::factory()->create([
            'namaMenu' => 'BAKSO',
            'catatanMenu' => 'Bakso adalah makanan Indonesia yang terbuat dari daging sapi yang diolah menjadi bola-bola daging. Biasanya disajikan dengan kuah panas, mie, tauge, dan seledri.',
            'bahanMenu' => '',
            'caraBuatMenu' => '',
        ]);

        Menu::factory()->create([
            'namaMenu' => 'TEH MANIS',
            'catatanMenu' => 'Teh Manis adalah minuman yang sangat populer di Indonesia. Terbuat dari teh yang diseduh dan ditambahkan gula. Biasanya disajikan hangat atau dingin.',
            'bahanMenu' => '',
            'caraBuatMenu' => '',
        ]);

        Menu::factory()->create([
            'namaMenu' => 'MARTABAK MANIS',
            'catatanMenu' => 'Martabak Manis adalah makanan penutup populer di Indonesia. Terbuat dari adonan tepung yang dipanggang dan biasanya diisi dengan coklat, keju, dan kacang.',
            'bahanMenu' => '',
            'caraBuatMenu' => '',
        ]);

        Menu::factory()->create([
            'namaMenu' => 'GADO-GADO',
            'catatanMenu' => 'Gado-Gado adalah salad Indonesia yang terdiri dari berbagai sayuran rebus, tahu, dan tempe, disajikan dengan saus kacang.',
            'bahanMenu' => '',
            'caraBuatMenu' => '',
        ]);

        Menu::factory()->create([
            'namaMenu' => 'DURIAN',
            'catatanMenu' => 'Durian adalah buah tropis yang dikenal dengan aroma dan rasanya yang kuat. Meskipun kontroversial, banyak orang di Indonesia sangat menyukai buah ini.',
            'bahanMenu' => '',
            'caraBuatMenu' => '',
            // 'durasiMenu' => 'test@example.com',
            // 'porsiMenu' => 'test@example.com',
        ]);
    }
}
