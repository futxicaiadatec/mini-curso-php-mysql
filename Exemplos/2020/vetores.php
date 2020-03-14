<?php

	$vetor[0]=10;
	$vetor[1]=11;
	$vetor[2]=12;
	$vetor[3]=13;
	$vetor[4]=14;
	$vetor[5]=15;
	
	array_push($vetor, 16);
	
	//array_pop($vetor); //-> trata como um pilha e retira do topo
	//array_shift($vetor);
	
	//criar uma variável soma
	//e somar todos os valores do vetor
	for ($i=0;$i<count($vetor);$i++) {
		echo "<br />Posição ".$i
			." valor: ".$vetor[$i];
	}
	
	$n=0;
	$soma=0;
	while ($n<count($vetor)) {
		$soma=$soma+$vetor[$n];
		$n=$n+1;
	}
	
echo "<br/>Soma do vetor: ".$soma;
	
?>