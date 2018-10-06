<?php
	//FORÇANDO A EXIBIÇÃO DE ERROS
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL | E_NOTICE);
?>
<!DOCTYPE html>
<html>
    <head>
		<meta charset="UTF-8" />
        <title>Segundo Exemplo</title>
		<style>
		
		</style>
	</head>
	<body>
	
		<?php
		
		//não é obrigatório, mas podemos "iniciar" as variáveis
		/*$a="";
		$b=null;
		$c=0;*/
		
		$a = $a + $b + $c + 1;

echo "<br />".$a;		

	for ($i=1;$i<=40;$i++) {
		echo "<p style='font-size: ".$i."px'>Lorem Ipsum</p>";
	} 
		
		?>

	</body>
</html>