<?php
	error_reporting(E_ALL);
	ini_set('display_errors', 1);
	session_start();
	
	$connection = mysqli_connect('localhost', 'root', 'root', 'adminlte');
	
	// $_SESSION['username']
	$getPassResults = mysqli_query($connection,"SELECT password FROM user WHERE username='".$_SESSION['username']."'");
	$getPassUserData = mysqli_fetch_assoc($getPassResults);
	
	$dataBasePassword = $getPassUserData['password'];
	
	//print $dataBasePassword;
	
	$username = $_SESSION['username'];
	$password = $_POST['password'];
	$newpassword = $_POST['newpassword'];
	$confirmnewpassword = $_POST['confirmnewpassword'];
	
	if(!$dataBasePassword){
		echo "The username you entered does not exist";
	}else if($password != $dataBasePassword){
		echo "You entered an incorrect password";
	}if($newpassword == $confirmnewpassword){
		
		$escapedName = mysqli_real_escape_string($connection,$_SESSION['username']); # use whatever escaping function your db requires this is very important.
		$escapedPW = mysqli_real_escape_string($connection,$newpassword);

		# generate a random salt to use for this account
		$salt = bin2hex(mcrypt_create_iv(32, MCRYPT_DEV_URANDOM));

		$saltedPW =  $escapedPW . $salt;
		$hashedPW = hash('sha256', $saltedPW);
			echo $hashedPW;

		//$sql = mysqli_query($connection,"insert into user (username, password, salt) values ('$escapedName', '$hashedPW', '$salt'); ";
		// $sql = mysqli_query($connection,"UPDATE user SET password='".$hashedPW."', salt='".$salt."' where username='".$username."'";
		$sql = mysqli_query($connection,"UPDATE user SET password='".$hashedPW."',salt='".$salt."' where username='".$username."'");
		
		
		
		// echo $newpassword;
		// echo "<br/>";
		// echo $confirmnewpassword;
		
		//$sql = mysqli_query($connection,"UPDATE user SET password='".$newpassword."' where username='".$username."'");
	};
	
	if($sql){
		echo "Congratulations You have successfully changed your password <br/>";
		header( "Location: /IDS-Toolbox/userView/myAccount.php");
		
	}else{
		echo "The new password and confirm new password fields must be the same <br/>";
		
	};
		
?>