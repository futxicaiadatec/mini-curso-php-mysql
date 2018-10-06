<?php

	//print "Oi";
	
	//echo $arr;
	
	print_r($_POST);
	
	print_r($_GET);

?>
<p>
	<strong>Dados Recebidos pelo Formulário</strong>
	<br />Nome completo: <?php echo $_POST['nome'] ?>
</p>