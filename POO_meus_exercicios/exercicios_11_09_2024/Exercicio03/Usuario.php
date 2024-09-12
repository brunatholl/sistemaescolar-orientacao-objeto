<!-- Atributos: Nome;
Sobrenome;
Métodos:
 Setters e Getters; hello(); //Imprime a mensagem: ‘Olá usuário: Glauco Laicht’;  -->

 <?php

 class Usuario {

    private $nome;
    public $sobrenome;
    public $mensagem = "Olá usuário: ";

    public function setNome($parametro){
        $this->nome = $parametro;
    }

    public function getNome(){
        return $this->nome;
    }

    public function hello(){
        return $this->mensagem;
    }


 }