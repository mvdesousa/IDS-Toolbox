<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Marriott Vacation Club | IDS-Toolbox | Content Request</title>
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

		<?php require_once('../header.php'); ?>
		<?php require_once('../sidebar.php'); ?>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper" height="700px">
        <section class="content">
			<h2 class="page-header">Production Content Request</h2>
			<p>Here you will be able to submit new content to our IDS Developer Team. Once the request has been submitted, our team will review the request and contact you if we have any questions. Please keep in mind to fill all information on the form requests.</p>
			
			<style>
				.contentRequestOptions{
					min-height: 700px;
				}
				.contentRequestOptions ul{
					margin: 0;
					padding: 0;
				}
				.contentRequestOptions .optionItem{
					margin: 0;
					padding: 0;
				}
				.contentRequestOptions ul li{
					list-style: none;
					padding: 5px;
					-webkit-border-radius: 5px;
					border-radius: 5px;
				}
				.contentRequestOptions ul a .optionTitle{
					margin-bottom: 10px;
					margin-top: 5px;
					font-weight: bold;
					color: #333;
				}
				.contentRequestOptions ul a{
					display: block;
					border-right: 1px solid #dedede;
					border-top: 1px solid #dedede;
					border-left: 1px solid #dedede;
				}
				.contentRequestOptions ul a:last-child{
					border-bottom: 1px solid #dedede;
				}
				.contentRequestOptions ul a img{
					-webkit-border-radius: 15px;
					border-radius: 10px;
				}
				
				.contentRequestOptions .optionPreview{
					font-size: 30px;
					position: absolute;
					bottom: 0;
					left: 0;
					z-index: 999;
					color: red;
					border: 1px solid red;
					width: 100%;
					height: 100%;
				}
				
				.contentRequestOptions h5{
					color: #3c8dbc;
				}
				
				@media (max-width: 600px) {
					
				}
			</style>
			<div class="contentRequestOptions">
				<ul class="col-md-12">
					<div class="col-md-6 col-xs-12 optionItem">
						<div>
							<h5>MVWC - Request New Page</h5>
						</div>
						
						<a href="#">
							<li>
								<div class="optionThumb col-md-1">
									<i class="fa fa-pencil"></i>
								</div><!--close resort page option-->
								
								<div class="optionTitle col-md-11">
									MVWC - Resort Page
								</div><!--close resort page option-->
							</li><!--close list item-->
							<div class="clearfix"></div>
						</a>
						
						<a href="#">
							<li>
								<div class="optionThumb col-md-1">
									<i class="fa fa-pencil"></i>
								</div><!--close resort page option-->
								
								<div class="optionTitle col-md-11">
									MVWC - Education Page
								</div><!--close resort page option-->
							</li><!--close list item-->
							<div class="clearfix"></div>
						</a>
					</div>
					
					
					<div class="col-md-6 col-xs-12 optionItem">
						<div>
							<h5>MVWC - Request New Products</h5>
						</div>
						
						<a href="#">
							<li>
								<div class="optionThumb col-md-1">
									<i class="fa fa-pencil"></i>
								</div><!--close resort page option-->
								
								<div class="optionTitle col-md-11">
									MVWC - Resort Page
								</div><!--close resort page option-->
							</li><!--close list item-->
							<div class="clearfix"></div>
						</a>
						
						<a href="#">
							<li>
								<div class="optionThumb col-md-1">
									<i class="fa fa-pencil"></i>
								</div><!--close resort page option-->
								
								<div class="optionTitle col-md-11">
									MVWC - Explorer Collection
								</div><!--close resort page option-->
							</li><!--close list item-->
							<div class="clearfix"></div>
						</a>
					</div>
					
					
					
					<div class="clearfix"></div>
				</ul>
				<div class="clearfix"></div>
			</div>
			
			
		</section>
      </div><!-- /.content-wrapper -->

	<?php require_once('../footer.php'); ?>
      