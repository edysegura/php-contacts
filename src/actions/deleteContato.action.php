<?php
/**
 * Action para deletar um contato do banco
 */
include '../classes/ContatoDAO.class.php';

if(isset($_GET['id']) && !empty($_GET['id'])) {
  $id = (int) $_GET['id'];
  $dao = new ContatoDAO();
  if($dao->delete($id)) {
    header('Location: ../main.php?delete=true');
  }
  else {
    header('Location: ../main.php?delete=false');
  }
}
?>