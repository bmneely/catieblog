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
      <li class="float-right"><a href="#" onclick="toggleSignIn()"><i class="fa fa-sign-in"></i> Log In</a></li>
    </ul>
  </div>
  <div class="sign-in">
    <div>
      <a class="close-icon" href="" onclick="toggleSignIn()">&#10006;</a>
      <br>
      Username:
      <br>
      password:
    </div>
  </div>
  <div class="clear"></div>
</div>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script>
  function toggleSignIn(){
    $(".sign-in").toggle();
  }
</script>