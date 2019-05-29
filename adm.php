<!DOCTYPE html>
<html>
<head>
	<title>Area adm</title>
</head>
<body>
	<table class="table">
  <thead>
    <tr>
      <th scope="col">Usuários</th>
      <th scope="col">Emails</th>
      <th scope="col">Senhas</th>
      <th scope="col">Status</th>
      <th scope="col">Ips</th>
    </tr>
  </thead>
  <tbody>

  	<?php
$host = "mysql:dbname=id9703094_bd_dados;host=localhost";
$usuario = "id9703094_kg18";
$pass = "gln0621";
try {
	$pdo = new PDO($host, $usuario, $pass);
}catch (PDOExecption $e){
	echo "Falha: ". $e->getMessage();
}
$sql = $pdo->$pdo -> query("SELECT * FROM cadastro");
foreach ($sql as $variavel) {
	echo "<tr>";
	echo "<td>". $variavel['usuario']."</td>";
	echo "<td>". $variavel['email']."</td>";
	echo "<td>". $variavel['senha']."</td>";
	echo "<td>". $variavel['status']."</td>";
	echo "<td>". $variavel['ip']."</td>";
	echo '<td><a href="excluir.php?id='.$variavel['id'].'"Excluir</a></td>';
	echo "</tr>";
}
?>
</tbody>
</table>
</body>
</html>
