<div class="comments">
  <?php
    $user = $dao->getComments($post_id);
    echo "<table>";
    echo "<tr>";
    echo "</tr>";
    echo "</table>";
  ?>
</div>

<div>
  <?php include("comment-form.php") ?>
</div>