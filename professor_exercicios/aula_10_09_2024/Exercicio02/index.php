<?php

require_once("Clientes.php");

$oCliente = new Clientes();
$oCliente->nome = "Aluno 01 da Silva";
$oCliente->exibir();

$oCliente02 = new Clientes();
$oCliente02->nome = "Aluno 02 da Silva";
$oCliente02->exibir();

require_once("ClienteFisica.php");
$oCliente03 = new ClienteFisica();
$oCliente03->nome = "Pessoa Fisica-Aluno 03 da Silva";
$oCliente03->cpf = "061.021.145-99";
$oCliente03->exibir();

require_once("ClienteJuridica.php");
$oCliente04 = new ClienteJuridica();
$oCliente04->nome = "Pessoa Juridica - Aluno 04 da Silva";
$oCliente04->cnpj = "061.021.145/0001-99";
$oCliente04->exibir();

echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';