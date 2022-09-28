<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Notas extends Seeder
{
    public function run()
    {
        $this->db->table('notas')->insert([
            'cnpj' => '17077718000189',
            'num_nota' => 1111,
            'xml' => md5(123),
            'datacad' => '2022-09-27'
        ]);
    }
}
