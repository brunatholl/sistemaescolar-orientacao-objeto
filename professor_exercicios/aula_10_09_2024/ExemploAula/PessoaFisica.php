<?php
require_once("Pessoa.php");
class PessoaFisica extends Pessoa {
    
    public $nome;
    public $cpf;
    public $estadocivil;
    public $salario;

    public function getCodigo(){
        return $this->calculaCodigoPessoa();
    }

    protected function calculaCodigoPessoa(){
        return $this->codigo + 10;
    }
}