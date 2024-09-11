<?php
require_once("CalculadoraCientifica.php");
$oCalc = new CalculadoraCientifica();

$oCalc->valor1 = 10;
$oCalc->valor2 = 15;

$oCalc->Somar();
$oCalc->Subtrair();
$oCalc->Multiplicar();
$oCalc->Dividir();

// Fatorial
$oCalc->valor1 = 5;
$oCalc->fatorial();

