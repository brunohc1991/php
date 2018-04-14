<?php

$conn = new PDO("mysql:dbname=dbphp7;host=localhost","root","");

$stmt = $conn->prepare("UPDATE tb_usuarios set desLogin = :LOGIN, desSenha = :PASS where idUsuario = :ID");

$login = "Pescocinho";
$pass = "qwertyui";
$id = 3;


$stmt->bindParam(":LOGIN",$login);
$stmt->bindParam(":PASS",$pass);
$stmt->bindParam(":ID",$id);

$stmt->execute();

echo "dados atualizados no banco";

?>