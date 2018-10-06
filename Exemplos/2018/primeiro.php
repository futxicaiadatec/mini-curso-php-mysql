<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Primeiro PHP</title>
</head>
	<body>
		<?php
		
			$a = "string"; //variável $a é uma string
			$a = 123; //variável $a passou a ser um inteiro
			$b = "1"; //variável $b é uma string
			
			echo "Olá PHP!!! ".$a;
			
			if ($b==1) {
				echo "<br /><string>a variável b é 1</string>";
			}
			else {
				?>
				<br /><strong>A variável b <em>não</em> é 1</strong>
				<?php
			}
		
		?>
	</body>
</html>