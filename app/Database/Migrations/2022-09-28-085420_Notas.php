<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Notas extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'    => ['type' => 'INT'],
            'cnpj'  => ['type' => 'TEXT'],
            'num_nota' => ['type' => 'TEXT'],
            'xml'   => ['type' => 'TEXT'],
            'ativo' => ['type' => 'CHAR'],
            'datacad' => ['type' => 'TIMESTAMP'],
        ]);
        $this->forge->createTable('notas');
    }

    public function down()
    {
        $this->forge->dropTable('notas');
    }
}
