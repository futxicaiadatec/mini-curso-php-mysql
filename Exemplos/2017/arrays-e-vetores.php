<?php
	error_reporting(E_ALL);
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
	</head>
	<body>

		<?php
		
			$arr[]=null;
			
			if (is_array($arr)) {
				//vai retornar true pois $arr
				//foi "inicializada" como um array 
			}
			
			//int meuVet[10];
			
			$arr = array(15,18,81,690,1512);
			array_push($arr,21);
			array_push($arr,514);
			array_push($arr,true);
			array_push($arr,"PHP");
			$arr['jivago'] = "medeiros";
			$arr['email']  = "jivago@ic";
			
			echo "<br />".$arr[3];
			echo "<br />".$arr[6];
			echo "<br />".$arr[7];
			echo "<br />".$arr[8];
			echo "<br />".$arr['jivago'];
			
			echo "<pre>";
			print_r($arr);
			echo "</pre>";
			
			for ($i=0;$i<count($arr);$i++) {
				if (isset($arr[$i])) {
					echo "<br />$i :".$arr[$i];
				}
			}
			
			
$arr1 = [1 => "Jorge",
		 6 => "João",
		 'alunos' => array('João','Maria','José')];
			
			foreach ($arr as $k => $item) {
				echo "<br /> $k : ".$item;
			}
			
			foreach ($arr1 as $k => $item) {
				if (is_array($item)) {
					foreach ($item as $k1 => $v) {
						echo "<br />$k -> $k1 : ".$v;
					}
				}
				else {
					echo "<br /> $k : ".$item;					
				} 
					
			}			
			
		
		?>
		
	
	</body>
</html>