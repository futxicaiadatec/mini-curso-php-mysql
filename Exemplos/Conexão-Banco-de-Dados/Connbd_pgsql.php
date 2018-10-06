<?php
	
	echo "<h1>Teste BD usando pg_connect </h1>";
	
	$conn = pg_connect("host=localhost dbname=futxic user=postgre password=postgre");
	$result = pg_query("SELECT * FROM aluno;");
	
	echo "<table>";
	while ($dados_aluno = pg_fetch_array($result, null, PGSQL_ASSOC)) {
		echo "<tr>";
		echo "<td>".$dados_aluno['id']."</td>";
		echo "<td>".$dados_aluno['nome']."</td>";
		echo "<td>".$dados_aluno['rga']."</td>";
		echo "</tr>";
	}
	echo "</table>";
	
?>