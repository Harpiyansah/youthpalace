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
            'image' => '',
            'nama_fasilitas' => 'Kolam Renang'
        ]);
        
        DB::table('fasilitas')->insert([
            'image' => '',
            'nama_fasilitas' => 'Stand Kue'
        ]);
        
        DB::table('fasilitas')->insert([
            'image' => '',
            'nama_fasilitas' => 'Transpotasi ke Bandara',
        ]);
        
        DB::table('fasilitas')->insert([
            'image' => '',
            'nama_fasilitas' => 'Ruang Konferensi',
        ]);
        
        DB::table('fasilitas')->insert([
            'image' => '',
            'nama_fasilitas' => 'Restoran dan Fine Dining',
        ]);
        
        DB::table('fasilitas')->insert([
            'image' => '',
            'nama_fasilitas' => 'Spa',
        ]);
    }
}
