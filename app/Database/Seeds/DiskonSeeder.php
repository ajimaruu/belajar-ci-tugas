<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class DiskonSeeder extends Seeder
{
    public function run()
    {
        $data = [];
        $startDate = new \DateTime('2025-07-03');
        $nominal = 100000;

        for ($i = 0; $i < 10; $i++) {
            $tanggal = $startDate->format('Y-m-d');

            $data[] = [
                'tanggal'    => $tanggal,
                'nominal'    => $nominal,
                'created_at' => $tanggal . ' 06:01:35',
                'updated_at' => null,
            ];

            // increment tanggal dan nominal
            $startDate->modify('+1 day');
            $nominal += 100000;
        }

        // Insert semua data sekaligus
        $this->db->table('diskon')->insertBatch($data);
    }
}
