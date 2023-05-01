<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('siswa')->insert([
            'nama'=>'Ani',
            'nomor_induk'=>'1000',
            'alamat'=>'bantul',
            'create_at'=>date('Y-m-d H:i:s')
        ]);
        DB::table('siswa')->insert([
            'nama'=>'Budi',
            'nomor_induk'=>'1001',
            'alamat'=>'sleman',
            'create_at'=>date('Y-m-d H:i:s')
        ]);
        DB::table('siswa')->insert([
            'nama'=>'Candra',
            'nomor_induk'=>'1002',
            'alamat'=>'kidul',
            'create_at'=>date('Y-m-d H:i:s')
        ]);
    }
}
