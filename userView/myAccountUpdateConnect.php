<?php
	error_reporting(E_ALL);
	ini_set('display_errors', 1);
	session_start();
	
	//echo $_SESSION['username'];
	
	$connection = mysqli_connect('localhost', 'root', 'root', 'adminlte');
	
	// $_SESSION['username']
	$updatePassResults = mysqli_query($connection,"UPDATE user SET email='".$_POST['userEmailAddressVal']."', name='".$_POST['userFullNameVal']."', position='".$_POST['userJobTitleVal']."', officeNumber='".$_POST['userOfficeNumberVal']."', cellNumber='".$_POST['userCellNumberVal']."' WHERE username='".$_SESSION['username']."'");
	
	
	if($connection){
		echo "Congratulations You have successfully changed your profile <br/>";
		header( "Location: /IDS-Toolbox/userView/myAccount.php");
		
	}else{
		echo "Sorry there was an error";
		
	};
	
	
	/*
	if (mysqli_connect_errno()) {
		printf("Connect failed: %s\n", mysqli_connect_error());
		exit();
	}

	if (!mysqli_query($connection)) {
		printf("Errormessage: %s\n", mysqli_error($connection));
	}*/
	
	//$updatePassUserData = mysqli_fetch_assoc($updatePassResults);
	
	
	//UPDATE user SET email='testingsql@gmail.com' WHERE id='22'
	/*				
		var	userFnameDatabseVar = $(".userFnameDatabseValue input").val(),
			userEmailAddressVar = $(".userEmailDatabseValue input").val(),
			userJobTitlePositionVar = $(".userJobTileDatabseValue input").val(),
			userOfficeNumberVar = $(".userOfficeNumberDatabseValue input").val(),
			userCellNumberVar = $(".userCellNumberDatabseValue input").val();
	
	
	$myAccountResultsRow = mysqli_fetch_assoc($myAccountResults);
	
	
	$userFname =  $myAccountResultsRow['name'];
	$userName =  $myAccountResultsRow['username'];
	$userEmail =  $myAccountResultsRow['email'];
	$userPosition =  $myAccountResultsRow['position'];
	$userOfficeNumber =  $myAccountResultsRow['officeNumber'];
	$userCellNumber =  $myAccountResultsRow['cellNumber'];
	$userAccountType =  $myAccountResultsRow['accountType'];
	$userPassword =  $myAccountResultsRow['password'];
	
	$_SESSION['userFname'] = $userFname;
	$_SESSION['userName'] = $userName;
	$_SESSION['userEmail'] = $userEmail;
	$_SESSION['userPosition'] = $userPosition;
	$_SESSION['userOfficeNumber'] = $userOfficeNumber;
	$_SESSION['userCellNumber'] = $userCellNumber;
	$_SESSION['userAccountType'] = $userAccountType;
	$_SESSION['userPassword'] = $userPassword;
	*/
?>




















