<?php
  require_once "../resources/Dao.php";
  require_once "../resources/Pass.php";

  $dao = new Dao();
  $pass = new Pass();

  session_start();

  $_SESSION["form_errors"] = false;
  $_SESSION["email_error"] = "";
  $_SESSION["password_error"] = "";
  $_SESSION["email"] = "";


	$email = "";
	$password = "";

  if(empty($_POST["email"])) {
    $_SESSION["form_errors"] = true;
    $_SESSION["email_error"] = "An email is required";
  } else {
    $email = test_input($_POST["email"]);
    if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email)) {
      $_SESSION["form_errors"] = true;
      $_SESSION["email_error"] = "A valid email is required";
      $_SESSION["email"] = $email;
    } 
  }

  if(empty($_POST["password"])) {
    $_SESSION["form_errors"] = true;
    $_SESSION["password_error"] = "A password is required";
    $_SESSION["email"] = $email;
  } else {
    $password = $pass->crypt_pass($_POST['password']);
  }

	if (!isset($_SESSION['form_errors']) || !$_SESSION['form_errors']){
		$user = $dao->getUser($email);

    if (is_null($user) ) {
      $_SESSION["form_errors"] = true;
      $_SESSION["email_error"] = "Account not found";
      $_SESSION["email"] = $email;
    } else if($pass->is_password_correct($user, "$password")){
			$_SESSION["name"] = user_name($user);
		} else {
      $_SESSION["form_errors"] = true;
      $_SESSION["password_error"] = "Invalid password";
      $_SESSION["email"] = $email;
    }
	}

  function user_name($user) {
  	$user_name = "";
  	if (is_null($user["first_name"]) || $user["first_name"] === ""){
  		if (is_null($user["last_name"]) || $user["last_name"] === ""){
  			$user_name = $user["email"];
  		} else {
  			$user_name = ucwords($user["last_name"]);
  		}
  	} else {
  		$user_name = ucwords($user["first_name"] . " " . $user["last_name"]);
  	}
  	return $user_name;
  }

  function test_input($data) {
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
  <!-- <meta http-equiv="refresh" content="0; url=http://www.cricketandbea.com/" /> -->
</head>
<body>
  <h1> <?php echo $user; ?></h1>
  <h1> <?php echo  is_null($user); ?></h1>
  <h1> <?php echo  $_SESSION["email_error"]; ?></h1>
  <h1> <?php echo  $_SESSION["form_errors"]; ?></h1>
  
</body>
</html>