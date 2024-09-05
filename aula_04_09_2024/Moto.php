<?php

require_once("Veiculo.php");
class Moto extends Veiculo {

    function empinar(){
        echo 'Empinando a moto!';
    }

    // POLIMORFISMO COM MOTO
    function ligar(){
        // chamando o metodo da classe pai
        parent::ligar();
        
        // classe atual
        echo '<br>Ligando a moto na classe MOTO!';
    }
}