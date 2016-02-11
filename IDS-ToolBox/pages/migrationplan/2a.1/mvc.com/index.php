<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Marriott Vacation Club Web Dev | Components</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />    
    <!-- FontAwesome 4.3.0 -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons 2.0.0 -->
    <link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css" />    
    <!-- Theme style -->
    <link href="/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins 
         folder instead of downloading all of them to reduce the load. -->
    <link href="/dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />
    <!-- iCheck -->
    <link href="/plugins/iCheck/flat/blue.css" rel="stylesheet" type="text/css" />
    
    <!-- DATA TABLES -->
    <link href="/plugins/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />

    <!-- fullCalendar 2.2.5-->
    <link href="/plugins/fullcalendar/fullcalendar.min.css" rel="stylesheet" type="text/css" />
    <link href="/plugins/fullcalendar/fullcalendar.print.css" rel="stylesheet" type="text/css" media='print' />
    
    
    <!-- PrismJS.com -->
    <link href="/dist/css/prism.css" rel="stylesheet" /> 
    
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
  <body class="skin-blue sidebar-mini">
    <div class="wrapper">

		<?php require_once('../../../../header.php'); ?>
		<?php require_once('../../../../sidebar.php'); ?>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            MarriottVacationClub.com
            <small>Phase 2A.1</small>
          </h1>
          <?php
          $parentPage = "Phase 2A.1";
          $pageName = "MarriottVacationClub.com";
          ?>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active"><a href="#"><?php echo $parentPage; ?></a></li>
            <li><a href="#"><?php echo $pageName; ?></a></li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">

          <!-- START ACCORDION -->
          <h2 class="page-header">Steps</h2>
          <div class="row">
            <div class="col-md-12">
            	<div class="col-md-12">
                	
							<div class="box">
                <div class="box-header">
                  <h3 class="box-title">Phase 2A.1 ImpEx Scripts</h3>
                  <div class="box-tools pull-right">
      							<button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
    							</div><!-- /.box-tools -->
                </div><!-- /.box-header -->
                <div class="box-body no-padding">
                  <table class="table table-striped">
                    <tbody><tr>
                      <th style="width: 10px">#</th>
                      <th>Task</th>
                      <th class="hidden-xs" style="width:30%;">Progress</th>
                      <th style="width: 10px">Label</th>
                    </tr>
                    <tr>
                      <td>1.</td>
                      <td>Develop ImpEx script to create Base Site for marriottvacationclub.com</td>
                      <td class="hidden-xs">
                        <div class="progress progress-striped progress-xs active">
                          <div class="progress-bar progress-bar-success" style="width: 95%"></div>
                        </div>
                      </td>
                      <td><span class="badge bg-green">95%</span></td>
                    </tr>
                  </tbody></table>
                </div><!-- /.box-body -->
                <div class="box-footer">
                    <li class="fa fa-caret-right"><span class="token variable"> $productCatalog</span>=mvcResortCatalog</li><br />
                  	<li class="fa fa-caret-right"><span class="token variable"> $contentCatalog</span>=mvcContentCatalog</li><br />
                  	<li class="fa fa-caret-right"><span class="token variable"> $storeUid</span>=MarriottVacationClub</li><br />
                  	<li class="fa fa-caret-right"><span class="token variable"> $siteUid</span>=MarriottVacationClub.com</li>
                </div>
              </div><!-- /.box -->
              <div class="box box-solid">
                <div class="box-header with-border">
                  <h3 class="box-title">ImpEx Script <small>site.impex</small></h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body">
                	<p>Steps for importing the <i><b>sites.impex</b></i> script.
                		<ol>
                			<li>Step 1:</li>
                			<li>Step 2:</li>
                			<li>Step 3:</li>
                		</ol>	
                	</p>

<div class="zero-clipboard"><span class="btn-clipboard" data-clipboard-target="site-impex">Copy</span></div>
  <pre id="site-impex" data-src="site.impex.php" class="language-php"></pre>
							  </div>
							</div>
            </div><!-- /.col -->
          </div>

          <!-- END ACCORDION -->


        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      

    <!-- PrismJS.com -->
    <script src="/dist/js/prism.js"></script>   
		<?php require_once('../../../../footer.php'); ?>
		
    
    