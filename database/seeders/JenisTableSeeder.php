<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JenisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('jenis')->insert([
            'jenis_nama' => 'Persia',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('jenis')->insert([
            'jenis_nama' => 'Anggora',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('jenis')->insert([
            'jenis_nama' => 'Siam',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('jenis')->insert([
            'jenis_nama' => 'Ragdoll',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('jenis')->insert([
            'jenis_nama' => 'Maine Coon',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('jenis')->insert([
            'jenis_nama' => 'Sphynx',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('jenis')->insert([
            'jenis_nama' => 'Russian Blue',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('jenis')->insert([
            'jenis_nama' => 'Munchkin',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
