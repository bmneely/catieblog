<?php
  require_once "../resources/Dao.php";
  require_once "../resources/Pass.php";

  $dao = new Dao();
  $pass = new Pass();

	$email = "";
	$pass = "";

	if(isset($_POST['email']))
	{
		$email = $_POST['email'];
	}

	if(isset($_POST['password']))
	{
		$pass = $pass->crypt_pass($_POST['password']);
	}


	if ($email !== "" && $pass !== ""){
			$user = $dao->getUser($email);
    if($pass->is_password_correct($user, $pass)){
			session_start();
			// $_SESSION["name"] = user_name($user);
      // $_SESSION["name"] =  "Ben Neely";

		}
	}


  // function user_name($user){
  // 	$user_name = "";
  // 	if (is_null($user["first_name"]) || $user["first_name"] === ""){
  // 		if (is_null($user["last_name"])|| $user["last_name"] === ""){
  // 			$user_name = $user["email"];
  // 		} else {
  // 			$user_name = ucwords($user["last_name"]);
  // 		}
  // 	}
  // 	else {
  // 		$user_name = ucwords($user["first_name"] . " " . $user["last_name"]);
  // 	}
  // 	return $user_name;
  // }
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