<?php 

class Calculadora {
    
    public $valor1;
    public $valor2;

    // construct

    // metodos

    public function Somar(){

        // 10 + 15 -> 25
        $resultado = $this->valor1 + $this->valor2;
        
        echo "<hr> A soma de " . $this->valor1 . " + " . $this->valor2 . " é: <b>" . $resultado . "</b>";
    }

    public function Subtrair(){
        // 10 - 15 -> -5
        $resultado = $this->valor1 - $this->valor2;
        
        echo "<hr> A subtração de " . $this->valor1 . " - " . $this->valor2 . " é: <b>" . $resultado . "</b>";
    }

    public function Multiplicar(){
        // 10 * 15 -> 150
        $resultado = $this->valor1 * $this->valor2;
        
        echo "<hr> A multiplicação de " . $this->valor1 . " * " . $this->valor2 . " é: <b>" . $resultado . "</b>";
    }

    public function Dividir(){
        // 10 / 15 -> 0.66666666666667
        $resultado = $this->valor1 / $this->valor2;
        
        echo "<hr> A divisão de " . $this->valor1 . " / " . $this->valor2 . " é: <b>" . $resultado . "</b>";
    }

    // destruct
}
