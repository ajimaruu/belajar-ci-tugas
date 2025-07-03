<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class DiskonTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'          => [
                'type'           => 'INT',
                'auto_increment' => true,
                'unsigned'       => true,
            ],
            'tanggal'     => [
                'type' => 'DATE',
                'unique' => true,
            ],
            'nominal'     => [
                'type'       => 'INT',
            ],
            'created_at'  => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at'  => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('diskon');
    }

    public function down()
    {
        $this->forge->dropTable('diskon');
    }
}
