  	<?php
$host = "mysql:dbname=id9703094_bd_dados;host=localhost";
$usuario = "id9703094_kg18";
$pass = "gln0621";
try {
	$pdo = new PDO($host, $usuario, $pass);
}catch (PDOExecption $e){
	echo "Falha: ". $e->getMessage();
}

if(!empty($_GET['id'])){
	$id = addslashes($_GET['id']);
	$sql = $pdo->query("DELETE FROM cadastro WHERE id='$id'");
	echo "<script>location.href='adm.php'</script>";
}