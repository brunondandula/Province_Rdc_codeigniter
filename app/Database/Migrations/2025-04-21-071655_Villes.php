<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Villes extends Migration
{
   
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'auto_increment' => true,
            ],
            'nom_ville' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
            'province_id' => [
                'type' => 'INT',
                'unsigned' => true,
            ],
            'population' => [
                'type' => 'INT',
                'null' => true,
            ],
            'image' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => true,
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('province_id', 'provinces', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('villes');
    }

    public function down()
    {
        $this->forge->dropTable('villes');
    }
}
