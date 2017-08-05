<!DOCTYPE html>
<html>
    <head>
		<meta charset="UTF-8" />
        <title>Formulário para Entrada de Dados</title>
		<style>
		
			body {
				font-family: verdana;
				font-size: 13px;
			}
		
			fieldset {
				border: 1px solid #CCC;
				border-radius: 4px;
			}
			
			fieldset > legend {
				font-weight: bold;
				font-style: italic;
				font-size: 15px;
			}
			
			br.block {
				display: block;
				margin-top: 6px;
				margin-bottom: 6px;
			}
			
			input {
				border: 1px solid #666;
				border-radius: 4px;
				height: 25px;
			}
			
			label {
				display: inline-block;
			}
			
			label[for="nome"] {
				margin-right: 75px;
			}
			
			label[for="rga"] {
				margin-right: 85px;
			}
			
			label[for="senha"] {
				margin-right: 72px;
			}				
			
			label[for="confirma-senha"] {
				margin-right: 11px;
			}

			img.icon {
				cursor: pointer;
			}
			
			span.msg-error {
				color: #bf0404;
				font-size: 11px;
				display: none;
			}
			
		</style>
	</head>
	<body>
		<form method="POST">
			<fieldset>
				<legend>Formulário de Cadastro</legend>
				<label for="nome">Nome:</label>
				<input type="text" name="nome" id="nome" placeholder="Digite seu nome" size="56" />
				<br class="block" />
				<label for="rga">RGA:</label>
				<input type="text" name="rga" id="rga" placeholder="Digite seu RGA"  size="45" />
				<br class="block" />
				<label for="senha">Senha:</label>
				<input type="password" name="senha" id="senha" placeholder="Digite sua senha de acesso" size="30" />
				<br class="block" />			
				<button type="submit">Cadastrar</button>
			</fieldset>
		</form>
	</body>
</html>