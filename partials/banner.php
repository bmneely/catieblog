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
      <a class="sign-in-form close-icon" href="#" onclick="toggleSignIn()">&#10006;</a>
      <br>
      <form class="sign-in-form" action="session/signin.php" method="post">
        <label>Email:<br><input type="text" name="email" /></label><br/>
        <label>Pasword:<br><input type="password" name="password" /></label>
        <input class="submit" type="submit" value="Log In" />/<span class='sign-in-form sign-in-link'><a href="#" onclick="toggleSignUp()">Sign Up</a></span>
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

  $(function () {
    $('form').on('submit', function (e) {
      alert("yaarrrr");
      $.ajax({
        type: 'post',
        url: 'session/signin.php',
        data: $('form').serialize(),
        success: function () {
          alert('form was submitted');
        }
      });
      e.preventDefault();
    });
  });

</script>