<?php

interface Veiculo{
    
    public function acelerar($velMax);
    public function frenar($velFrenagem);
    public function trocarMarcha($rotacao);
}

abstract class Automovel implements Veiculo{
    
    public function acelerar($velMax){
        echo "O veiculo acelerou até: ".$velMax." km/H";
    }
    
    public function frenar($velFreiar){
        echo "O veiculo freio em: ".$velFreiar." km/H";
    }
    public function trocarMarcha($rotacao){
        echo "O veiculo troca de marcha quando ainge ".$rotacao." rpm";
    }
    
}

?>