<?php

abstract class Animal{
    public function falar(){
        return "SOM";
    }
    
    public function mover(){
        return "ANDA";
    }
}

class Cachorro extends Animal{
    public function falar(){
        return "Late";
    }
}

class Gato extends Animal{
    public function falar(){
        return "Miau";
    }
}

class Passaro extends Animal{
    public function falar(){
        return "Canta";
    }
    public function mover(){
        return "VOA e ".parent::mover();
    }
}

$djuli = new Cachorro();

echo $djuli->falar().'<br>';
echo $djuli->mover().'<br><br><br>';

$garfild = new Gato();
echo $garfild->falar().'<br>';
echo $garfild->mover().'<br><br><br>';

$passaro = new Passaro();
echo $passaro->falar().'<br>';
echo $passaro->mover();

?>