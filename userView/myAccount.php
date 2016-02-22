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
						<li role="presentation" class="active col-md-3"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Account Information</a></li>
						<li role="presentation" class="col-md-3"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Password Recovery</a></li>
						<li role="presentation" class="col-md-3"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Board Message</a></li>
					</ul>

					<!-- Tab panes -->
					<style>
						.panel-body{
							min-height: 500px;
							border-left: 1px solid #ddd;
							border-bottom: 1px solid #ddd;
							border-right: 1px solid #ddd;
						}
					</style>
					<div class="tab-content">
						<div role="tabpanel" class="tab-pane fade in active" id="home">
							<div class="panel-body">
								<div class="myAccountItem">
									<div class="col-md-2 dataBaseValueLabel unselectable"><strong>Full Name</strong></div>
									<div class="col-md-10 dataBaseValue activeOnMobile"><?php print $userFname ?></div>
								</div>
								
								<div class="myAccountItem">
									<div class="col-md-2 dataBaseValueLabel"><strong>User Name</strong></div>
									<div class="col-md-10 dataBaseValue activeOnMobile"><?php print $userName ?></div>
								</div>
								
								<div class="myAccountItem">
									<div class="col-md-2 dataBaseValueLabel"><strong>E-Mail Address</strong></div>
									<div class="col-md-10 dataBaseValue activeOnMobile"><?php print $userEmail ?></div>
								</div>
							</div>
						</div>
						<div role="tabpanel" class="tab-pane fade" id="profile">
							<div class="panel-body"></div>
						<div role="tabpanel" class="tab-pane fade" id="messages">
							<div class="panel-body"></div></div>
						<div role="tabpanel" class="tab-pane fade" id="settings">
							<div class="panel-body"></div></div>
					</div>
					
					<strong style="color: red;">Note:</strong> you can only view, you cannot edit any information yet.
				</div>
			</section>
			
				
			
			
		</div><!-- /.content-wrapper -->
	</body>

	<?php require_once('/footer.php'); ?>     
      