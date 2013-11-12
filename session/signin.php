<?php
  require_once "../resources/Dao.php";

  $dao = new Dao();

	$email = "";
	$pass = "";

	if(isset($_POST['email']))
	{
		$email = $_POST['email'];
	}

	if(isset($_POST['password']))
	{
		$pass = crypt($_POST['password']);
	}


	if ($email !== "" && $pass !== ""){
			$user = $dao->getUser($email);
    if(is_password_correct($user, $email, $pass)){
			session_start();
			$_SESSION["name"] = user_name($user);
		}
	}

  function is_password_correct($user, $email, $password){
 		if ($user["password"] === $password){
 			return TRUE;
 		} else {
 	  	return FALSE;
    }
  }

  function user_name($user){
  	$user_name = "";
  	if (is_null($user["first_name"]) || $user["first_name"] === ""){
  		if (is_null($user["last_name"])|| $user["last_name"] === ""){
  			$user_name = $user["email"];
  		} else {
  			$user_name = ucwords($user["last_name"]);
  		}
  	}
  	else {
  		$user_name = ucwords($user["first_name"] . " " . $user["last_name"]);
  	}
  	return $user_name;
  }
?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="refresh" content="0; url=http://www.cricketandbea.com/" />
</head>
<body>
  
</body>
</html>