<?php include_once 'config.php' ?>
<!DOCTYPE html>
<html>
	<head>
		<title>Formulário Steps</title>
		<link href="css/style.css" rel="stylesheet" type="text/css"> 
	</head>

	<body>
		<div class="resp">
		</div>

		<form id="formulario" method="post" enctype="multipart/form-data" name="formulario">
			<ul id="progress">
				<li class="ativo">Configurações</li>
				<li>Perfis pessoais</li>
				<li>Detalhes</li>
			</ul>
			<fieldset>
				<h2>Configurações de conta</h2>
				<h3>Algumas configurações</h3>
				<input type="text" name="email" placeholder="Email"/>
				<input type="password" name="senha" placeholder="Senha"/>
				<input type="password" name="csenha" placeholder="Confirmar senha"/>
				<input type="button" name="next1" class="next1 acao" value="Próximo"/>
			</fieldset>

			<fieldset>
				<h2>Perfis Pessoais</h2>
				<h3>Redes sociais</h3>
				<input type="text" name="facebook" placeholder="Facebook"/>
				<input type="text" name="twitter" placeholder="Twitter"/>
				<input type="text" name="google" placeholder="Google mais"/>
				<input type="button" name="prev" class="prev acao" value="Anterior"/>
				<input type="button" name="next2" class="next acao" value="Próximo"/>
			</fieldset>

			<fieldset>
				<h2>Detalhes Visuais</h2>
				<h3>Informe os alguns detalhes</h3>
				<input type="text" name="nome" placeholder="Nome"/>
				<input type="text" name="sobrenome" placeholder="Sobrenome"/>
				<input type="text" name="telefone" placeholder="Telefone"/>
				<input type="button" name="prev" class="prev acao" value="Anterior"/>
				<input type="submit" name="next" class="acao" value="Enviar"/>
			</fieldset>
		</form>
		<script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>
		<script type="text/javascript" src="js/functions.js"></script>
	</body>


</html>