<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Usuarios extends Seeder
{
    public function run()
    {
        
        $this->db->table('usuarios')->insert([
            'nome' => 'Felipe',
            'senha' => md5(123),
            'email' => 'felipe@newbgp.com.br'
        ]);
    }
}
