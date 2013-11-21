<?php
  session_start();
?>
<div id="header">
  <div>
    <a href="/index.php"><img id="logo" src="/assets/images/logo.jpg" alt="cricket and bea"></a>
    <div class="banner"></div>
  </div>

  <div class="nav">
    <ul>
      <li class="<?php print $page === 'blog' ? 'active' : 'inactive' ?>"><a href="/index.php">Home</a></li>
      <li class="<?php print $page === 'about' ? 'active' : 'inactive' ?>"><a href="/about.php">About</a></li>
      <li class="<?php print $page === 'gallery' ? 'active' : 'inactive' ?>"><a href="/gallery.php">Gallery</a></li>
      <li class="<?php print $page === 'store' ? 'active' : 'inactive' ?>"><a href="/store.php">Store</a></li>
      <span id="login-area">
        <?php
        if(isset($_SESSION["name"]))
          {
            echo "<li class='float-right'><a href='../session/signout.php'><span class='log-in-text'>" . $_SESSION["name"] ."</span><i class='fa fa-sign-out'></i></a></li>";
          } else {
            echo "<li class='float-right'><a href='#' onclick='toggleSignIn()'><span class='log-in-text'>Log In</span><i class='fa fa-sign-in'></i></a></li>";
          }
        ?>
      </span>
    </ul>
  </div>
  <?php include("~/session/sign-in-form.php") ?>
  <?php include("~/session/sign-up-form.php") ?>
  <div class="clear"></div>
</div>
<div class="clear"></div>