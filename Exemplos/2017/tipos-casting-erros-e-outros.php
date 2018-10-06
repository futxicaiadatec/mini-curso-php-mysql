<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
	</head>
	<body>
	
		<?php
		
			$a = "0.75";
			$b = 1;
			
			if (is_float($a)) {
				echo "<p>A variável ".$a." é ponto flutuante!</p>";
			}
			else {
				echo "<p>A variável \$a 
						<strong>não</strong> é ponto flutuante!
						</p>";
						
				$a = (float) $a;
				
				if (is_float($a)) {
					echo "<p>E agora, é verdadeiro?</p>";
				}
				else {
					echo "<p>Continua não sendo...</p>";
				}
				
			}
		
		?>
		
<?php
	
	for ($i=1;$i<=20;$i++) {
		
		$tamanho = 18 + $i;
		
		echo "<p style=\"font-size: ".$tamanho."px \">
				Lorem Ipsum
			 </p>";
	}
	
?>
		
		
<?php
	for ($i=1;$i<=20;$i++) {
		$tamanho = 18 + $i;
?>
<p style="font-size: <?= $tamanho ?>px">
	Lorem Ipsum
</p>		
<?php
	}				
?>

		
		
		
	
	</body>
</html>