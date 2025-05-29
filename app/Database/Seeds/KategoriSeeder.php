<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class KategoriSeeder extends Seeder
{
    public function run()
    {
    // membuat data
        $data = [
            [
                'nama' => 'Electronics',
                'created_at' => date("Y-m-d H:i:s"),
            ],
            [
                'nama' => 'Lifestyle',
                'created_at' => date("Y-m-d H:i:s"),
            ],
            [
                'nama' => 'Furniture',
                'created_at' => date("Y-m-d H:i:s"),
            ]
        ];

        foreach ($data as $item) {
            // insert semua data ke tabel
            $this->db->table('kategori_produk')->insert($item);
        }
    }
}
