<?php
	error_reporting(E_ALL);
	ini_set('display_errors', 1);
	
	
	session_start();
	$connection = mysqli_connect('localhost', 'root', 'root', 'adminlte');
	
	$newUsername = $_POST['register_username'];
	$newUserEmail = $_POST['register_email'];
	$newpassword = $_POST['register_password'];
	$confirmnewpassword = $_POST['register_cpassword'];
	$newUserFname = $_POST['register_fName'];
	$newUserPosition = $_POST['register_position'];
	
	$getPassResults = mysqli_query($connection,"SELECT username FROM user WHERE username='".$newUsername."' ");
	$getPassUserData = mysqli_fetch_assoc($getPassResults);
	
	$dataBaseUsername = $getPassUserData['username'];
	
	//print $dataBasePassword;
	if($dataBaseUsername == $newUsername){
		echo "The username you entered exist.";
		
	}else if($newpassword != $confirmnewpassword){
		echo "Your password must match.";
		
	}if($newpassword == $confirmnewpassword){
		
		$escapedName = mysqli_real_escape_string($connection,$newUsername); # use whatever escaping function your db requires this is very important.
		$escapedPW = mysqli_real_escape_string($connection,$newpassword);
		
		# generate a random salt to use for this account
		$salt = bin2hex(mcrypt_create_iv(32, MCRYPT_DEV_URANDOM));

		$saltedPW =  $escapedPW . $salt;
		$hashedPW = hash('sha256', $saltedPW);
		
		echo '$escapedName -> '.$escapedName;
		echo "<br/><br/>";
		
		echo '$hashedPW -> '.$hashedPW;
		echo "<br/><br/>";
		
		echo '$escapedPW -> '.$escapedPW;
		echo "<br/><br/>";
		
		echo '$salt -> '.$salt;
		echo "<br/><br/>";
		
		$sql = mysqli_query($connection,"INSERT INTO user (accountType, username, email, password, active, name, position, salt) VALUES ('Associate', '".$escapedName."', '".$newUserEmail."', '".$hashedPW."', '1', '".$newUserFname."', '".$newUserPosition."', '".$salt."')");
		
	};
	
	if($sql){
		echo "Congratulations You have successfully changed your password <br/>";
		
		header( "Location: /IDS-Toolbox/userView/myAccount.php");
		
	}else{
		echo "The new password and confirm new password fields must be the same <br/>";
		
	};
		
?>