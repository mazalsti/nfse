<?php

namespace App\Models;

use CodeIgniter\Model;

class Notas extends Model
{
  
    protected $table = 'notas';
    protected $primaryKey = 'id';
    protected $allowedFields = ['cnpj', 'num_nota', 'xml'];
    protected $validationRules = [
        'cnpj' => 'trim|required|min_length[14]|is_unique[notas.cnpj]',
        'num_nota' => 'trim|min_length[3]',
    ];
  
}