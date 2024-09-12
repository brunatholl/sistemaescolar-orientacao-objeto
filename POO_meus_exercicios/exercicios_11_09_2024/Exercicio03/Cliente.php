<?php

class Cliente extends Usuario {

    public function getMensagem(){
        return $this->hello();
    }



    public function hello(){
        return $this->mensagem . $this->getNome() . '! Seja bem vindo!';
    }
}



