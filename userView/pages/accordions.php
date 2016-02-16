<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Marriott Vacation Club Web Dev | Components</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="/IDS-Toolbox/userView/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />    
    <!-- FontAwesome 4.3.0 -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
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
            Boostrap 3.0
            <small>reference material</small>
          </h1>
          <?php
          $parentPage = "Bootstrap 3.0";
          $pageName = "Boostrap Accordions";
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
          <h2 class="page-header">Bootstrap Accordion</h2>
          <div class="row">
            <div class="col-md-6">
            	<div class="row">
            	<div class="col-md-12">
              <div class="box box-solid">
                <div class="box-header with-border">
                  <h3 class="box-title">Collapsible Accordion</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <div class="box-group" id="accordion">
                    <!-- we are adding the .panel class so bootstrap.js collapse plugin detects it -->
                    <div class="panel panel-default" id="Cruises">
											<div class="panel-heading">
										  		<h4 class="panel-title">
										    			<a data-toggle="collapse" data-target="#collapseCruises" >
										      				Specialty Cruises
										    			</a>
										  		</h4>
											</div>
											<div id="collapseCruises" class="panel-collapse collapse in">
										  		<div class="panel-body">
										    			[content here]
										  		</div>
											</div>
											<div class="panel-heading">
										  		<h4 class="panel-title">
										    			<a data-toggle="collapse" data-target="#collapseHotels" >
										      				Hotels
										    			</a>
										  		</h4>
											</div>
											<div id="collapseHotels" class="panel-collapse collapse">
										  		<div class="panel-body">
										    			[content here]
										  		</div>
											</div>
										</div>
									</div>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            	</div>
            	</div>
            	<div class="row">
            	<div class="col-md-12">
              <div class="box box-solid">
                <div class="box-header with-border">
                  <h3 class="box-title">Collapsible Accordion via Toggle Button</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
            			<div class="button-toggle-example">
    								<!-- Trigger Button HTML -->
    								<input type="button" class="btn btn-primary" data-toggle="collapse" data-target="#toggleDemo" value="Toggle Button">
    								<!-- Collapsible Element HTML -->
    								<div id="toggleDemo" class="collapse in"><p>This is a simple example of expanding and collapsing individual element via data attribute. Click on the <b>Toggle Button</b> button to see the effect.</p></div>
									</div>
								</div><!-- /.box-body -->
                <div class="box-footer">
                  <ul class="nav nav-pills nav-stacked">
                    <li>
                	<div class="zero-clipboard"><span class="btn-clipboard" data-clipboard-target="clipboard-togglebutton">Copy</span></div>
											<pre>
<code id="clipboard-togglebutton" class="language-markup"> 	
&lt;!-- Trigger Button HTML --&gt;
&lt;input type="button" class="btn btn-primary" data-toggle="collapse" data-target="#toggleDemo" value="Toggle Button"&gt;

&lt;!-- Collapsible Element HTML --&gt;
&lt;div id="toggleDemo" class="collapse in"&gt;&lt;p&gt;This is a simple example of expanding and collapsing individual element via data attribute. Click on the &lt;b&gt;Toggle Button&lt;/b&gt; button to see the effect.&lt;/p&gt;&lt;/div&gt;
</code>
										</pre>
                   	</li>
                  </ul>
                </div><!-- /.footer -->
								</div><!-- /.box -->
            	</div>
            	</div>
          	</div>
            <div class="col-md-6">
              <div class="box box-solid">
                <div class="box-header with-border">
                  <h3 class="box-title">Accordion Code</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                	<p>Bootstrap enables you to expand and collapse any specific element without using the accordion markup and writing any JavaScript code.</p>
									<p>Add data-toggle="collapse" to the controller element (such as a button or an anchor by clicking on which you want to collapse another element) along with a data-target (for buttons) or href (for anchors) to automatically assign control of a collapsible element.</p>
									<p>The data-target or href attribute accepts a CSS selector to apply the collapse to a specific element. Be sure to add the class "collapse" to the collapsible element. If you'd like it to default open, add the additional class "in".</p>
                	<div class="zero-clipboard"><span class="btn-clipboard" data-clipboard-target="clipboard-accordion">Copy</span></div>
                	<pre>
<code id="clipboard-accordion" class="language-markup">
&lt;div class="panel panel-default" id="Cruises"&gt;
  &lt;div class="panel-heading"&gt;
    &lt;h4 class="panel-title"&gt;
      &lt;a data-toggle="collapse" data-target="#collapseCruises" &gt;
        Specialty Cruises
      &lt;/a&gt;
    &lt;/h4&gt;
  &lt;/div&gt;
  &lt;div id="collapseCruises" class="panel-collapse collapse in"&gt;
    &lt;div class="panel-body"&gt;
      [content here]
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class="panel-heading"&gt;
    &lt;h4 class="panel-title"&gt;
      &lt;a data-toggle="collapse" data-target="#collapseHotels" &gt;
        Hotels
      &lt;/a&gt;
    &lt;/h4&gt;
  &lt;/div&gt;
  &lt;div id="collapseHotels" class="panel-collapse collapse"&gt;
    &lt;div class="panel-body"&gt;
      [content here]
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;
									</code>
							    </pre>
							  </div>
							</div>
            </div><!-- /.col -->
          </div>

          <!-- END ACCORDION -->


        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      

    <!-- PrismJS.com -->
    <script src="/IDS-Toolbox/userView//dist/js/prism.js"></script>   
		<?php require_once('../footer.php'); ?>
		
    
    