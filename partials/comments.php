<div class="comments">
  <h2>Comments</h2>



  afsd
  sadafdsfads

  sdf
  fads
  af
  afd
  ads
  as
  <?php
    require_once "../resources/Dao.php";
    $dao = new Dao();

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