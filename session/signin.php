<?php
  require_once "../resources/Dao.php";

  // $dao = new Dao();


	$email = "";
	$pass = "";

	if(isset($_POST['email']))
	{
		$email = $_POST['email'];
	}

	if(isset($_POST['password']))
	{
		$pass = $_POST['password'];
	}


	// if ($email !== "" && $pass !== ""){
	// 	if(is_password_correct($email, $pass)){
	// 		$user = $dao->getUser($email);
	// 		session_start();
	// 		$_SESSION["name"] = user_name($user);
	// 	}
	// }

 //   function is_password_correct($email, $password){
 //   		$user = $dao->getUser($email);
 //   		if ($user["password"] == $password){
 //   			return TRUE;
 //   		}
 //   		return FALSE;
 //   }

 //  function user_name($user){
 //  	$user_name = ""
 //  	if ($user["first_name"] == NULL || $user["first_name"] == ""){
 //  		if ($user["last_name"] == NULL || $user["last_name"] == ""){
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