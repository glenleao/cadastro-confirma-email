<?php
$host = "mysql:dbname=id9703094_bd_dados;host=localhost";
$usuario = "id9703094_kg18";
$pass = "gln0621";

try {
	$pdo = new PDO($host, $usuario, $pass);
}catch (PDOExecption $e){
	echo "Falha: ". $e->getMessage();
}
$h = $_GET['h'];

if(!empty($h)){
	$pdo->query("UPDATE cadastro SET status='1' WHERE MD5(id) = '$h'");
	echo "Cadastro confirmado com sucesso!!!";
}