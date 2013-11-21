<div class="comments">
  <h2>Comments</h2>


  I am right here!<br>

  <?php
    echo "test1\n";

    require_once $_SERVER['DOCUMENT_ROOT'] . "/resources/Dao.php";
    
    echo "test2\n";

    $dao = new Dao();

    echo "test3\n";

    echo var_dump($dao);
    
    echo "test4\n";
    
    $comments = $dao->getComments($post_id);

    // echo var_dump($comments);
    // echo $comments;
    echo "test5\n";
  
  ?>
</div>

<div>
  <?php include("comment-form.php") ?>
</div>