<?php

class Endereco{
    private $logradouro;
    private $num;
    private $cidade;
    
    public function __construct($log, $num, $city){
        $this->logradouro = $log;
        $this->num = $num;
        $this->cidade = $city;
    }
    
    public function __toString(){
        return $this->logradouro.",".$this->num.",".$this->cidade;
    }
    
    function getLogradouro(){
        return $this->logradouro;
    }
    
    function setLogradouro($logradouro){
        $this->logradouro = $logradouro;
    }
    function getNumero(){
        return $this->num;
    }
    
    function setNumero($num){
        $this->num = $num;
    }
    function getCidade(){
        return $this->cidade;
    }
    
    function setCidade($cidade){
        $this->cidade = $cidade;
    }
    
    public function __destruct(){
        var_dump("DESTRUIR!!!");
    }
}

$meuEndereco = new Endereco("Rua Sebastião Fernandes da Silva",28,"Jaboti - PR");

echo $meuEndereco->getCidade();
echo '<br>';
var_dump($meuEndereco); 
echo $meuEndereco;

unset($meuEndereco);

?>