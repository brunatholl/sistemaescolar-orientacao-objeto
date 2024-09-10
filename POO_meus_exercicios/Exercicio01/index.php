<?php


require_once("Calculadora.php");

$oCalculadora = new Calculadora();
$oCalculadora->valor1 = '10';
$oCalculadora->valor2 = '2';

$oCalculadora->Somar();
$oCalculadora->Subtrair();
$oCalculadora->Multiplicar();
$oCalculadora->Dividir();




