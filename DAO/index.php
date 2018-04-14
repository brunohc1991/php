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

//$user = new Usuario();
//$user->login('Bruno Henrique','knacker1991');
//
//echo $user;

/*
$aluno = new Usuario();

$aluno->setDesLogin("TesteProcedure");
$aluno->setDesSenha("ProcedureTeste");
$aluno->insert();
echo $aluno;
*/
/*
$usuario = new Usuario();
$usuario->loadById(8);

//echo $usuario;

$usuario->upDate("Teste UpDate 2","UpDate Teste 2");
echo $usuario;
*/

$usuario = new Usuario();
$usuario->loadById(7);

echo $usuario." <br><br>";

$usuario->delete();

echo $usuario." Usuario deletado com sucesso";

?>