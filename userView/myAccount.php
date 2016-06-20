<!DOCTYPE html>

<?php 
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
?>

<html>
  <head>
    <meta charset="UTF-8">
    <title>Marriott Vacation Club Web Dev | My Account</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="/IDS-Toolbox/userView/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />    
    <!-- FontAwesome 4.3.0 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons 2.0.0 -->
    <link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css" />    
    <!-- Theme style -->
    <link href="/IDS-Toolbox/userView/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins 
         folder instead of downloading all of them to reduce the load. -->
    <link href="/IDS-Toolbox/userView/dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />
    <!-- iCheck -->
    <link href="/IDS-Toolbox/userView/plugins/iCheck/flat/blue.css" rel="stylesheet" type="text/css" />
    <!-- Morris chart -->
    <link href="/IDS-Toolbox/userView/plugins/morris/morris.css" rel="stylesheet" type="text/css" />
    <!-- jvectormap -->
    <link href="/IDS-Toolbox/userView/plugins/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
    <!-- Date Picker -->
    <link href="/IDS-Toolbox/userView/plugins/datepicker/datepicker3.css" rel="stylesheet" type="text/css" />
    <!-- Daterange picker -->
    <link href="/IDS-Toolbox/userView/plugins/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
    <!-- bootstrap wysihtml5 - text editor -->
    <link href="/IDS-Toolbox/userView/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />

    <!-- fullCalendar 2.2.5-->
    <link href="/IDS-Toolbox/userView/plugins/fullcalendar/fullcalendar.min.css" rel="stylesheet" type="text/css" />
    <link href="/IDS-Toolbox/userView/plugins/fullcalendar/fullcalendar.print.css" rel="stylesheet" type="text/css" media='print' />
    
    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <!--
  BODY TAG OPTIONS:
  =================
  Apply one or more of the following classes to get the
  desired effect
  |---------------------------------------------------------|
  | SKINS         | skin-blue                               |
  |               | skin-black                              |
  |               | skin-purple                             |
  |               | skin-yellow                             |
  |               | skin-red                                |
  |               | skin-green                              |
  |---------------------------------------------------------|
  |LAYOUT OPTIONS | fixed                                   |
  |               | layout-boxed                            |
  |               | layout-top-nav                          |
  |               | sidebar-collapse                        |
  |               | sidebar-mini                            |
  |---------------------------------------------------------|
  -->
	<body class="sidebar-mini fixed" data-spy="scroll" data-target="#scrollspy">
		<div class="wrapper">

		<?php require_once('/header.php'); ?>
		<?php require_once('/sidebar.php'); ?>
		<?php require_once('/myAccountConnect.php'); ?>

		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper" height="700px">
			<section class="content">
				<h2 class="page-header">My Account</h2>
				<p>My Account gives you quick access to settings and tools that let you safeguard your data.</p>
				
				<br/>
				
				<div>
					<!-- Nav tabs -->
					<ul class="nav nav-tabs " role="tablist">
						<li role="presentation" class="active col-md-3 col-xs-12"><a href="#accountInfo" aria-controls="accountInfo" role="tab" data-toggle="tab">My Account</a></li>
						<li role="presentation" class="col-md-3 col-xs-12"><a href="#passwordRecovery" aria-controls="passwordRecovery" role="tab" data-toggle="tab">Password</a></li>
						<li role="presentation" class="col-md-3 col-xs-12"><a href="#boardMessage" aria-controls="boardMessage" role="tab" data-toggle="tab">Board Message</a></li>
					</ul>

					<!-- Tab panes -->
					<div class="tab-content">
						<div role="tabpanel" class="tab-pane fade in active" id="accountInfo">
							<div class="panel-body">
								<form class="col-xs-12 col-md-12" method="POST" id="changeMyAccountInfo" action="myAccountUpdateConnect.php">
									<!-- Data coming from myAccountConnect -->
									<!-- ------------------------------------ Account Type Information --------------------------------- -->
									<div class="myAccountItem">
										<div class="col-md-2" style="padding-left: 5px"><strong>Account Type</strong></div>
										<div class="accountTypeValue col-md-10"><span style="margin-left: 5px"><?php print $userAccountType ?></span></div>
									</div>
									<div class="clearfix"></div>
									
									<!-- ------------------------------------ Personal Information --------------------------------- -->
									<div class="panel-heading"><h4>Personal Information</h4></div>
									<div class="myAccountItem">
										<div class="col-md-2 dataBaseValueLabel unselectable"><strong>Full Name</strong></div>
										<div class="col-md-10 userFnameDatabseValue dataBaseValue activeOnMobile">
											<span class="col-md-12 textDataBaseValue"><?php print $userFname ?></span>  
											<input class="col-md-12" name="userFullNameVal" type="text" value="<?php print $userFname ?>" />
										</div>
										<div class="clearfix"></div>
									</div>
									
									<div class="myAccountItem">
										<div class="col-md-2 dataBaseValueLabel"><strong>User Name</strong></div>
										<div class="col-md-10">
											<span class="userNameDatabaseValue textDataBaseValue" style="padding-left: 6px;"><?php print $userName ?></span>  
										</div>
										<div class="clearfix"></div>
									</div>

									<!-- ------------------------------------ Contact Information --------------------------------- -->
									<div class="clearfix"></div>
									<div class="panel-heading"><h4>Contact Information</h4></div>
									
									<div class="myAccountItem">
										<div class="col-md-2 dataBaseValueLabel"><strong>E-Mail Address</strong></div>
										<div class="col-md-10 userEmailDatabseValue dataBaseValue activeOnMobile">
											<span class="col-md-12 textDataBaseValue"><?php print $userEmail ?></span>  
											<input class="col-md-12" name="userEmailAddressVal" type="text" value="<?php print $userEmail ?>" />
										</div>
										<div class="clearfix"></div>
									</div>
									
									<div class="myAccountItem">
										<div class="col-md-2 dataBaseValueLabel"><strong>Job Title</strong></div>
										<div class="col-md-10 userJobTileDatabseValue dataBaseValue activeOnMobile">
											<span class="col-md-12 textDataBaseValue"><?php print $userPosition ?></span>  
											<input class="col-md-12" name="userJobTitleVal" type="text" value="<?php print $userPosition ?>" />
										</div>
										<div class="clearfix"></div>
									</div>
									
									<div class="myAccountItem">
										<div class="col-md-2 dataBaseValueLabel"><strong>Office Number</strong></div>
										<div class="col-md-10 userOfficeNumberDatabseValue dataBaseValue activeOnMobile">
											<span class="col-md-12 textDataBaseValue"><?php print $userOfficeNumber ?></span>  
											<input class="col-md-12" name="userOfficeNumberVal" type="text" value="<?php print $userOfficeNumber ?>" />
										</div>
										
										<div class="clearfix"></div>
									</div>
									
									<div class="myAccountItem">
										<div class="col-md-2 dataBaseValueLabel"><strong>Cell Number</strong></div>
										<div class="col-md-10 userCellNumberDatabseValue dataBaseValue activeOnMobile">
											<span class="col-md-12 textDataBaseValue"><?php  print $userCellNumber ?></span> 
											<input class="col-md-12" name="userCellNumberVal" type="text" value="<?php print $userCellNumber ?>" />
										</div>
										
										<div class="clearfix"></div>
									</div>
									
									<div class="clearfix"></div>
									<div class="col-xs-12 formControlBtns">
										<input class="saveBtn changeProfileBtn col-md-3 col-xs-11" type="submit" value="Update Profile">
										<input class="editBtn editProfileBtn col-md-3 col-xs-11" type="submit" value="Edit Profile">
									</div>
								</form><!-- close form -->
							</div>
						</div>
						
						<div role="tabpanel" class="tab-pane fade" id="passwordRecovery">
							<div class="panel-body">
								<p>Use the form below to change your current password.</p>
								
								<form class="col-xs-12 col-md-12" method="POST" id="changeMyPasswordForm" action="changeMyPassword.php">
									<div class="panel-heading"><h4>Current Information</h4></div>
									<br/>
									<div class="changePasswordItem">
										<div class="col-md-3 dataBaseValueLabel unselectable">Username</div>
										<div class="col-md-9"><?php print $userName ?></div>
									</div>
									
									<div class="changePasswordItem">
										<div class="col-md-3 dataBaseValueLabel unselectable">Enter current password:</div>
										<div class="col-md-9 currentPassword activeOnMobile">
											<input class="col-md-12" type="password" name="password"  data-toggle="tooltip" title="Cannot be empty" data-placement="left">
											
										
											<button class="showPasswordBtn pull-right" style="margin-right: 15px;">show password</button>
										</div>
									</div>
									
									<div class="clearfix"></div>
									<div class="panel-heading"><h4>New Password</h4></div>
									<br/>
									<div class="changePasswordItem">
										<div class="col-xs-12 col-md-3">Enter new password:</div>
										<div class="col-xs-12 col-md-9"><input class="col-md-12" type="password" size="10" name="newpassword"  data-toggle="tooltip" title="Cannot be empty" data-placement="left"></div>
									</div>
									
									<div class="changePasswordItem">
										<div class=" col-xs-12 col-md-3">Re-enter new password:</div>
										<div class=" col-xs-12 col-md-9"><input class="col-md-12" type="password" size="10" name="confirmnewpassword"  data-toggle="tooltip" title="Cannot be empty" data-placement="left"></div>
									</div>
									
									<input class="saveBtn changePasswordBtn col-md-3 col-xs-11" type="submit" value="Update Password" style=" ">
								</form>
								
								<script>
									var	userFnameDatabseVar = "",
										userEmailAddressVar = "",
										userJobTitlePositionVar = "",
										userOfficeNumberVar = "",
										userCellNumberVar = "";
								
									//This button will trigger if the input fields are empty, and it will trigger the overlay
									//error message to the user, notifying them that they must fill in the required fields.
									$(".saveBtn.changePasswordBtn").on( "click", function() {
										var inputFields = $(".changePasswordItem input").val();
										
										if (inputFields == ""){
											$("#myModalLabel").html("Empty Password Input");
											$("#myModalBody").html("<center>Please make sure that all fields are filled out. <br/> None of the Password input fields are allowed to be empty.</center>");
											
											$("#myModal").modal('toggle');
											
											return false;
										}else{
											//success
										}
									});
									
									
									
									//This toggles all of the input fields vs. the visible user data text fields.
									var toggleSaveEditAcctBtn = function(){
										//$(".myAccountItem .dataBaseValue span").fadeToggle();
										$(".myAccountItem .dataBaseValue input").fadeToggle();
										
										$("input.changeProfileBtn").fadeToggle()
										$("input.editProfileBtn").fadeToggle();
									};
									$(".editBtn.editProfileBtn").click(function( event ) {
										event.preventDefault();
										
										toggleSaveEditAcctBtn();
									});	
									$(".saveBtn.changeProfileBtn").on("click", function(){
										$( "#changeMyAccountInfo" ).submit();
										toggleSaveEditAcctBtn();
									});
									
									
									
									//Button allows you to view the password input field as type=text instead of type=password
									//allowing you to view the password thats being entered.
									$(".showPasswordBtn").click(function( event ) {
										event.preventDefault();
										
										$(".currentPassword input").attr("type","text");
									});
									
									
									
									//This will set the password type back to  type=password, which will then stop users from
									//viewing their password thats being entered.
									$(".currentPassword input").focusout(function(){
										$(".currentPassword input").attr("type","password");
									});
									
									$(".currentPassword input").blur(function() {
										$(".currentPassword input").attr("type","password");
									});
									
									$(".currentPassword input").mouseout(function() {
										$(".currentPassword input").attr("type","password");
									});
									
									
									
									
									var checkAccountUpdateFields = function(){
										var	userFnameDatabseVar = $(".userFnameDatabseValue input").val(),
											userEmailAddressVar = $(".userEmailDatabseValue input").val(),
											userJobTitlePositionVar = $(".userJobTileDatabseValue input").val(),
											userOfficeNumberVar = $(".userOfficeNumberDatabseValue input").val(),
											userCellNumberVar = $(".userCellNumberDatabseValue input").val();
											
										var	currentUserFnameDatabseVar = $(".userFnameDatabseValue span.textDataBaseValue").text(),
											currentEmailAddressVar = $(".userEmailDatabseValue span.textDataBaseValue").text(),
											currentJobTitlePositionVar = $(".userJobTileDatabseValue span.textDataBaseValue").text(),
											currentOfficeNumberVar = $(".userOfficeNumberDatabseValue span.textDataBaseValue").text(),
											currentCellNumberVar = $(".userCellNumberDatabseValue span.textDataBaseValue").text();
											
											
										
										var inputFields = $(".myAccountItem input");
										if (inputFields.val() == ""){
											$("#myModalLabel").html("Empty Fields");
											$("#myModalBody").html("<center>Please make sure that all fields are filled out.</center>");
											
											$("#myModal").modal('toggle');
											
											
										}/* else if(currentUserFnameDatabseVar != userFnameDatabseVar){
											
											$("#myModalLabel").html("Success");
											$("#myModalBody").html("<center>Account Information Updated.</center>");
											
											$("#myModal").modal('toggle');
											
											return false;
										}else{
											
										} */
									};
									
									
									//This function will save all of the updated values for my account update form into variables.
									$(".saveBtn.changeProfileBtn").click(function( event ) {
										
										checkAccountUpdateFields();
										event.preventDefault();
									});	
									
									
									
									
								</script>
							</div>
						</div>
						
						<div role="tabpanel" class="tab-pane fade" id="boardMessage">
							<div class="panel-body">
								<div class="messageSection adminMessageContent">
									<div class="timeStamp">
										2/16/2016
									</div>
									
									<div class="messageTitle">
										<strong class="redTxt">New</strong> How to get started as a developer for the IDS-Toolbox
									</div>
									
									<div class="messageContent">
										<p>Welcome,</p>

										<p>The IDS-Toolbox will be a collection of resources available for anyone who has questions or concerns on how to complete certain tasks in our website.</p>

										<p>Please go to our repository at GitHub:</p>
										<ul>
											<li>URL: <a href="https://github.com/mvdesousa/IDS-Toolbox" title="">https://github.com/mvdesousa/IDS-Toolbox</a></li>
										</ul>
											

										<p>If you prefer to have a GUI for GitHub you may download;</p>
											<ul>
												<li>SmartGit URL: 		<a href="http://www.syntevo.com/smartgit/download" title="">http://www.syntevo.com/smartgit/download</a>	(Easy Setup)</li>
												<li>GitHub Desktop: 	<a href="https://desktop.github.com/" title="">https://desktop.github.com/</a>					(Medium Setup)</li>
											</ul>
											
										<p>After getting setup with GitHub and you downloaded one of the apps above, please clone the repository <a href="https://github.com/mvdesousa/IDS-Toolbox" title="">https://github.com/mvdesousa/IDS-Toolbox</a> to a folder in your computer. It can be anywhere you want but please keep in mind that once you connect your repo to a specific folder in your desktop, you will not be able to change that path. If you move the folder elsewhere, GitHub will not know the association of that file. So please think about where you want to setup your repository and make sure to keep it that way while using GitHub on a project.</p>

										<p>Thank You</p>
									</div>
								</div><!-- close message-->
								
								
								<div class="messageSection associateMessageContent">
									<div class="timeStamp">
										6/01/2016
									</div>
								
									<div class="messageTitle">
										<strong class="redTxt">New</strong> Managing Owners Association Documents
									</div>
									
									<div class="messageContent">
										We have recently added a tool for managing <strong>Association Documents</strong>. Click <a href="pages/contentRequest.php" title="">here</a> to learn more.
									</div>
								</div><!-- close message-->
								
								
								<div class="messageSection associateMessageContent">
									<div class="timeStamp">
										2/22/2016
									</div>
								
									<div class="messageTitle">
										<strong class="redTxt">New</strong> WCMS Tutorials now available
									</div>
									
									<div class="messageContent">
										We have recently added <strong>How To Create a New Page in WCMS</strong>. Click <a href="pages/createNewPage-Education.php" title="">here</a> to learn more.
									</div>
								</div><!-- close message-->
							</div>
						</div>
					</div>
					
					<strong style="color: red;">Note:</strong> We do not have a password recovery yet, please <strong>remember</strong> your password. We are working on getting that functionality done.
				</div>
			</section>
			
				
			<script src="javascripts/accountType.js"></script>
			
		</div><!-- /.content-wrapper -->
	</body>

	<?php require_once('/footer.php'); ?>     
      