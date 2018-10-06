<?php


$con = mysqli_connect("localhost","root","");

mysqli_select_db($con,"futxic");

$nome = $_REQUEST['txt-nome'];
$rga  = $_REQUEST['txt-rga'];

$strInsert = "INSERT INTO aluno (rgax,nome)
				VALUES ('".$nome."','".$rga."')";

if (mysqli_query($con,$strInsert)) {
	echo "<strong>Aluno inserido com sucesso!!!</strong>";
}
else {
	echo "<strong>
			Erro inserindo aluno: ".mysqli_error($con)."
		</strong>";
}


$result = mysqli_query($con,"SELECT * 
								FROM aluno 
							ORDER BY id DESC LIMIT 30");

do {
	$dados = mysqli_fetch_assoc($result);

echo "<p>".$dados['rga']." - ".$dados['nome']."</p>";
	
} while($dados!=null);


?>