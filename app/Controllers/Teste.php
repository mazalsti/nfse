<?php

namespace App\Controllers;


use CodeIgniter\Controller;
use NFePHP\Common\Soap\SoapCurl;
use NFePHP\Common\Certificate;
use NFePHP\NFSe\NFSe;


class Teste extends Controller
{
    private $arr = [
        "atualizacao" => "2016-08-03 18:01:21",
        "tpAmb" => 1,
        "versao" => 3.10,
        "razaosocial" => "SUA RAZAO SOCIAL LTDA",
        "cnpj" => "17077718000189",
        "cpf" => "",
        "im" => "46268561",
        "cmun" => "3550308",
        "siglaUF" => "SP",
        "pathNFSeFiles" => "\/dados\/nfse",
        "proxyConf" => [
            "proxyIp" => "",
            "proxyPort" => "",
            "proxyUser" => "",
            "proxyPass" => ""
        ]    
    ];

    public function index(){
  
       $configJson = json_encode($this->arr);
       $contentpfx = file_get_contents('../rodrigo.pfx');
       $nfse = new NFSe($configJson, Certificate::readPfx($contentpfx, 'rs0002'));
       
        //Aqui podemos escolher entre usar o SOAP nativo ou o cURL,
        //em ambos os casos os comandos são os mesmos pois observam
        //a mesma interface
        // $nfse->tools->loadSoapClass(new SoapNative());
        $nfse->tools->loadSoapClass(new SoapCurl());

        $nfse->tools->setDebugSoapMode(false);

        $cnpj = '17077718000189';
        $cpf = '';
        $im = '46268561';
        $dtInicial = '2201-09-01';
        $dtFinal = '2022-09-27';
        $pagina = 1;
        $response = $nfse->tools->consultaNFSeEmitidas($cnpj, $cpf, $im, $dtInicial, $dtFinal, $pagina);
    
         //esse XML retornado na resposta SOAP poderá ser convertido, de assim for desejado, em uma stdClass 
        //para facilitar a extração dos dados para uso da aplicação. Para isso 
        //usamos a classe Response::readReturn($tag, $response) passando 
        //o nome da tag desejada, e o xml. Lembrando que o nome da TAG desejada irá 
        //variar de modelo para modelo
        $response = $nfse->response->readReturn('RetornoXML', $response);

        echo "<pre>";
        print_r($response);
        echo "</pre>";
    }

}