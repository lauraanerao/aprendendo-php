<?php

require_once("../vendor/autoload.php");

use Models\Sql;

$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM usuarios");

echo json_encode($usuarios);
