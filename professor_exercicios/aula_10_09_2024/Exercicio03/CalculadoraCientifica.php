<?php 
require_once("Calculadora.php");
class CalculadoraCientifica extends Calculadora {

    public function fatorial(){


        // calculo do fatorial

        // fatorial de 5 => 120
        // 5! = 5 . 4 . 3 . 2 . 1 = 120

        // Comando de repeticao ate o tamanho do numero
        $contador = 1;
        $numero = $this->valor1;

        $fatorial = 1;
        while($contador <= $numero){

            // echo "<br>contador:" . $contador;

            $fatorial = $fatorial * $contador;

            // echo "<b> Fatorial:" . $fatorial . "</b>";

            $contador++;
        }

        $resultado = $fatorial;

        echo "<hr> O fatorial de " . $this->valor1 . " é: <b>" . $resultado . "</b>";

    }
}