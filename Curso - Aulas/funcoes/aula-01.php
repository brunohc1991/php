<?php

function salario(){
    return 946.00;
}

//echo "José recebei 3 salarios totalizando: " . salario()*3;

function argumentos(){
    $arguments = func_get_args();
    
    return $arguments;
}

var_dump(argumentos("Bom","dia","pessoal"));


?>