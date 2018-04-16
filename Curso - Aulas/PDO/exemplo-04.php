<?php

$conn = new PDO("mysql:dbname=dbphp7;host=localhost","root","");

$stmt = $conn->prepare("DELETE from tb_usuarios where idUsuario = :ID");

$id = 3;


$stmt->bindParam(":ID",$id);

$stmt->execute();

echo "dado apagado no banco";

?>