<?php

$servidor =  "localhost";
$usuario = "root";
$senha = "";
$banco = "loja";

/*
$servidor =  "mysql.hostinger.com.br";
$usuario = "u530901205_loja";
$senha = "rootroot";
$banco = "u530901205_loja";
*/

$conexao = mysqli_connect($servidor, $usuario, $senha, $banco);