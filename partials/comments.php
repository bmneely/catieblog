<div class="comments">
  <h2>Comments</h2>

  <?php
    require_once $_SERVER['DOCUMENT_ROOT'] . "/resources/Dao.php";    
    $dao = new Dao();
    $comments = $dao->getComments($post_id);

    foreach ($comments as $comment) {
      $user = $dao->getUserById($comment["user_id"]);

      echo "<div class='comment-content' id='comment-". $comment["id"] ."'>";
      echo htmlspecialchars($comment["content"]);;
      if ($user["email"] == $_SESSION["email"]){
        echo "<div class='float-right'><a href='javascript:void(0)' class='delete_comment' value='". $comment["id"] ."'><i class='fa fa-trash-o'></i></a></div>";
      }
      echo "<div class='comment-user'>";
      echo htmlspecialchars(user_name($user));
      echo "</div></div>";
    }

    function user_name($user) {
      $user_name = "";
      if (is_null($user["first_name"]) || $user["first_name"] === ""){
        if (is_null($user["last_name"]) || $user["last_name"] === ""){
          $user_name = $user["email"];
        } else {
          $user_name = ucwords($user["last_name"]);
        }
      } else {
        $user_name = ucwords($user["first_name"] . " " . $user["last_name"]);
      }
      return $user_name;
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