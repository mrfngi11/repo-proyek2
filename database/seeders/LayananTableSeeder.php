<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LayananTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('layanan')->insert([
            'layanan_nama' => 'Grooming Standar',
            'created_at' => now(),
            'updated_at' => now()
            ]);

        DB::table('layanan')->insert([
            'layanan_nama' => 'Grooming Complete',
            'created_at' => now(),
            'updated_at' => now()
            ]);
    }
}
