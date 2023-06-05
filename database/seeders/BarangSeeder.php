<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('barangs')->insert([
            'id_barang' => 'T002',
            'nama_barang' => 'TV',
            'id_kategori' => 'T4KPOL',
            'deskripsi' => 'TV dengan layar 4K',
            'harga' => '5.999.999'
        ]);
    }
}
