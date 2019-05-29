<?php
$host = "mysql:dbname=id9703094_bd_dados;host=localhost";
$usuario = "id9703094_kg18";
$pass = "gln0621";

try {
	$pdo = new PDO($host, $usuario, $pass);
}catch (PDOExecption $e){
	echo "Falha: ". $e->getMessage();
}
// aqui pegamos o id do usuario criptografado
$h = $_GET['h'];

// verifica se o id não está vazio
// usuário confirmou o cadastro no link recebido no email
if(!empty($h)){
	$pdo->query("UPDATE cadastro SET status='1' WHERE MD5(id) = '$h'");
	echo "Cadastro confirmado com sucesso!!!";
}