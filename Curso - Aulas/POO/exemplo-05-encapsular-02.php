<?php

class Pessoa{
    
    public $nome = "Rasmus Lerdof";
    protected $idade = 48;
    private $senha = 123456;
    
    public function verDados(){
        echo $this->nome."<br>".$this->idade."<br>".$this->senha;
    }
}


class Programador extends Pessoa{
    public function verDados(){
        echo get_class($this).'<br>';
        echo $this->nome."<br>".$this->idade."<br>".$this->senha;
    }
}

$obj = new Programador();

$obj->verDados();

?>