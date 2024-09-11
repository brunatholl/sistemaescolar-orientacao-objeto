<?php

class Pessoa {

    public $codigo;

    // Endereço
    public $cidade;
    public $estado;
    public $endereco;
    public $cep;
    
    private $telefone;

    public function setTelefone($parametro){
        $this->telefone = $parametro;
    }
    
    public function getTelefone(){
        return $this->telefone;
    }

    // Exemplo de metodo protected
    protected function calculaCodigoPessoa(){
        return $this->codigo;
    }
}