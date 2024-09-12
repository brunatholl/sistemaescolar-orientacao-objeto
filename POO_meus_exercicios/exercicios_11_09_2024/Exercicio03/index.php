<!-- 
/*
3. Crie uma classe Usuario, ela deve ter os atributos e métodos abaixos: Atributos: Nome;
Sobrenome;
Métodos:
Setters e Getters; hello(); //Imprime a mensagem: ‘Olá usuário: Glauco Laicht’; 

Crie uma classe Administrador que estende da classe Usuario; 
Na classe Administrador crie o método hello(), que deverá imprimir: ‘Olá Administrador: Glauco Laicht’; Obs.: A classe administrador não terá propriedades. 
Crie uma classe Cliente que estende da classe Usuario; 
Na classe Cliente também crie o método hello(), este método deverá imprimir o texto hello() da classe Usuario e ainda adicionar o texto: ‘Seja bem vindo’
*/ -->

<?php


require_once("Usuario.php");

$oUsuario = new Usuario();
$oUsuario->setNome("Glauco Laicht");

echo "<hr>" . $oUsuario->hello() . $oUsuario->getNome(); 



require_once("Administrador.php");

$oAdministrador = new Administrador();
$oAdministrador->setNome("Glauco Laicht");

echo "<hr>" . $oAdministrador->hello() .  $oAdministrador->getNome();



require_once("Cliente.php");

$oCliente = new Cliente();
$oCliente->setNome("Glauco Laicht");
$oCliente->getNome(); 
echo "<hr>" . $oCliente->getMensagem();
