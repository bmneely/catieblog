<div class="comments">
  <h2>Comments</h2>

  <?php
    require_once $_SERVER['DOCUMENT_ROOT'] . "/resources/Dao.php";  
    require_once $_SERVER['DOCUMENT_ROOT'] . "/resources/User.php";  

    $dao = new Dao();
    $usr = new User();
    $comments = $dao->getComments($post_id);

    foreach ($comments as $comment) {
      $user = $dao->getUserById($comment["user_id"]);

      echo "<div class='comment-content' id='comment-". $comment["id"] ."'>";
      echo htmlspecialchars($comment["content"]);;
      if ($user["email"] == $_SESSION["email"]){
        echo "<div class='float-right'><a href='javascript:void(0)' class='delete_comment' value='". $comment["id"] ."'><i class='fa fa-trash-o'></i></a></div>";
      }
      echo "<div class='comment-user'>";
      echo htmlspecialchars($usr->user_name($user));
      echo "</div></div>";
    }
  ?>
</div>

<?php
  if(isset($_SESSION["email"])) {
    echo "<div>";
    include("comment-form.php");
  echo "</div>";
  } else {
    echo "Please log in to leave a comment.";
  }
?>