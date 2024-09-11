<?php 

class ClienteJuridica extends Clientes {

    public $cnpj;

    public function getPessoa(){
        return $this->cnpj;
    }
}