<?php

require_once("config.php");

use Cliente\Cadastro;

$cad = new Cadastro();

$cad->setNome("Dvieira");
$cad->setEmail("guilherme@12");
$cad->setSenha("15152");
$cad->registraVenda();

