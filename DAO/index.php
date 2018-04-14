<?php

require_once("Config.php");

$user = new Usuario();

$user->loadById(2);

echo $user;

?>