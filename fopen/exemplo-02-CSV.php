<?php

require_once("config.php");

$listaUser = Usuario::getList();

$headers = array();

foreach($listaUser[0] as $key => $values){
    array_push($headers,ucfirst($key));
}

$file = fopen("usuarios.csv","w+");

fwrite($file,implode(",",$headers)."\r\n");

foreach($listaUser as $row){
    $data = array();
    
    foreach($row as $key => $value){
        array_push($data,$value);
    }//fim foreach coluna
    
    fwrite($file, implode(",",$data)."\r\n");
}//fim forwach linha

fclose($file);

?>