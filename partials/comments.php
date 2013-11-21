<div class="comments">
  <h2>Comments</h2>


  I am right here!<br>

  <?php
    require_once $_SERVER['DOCUMENT_ROOT'] . "/resources/Dao.php";    
    $comments = $dao->getComments($post_id);

    foreach ($comments as $comment) {
      echo "<div class='comment-content'>";
      echo $comment["content"];
      echo "<div class='comment-user'>";
      echo $comment["user_id"];
      echo "</div></div>";
    }
  ?>
</div>


<div>
  <?php include("comment-form.php") ?>
</div>