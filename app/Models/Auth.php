<?php

namespace App\Models;

use CodeIgniter\Model;

class Auth extends Model {
  
    protected $table = 'usuarios';
    protected $primaryKey = 'id';
    protected $allowedFields = ['email', 'senha'];
    protected $validationRules = [
        'email' => 'trim|required|min_length[5]|is_unique[usuarios.email]',
        'senha' => 'trim|required|min_length[3]'
    ];
  
}