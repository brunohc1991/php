<?php

$data = array(
    "empresa"=>"Hcode Treinamento"
);

setcookie("NOME_DO_COKKIE",json_encode($data), time() + 3600);

echo "Cookie Criado";

?>