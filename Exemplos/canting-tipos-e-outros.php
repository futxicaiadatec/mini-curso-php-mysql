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
        <title>Casting, Tipos e Outros...</title>
		<style>
		
		</style>
	</head>
	<body>
	
		<?php
		
			$a = "Jivago Medeiros";
			
			if (is_int($a)) {
				echo "<br />É inteiro!";
			}
			else {
				echo "<br />Não é inteiro!";
				$a = (int) $a;
				echo "<br />Valor de a: ".$a;
			}
			
			$arr[0] = "valor";
			$arr[1] = true;
			$arr['chave'] = 123456;
			$arr['indice'] = array(8,9,10,11);
			
			
			foreach ($arr as $k => $a) {
				echo "<br /> \$arr na pos ".$k." é ".$a;
			}
			
			$arr1 = $arr['indice'];
			
			echo "<br />Valor: ".$arr1[3];
			
					
			function somaDoisOuTres($a,$b,$c=null) {
				
				$resultado = $a+$b;
				
				if (!is_null($c)) {
					$resultado += $c;
					//$resultado = $resultado + $c;
				}
				
				return $resultado;
				
			}
			
echo "<br />Soma (dois parâmetros): ".somaDoisOuTres(5,10);
echo "<br />Soma (três parâmetros): ".somaDoisOuTres(5,10,1);
			
		
		?>

	</body>
</html>