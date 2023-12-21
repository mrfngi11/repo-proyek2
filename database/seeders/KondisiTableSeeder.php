<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KondisiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('kondisi')->insert([
            'kondisi_kesehatan' => 'Sehat',
            'created_at' => now(),
            'updated_at' => now()
            ]);

        DB::table('kondisi')->insert([
            'kondisi_kesehatan' => 'Sakit',
            'created_at' => now(),
            'updated_at' => now()
            ]);
    }
}
