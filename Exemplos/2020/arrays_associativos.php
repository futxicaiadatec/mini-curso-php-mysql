<?php
	
	$vetor[0]=10;
	$vetor[1]=11;
	$vetor[2]=12;
	$vetor[3]=13;
	$vetor[4]=14;
	$vetor[5]=15;
	
	array_push($vetor, 16);
	
	//PHP TRATA TUDO COMO ARRAY ASSOCIATIVO
	//O QUE É UM ARRAY ASSOCIATIVO?
	//ARRAY (VETOR) CUJA CHAVES PODEM SER LITERAIS
	
	$arr[0] = 11;
	$arr[1] = 12;
	$arr['aluno'] = "João";
	$arr['curso'] = "PHP";
	$arr['versao'] = 7.43;
	$arr[10] = "Sábado";
	
	echo "<br />Tamanho array: ".count($arr);
	
	/*for ($i=0;$i<count($arr);$i++) {
		echo "<br />".$i." ".$arr[$i];
	}*/

		//$_SERVER['']
	
	foreach ($arr as $k=>$item) {
echo "<br />Chave: ".$k
	 ." Valor: ".$item;
	}
	

?>