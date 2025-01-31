<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenyewaanSeeder extends Seeder
{
    public function run()
    {
        DB::table('penyewaan')->insert([
            ['user_id' => 1, 'lapangan_id' => 1, 'waktu_mulai' => now(), 'waktu_selesai' => now()->addHour(), 'total_harga' => 500000, 'created_at' => now(), 'updated_at' => now()],
            ['user_id' => 2, 'lapangan_id' => 2, 'waktu_mulai' => now(), 'waktu_selesai' => now()->addHour(), 'total_harga' => 600000, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
