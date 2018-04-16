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

print_r($carros);

array_push($carros[1],"F250");

echo end ($carros[1]);


?>