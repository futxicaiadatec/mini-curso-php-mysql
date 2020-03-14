<!DOCTYPE html>
<html>
	<head>
		<title>Cadastrando Dados</title>
		<style>
			.error {
				font-weight: bold;
				color: #872e1e;
				border: 1px solid #872e1e;
				background-color: #edcdc7;
				padding: 5px;
			}
		</style>
	</head>
	<body>
		<?php

			error_reporting(E_ALL);

				//$_SERVER
				//$_REQUEST

			//echo "<br />Nome: ".$_REQUEST['nome'];
			//echo "<br />Raça: ".$_REQUEST['raca'];

			$nome = $_REQUEST['nome'];
			$raca = $_REQUEST['raca'];	

			if (!empty($nome) && !empty($raca)) {

				$con = mysqli_connect("localhost", 
										"root", "");
										
				if ($con) {
				
					mysqli_select_db($con, "futxicaiada");

					//proteção contra SQLInjection
					$nome = mysqli_real_escape_string($con, $nome);
					$raca = mysqli_real_escape_string($con, $raca);
					
					$str_insert = 
					 "INSERT INTO gatinhos (nome,raca)
						VALUES ('".$nome."','".$raca."')";

					$result = mysqli_query($con,$str_insert);

					if ($result!==false) {

						echo "<p>
								Gatinho inserido com sucesso!!!
							 </p>";
							 
					}
					else {
						$errorMsg = "Erro inserindo dados no Banco de Dados";
						echo "<br />Erro mysql: ".mysqli_error($con);
					}
				}
				else {
					$errorMsg = "Erro conectando ao banco de dados!";
				}
			}
			else {
				$errorMsg = "Preencha todos os campos!";

			}

			if (isset($errorMsg)) {
				echo "<p class='error'>".$errorMsg."</p>";
			}

		?>
	</body>
</html>