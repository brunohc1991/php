<?php

$nome = "Bruno";
echo $nome." concatenação. ";

$nome .= " Treinamentos<br>";
echo $nome;
  

$valorTotal = 100;
//echo $valorTotal."<br>";

$valorTotal += 50;
//echo $valorTotal."<br>";

$valorTotal -= 25;
//echo $valorTotal."<br>";

$valorTotal *= .9;
//echo $valorTotal."<br>";

$a = 10;
$b = 2;
/*
echo $a + $b."<br>";

echo $a - $b."<br>";

echo $a * $b."<br>";

echo $a / $b."<br>";

echo $a % $b."<br>";

echo $a ** $b."<br>";
*/

$a = 50;
$b = 35;

var_dump($a <=> $b);
?>