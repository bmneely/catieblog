<div class="comments">
  <h2>Comments</h2>


  I am right here!

  <?php
    echo "test1";

    require_once "../resources/Dao.php";
    
    echo "test2";

    $dao = new Dao();

    echo "test3";


    echo var_dump($dao);
    echo "string";
    $comments = $dao->getComments($post_id);
    // echo var_dump($comments);
    // echo $comments;
  ?>
</div>

<div>
  <?php include("comment-form.php") ?>
</div>