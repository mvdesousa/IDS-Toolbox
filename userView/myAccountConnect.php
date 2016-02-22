<?php
	error_reporting(E_ALL);
	ini_set('display_errors', 1);
	
	$connection = mysqli_connect('localhost', 'root', 'root', 'adminlte');
	
	// $_SESSION['username']
	$myAccountResults = mysqli_query($connection,"SELECT * FROM user WHERE username='".$_SESSION['username']."'");
	
	$myAccountResultsRow = mysqli_fetch_assoc($myAccountResults);
	
	$userFname =  $myAccountResultsRow['name'];
	$userName =  $myAccountResultsRow['username'];
	$userEmail =  $myAccountResultsRow['email'];
	
	$_SESSION['userFname'] = $userFname;
	$_SESSION['userName'] = $userName;
	$_SESSION['userEmail'] = $userEmail;
?>