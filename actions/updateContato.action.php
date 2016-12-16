<?php
/**
 * Action para editar contato
 */
include 'classes/Contato.class.php';
include 'classes/ContatoDAO.class.php';

$id = "";
$contato = new Contato();

if(isset($_GET['id']) && !empty($_GET['id'])) {
	$id = (int) $_GET['id'];
	$dao = new ContatoDAO();
	$contato = $dao->getById($id);
}
?>