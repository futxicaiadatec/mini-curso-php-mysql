<?php 

	error_reporting(E_ALL);
	
	echo "<h1>Teste BD usando PDO </h1>";

	//PDO é uma biblioteca que fornece uma camada de abstração para operações com SGBD
	//dessa forma, é possível alterar o SGBD sem alterar o código (apenas a string de conexão)
	$conn = new PDO('mysql:host=localhost;dbname=aulas;charset=latin1', 'root', 'root'); //string de conexão referente ao MySQL
	$result = $conn->query("SELECT * FROM aluno");

	echo "<table>";
	while ($dados_aluno = $result->fetch(PDO::FETCH_ASSOC)) {
		echo "<tr>";
		echo "<td>".$dados_aluno['id']."</td>";
		echo "<td>".$dados_aluno['nome']."</td>";
		echo "<td>".$dados_aluno['rga']."</td>";
		echo "</tr>";
	}
	echo "</table>";

?>