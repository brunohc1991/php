<?php

setlocale(LC_ALL, "pt_BR", "pt_BR.utf-8", "portuguese");

echo date("d/m/Y H:i:s",1523586318);

echo '<br>';

echo time();

echo '<br>';

$dt = strtotime("2001-09-11");

echo date("l d/m/Y",$dt);
echo '<br>';
echo ucwords(strftime("%A %B"));

echo '<br> ---------------------------------- <br>';

$date = new DateTime();

echo $date->format("d/m/Y H:i:s" );
echo '<br> ---------------------------------- <br>';

$periodo = new dateinterval("P15D");
$date->add($periodo);
echo $date->format("d/m/Y H:i:s" );

?>