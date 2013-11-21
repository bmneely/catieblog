<?php
  require_once "../resources/Dao.php";
  require_once "../resources/Pass.php";

  $dao = new Dao();
  $pass = new Pass();

  session_start();

  $_SESSION["sign_up_form_errors"] = false;
  $_SESSION["sign_up_email_error"] = "";
  $_SESSION["sign_up_password_error"] = "";

	$first = clean_input($_POST['first']);
  $_SESSION["first_name"] = $first;
	$last = clean_input($_POST['last']);
  $_SESSION["last_name"] = $last;
	$role = "USER";


  if(empty($_POST["email"])) {
    $_SESSION["sign_up_form_errors"] = true;
    $_SESSION["sign_up_email_error"] = "An email is required";
  } else {
    $email = clean_input($_POST["email"]);
    if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email)) {
      $_SESSION["sign_up_form_errors"] = true;
      $_SESSION["sign_up_email_error"] = "A valid email is required";
      $_SESSION["email"] = $email;
    } 
  }

  if(empty($_POST["password"])) {
    $_SESSION["sign_up_form_errors"] = true;
    $_SESSION["sign_up_password_error"] = "A password is required";
    $_SESSION["email"] = $email;
  } else {
    $password = $pass->crypt_pass($_POST['password']);
  }

  if (!$_SESSION["sign_up_form_errors"]){
    $user = $dao->getUser($email);

    if (!is_null($user["email"])) {
      $dao->saveUser($first, $last, $email, $password, $role);
    } else {
      $_SESSION["sign_up_form_errors"] = true;
      $_SESSION["sign_up_email_error"] = "This email address already exists";
    }
  }

  function clean_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="refresh" content="0; url=<?php echo $_SERVER['HTTP_REFERER']; ?>" />
</head>
<body>
  <h1>
  </h1>
</body>
</html>