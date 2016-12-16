<?php
include 'includes/config.inc.php';
include 'actions/listContato.action.php'; 
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
	<h1>Lista de Contatos</h1>
	<div class="dados-user">
		<span>
			<strong>Usuário:</strong> edysegura | <?php echo date("d/m/Y"); ?> |
		</span>
		<a href="index.php" onclick="return confirm('Sair do sistema?')" 
		 title="Sai da aplicação">Sair</a> 
	</div>
</div>

<form action="" class="filtro" method="post">
	<fieldset>
		<legend>Filtro</legend>
		
		<label>
			Nome 
			<input type="text" name="nome" />
		</label>
		
		<label>
			Email
			<input type="text" name="email" />
		</label>
		
		<div class="buttons">
			<input type="submit" value="Filtrar" />
		</div>
	</fieldset>
</form>

<div class="actions">
	<a href="formContato.php" class="new">Adicionar Contato</a>
</div>

<table>
	<colgroup>
		<col class="nome" />
		<col class="email" />
		<col class="telefone" />
		<col class="celular" />
		<col class="foto" />
		<col class="descricao" />
		<col class="remover" />
	</colgroup>
	
	<thead>
		<tr>
			<th>Nome</th>
			<th>Email</th>
			<th>Telefone</th>
			<th>Celular</th>
			<th>Foto</th>
			<th>Descrição</th>
			<th>&nbsp;</th>
		</tr>
	</thead>
	
	<tbody>
		<?php
			foreach ($contatos as $contato) { 
		?>
		<tr>
			<td>
				<a class="edit" href="formContato.php?id=<?php echo $contato->getId(); ?>"><?php echo $contato->getNome(); ?></a>
			</td>
			<td>
				<?php echo $contato->getEmail(); ?>
			</td>
			<td>
				<?php echo $contato->getTelefone(); ?>
			</td>
			<td>
				<?php echo $contato->getCelular(); ?>
			</td>
			<td>
				<a href="#" class="ico-foto" title="Visualizar foto">Visualizar foto</a>
			</td>
			<td>
				<?php echo $contato->getDescricao(); ?>
			</td>
			<td>
				<a class="ico-remover" onclick="return confirm('Remover contato?');" href="actions/deleteContato.action.php?id=<?php echo $contato->getId(); ?>">Remover</a>
			</td>
		</tr>
		<?php
			} 
		?>
		<?php if(sizeof($contatos) == 0) { ?>
		<tr>
			<td colspan="7">Nenhum contato foi encontrado!</td>
		</tr>
		<?php } ?>
	</tbody>
</table>


</body>
</html>
