<?php

namespace App\Models;

use CodeIgniter\Model;

class Auth extends Model {
  
    protected $table = 'usuarios';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nome', 'email', 'senha'];
    protected $validationRules = [
        'nome'  => 'trim|required|min_length[3]',
        'email' => 'trim|required|min_length[14]|is_unique[usuarios.email]',
        'senha' => 'trim|required|min_length[4]'
    ];
  
}