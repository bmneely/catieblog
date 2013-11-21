<div class="sign-in" id="<?php if(isset($_SESSION['form_errors']) && $_SESSION['form_errors']) { echo 'show-me';} ?>">
  <div>
    <a class="close-icon" href="#" onclick="toggleSignIn()">&#10006;</a>
    <br>
    <form class="sign-in-form" action='<?php echo $_SERVER['DOCUMENT_ROOT'] . "../session/signin.php" ?>' method="post">
      <label><div>Email</div><input type="text" name="email" value= "<?php if(isset($_SESSION['email'])){ echo $_SESSION['email'];}?>" /></label><br/>
      <div class="error"><?php echo $_SESSION["email_error"]; ?></div>
      <label><div>Password</div><input type="password" name="password" /></label>
      <div class="error"><?php echo $_SESSION["password_error"]; ?></div>
      <input class="submit" type="submit" value="Log In" />/<span class='sign-in-form sign-in-link'><a href="#" onclick="toggleSignIn(); toggleSignUp()">Sign Up</a></span>
    </form>
  </div>
</div>