<!DOCTYPE html>

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
					<style>
						.panel-body{
							min-height: 500px;
							border-left: 1px solid #ddd;
							border-bottom: 1px solid #ddd;
							border-right: 1px solid #ddd;
						}
						
						.panel-heading{
							padding-left: 5px;
							padding-bottom: 0px;
							border-bottom: 1px solid #ddd;
							color: #2E9AFE;
						}
						
						.panel-body .redTxt{
							color: red;
						}
						
						.panel-body .messageTitle{
							font-weight: bold;
							border-bottom: 1px solid #cecece;
							margin-bottom: 10px;
						}
						
						.panel-body .messageSection{
							margin-bottom: 25px;
							border: 1px solid #cecece;
							padding: 10px;
							-webkit-border-radius: 5px;
							border-radius: 5px;
							position: relative;
							min-height: 150px;
							/* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#ffffff+0,ffffff+100&1+0,0+100;White+to+Transparent */
							background: -moz-linear-gradient(-45deg,  rgba(255,255,255,1) 0%, rgba(255,255,255,0) 100%); /* FF3.6-15 */
							background: -webkit-linear-gradient(-45deg,  rgba(255,255,255,1) 0%,rgba(255,255,255,0) 100%); /* Chrome10-25,Safari5.1-6 */
							background: linear-gradient(135deg,  rgba(255,255,255,1) 0%,rgba(255,255,255,0) 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
							filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffffff', endColorstr='#00ffffff',GradientType=1 ); /* IE6-9 fallback on horizontal gradient */

						}
						
						.panel-body .messageSection .timeStamp{
							position: absolute;
							top: 5px;
							right: 10px;
							font-weight: bold;
						}
						
						.panel-body .changePasswordItem{
							margin-bottom: 15px;
						}
						
						.panel-body .changePasswordItem input{
							-webkit-border-radius: 5px;
							border-radius: 5px;
							border: 1px solid #cecece;
							padding: 5px;
						}
						
						@media screen and (min-width: 990px){
							.changePasswordBtn{
								float: right;
								margin-right: 18px;
							}
						}
						
						.panel-body .changePasswordItem div{
							margin-bottom: 15px;
						}
						
						@media screen and (max-width: 990px){
							.changePasswordBtn{
								clear: both;
								margin-left: 20px;
								margin-top: 50px;
							}
							
							.changePasswordItem .dataBaseValue.activeOnMobile {
								border: 1px solid #ccc;
								background: #FAFAFA;
							}
							.changePasswordItem input{
								width: 100%;
							}
						}
					</style>
					<div class="tab-content">
						<div role="tabpanel" class="tab-pane fade in active" id="accountInfo">
							<div class="panel-body">
								<!-- Data coming from myAccountConnect -->
								<!-- ------------------------------------ Account Type Information --------------------------------- -->
								<div class="myAccountItem">
									<div class="col-md-2 dataBaseValueLabel unselectable"><strong>Account Type</strong></div>
									<div class="col-md-10 dataBaseValue activeOnMobile accountTypeValue"><?php print $userAccountType ?></div>
								</div>
								<div class="clearfix"></div>
								
								<!-- ------------------------------------ Personal Information --------------------------------- -->
								<div class="panel-heading"><h4>Personal Information</h4></div>
								<div class="myAccountItem">
									<div class="col-md-2 dataBaseValueLabel unselectable"><strong>Full Name</strong></div>
									<div class="col-md-10 dataBaseValue activeOnMobile"><?php print $userFname ?></div>
								</div>
								
								<div class="myAccountItem">
									<div class="col-md-2 dataBaseValueLabel"><strong>User Name</strong></div>
									<div class="col-md-10 dataBaseValue activeOnMobile"><?php print $userName ?></div>
								</div>
								
								<!-- ------------------------------------ Contact Information --------------------------------- -->
								<div class="clearfix"></div>
								<div class="panel-heading"><h4>Contact Information</h4></div>
								
								<div class="myAccountItem">
									<div class="col-md-2 dataBaseValueLabel"><strong>E-Mail Address</strong></div>
									<div class="col-md-10 dataBaseValue activeOnMobile"><?php print $userEmail ?></div>
								</div>
								
								<div class="myAccountItem">
									<div class="col-md-2 dataBaseValueLabel"><strong>Position</strong></div>
									<div class="col-md-10 dataBaseValue activeOnMobile"><?php print $userPosition ?></div>
								</div>
								<div class="clearfix"></div>
								
								<div class="myAccountItem">
									<div class="col-md-2 dataBaseValueLabel"><strong>Office Number</strong></div>
									<div class="col-md-10 dataBaseValue activeOnMobile"><?php print $userOfficeNumber ?></div>
								</div>
								<div class="clearfix"></div>
								
								<div class="myAccountItem">
									<div class="col-md-2 dataBaseValueLabel"><strong>Cell Number</strong></div>
									<div class="col-md-10 dataBaseValue activeOnMobile"><?php  print $userCellNumber ?></div>
								</div>
								<div class="clearfix"></div>
							</div>
						</div>
						
						<div role="tabpanel" class="tab-pane fade" id="passwordRecovery">
							<div class="panel-body">
								<p>Use the form below to change your current password.</p>
								
								<script>
									
								</script>
								
								<form class="col-xs-12 col-md-12" method="POST" id="changeMyPasswordForm" action="changeMyPassword.php">
									<div class="panel-heading"><h4>Current Information</h4></div>
									<br/>
									<div class="changePasswordItem">
										<div class="col-md-3 dataBaseValueLabel unselectable">Username</div>
										<div class="col-md-9 dataBaseValue activeOnMobile"><?php print $userName ?></div>
									</div>
									
									<div class="changePasswordItem">
										<div class="col-md-3 dataBaseValueLabel unselectable">Enter current password:</div>
										<div class="col-md-9 activeOnMobile"><input class="col-md-12" type="password" name="password"  data-toggle="tooltip" title="Cannot be empty" data-placement="left"></div>
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
									
									<p><input class="saveBtn changePasswordBtn col-md-3 col-xs-11" type="submit" value="Update Password" style=" ">
								</form>
								
								<script>
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
      