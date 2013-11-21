<?php
  session_start();
  require_once $_SERVER['DOCUMENT_ROOT'] . "/resources/Dao.php";
  $dao = new Dao();

    // echo $post_id;
  $comment_date = new DateTime('now');
  // echo $comment_date;
  $user = $dao->getUser($_SESSION["email"]);
  $user_id = $user["id"];
    // echo $user_id;
  $content = clean_input($_POST["content"]);
    // echo $content;

  // $dao->saveComment ($comment_date, $user_id, $post_id, $content);

  function clean_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
?>

lasdjfl;kasdfj;l asd;j;ladfsj;lfdaj;ladfsj;fadsj; adfjls