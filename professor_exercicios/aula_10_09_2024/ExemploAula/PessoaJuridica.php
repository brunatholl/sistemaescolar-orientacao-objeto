<?php

require_once("Pessoa.php");
class PessoaJuridica extends Pessoa {

    public $razaosocial;
    public $nomefantasia;
    public $cnpj;
    public $faturamento;

    public function getCodigo(){
        return $this->calculaCodigoPessoa();
    }

    protected function calculaCodigoPessoa(){
        return $this->codigo + 100;
    }
}