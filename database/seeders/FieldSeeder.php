<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Field;

class FieldSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Field::create([
            'name'           => 'Lapangan Gordah',
            'description'    => 'Lapangan dengan fasilitas lengkap dan harga terjangkau.',
            'price_per_hour' => 100000,
        ]);
    }
}
