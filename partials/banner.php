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
      <li class="float-right"><div="hand-pointer" onclick="toggleSignIn()"><i class="fa fa-sign-in"></i> Log In</div></li>
    </ul>
  </div>
  <div class="sign-in">
    <div>
      <div class="hand-pointer sign-in-form close-icon" onclick="toggleSignIn()">&#10006;</div>
      <br>
      <form class="sign-in-form" action="session/signin.php" method="post">
        <label>Email:<br><input type="text" name="email" /></label><br/>
        <label>Pasword:<br><input type="password" name="password" /></label>
        <input class="submit" type="submit" value="Log In" />/<span class='sign-in-form sign-in-link'><div="hand-pointer" onclick="toggleSignUp()">Sign Up</div></span>
      </form>
    </div>
  </div>
  <div class="clear"></div>
  <div class="sign-up">

  </div>
</div>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script>
  function toggleSignIn(){
    $(".sign-in").toggle();
  }

  function toogleSignUp(){
    $(".sign-up").toggle();
  }
</script>