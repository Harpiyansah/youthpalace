<?php

namespace Database\Seeders;

use App\Models\Kamar;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class KamarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kamar')->insert([
            'image' => 'https://thepapandayan.com/wp-content/uploads/2018/03/pic-room-president-suites.jpg',
            'tipe_kamar' => 'The Ambassador',
            'fasilitas_kamar' => 'Kasur (king-size), kamar mandi (shower dan bath tub), mesin kopi, AC, LED TV 40 inch, balkon, sofa, lemari (tiga pintu), sarapan, makan siang, makan malam, jasa cuci pakaian, dan transpostasi ke bandara.',
            'harga_kamar' => 'Harga per malam: Rp1,430,946',
            'jumlah_kamar' => 10
        ]);
        
        DB::table('kamar')->insert([
            'image' => 'https://thepapandayan.com/wp-content/uploads/2018/03/slide-room-ambassador-1.jpg',
            'tipe_kamar' => 'The Premier',
            'fasilitas_kamar' => 'Kasur (queen-size), kamar mandi (shower dan bath tub), mesin kopi, AC, LED TV 32 inch, kursi, lemari (regular), sarapan, makan siang, dan makan malam.',
            'harga_kamar' => 'Harga per malam: Rp1,104,125',
            'jumlah_kamar' => 10
        ]);
        
        DB::table('kamar')->insert([
            'image' => 'https://thepapandayan.com/wp-content/uploads/2018/03/slide-room-classic-4.jpg',
            'tipe_kamar' => 'The Classic',
            'fasilitas_kamar' => 'Dua kasur (single-bed), kamar mandi (shower), AC, LED TV 22 inch, kursi, lemari (regular), dan sarapan.',
            'harga_kamar' => 'Harga per malam: Rp980.625',
            'jumlah_kamar' => 10
        ]);
    }
}
