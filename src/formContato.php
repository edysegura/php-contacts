<?php
include 'includes/config.inc.php';
include 'actions/updateContato.action.php'; 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pt-br">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title><?php echo $title; ?></title>

<!-- stylesheet -->
<link rel="stylesheet" href="css/style.css" type="text/css" />

</head>
<body>

<div id="header">
	<h1>Cadastro de Contato</h1>
	<div class="dados-user">
		<span>
			<strong>Usuário:</strong> edysegura | <?php echo date("d/m/Y"); ?> |
		</span>
		<a href="index.php" onclick="return confirm('Sair do sistema?')" 
		 title="Sai da aplicação">Sair</a> 
	</div>
</div>

<a href="main.php" class="voltar" title="Volta para lista de contatos">Voltar</a>

<form class="cad" action="actions/saveContato.action.php" method="post" enctype="multipart/form-data">
	<fieldset>
		<legend>
			Dados do Contato
		</legend>
		
		<label>
			Nome
			<input type="text" name="nome" value="<?php echo $contato->getNome(); ?>" />
			<input type="hidden" name="id" value="<?php echo $contato->getId(); ?>" />
		</label>
		
		<label>
			Email
			<input type="text" name="email" 
			 value="<?php echo $contato->getEmail(); ?>" />
		</label>
		
		<label>
			Telefone
			<input type="text" name="telefone"
			 value="<?php echo $contato->getTelefone(); ?>" />
		</label>
		
		<label>
			Celular
			<input type="text" name="celular"
			 value="<?php echo $contato->getCelular(); ?>" />
		</label>
		
		<label>
			Foto
			<input type="file" name="foto" size="28" />
		</label>
		
		<label>
			Descrição
			<textarea id="descricao" name="descricao" rows="0" 
			 cols="30"><?php echo $contato->getDescricao(); ?></textarea>
		</label>
		
		<div class="buttons">
			<input class="button" type="submit" value="Salvar" />
			<input class="button" type="reset" value="Cancelar" />
		</div>
	</fieldset>
</form>

</body>
</html>
