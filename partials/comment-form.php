<div class="comment-form">
  <form class="commment-form" id="comment-form" action="/partials/new-comment.php" method="post">
    <textarea class="text-area" rows="4" cols="50" name="content"></textarea>
    <input type="hidden" name="post_id" value="<?php echo $post_id ?>">
    <input type="hidden" name="user_name" value="<?php echo $usr->user_name($user) ?>">
    <input class="submit-commit" type="submit" value="Submit Comment" />
  </form>
</div>
