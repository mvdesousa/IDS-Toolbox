<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Marriott Vacation Club Web Dev | Components</title>
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
    
    <!-- DATA TABLES -->
    <link href="/IDS-Toolbox/userView/plugins/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />

    <!-- fullCalendar 2.2.5-->
    <link href="/IDS-Toolbox/userView/plugins/fullcalendar/fullcalendar.min.css" rel="stylesheet" type="text/css" />
    <link href="/IDS-Toolbox/userView/plugins/fullcalendar/fullcalendar.print.css" rel="stylesheet" type="text/css" media='print' />
    
    
    <!-- PrismJS.com -->
    <link href="/IDS-Toolbox/userView/dist/css/prism.css" rel="stylesheet" /> 
    
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

		<?php require_once('../header.php'); ?>
		<?php require_once('../sidebar.php'); ?>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Coding Standards
            <small>reference material</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Coding Standards</li>
            <li><a href="#">Typography</a></li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">

          <!-- START CAROUSEL-->
          <h2 class="page-header">Bootstrap Carousel</h2>
          <div class="row">
            <div class="col-md-6">
              <div class="box box-solid">
                <div class="box-header with-border">
                  <h3 class="box-title">Carousel</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <div id="carousel-example" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                      <li data-target="#carousel-example" data-slide-to="0" class="active"></li>
                      <li data-target="#carousel-example" data-slide-to="1" class=""></li>
                      <li data-target="#carousel-example" data-slide-to="2" class=""></li>
                    </ol>
                    <div class="carousel-inner">
                      <div class="item active">
                        <img src="/IDS-Toolbox/userView//images/1.jpg" alt="First slide">
                        <div class="carousel-caption">
                          First Slide
                        </div>
                      </div>
                      <div class="item">
                        <img src="/IDS-Toolbox/userView//images/2.jpg" alt="Second slide">
                        <div class="carousel-caption">
                          Second Slide
                        </div>
                      </div>
                      <div class="item">
                        <img src="/IDS-Toolbox/userView//images/3.jpg" alt="Third slide">
                        <div class="carousel-caption">
              						<h1>One more for good measure.</h1>
              							<p><a role="button" href="#" class="btn btn-sm btn-primary">Browse gallery</a></p>
            						</div>
                      </div>
                    </div>
                    <a class="left carousel-control" href="#carousel-example" data-slide="prev">
                      <span class="fa fa-angle-left"></span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example" data-slide="next">
                      <span class="fa fa-angle-right"></span>
                    </a>
                  </div>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
            <div class="col-md-6">
              <div class="box box-solid">
                <div class="box-header with-border">
                  <h3 class="box-title">Carousel Code</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                	<p>Bootstrap Carousel</p>
                	<div class="zero-clipboard"><span class="btn-clipboard" data-clipboard-target="clipboard-text">Copy</span></div>
                	<pre>
<code id="clipboard-text" class="language-markup">
&lt;div id="carousel-example" class="carousel slide" data-ride="carousel"&gt;
  &lt;ol class="carousel-indicators"&gt;
    &lt;li data-target="#carousel-example" data-slide-to="0" class="active"&gt;&lt;/li&gt;
    &lt;li data-target="#carousel-example" data-slide-to="1" class=""&gt;&lt;/li&gt;
    &lt;li data-target="#carousel-example" data-slide-to="2" class=""&gt;&lt;/li&gt;
  &lt;/ol&gt;
  &lt;div class="carousel-inner"&gt;
    &lt;div class="item active"&gt;
      &lt;img src="[image url]" alt="First slide"&gt;
      &lt;div class="carousel-caption"&gt;
        First Slide
      &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="item"&gt;
      &lt;img src="[image url]" alt="Second slide"&gt;
      &lt;div class="carousel-caption"&gt;
        Second Slide
      &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="item"&gt;
      &lt;img src="[image url]" alt="Third slide"&gt;
      &lt;div class="carousel-caption"&gt;
        Third Slide
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;a class="left carousel-control" href="#carousel-example" data-slide="prev"&gt;
    &lt;span class="fa fa-angle-left"&gt;&lt;/span&gt;
  &lt;/a&gt;
  &lt;a class="right carousel-control" href="#carousel-example" data-slide="next"&gt;
    &lt;span class="fa fa-angle-right"&gt;&lt;/span&gt;
  &lt;/a&gt;
&lt;/div&gt;
</code>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
          <!-- END CAROUSEL-->


        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      

    <!-- PrismJS.com -->
    <script src="/dist/js/prism.js"></script>   
		<?php require_once('../footer.php'); ?>
		
    
    