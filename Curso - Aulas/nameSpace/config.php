<?php

spl_autoload_register(function($nClass){
    $dirClass = "class";
    $fileNema = $dirClass.DIRECTORY_SEPARATOR.$nClass.".php";
    
    if(file_exists($fileNema)) require_once($fileNema);
});

?>