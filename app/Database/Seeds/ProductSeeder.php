<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run()
    {
        // membuat data
        $data = [
            [
                'nama' => 'Kulkas LG 2 Pintu',
                'harga'  => 999000,
                'jumlah' => 5,
                'foto' => 'kulkas.jpg',
                'created_at' => date("Y-m-d H:i:s"),
            ],
            [
                'nama' => 'Philips Air Fryer',
                'harga'  => 689900,
                'jumlah' => 7,
                'foto' => 'airfryer.jpg',
                'created_at' => date("Y-m-d H:i:s"),
            ],
            [
                'nama' => 'Samsung Microwave',
                'harga'  => 899000,
                'jumlah' => 5,
                'foto' => 'microwave.jpg',
                'created_at' => date("Y-m-d H:i:s"),
            ]
        ];

        foreach ($data as $item) {
            // insert semua data ke tabel
            $this->db->table('product')->insert($item);
        }
    }
}