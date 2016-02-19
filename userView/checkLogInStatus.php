<?php
	session_start();
	if ( isset($_SESSION['userIsLoggedIn'])){
		echo "<h1>LoggedIn - ",$_SESSION['userIsLoggedIn'];
		echo "<h1>username - ",$_SESSION['username'];
		header("Location: /IDS-Toolbox/userView/index.php\r\n");
		
	};
	exit;
	
	

	/* if ( isset($_SESSION['userIsLoggedIn'])){
		header("Location: /IDS-Toolbox/userView/index.php\r\n");
		exit;
	}else{ 
		header("Location: /IDS-Toolbox/userView/main_login.php");
	}; */
?>