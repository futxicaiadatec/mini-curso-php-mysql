<?php

$con = mysqli_connect("localhost","root","");
	mysqli_select_db($con,"futxicaiada");
	
	$str_select = 
		"SELECT id,nome,raca 
		FROM  gatinhos ORDER BY nome ASC";
		$result =  mysqli_query($con,$str_select);
		
	$linha = mysqli_fetch_assoc($result);
	
	do {
		echo "<br /> ".$linha['id']." - ".
					  $linha['nome']." - "
					  .$linha['raca'];		
		$linha = mysqli_fetch_assoc($result);			  
	} while ($linha);		  
	
?>

<table>
	<thead>
		<tr>
			<th>#ID</th>
			<th>NOME</th>
			<th>RAÇA</th>
		</tr>
	</thead>
	<tbody>
		<?php
		
			mysqli_data_seek($result, 0);
		
			while ($linha = mysqli_fetch_assoc($result)) {
		?>
		<tr>
			<td><?php echo $linha['id'] ?></td>
			<td><?php echo $linha['nome'] ?></td>
			<td><?php echo $linha['raca'] ?></td>
		</tr>
		<?php
			}
		?>
	</tbody>


