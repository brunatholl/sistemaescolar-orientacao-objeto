<?php 
require_once("Cliente.php");

class ClienteJuridica extends Cliente {

    public $cnpj;

    // g) Crie nas duas classes o seguinte método: getPessoa(). 
// Este método deve retornar o CPF no caso de pessoa física ou CNPJ no caso de pessoa jurídica;

    public function getPessoa(){
        return '<br> cnpj da pessoa juridica: ' . $this->cnpj;
    }
    
}




