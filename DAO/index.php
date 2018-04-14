<?php

require_once("Config.php");

$sql = new Sql();

$usuarios = $sql->select("select * from tb_usuarios");

echo json_encode($usuarios);

?>