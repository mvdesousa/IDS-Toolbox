<?php //Start the Session
	error_reporting(E_ALL);
	ini_set('display_errors', 1);
	
	session_start();
	require('connect.php');
		
		
		
		
	
	//3. If the form is submitted or not.
	//3.1 If the form is submitted
	if (isset($_POST['username']) and isset($_POST['password'])) {
		//3.1.1 Assigning posted values to variables.
		$username = $_POST['username'];
		$password = $_POST['password'];
		
		//3.1.2 Checking the values are existing in the database or not
		$query    = "SELECT * FROM `user` WHERE username='$username' and password='$password'";
		$emailQuery    = "SELECT `email` FROM `user` WHERE username='$username' and password='$password'";
		
		$result = mysqli_query($connection, $query) or die(mysqli_error());
		$count = mysqli_num_rows($result);
		
		//3.1.2 If the posted values are equal to the database values, then session will be created for the user.
		if ($count == 1) {
			$_SESSION['username'] = $username;
			$_SESSION['name'] = $fName;
			
			$_SESSION['userIsLoggedIn'] = true;
			
		} else {
			//3.1.3 If the login credentials doesn't match, he will be shown with an error message.
			//echo $username, " - Invalid Login Credentials.";
			
			header( "Location: main_login.php" );
		}
	}
	//3.1.4 if the user is logged in Greets the user with message
	if (isset($_SESSION['username'])) {
		$username = $_SESSION['username'];
		
		if ( isset($_SESSION['userIsLoggedIn'])){
			echo "<h1>LoggedIn - ",$_SESSION['userIsLoggedIn'];
			echo "<h1>username - ",$_SESSION['username'];
			echo "<h1>My Name - ",$_SESSION['name'];
			
			header("Location: /IDS-Toolbox/userView/index.php\r\n");
			
		};
		
		
		$myAccountResults = mysqli_query($connection,"SELECT * FROM user WHERE username='".$_SESSION['username']."'");
		
		$myAccountResultsRow = mysqli_fetch_assoc($myAccountResults);
		
		$userFname =  $myAccountResultsRow['name'];
		$userName =  $myAccountResultsRow['username'];
		$userEmail =  $myAccountResultsRow['email'];
		
		$_SESSION['userFname'] = $userFname;
		$_SESSION['userName'] = $userName;
		$_SESSION['userEmail'] = $userEmail;
		
		
		
		
		
		/*
		if ( isset($_SESSION['username'])){
			header("Location: index.php\r\n");
			exit;
		}
		
		
		echo "Hai " . $username . "
		";
		echo "This is the Members Area
		";
		echo "<a href='logout.php'>Logout</a>";
		*/
	} else {
		//3.2 When the user visits the page first time, simple login form will be displayed.
		
	}
?>