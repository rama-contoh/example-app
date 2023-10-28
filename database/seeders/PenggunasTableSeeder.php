<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PenggunasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'username' => 'contohuser',
            'nama' => 'Contoh User',
            'email' => 'contohuser@example.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'), // Ganti dengan password yang di-hash
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
