<?php

namespace App\Controllers;

// use CodeIgniter\Controller;
use CodeIgniter\RESTful\ResourceController;

class Auth extends ResourceController
{
    private $userModel;
    private $token = '123456789abcdefghdij';

    public function __construct() {
        $this->userModel = new \App\Models\Auth();
    }

    private function _validaToken(): string {
        return $this->request->getHeaderLine('token') == $this->token;
    }

    public function login() {
        $db = \Config\Database::connect();
      
        if($this->_validaToken() == true){
            $response = [];
            $data = [];
            $data['email'] = $this->request->getPost('email');
            $data['senha'] = $this->request->getPost('senha');
      
            $query = $db->query("SELECT nome, email, senha FROM {$this->userModel->table}");
            $results = $query->getResult();
            
            if($this->userModel){
                $response = [
                    'response' => 'success',
                    'msg'   => 'Nota encontrada com Sucesso!',
                    'result' => $results
                ];
            }else{
                $response = [
                    'response' => 'error',
                    'msg'  =>  'Erro, nao existe dados relacionado ao CNPJ',
                    'errors' => $this->userModel->errors()
                ];
            }
        } else {
            $response = [
                'response' => 'error',
                'msg'  =>  'Token invalido'
            ];
        }
        return $this->response->setJSON($response);
    }
}
