<!-- Exercício 01 
 Criar uma classe chamada Calculadora, esta classe vai ter os seguintes atributos e métodos: 
Atributos: Valor1; Valor2; Métodos: 

Somar(); 
Subtrair(); 
Multiplicar(); 
Dividir();

 Cada método deve calcular e imprimir na tela o resultado. Realize a criação de objetos através da classe 
 e realize as operações de cada método. -->

 <?php

Class Calculadora{
    public $valor1;
    public $valor2;

    function Somar(){
        $soma = $this->valor1 + $this->valor2;
        echo '<hr><br>Calculadora<br> Soma =  ' . $this->valor1 . ' + ' . $this->valor2 . '<br> Soma = ' . $soma;
    } 

    function Subtrair(){
        $subtrair =  $this->valor1 - $this->valor2;
        echo '<hr><br>Calculadora<br> Subtrair =  ' . $this->valor1 . ' - ' . $this->valor2 . '<br> Subtrair = ' . $subtrair;
    } 
    
    function Multiplicar(){
        $multiplicar = $this->valor1 * $this->valor2;
        echo '<hr><br>Calculadora<br> Multiplicar =  ' . $this->valor1 . ' * ' . $this->valor2 . '<br> Multiplicar = ' . $multiplicar;
    } 
    
    function Dividir(){
        $dividir = $this->valor1 / $this->valor2;
        echo '<hr><br>Calculadora<br> Dividir =  ' . $this->valor1 . ' + ' . $this->valor2 . '<br> Dividir = ' . $dividir;
    } 

}