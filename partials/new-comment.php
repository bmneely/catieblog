<?php
  session_start();
  require_once $_SERVER['DOCUMENT_ROOT'] . "/resources/Dao.php";
  $dao = new Dao();

  $comment_date = new DateTime("now", new DateTimeZone('America/Denver')); 
  $user = $dao->getUser($_SESSION["email"]);
  $user_id = $user["id"];
  $content = $_POST["content"];
    echo $content;
    echo $post_id
    echo $user_id
    echo "!!!!!!!!!!!!";

  // $dao->saveComment ($comment_date, $user_id, $post_id, $content);

  function clean_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
?>

JJJJJJKKKKKKKK