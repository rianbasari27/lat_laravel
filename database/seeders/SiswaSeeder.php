<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('siswa')->insert([
            'created_at' => date('Y/m/d H:i:s'),
            'nama_siswa' => 'Rian',
            'nim' => '20003330011',
            'jurusan' => 'Informatika',
            'alamat' => 'Depok',
            'email' => 'aaarrrdd@gmail.com',
            'no_telp' => '088992881822'
        ]);

        DB::table('siswa')->insert([
            'created_at' => date('Y/m/d H:i:s'),
            'nama_siswa' => 'Doni',
            'nim' => '20003331131',
            'jurusan' => 'Bisnis',
            'alamat' => 'Jakarta',
            'email' => 'a12kk11@gmail.com',
            'no_telp' => '088991201912'
        ]);

        DB::table('siswa')->insert([
            'created_at' => date('Y/m/d H:i:s'),
            'nama_siswa' => 'Santi',
            'nim' => '20003331133',
            'jurusan' => 'Akuntansi',
            'alamat' => 'Bogor',
            'email' => 'saniti@gmail.com',
            'no_telp' => '082120192112'
        ]);
    }
}
