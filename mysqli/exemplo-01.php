<?php

$conn = new mysqli("localhost","root","","dbphp7");

if($conn->connect_error){
    echo "Erro: ".connect_error;
}

$stmt = $conn->prepare("insert into tb_usuarios (desLogin, desSenha) values (?,?) ");


$stmt->bind_param("ss",$login,$pass);

$login = "Bete";
$pass = "Jeans";
$stmt->execute();


$login = "Miro";
$pass = "Sem Alcool";
$stmt->execute();

?>