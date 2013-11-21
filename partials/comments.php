<div class="comments">
  <h2>Comments</h2>

  <?php
    require_once $_SERVER['DOCUMENT_ROOT'] . "/resources/Dao.php";    
    $dao = new Dao();
    $comments = $dao->getComments($post_id);

    foreach ($comments as $comment) {
      echo "<div class='comment-content'>";
      echo $comment["content"];
      echo "<div class='comment-user'>";
      echo $comment["user_id"];
      echo "</div></div>";
    }

    echo "\nKKKKLJLKJ\n";
  ?>
</div>


<div>
  <?php include("comment-form.php") ?>
</div>