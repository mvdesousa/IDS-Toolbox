<?php
	session_start();
	//unset($_SESSION["username"]);  // where $_SESSION["username"] is your own variable. if you do not have one use only this as follow **session_unset();**
	session_unset();
	header("Location: main_login.php");
?>