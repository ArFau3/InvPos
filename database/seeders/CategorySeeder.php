<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 5 REKENING UTAMA
        Category::insert([
        [
            'nama' => 'Konsumsi',
            'editable' => false,
        ],[
            'nama' => 'Rumah',
            'editable' => false,
        ],[
            'nama' => 'Perawatan Tubuh',
            'editable' => false,
        ],[
            'nama' => 'Kesehatan',
            'editable' => false,
        ],[
            'nama' => 'Hiburan',
            'editable' => false,
        ]
        ]);
    // REKENING TERKUNCI LAINNYA
    Category::insert([
        [
            'nama' => 'Makanan Setengah Jadi',
            'editable' => false,
            'kategori_induk' => 1,
        ],[
            'nama' => 'Mie instan',
            'editable' => false,
            'kategori_induk' => 6,
        ],[
            'nama' => 'Kue',
            'editable' => false,
            'kategori_induk' => 1,
        ],[
            'nama' => 'Kue Kering Manis',
            'editable' => false,
            'kategori_induk' => 8,
        ],[
            'nama' => 'Minuman',
            'editable' => false,
            'kategori_induk' => 1,
        ],[
            'nama' => 'Lantai',
            'editable' => false,
            'kategori_induk' => 2,
        ],[
            'nama' => 'Alt Dapur',
            'editable' => false,
            'kategori_induk' => 2,
        ],[
            'nama' => 'Sabun Lantai',
            'editable' => false,
            'kategori_induk' => 12,
        ],[
            'nama' => 'Perawatan Badan',
            'editable' => false,
            'kategori_induk' => 3,
        ],[
            'nama' => 'Perawatan Kepala',
            'editable' => false,
            'kategori_induk' => 3,
        ],[
            'nama' => 'Kosmetik',
            'editable' => false,
            'kategori_induk' => 3,
        ],[
            'nama' => 'Pembersih',
            'editable' => false,
            'kategori_induk' => 3,
        ],[
            'nama' => 'Obat Minum',
            'editable' => false,
            'kategori_induk' => 4,
        ],[
            'nama' => 'Obat Luar',
            'editable' => false,
            'kategori_induk' => 4,
        ],[
            'nama' => 'Smartphone',
            'editable' => false,
            'kategori_induk' => 5,
        ],[
            'nama' => 'Alat Perawatan Tubuh',
            'editable' => false,
            'kategori_induk' => 3,
        ],
        ]);

        Category::factory(10)->create();
    }
}
