<?php

class Clientes {
    
    public $nome;
    public $email;
    public $telefone;

    public function exibir(){
        $dados = "<hr>";
        $dados .= "Cliente:" . $this->nome;
        $dados .= "<br>E-mail:" . $this->email;
        $dados .= "<br>Telefone:" . $this->telefone;
        
        $dados .= "<br>CPF/CNPJ:" . $this->getPessoa();

        echo $dados;
    }

    public function getPessoa(){
        return "Não informado";
    }
}