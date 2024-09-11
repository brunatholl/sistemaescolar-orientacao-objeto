<?php

/*Crie uma classe chamada CalculadoraCientifica, esta classe deve estender de Calculado 
e implementar o seguinte método: Fatorial(); //Irá utilizar somente a variável valor1;
 */
require_once("Calculadora.php");
require_once("CalculadoraCientifica.php");

$oCalc = new CalculadoraCientifica();

// $oCalc->valor1 = 10;
// $oCalc->valor2 = 15;

// $oCalc->Somar();
// $oCalc->Subtrair();
// $oCalc->Multiplicar();
// $oCalc->Dividir();

// Fatorial
$oCalc->valor1 = 5;
$oCalc->fatorial();