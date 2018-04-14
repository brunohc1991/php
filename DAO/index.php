<?php

require_once("Config.php");

/*
$user = new Usuario();

$user->loadById(2);

echo $user;
*/

//$lista = Usuario::getList();

//echo json_encode($lista);

//$search = Usuario::search("Jo");

//echo json_encode($search);

$user = new Usuario();
$user->login('Bruno Henrique','knacker1991');

echo $user;

?>