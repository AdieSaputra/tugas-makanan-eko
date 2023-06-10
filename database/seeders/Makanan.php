<?php

namespace Database\Seeders;
use App\Models\Makanan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Makanans extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Makanan::create([
            'nama' => 'sate',
            'harga' => '10000',
            'gambar' => 'https://cdn1.katadata.co.id/media/images/temp/2021/11/16/Sate_BangDe-2021_11_16-16_33_30_38952a282579f1c0c2e8674eafe46404.jpg',
            'stok' => '200',
        ]);
    }
}
