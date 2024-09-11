<?php
require_once("Calculadora.php");
$oCalc = new Calculadora();

$oCalc->valor1 = 10;
$oCalc->valor2 = 15;

$oCalc->Somar();
$oCalc->Subtrair();
$oCalc->Multiplicar();

$oCalc->valor1 = 50;
$oCalc->valor2 = 5;
$oCalc->Dividir();

