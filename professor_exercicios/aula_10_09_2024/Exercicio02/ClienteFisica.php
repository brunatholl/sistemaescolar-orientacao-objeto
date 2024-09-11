<?php 

// Herdar dados de Cliente
class ClienteFisica extends Clientes {

    public $cpf;

    public function getPessoa(){
        return $this->cpf;
    }
}