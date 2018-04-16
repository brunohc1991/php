<?php 

$frutas = array("Banana","laranja","melancia");

//print_r($frutas);

$carros[0][0] = "GM";
$carros[0][1] = "Cobalt";
$carros[0][2] = "Onix";
$carros[0][3] = "Camaro";

$carros[1][0] = "Ford";
$carros[1][1] = "Fiesta";
$carros[1][2] = "Fusion";
$carros[1][3] = "Eco Sport";


$pessoa = array();

array_push($pessoa, array(
    'nome' => 'Bruno',
    'Idade' => 35
));

array_push($pessoa, array(
    'nome' => 'Maria',
    'Idade' => 27
));

//Code Json

echo json_encode($pessoa);

echo('<br>');

//Decode Json

$json = '[{"nome":"Bruno","Idade":35},{"nome":"Maria","Idade":27}]';

$dados = json_decode($json, true);

var_dump($dados);

?>