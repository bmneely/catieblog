<?php

  require_once $_SERVER['DOCUMENT_ROOT'] . "/resources/Dao.php";
  $dao = new Dao();
  session_start();

  $comment_id = $_POST['id'];
  $dao->deleteComment($comment_id);

?>