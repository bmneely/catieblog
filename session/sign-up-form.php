<div class="sign-up" id="<?php if(isset($_SESSION['sign_up_form_errors']) && $_SESSION['sign_up_form_errors']) { echo 'show-me';} ?>">
  <a class="close-icon" href="#" onclick="toggleSignUp()">&#10006;</a>
  <br>
  <form class="sign-up-form" action="../session/signup.php" method="post">
    <label><span class="sign-up-label">First Name</span><input type="text" name="first" value= "<?php if(isset($_SESSION['email'])){ echo $_SESSION['first_name'];}?>" /></label><br/>
    <div class="error"><?php echo $_SESSION["first_name_error"]; ?></div>

    <label><span class="sign-up-label">Last Name</span><input type="text" name="last" value= "<?php if(isset($_SESSION['email'])){ echo $_SESSION['last_name'];}?>" /></label><br/>
    <div class="error"><?php echo $_SESSION["last_name_error"]; ?></div>

    <label><span class="sign-up-label">Email</span><input type="text" name="email" value= "<?php if(isset($_SESSION['email'])){ echo $_SESSION['email'];}?>" /></label><br/>
    <div class="error"><?php echo $_SESSION["sign_up_email_error"]; ?></div>

    <label><span class="sign-up-label">Password</span><input type="password" name="password" /></label>
    <div class="error"><?php echo $_SESSION["sign_up_password_error"]; ?></div>
    
    <input class="submit" type="submit" value="Sign up" />
  </form>
</div>
