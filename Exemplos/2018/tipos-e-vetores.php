<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Tipos, Vetores, Loops...</title>
</head>
	<body>
		<?php
		
		$a = "11";
		
		$b = false;
		
		//if ($b == true) {
		if ($b) { //forma abreviada
			echo "<br />B é verdadeiro!";
		}
		
		/*if (is_int($a)) {
		}*/
		
		//sempre vai entrar no if
		$a = "str"; //string não vazia
		$a = 111; //inteiro diferente de zero
		$a = null; //entra no else
		//isset() para saber se já foi declarada
		if (isset($c) && $c) { //se fizer esse tipo de teste
			echo "<br />Entrou no IF";
		}
		else {
			echo "<br />Entrou no else";
		}
		
		$d="false";
		//preciso saber se meu $d de fato é booleano ou não
		//if ($d===true) {
		if (is_bool($d) && ($d===true)) {
			echo "<br />d não é booleano ou não é verdadeiro";
		}
		else {
		
		}
		
		$e = "1024";
		$f = (int) $e;
		$g = 123;
		$h = (bool) $g;
		
		
		
		
		
		
		
		
		
		
		
	for ($i=11;$i<=40;$i++) {
		
		echo "<p style=\"font-size: ".$i."px\">PHP</p>";
		
	}
			
	for ($i=11;$i<=40;$i++) {
		?>
		<p style="font-size: <?php echo $i ?>px">PHP</p>
		<?php
	}
			
		
		?>
	</body>
</html>