<?php 
require_once("Veiculo.php");
class Carro extends Veiculo {
    
    public $qtdePortas;

    function abrirPorta($numeroPorta){
        echo 'Abrindo a porta número ' . $numeroPorta . ' do veículo!';
    }
}