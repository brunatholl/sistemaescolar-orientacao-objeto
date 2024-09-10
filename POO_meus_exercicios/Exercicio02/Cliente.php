<?php

class Cliente {

    public $nome;
    public $email;
    public $telefone;

    public function exibir(){
        echo '<hr><br>Cliente: <br> Nome =  ' . $this->nome . ' <br> E-mail =  ' . $this->email . '<br>
         Telefone =  ' . $this->telefone . ' <br> Pessoa: ' . $this->getPessoa();
    }

    public function getPessoa(){
        return "Cadastro Pessoa Padrao.";
    }

    private function calculaSalario(){
        return "Salario calculado!";
    }

    protected function getSalarioCalculado(){
        return $this->calculaSalario();
    }

}