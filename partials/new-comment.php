<?php
  session_start();
  require_once $_SERVER['DOCUMENT_ROOT'] . "/resources/Dao.php";
  $dao = new Dao();

  $comment_date = new DateTime('now');
  $user = $dao->getUser($_SESSION["email"]);
  $user_id = $user["id"];
  $content = clean_input($_POST["content"]);

  // $dao->saveComment ($comment_date, $user_id, $post_id, $content);

  function clean_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
</head>
<body>
<!--  -->
</body>
</html>