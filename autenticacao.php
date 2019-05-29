<?php

// conexao com o banco de dados
$host = "mysql:dbname=id9703094_bd_dados;host=localhost";
$usuario = "id9703094_kg18";
$pass = "gln0621";

try{
	$pdo = new PDO($host, $user, $pass);
}catch (PDOExecption $e){
	echo "Falha: ". $e->getMessage();
}

$usuario = addslashes($_POST['user']);
$senha = addslashes($_POST['senha']);

$sql = $pdo->query("SELECT * FROM adm WHERE usuario='usuario' and senha='senha'");

if($sql->rowCount() >0){
	echo "<script>location.href='adm.php'</script>";
	sessio_start();
	$_SESSION['usuario'] = true;
}else{
	echo "Usuário ou senha invalidos";
}

