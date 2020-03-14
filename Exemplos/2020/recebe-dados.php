<?php

	//$_SERVER
	//$_REQUEST

echo "<br />Nome: ".$_REQUEST['nome'];
echo "<br />Raça: ".$_REQUEST['raca'];

$nome = $_REQUEST['nome'];
$raca = $_REQUEST['raca'];	
	//INSERT INTO gatinhos (nome,raca)
	//VALUES ('Berinjela','Vira Lata');
	
$con = mysqli_connect("localhost", "root", "");
mysqli_select_db($con, "futxicaiada");

$str_insert = 
 "INSERT INTO gatinhos (nome,raca)
	VALUES ('".$nome."','".$raca."')";

mysqli_query($con,$str_insert);

echo "<p>
		Gatinho inserido com sucesso!!!
	 </p>";

?>