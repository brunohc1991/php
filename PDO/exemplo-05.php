<?php

$conn = new PDO("mysql:dbname=dbphp7;host=localhost","root","");

$conn->beginTransaction();

$stmt = $conn->prepare("DELETE from tb_usuarios where idUsuario = ?");

$id = 4;

$stmt->execute(array($id));

//$conn->rollBack();
$conn->commit();

echo "dado apagado no banco";

?>