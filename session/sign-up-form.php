<div class="sign-up">
    <a class="close-icon" href="#" onclick="toggleSignUp()">&#10006;</a>
    <br>
    <form class="sign-up-form" action="../session/signup.php" method="post">
      <label><span class="sign-up-label">First Name</span><input type="text" name="first" /></label><br/>
      <div class="error"><?php echo $_SESSION["first_name_error"]; ?></div>

      <label><span class="sign-up-label">Last Name</span><input type="text" name="last" /></label><br/>
      <div class="error"><?php echo $_SESSION["last_name_error"]; ?></div>

      <label><span class="sign-up-label">Email</span><input type="text" name="email" /></label><br/>
      <div class="error"><?php echo $_SESSION["email_error"]; ?></div>

      <label><span class="sign-up-label">Password</span><input type="password" name="password" /></label>
      <div class="error"><?php echo $_SESSION["password_error"]; ?></div>
      
      <input class="submit" type="submit" value="Sign up" />
    </form>
</div>
