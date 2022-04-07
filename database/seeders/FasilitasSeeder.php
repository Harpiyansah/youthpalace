<?php

namespace Database\Seeders;

use App\Models\Fasilitas;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class FasilitasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('fasilitas')->insert([
            'image' => 'https://thepapandayan.com/wp-content/uploads/2018/03/pic-pool.jpg',
            'nama_fasilitas' => 'Kolam Renang'
        ]);
        
        DB::table('fasilitas')->insert([
            'image' => 'https://thepapandayan.com/wp-content/uploads/2018/02/Deli1.jpg',
            'nama_fasilitas' => 'Stand Kue'
        ]);
        
        DB::table('fasilitas')->insert([
            'image' => 'https://cdn-2.tstatic.net/travel/foto/bank/images/jejeran-taksi-bandara-ahmad-yani.jpg',
            'nama_fasilitas' => 'Transpotasi ke Bandara',
        ]);
        
        DB::table('fasilitas')->insert([
            'image' => 'https://thepapandayan.com/wp-content/uploads/2018/04/pic-suagi-ballroom.jpg',
            'nama_fasilitas' => 'Ruang Konferensi',
        ]);
        
        DB::table('fasilitas')->insert([
            'image' => 'https://thepapandayan.com/wp-content/uploads/2018/02/cantigi1.jpg',
            'nama_fasilitas' => 'Restoran dan Fine Dining',
        ]);
        
        DB::table('fasilitas')->insert([
            'image' => 'https://thepapandayan.com/wp-content/uploads/2018/03/pic-spa.jpg',
            'nama_fasilitas' => 'Spa',
        ]);
    }
}
