<?php

require_once("Cliente.php");
require_once("ClienteFisica.php");
require_once("ClienteJuridica.php");

$oClientes = new Cliente();
$oClientes->nome = 'Aluno da Silva';
$oClientes->exibir();

$oCliente = new Cliente();
$oCliente->nome = 'Aluno da Silva';
$oCliente->exibir();

// pessoa fisica
$oclienteFisica = new ClienteFisica();
$oclienteFisica->nome="Bruna";
$oclienteFisica->cpf="061.025.157-66";
$oclienteFisica->exibir();


// pessoa juridica
// cliente padrao

/*
2. Criar uma classe chamada Clientes, esta classe deve conter os seguintes atributos e métodos: Atributos: nome email telefone Métodos: exibir(); O método exibir deve exibir na tela todos os dados do cliente.

 a) Crie um objeto da classe Clientes.
 b) Atribua valores aos atributos da classe: $cliente->nome = “Aluno da Silva”;
 c) Crie mais um objeto da classe Clientes
 d) Chame o método exibir dos dois objetos e veja o resultado.
 e) Crie uma classe chamada ClienteFisica que estenda a classe Clientes. Adicione nesta classe o atributo $cpf;
 f) Crie uma classe chamada ClienteJuridica que estenda a classe Clientes. Adicione nesta classe o atributo $cnpj;
 g) Crie nas duas classes o seguinte método: getPessoa(). 

Este método deve retornar o CPF no caso de pessoa física ou CNPJ no caso de pessoa jurídica;

*/