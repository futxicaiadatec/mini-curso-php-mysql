<?php 

	error_reporting(E_ALL);
	
	
	echo "<h1>Teste BD usando mysqli_connect </h1>";
	
	$conn =  mysqli_connect("localhost","root","");
	mysqli_select_db($conn,"futxic"); //no caso da mysqli, mesmo procedural, o parâmetro $conn (referência a conexão) é obrigatório
	
	$result = mysqli_query($conn,"SELECT * FROM aluno"); //novamente
	
	echo "<table>";
	while ($dados_aluno = mysqli_fetch_assoc($result)) {
		echo "<tr>";
		echo "<td>".$dados_aluno['id']."</td>";
		echo "<td>".$dados_aluno['nome']."</td>";
		echo "<td>".$dados_aluno['rga']."</td>";
		echo "</tr>";
	}
	echo "</table>";	
	
?>