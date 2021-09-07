<?php

$hostname = "localhost";
$bancodedados = "formulario";
$usuario = "root";
$senha = "";

$mysqli = new mysqli($hostname, $usuario, $senha, $bancodedados);
if($mysqli->connect_errno){
	echo "Error ao conectar: (". $mysqli->connect_errno . ")". $mysqli->connect_errno;
}

?>::