<?php

$file = "arquivos";
$permissao = "0775";

of(!is_dir($file)){
    mkdir($file,$permissao);
    echo "Diretorio criado com sucesso!";
}

?>