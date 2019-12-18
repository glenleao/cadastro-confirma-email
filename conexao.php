<?php
$host = "mysql:dbname=id9703094_bd_dados;host=localhost";
$usuario = "id9703094_****";
$pass = "*****";

try {
	$pdo = new PDO($host, $usuario, $pass);
}catch (PDOExecption $e){
	echo "Falha: ". $e->getMessage();
}
