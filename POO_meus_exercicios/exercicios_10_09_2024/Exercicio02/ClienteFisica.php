<?php 
require_once("Cliente.php");

class ClienteFisica extends Cliente {

    public $cpf;

    // g) Crie nas duas classes o seguinte método: getPessoa(). 
// Este método deve retornar o CPF no caso de pessoa física ou CNPJ no caso de pessoa jurídica;

    function getPessoa(){
        return '<br> cpf da pessoa fisica: ' . $this->cpf;
    }

}