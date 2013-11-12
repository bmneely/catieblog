<?php
  require_once "../resources/Dao.php";
  require_once "../resources/Pass.php";

  $dao = new Dao();
  $pass = new Pass();

	$email = $_POST['email'];
	$first = $_POST['first'];
	$last = $_POST['last'];
	$hashed_password = "lajfldsjl"
	// $hashed_password = $pass->crypt_pass($_POST['password']);
	$role = "USER";

	$dao->saveUser($first, $last, $email, $hashed_password, $role);


	// if ($email !== "" && $pass !== ""){
	// 		$user = $dao->getUser($email);
 //    if(is_password_correct($user, $email, $pass)){
	// 		session_start();
	// 		$_SESSION["name"] = user_name($user);
	// 	}
	// }

 //  function is_password_correct($user, $email, $password){
 // 		if ($user["password"] === $password){
 // 			return TRUE;
 // 		} else {
 // 	  	return FALSE;
 //    }
 //  }

 //  function user_name($user){
 //  	$user_name = "";
 //  	if (is_null($user["first_name"]) || $user["first_name"] === ""){
 //  		if (is_null($user["last_name"])|| $user["last_name"] === ""){
 //  			$user_name = $user["email"];
 //  		} else {
 //  			$user_name = ucwords($user["last_name"]);
 //  		}
 //  	}
 //  	else {
 //  		$user_name = ucwords($user["first_name"] . " " . $user["last_name"]);
 //  	}
 //  	return $user_name;
 //  }
?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <!-- <meta http-equiv="refresh" content="0; url=http://www.cricketandbea.com/" /> -->
</head>
<body>
  <h1>
  	<?php
  		echo $email . "\n"; 
			echo $first . "\n";  
			echo $last . "\n";  
 			echo $hashed_password . "\n"; 
			echo $role . "\n";  
  	?>
  </h1>
</body>
</html>