<?php 
	
	//error_reporting(E_ALL);
	error_reporting(~E_DEPRECATED);
	
	echo "<h1>Teste BD usando mysql_connect (descontinuada) </h1>";
	
	$conn = mysql_connect("localhost","root","");
	mysql_select_db("futxic"); //um dos motivos de ter sido descontinuada
	
	$result = mysql_query("SELECT * FROM aluno;"); //é que não é obrigatório utilizar 
												  //a referência a conexão (no caso $conn) nas funções de query por exemplo
	
	echo "<table>";
	while ($dados_aluno = mysql_fetch_assoc($result)) {
		echo "<tr>";
		echo "<td>".$dados_aluno['id']."</td>";
		echo "<td>".$dados_aluno['nome']."</td>";
		echo "<td>".$dados_aluno['rga']."</td>";
		echo "</tr>";
	}
	echo "</table>";	
	
	mysql_close($conn);
	
?>