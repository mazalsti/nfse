<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Usuarios extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'    => ['type' => 'INT'],
            'nome'  => ['type' => 'TEXT'],
            'email' => ['type' => 'TEXT'],
            'senha' => ['type' => 'TEXT'],
            'token' => ['type' => 'TEXT'],
            'ativo' => ['type' => 'CHAR'],
            'datacad' => ['type' => 'TIMESTAMP'],
        ]);
        $this->forge->createTable('usuarios');
    }

    public function down()
    {
        $this->forge->dropTable('usuarios');
    }
}
