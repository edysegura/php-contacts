<?php
/**
 * Busca a lista de contatos
 */
include 'classes/Contato.class.php';
include 'classes/ContatoDAO.class.php';

$dao = new ContatoDAO();
$contatos = $dao->getAll(new Contato());
?>
