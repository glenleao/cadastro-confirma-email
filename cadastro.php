<?php
// conexao com o banco de dados
$host = "mysql:dbname=id9703094_bd_dados;host=localhost";
$usuario = "id9703094_kg18";
$pass = "gln0621";

try {
	$pdo = new PDO($host, $usuario, $pass);
}catch (PDOExecption $e){
	echo "Falha: ". $e->getMessage();
}
// captura os dados do formulario criando uma variavel para cada campo
$usuario = addslashes($_POST['user']);
$email = addslashes($_POST['email']);
$senha = md5(addslashes($_POST['senha']));
$ip = $_SERVER['REMOTE_ADDR'];

// Aqui insere os dados no banco
$pdo->query("INSERT INTO cadastro SET usuario='$usuario', email='$email', senha='$senha', ip=$ip");

// identifica o id do usuario para envio do email
$id = $pdo->lastInsertId();
$md5 = md5($id);

$assunto = "Confirme o seu cadastro";
$link = "https://unsyllabled-thumbs.000webhostapp.com/confirma.php?h=".$md5;
$mensagem = "Clique aqui para confirmar seu cadastro ". $link;
$header = "From: KG18";

mail($email, $assunto, $mensagem, $header); 
