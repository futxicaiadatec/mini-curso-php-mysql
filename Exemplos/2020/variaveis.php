<?php

	$a=10;
	$b=20;
	
	$soma=$a+$b;
	
	print("Resultado da soma: ".$soma);
	
	
	?>
	<br />
	<?php
	
	$teste="texto";
	
	$teste = (bool) $teste;
	
	if (is_bool($teste)) {
		echo "<br />A variável é do tipo booleano";
	}
	
	if ($teste === true) {
		echo "A variável é verdadeira";
	}
	else {
		echo "A variável é falsa";
	}
	
	echo "<br />".$teste;


?>