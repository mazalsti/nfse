<?php

namespace App\Models;

use CodeIgniter\Model;

//as classes abaixo serão sempre usadas e serão instanciadas
use NFePHP\NFSe\NFSe;
use NFePHP\NFSe\Common\Certificate;
use NFePHP\NFSe\Common\Soap\SoapCurl;
use NFePHP\NFSe\Common\Soap\SoapNative;

class FileNotas extends Model
{
  private static $arr = [
        "atualizacao" => "2016-08-03 18:01:21",
        "tpAmb" => 1,
        "versao" => 3.10,
        "razaosocial" => "SUA RAZAO SOCIAL LTDA",
        "cnpj" => "99999999999999",
        "cpf" => "",
        "im" => "99999999",
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

    public function enviandoTeste(){
       return  $configJson = json_encode(self::$arr);
       $contentpfx = file_get_contents('/var/www/sped/sped-nfse/certs/certificado.pfx');
       $nfse = new NFSe($configJson, Certificate::readPfx($contentpfx, 'senha'));

        //Aqui podemos escolher entre usar o SOAP nativo ou o cURL,
        //em ambos os casos os comandos são os mesmos pois observam
        //a mesma interface
        $nfse->tools->loadSoapClass(new SoapNative());

        $nfse->tools->setDebugSoapMode(false);

        $cnpj = '99999999999999';
        $cpf = '';
        $im = '12345678';
        $dtInicial = '2016-08-01';
        $dtFinal = '2016-09-01';
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