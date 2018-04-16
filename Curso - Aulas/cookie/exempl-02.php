<?php

if(isset($_COOKIE["NOME_DO_COKKIE"])){
    $obj = json_decode($_COOKIE["NOME_DO_COKKIE"]);
    
    echo $obj->empresa;
            
}

?>