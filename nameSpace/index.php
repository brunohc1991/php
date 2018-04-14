<?php

require_once("config.php");

use Cliente\Cadastro;

$cad = new Cadastro();

$cad->setNome("Bruno Henrique Costa");
$cad->setEmail("brunohc1991@gmail.com");
$cad->setSenha("biruleibydobaby");

$cad->registrarVenda();

?>