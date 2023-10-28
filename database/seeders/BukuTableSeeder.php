<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BukuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('bukus')->insert([
            'title' => 'Judul Buku',
            'author' => 'Penulis Buku',
            'year' => 2022,
            'publisher' => 'Penerbit Buku',
            'city' => 'Kota Penerbit',
            'cover' => 'URL_Cover_Buku',
            'bookshelf_id' => 1, // Ganti dengan ID rak buku yang sesuai
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
