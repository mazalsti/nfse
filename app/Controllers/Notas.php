<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;

class Notas extends ResourceController
{

    public function __construct()
    {
        $this->notasModel = new \App\Models\Notas();
    }

    // List Notas
    public function list()
    {
        $cnpj = strtolower($_SERVER['REQUEST_METHOD']);
        if($cnpj === 'get'){
            
            $data = $this->notasModel->find();
            return $this->response->setJSON($data);
            
        }
    }
}