<?php

$nome = "Bruno";

function teste(){
    global $nome;
    echo $nome;
}

teste();
    
?>