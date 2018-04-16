<?php

$id = (isset($_GET["id"])) ? $_GET["id"] : 1;

if(!is_numeric($id) || strlen($id) > 8){
    exit("Pegamos Você!");
}

$con = mysqli_connect("localhost","root","","dbphp7");

$sql = "select * from tb_usuarios where idUsuario = $id";

$exec = mysqli_query($con, $sql);

while($result = mysqli_fetch_object($exec)){
    echo $result->desLogin . "<br>";
}
    
?>