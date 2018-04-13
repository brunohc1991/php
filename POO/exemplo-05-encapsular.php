<?php

class Pessoa{
    
    public $nome = "Rasmus Lerdof";
    protected $idade = 48;
    private $senha = 123456;
    
    public function verDados(){
        echo $this->nome."<br>".$this->idade."<br>".$this->senha;
    }
}


$pessoa = new Pessoa();

$pessoa->verDados();


?>