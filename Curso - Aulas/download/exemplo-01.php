<?php

$link = "https://cdn.hipercultura.com/imagens/podemos-ver-a-aurora-boreal-no-brasil-og.jpg";

$content = file_get_contents($link);

$parse = parse_url($link);

$baseName = basename($parse["path"]);

$file = fopen($baseName,"w+");

fwrite($file,$content);

fclose($file);
?>


<img src="<?=$baseName?>">