<?php

	//json_decode($json);
	
	//$json_retorno = json_encode();

	//print_r($_POST);
	//$_REQUEST

	if (!isset($_POST['txt-nome'])) {
	}
	
	$nome = $_POST['txt-nome'];
	$rga  = $_POST['txt-rga'];
	
	print_r($_GET);
	
	
?>

<p>
	<strong>Seu nome:</strong>
	<?php echo $nome ?>	
	<br />
	<strong>Seu RGA:</strong> 
	<?php echo $rga ?>	<br />
	<strong>Cidade:</strong> 
	<?php echo $_POST['cidade'] ?>
	<br />	
	<strong>Interesses:</strong> 
	<?php 
foreach ($_POST['interesses'] as $interesse) {
	echo "<br />".$interesse;
}
	?>
	<br />
</p>