<?php

namespace App\Controllers;

// use CodeIgniter\Controller;
use CodeIgniter\RESTful\ResourceController;

class Auth extends ResourceController
{
    private $userModel;
    private $token = '123456789abcdefghdij';

    public function __construct()
    {
        $this->userModel = new \App\Models\Auth();
    }

    private function _validaToken()
    {
        return $this->request->getHeaderLine('token') == $this->token;
    }
    
    public function login()
    {
        if($this->_validaToken() == true){
            $response = [];
            $novaPesquisa['cnpj'] = $this->request->getPost('cnpj');
            $novaPesquisa['num_nota'] = $this->request->getPost('num_nota');
            if($this->userModel->select($novaPesquisa)){
                $reponse = [
                    'response' => 'success',
                    'msg'   => 'Nota encontrada com Sucesso!'
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
        return $this->response->setJSON($reponse);
    }
}
