<?php
	session_start();
	if(!isset($_SESSION["success"]))
	{
		header("location:login.php");
		exit();
	}
	
	if(isset($_POST["token"]))
	{
		echo $_SESSION["csrf"];
	}

?>