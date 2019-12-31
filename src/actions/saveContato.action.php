<?php
include '../classes/Contato.class.php';
include '../classes/ContatoDAO.class.php';

$contato = new Contato();

$contato->setId($_POST['id']);
$contato->setNome(utf8_decode($_POST['nome']));
$contato->setEmail($_POST['email']);
$contato->setTelefone($_POST['telefone']);
$contato->setCelular($_POST['celular']);
$contato->setDescricao(utf8_decode($_POST['descricao']));

$dao = new ContatoDAO();
$result = false;

if(empty($_POST['id'])) {
	$result = $dao->insert($contato);
}
else {
	$result = $dao->update($contato);
}

if($result) {
	//header é um método nativo para realizar redirencioamentos ou 
	//configurações de cabeçalhos
	header("Location: ../main.php?success=true");
}
else {
	header("Location: ../formContato.php?fail=true");
}

?>