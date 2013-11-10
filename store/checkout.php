<?php $page = "store" ?>

<!DOCTYPE html>
<html>
  <?php include("../partials/head.php") ?>
  <link href="/assets/stylesheets/store-styles.css" rel="stylesheet" type="text/css">
<body>
  <div id="container">

    <?php include("../partials/banner.php") ?>

    <div id="body">
      <div class="cart">

        <h2>Your cart</h2>
        <hr></hr>
        <img class="item-image-cart" src="../posts/2-3-13/photos/hanger05.jpg" alt="shopping-cart-item">
        <img class="item-image-cart" src="../posts/1-27-13/photos/quill-01.jpg" alt="shopping-cart-item">
        <hr></hr>
        
        <div class="clear"></div>
        <span class="total">Total:<span class="price">$23</span></span>
        <div class="clear"></div>

      </div>
    </div>
    <?php include("../partials/footer.php") ?>
  </div>
</html>