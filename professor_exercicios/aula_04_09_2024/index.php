<?php

echo 'Testando a classe Carro:<br>';

require_once("Carro.php");

// Instancia da classe Carro
$oCarro01 = new Carro();
// Setar as propriedades
$oCarro01->cor = "Vermelho";
$oCarro01->modelo = "Fusca";
$oCarro01->qtdePortas = "2";
$oCarro01->ligar();
$oCarro01->desligar();

$oCarro02 = new Carro();
// Setar as propriedades
$oCarro02->cor = "Azul";
$oCarro02->modelo = "Civic";
$oCarro02->qtdePortas = "2";
$oCarro02->ligar();
$oCarro02->desligar();

$oCarro03 = new Carro();

// Setar as propriedades
$oCarro03->cor = "Bege";
$oCarro03->modelo = "Chevette";
$oCarro03->qtdePortas = "2";
$oCarro03->ligar();
$oCarro03->desligar();

// Setar as propriedades

require_once("Moto.php");

$oMoto = new Moto('MOTO');

$oMoto->cor = "PRETA";
$oMoto->modelo = "NXR BROS 160";
$oMoto->ligar();
$oMoto->desligar();

// Destruindo objeto de moto
unset($oMoto);