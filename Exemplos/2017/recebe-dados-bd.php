<!DOCTYPE html>
<html>
    <head>
		<meta charset="UTF-8" />
        <title>Dados</title>
	</head>
	<body>
<?php

	require("conexao.php");

	//print "Oi";
	
	//echo $arr;
	
	print_r($_POST);

?>
<p>
	<strong>Dados Recebidos pelo Formulário</strong>
	<br />Nome completo: <?php echo $_POST['nome'] ?>
</p>
<?php
	
	$nome_aluno = $_POST['nome'];
	$rga_aluno  = $_POST['rga'];
	
	$str_sql_insert = "INSERT aluno (nome,rga) 
			VALUES ('".$nome_aluno."','".$rga_aluno."')";
			
	$result = mysqli_query($conn,$str_sql_insert);
	
?>
	<h3>Alunos Cadastrados</h3>
	<?php
	
		$str_sql_select = "SELECT * FROM aluno ORDER BY nome";
		
		$result_select = mysqli_query($conn,$str_sql_select);


		while ($dados_alunos = mysqli_fetch_assoc($result_select)) {
			echo "<br />".$dados_alunos['rga']." - ".$dados_alunos['nome'];
		}
	
	
	?>
	</body>
</html>

