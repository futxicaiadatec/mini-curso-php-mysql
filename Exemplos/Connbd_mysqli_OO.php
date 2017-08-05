<?php 

	error_reporting(E_ALL);
	
	echo "<h1>Teste BD usando mysqli_connect Orientada a Objetos </h1>";
	
	$conn = new mysqli("localhost","root","root", "aulas");
	
	$result = $conn->query($conn,"SELECT * FROM aluno;");
	
	echo "<table>";
	while ($dados_aluno = $result->fetch_array(MYSQLI_ASSOC)) {
		echo "<tr>";
		echo "<td>".$dados_aluno['id']."</td>";
		echo "<td>".$dados_aluno['nome']."</td>";
		echo "<td>".$dados_aluno['rga']."</td>";
		echo "</tr>";
	}
	echo "</table>";	
	
?>