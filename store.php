<?php
  $page = "store";
  session_start();
?>

<!DOCTYPE html>
<html>
  <?php include("partials/head.php") ?>
  <link href="/assets/stylesheets/store-styles.css" rel="stylesheet" type="text/css">
<body>
  <div id="container">
    <?php include("partials/banner.php") ?>

    <div id="body">
      <?php# include("store/shopping_cart.php") ?>

      <div class="inventory">
        <?php $image_location = "posts/2-3-13/photos/hanger05.jpg"; $item_name = "Crochet hanger covers"; $price = "\$8"; $item_desc = "Beautiful hand croched hanger covers."; include("store/item_partial.php") ?>
        <?php $image_location = "posts/1-27-13/photos/quill-01.jpg"; $item_name = "Cat and Bunny Dolls"; $price = "\$15"; $item_desc = "Hand made paper mache dolls. Includes brown cat and white bunny."; include("store/item_partial.php") ?>
        <?php $image_location = "posts/9-22-13/photos/9.22.13-08.jpg"; $item_name = "Baby pants"; $price = "\$10"; $item_desc = "Cute denim baby pants.  Sizes avaible for 0-18 months."; include("store/item_partial.php") ?>
        <?php $image_location = "posts/1-28-13/photos/washi-04.jpg"; $item_name = "Washi tape"; $price = "\$5"; $item_desc = "Hand made washi tape.  Includes 5 spolls of tape."; include("store/item_partial.php") ?>
      </div>
    </div>
    <?php include("partials/footer.php") ?>
  </div>
</html>