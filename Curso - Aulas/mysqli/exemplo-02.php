<?php

$conn = new mysqli("localhost","root","","dbphp7");

if($conn->connect_error){
    echo "Erro: ".connect_error;
}

$result = $conn->query("select * from tb_usuarios order by idUsuario");

$dados = [];

while($row = $result->fetch_array(MYSQLI_ASSOC)){
    
    array_push($dados, $row);
    
}

echo json_encode($dados);
?>