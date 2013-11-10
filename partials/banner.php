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
      <?php if(isset($_SESSION["name"])){
        //   echo "<li class='float-right'><a href='#'' onclick="toggleSignIn()"><i class='"'fa fa-sign-out'"'></i><span class='"'log-in-text'"'>" . $_SESSION["name"] ."</span></a></li>"
        // } else {
        //   echo "<li class='float-right'><a href='#' onclick='toggleSignIn()'><i class='fa fa-sign-in'></i><span class='log-in-text'>Log In</span></a></li>"
        // }
      ?>
    </ul>
  </div>
  <div class='sign-in'>
    <div>
      <a class="close-icon" href="#" onclick="toggleSignIn()">&#10006;</a>
      <br>
      <form class="sign-in-form">
        <label><div>Email</div><input type="text" name="email" /></label><br/>
        <label><div>Password</div><input type="password" name="password" /></label>
        <input class="submit" type="submit" value="Log In" />/<span class='sign-in-form sign-in-link'><a href="#" onclick="toggleSignIn(); toggleSignUp()">Sign Up</a></span>
      </form>
    </div>
  </div>
  <div class="sign-up">
      <a class="close-icon" href="#" onclick="toggleSignUp()">&#10006;</a>
      <br>
      <form class="sign-up-form">
        <label><span class="sign-up-label">First Name</span><input type="text" name="first_name" /></label><br/>
        <label><span class="sign-up-label">Last Name</span><input type="text" name="last_name" /></label><br/>
        <label><span class="sign-up-label">Email</span><input type="text" name="email" /></label><br/>
        <label><span class="sign-up-label">Password</span><input type="password" name="password" /></label>
        <input class="submit" type="submit" value="Sign up" />
      </form>
  </div>
  <div class="clear"></div>
</div>
  <div class="clear"></div>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script>
  function toggleSignIn(){
    if ($(".sign-up").is(":visible")){
      $(".sign-up").toggle();
    } else {
      $(".sign-in").toggle();   
    }
  }

  function toggleSignUp(){
    $(".sign-up").toggle();
  }

  $(function () {
    $('form').on('submit', function (e) {
      alert("yaarrrr");
      $.ajax({
        type: 'post',
        url: '/session/signin.php',
        data: $('form').serialize(),
        success: function () {
          alert('form was submitted');
        }
      });
      e.preventDefault();
    });
  });


</script>