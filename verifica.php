<?php
$host = "mysql:dbname=id9703094_bd_dados;host=localhost";
$usuario = "id9703094_kg18";
$pass = "gln0621";

try {
	$pdo = new PDO($host, $usuario, $pass);
}catch (PDOExecption $e){
	echo "Falha: ". $e->getMessage();
}

$usuario = addslashes($_POST['user']);
$senha = md5(addslashes($_POST['senha']));

$sql = $pdo->query("SELECT * FROM cadastro WHERE status='1' and usuario='$usuario' and senha='$senha'" );
if($sql->rowCount() > 0){
	echo "Logado com sucesso";
}else{
	echo "Usuário ou senha inválidos. Confirme o cadastro no seu email";
}

