<?php


	$user = "";
	$pass = "";
	if(isset($_POST['email']))
	{

		$user = $_POST['email'];
	}

	if(isset($_POST['password']))
	{
		$pass = $_POST['password'];
	}

	// echo $user."<br>";
	// echo $pass;
?>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script>
 alert("In the form!");
 </script>