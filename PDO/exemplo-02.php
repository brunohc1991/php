<?php

$conn = new PDO("mysql:dbname=dbphp7;host=localhost","root","");

$stmt = $conn->prepare("insert into tb_usuarios (desLogin, desSenha) values (:LOGIN,:PASS)");

$login = "José";
$pass = "123456";

$stmt->bindParam(":LOGIN",$login);
$stmt->bindParam(":PASS",$pass);

$stmt->execute();

echo "inserido dados no banco";

?>