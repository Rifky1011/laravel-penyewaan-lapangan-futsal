<?php

// database/seeders/LapanganSeeder.php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LapanganSeeder extends Seeder
{
    public function run()
    {
        DB::table('lapangan')->insert([
            ['nama' => 'Lapang Gordah', 'harga_per_jam' => 100000, 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Lapang Pesona', 'harga_per_jam' => 130000, 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'SOR Ciateul', 'harga_per_jam' => 250000, 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Lapang Widuri', 'harga_per_jam' => 110000, 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Lapang Sudirman', 'harga_per_jam' => 125000, 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Lapang Cempaka', 'harga_per_jam' => 130000, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
