<?php

class Veiculo {
    
    // atributos
    public $modelo;
    public $cor;
    public $tipo;
    
    public function __construct($tipoVeiculo = "CARRO", $token = "TOKEN"){
        $this->tipo = $tipoVeiculo;
    }
    
    // comportamentos
    function ligar(){
        echo '<hr><br><b>Ligando veículo ' . $this->tipo . '!</b> - Cor:' . $this->cor . ' - Modelo:' . $this->modelo;
    }

    function desligar(){
        echo '<br><b>Desligando veiculo ' . $this->tipo . '!</b> - Cor:' . $this->cor . ' - Modelo:' . $this->modelo;
    }

    function __destruct(){
        echo '<hr>Destruindo o objeto!';
    }
}

