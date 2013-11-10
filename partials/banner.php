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
      <span class='sign-in-link'><a href="/session/signup.php">Sign Up</a></span>
      <a class="close-icon" href="" onclick="toggleSignIn()">&#10006;</a>
      <br>
      <form action="session/signin.php" method="post">
        <label>Email:<input type="text" name="email" /></label><br/>
        <label>Pasword:<input type="password" name="password" /></label><br/>
        <input type="submit" value="Log In" />
      </form>
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