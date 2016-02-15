<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Marriott Vacation Club Web Dev | Dashboard (from browser)</title>
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
    <!-- Morris chart -->
    <link href="/plugins/morris/morris.css" rel="stylesheet" type="text/css" />
    <!-- jvectormap -->
    <link href="/plugins/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
    <!-- Date Picker -->
    <link href="/plugins/datepicker/datepicker3.css" rel="stylesheet" type="text/css" />
    <!-- Daterange picker -->
    <link href="/plugins/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
    <!-- bootstrap wysihtml5 - text editor -->
    <link href="/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />

    <!-- fullCalendar 2.2.5-->
    <link href="/plugins/fullcalendar/fullcalendar.min.css" rel="stylesheet" type="text/css" />
    <link href="/plugins/fullcalendar/fullcalendar.print.css" rel="stylesheet" type="text/css" media='print' />
    
    
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
  <body class="skin-blue sidebar-mini fixed" data-spy="scroll" data-target="#scrollspy">
    <div class="wrapper">

		<?php require_once('/header.php'); ?>
		<?php require_once('/sidebar.php'); ?>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header" id='introduction'>
          <h1>
            The hybris Marketing Sites Dashboard
            <small>Migration of the marketing web sites to the hybris CMS platform.</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
          </ol>
        </section>

				<section class="content body">
					  					<h2 class='page-header'><a href="#introduction">#Introduction</a></h2>
					  					<p class='lead'>
					  					  The <b>MVCToolbox</b> will guide you through the documentation and associated tasks related to the hybris migration.  To get a feel for HTML5, Bootstrap 3.0 and jQuery, the MVCToolbox was written with these platforms in mind.  The server-side platform is written in PHP and MySQL.  Future state may include running a hybris instance to manage the content.
					  					</p>
					
					<section id="visual-sitemap">  					
						<div class="row">						
          	  <div class="col-md-12 col-sm-12 col-xs-12">
						  	<div class="box box-default">
          	      <div class="box-header with-border">
          	        <h3 class="box-title">MarriottVacationClub.com Page Mapping (Prototype)</h3>
          	        <div class="box-tools pull-right">
          	          <a href="concept/index2.html" class="btn btn-box-tool" target="_blank"><i class="fa fa-external-link-square"></i></a>
          	          <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
          	          <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
          	        </div>
          	      </div><!-- /.box-header -->
          	      <div class="box-body">
          	        <div class="row">  					 
          	  					<div class="embed-responsive embed-responsive-16by9">
  												<iframe class="embed-responsive-item" src="concept/index2.html"></iframe>
  											</div>
  									</div>
  								</div>
  							</div>
  						</div>
  					</div>
  						
						<div class="row" id="visual-architecture">						
          	  <div class="col-xs-12">
						  	<div class="box box-default">
          	      <div class="box-header with-border">
          	        <h3 class="box-title">MarriottVacationClub.com Architecture (Prototype)</h3>
          	        <div class="box-tools pull-right">
          	          <a href="architecture/mvc.com/index.html" class="btn btn-box-tool" target="_blank"><i class="fa fa-external-link-square"></i></a>
          	          <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
          	          <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
          	        </div>
          	      </div><!-- /.box-header -->
          	      <div class="box-body">
          	        <div class="row">  	
          	        	<script>
          	        		// Check if the userAgent contains "msie"
												if(navigator.userAgent.toLowerCase().indexOf("msie") != -1)){
     											//If so, then this is Internet Explorer
     											alert("This is IE");
												}	
          	        	</script>
          	        	<div id="IEMessage"></div>
          	  					<div class="embed-responsive embed-responsive-4by3">
  												<iframe class="embed-responsive-item" src="architecture/mvc.com/index.html"></iframe>
  											</div>
  									</div>
  								</div>
  							</div>
  						</div>
  					</div>
  					
					</section><!-- /#introduction -->
        	
        	
          <!-- Small boxes (Stat box) -->
          <div class="row">
          	<div class="col-md-12 col-sm-12 col-xs-12" id="overview">
					  	<h2 class='page-header'><a href="#overview">#Migration Overview</a></h2>
            </div>
            <div class="col-md-4 col-sm-12 col-xs-12">
              <div class="info-box bg-aqua">
                <span class="info-box-icon"><a href="https://mvc.10.206.6.22:9001/yacceleratorstorefront/" data-toggle="tooltip" data-original-title="View Hybris Prototype" target="_blank"><i class="fa fa-external-link"></i></a></span>
                <div class="info-box-content">
                  <span class="info-box-text"><a href="https://mvc.10.206.6.22:9002/yacceleratorstorefront/" data-toggle="tooltip" data-original-title="View Hybris Prototype" target="_blank" style="color:#fff;text-decoration:underline;">MarriottVacationClub.com</a></span>
                  <span class="info-box-number">1,340 Pages</span>
                  			<style>
													.info-box .progress-white {
    												height: 6px;
    												margin: 5px -10px;
    												background: none repeat scroll 0 0 rgba(254, 254, 254, 0.8);
    												border-radius: 0;
													}
													.progress-bar-white-striped {
    												background-size: 40px 40px;
    												border-radius: 0;
													}
													.progress-white.active {
														animation: 2s linear 0s normal none infinite running progress-bar-stripes;
													}
													.progress-bar {
														border-radius: 0;
													}
												</style>
                        <div class="progress-white progress-striped active">
                          <div class="progress-bar progress-bar-white-striped" style="width: 30%"></div>
                        </div>
                  <span class="progress-description">
                    <a style="color:#fff;" href="/pages/migrationplan-2a.1-mvc.com.php">Migration Plan <i class="fa fa-arrow-circle-right"></i></a>
                  </span>
                  
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- ./col -->
            <div class="col-md-4 col-sm-12 col-xs-12">
              <div class="info-box bg-aqua">
                <span class="info-box-icon"><a href="https://10.206.6.37:9002/yacceleratorstorefront/?site=mvc.eu" data-toggle="tooltip" data-original-title="View Hybris Prototype" target="_blank"><i class="fa fa-external-link"></i></a></span>
                <div class="info-box-content">
                  <span class="info-box-text"><a href="https://10.206.6.37:9002/yacceleratorstorefront/?site=mvc.eu" data-toggle="tooltip" data-original-title="View Hybris Prototype" target="_blank" style="color:#fff;text-decoration:underline;">MarriottVacationClub.eu</a></span>
                  <span class="info-box-number">50 Crawled Pages (5/8)<small class="label pull-right bg-green">new</small></span>
                  
                        <div class="progress-white progress-striped active">
                          <div class="progress-bar progress-bar-white-striped" style="width: 20%"></div>
                        </div>
                  <span class="progress-description">
                    20% to completion
                  </span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- ./col -->
            <div class="col-md-4 col-sm-12 col-xs-12">
              <div class="info-box bg-aqua">
                <span class="info-box-icon"><i class="fa fa-square-o"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">MarriottVacationClubME.com</span>
                  <span class="info-box-number">91 Crawled Pages (5/9)<small class="label pull-right bg-green">new</small></span>
                  
                        <div class="progress-white progress-striped active">
                          <div class="progress-bar progress-bar-white-striped" style="width: 10%"></div>
                        </div>
                  <span class="progress-description">
                    10% to completion
                  </span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- ./col -->
          </div><!-- /.row -->


          <!-- Small boxes (Stat box) -->
          <div class="row">
            <div class="col-md-4 col-sm-12 col-xs-12">
              <div class="info-box bg-yellow">
                <span class="info-box-icon"><i class="fa fa-square-o"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">MarriottAsiaHolidays.com</span>
                  <span class="info-box-number">30 Crawled Pages (5/8)<small class="label pull-right bg-green">new</small></span>
                  
                        <div class="progress-white progress-striped active">
                          <div class="progress-bar progress-bar-white-striped" style="width: 20%"></div>
                        </div>
                  <span class="progress-description">
                    20% to completion
                  </span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- ./col -->
            <div class="col-md-4 col-sm-12 col-xs-12">
              <div class="info-box bg-yellow">
                <span class="info-box-icon"><i class="fa fa-square-o"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">MarriottVacationClub.co.jp</span>
                  <span class="info-box-number">51 Crawled Pages (5/9)<small class="label pull-right bg-green">new</small></span>
                  
                        <div class="progress-white progress-striped active">
                          <div class="progress-bar progress-bar-white-striped" style="width: 15%"></div>
                        </div>
                  <span class="progress-description">
                    15% to completion
                  </span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- ./col -->
            <div class="col-md-4 col-sm-12 col-xs-12">
              <div class="info-box bg-yellow">
                <span class="info-box-icon"><i class="fa fa-square-o"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">MarriottVacationsWorldwide.com</span>
                  <span class="info-box-number">500 Pages</span>
                  <div class="progress">
                    <div class="progress-bar" style="width: 5%"></div>
                  </div>
                  <span class="progress-description">
                    5% to completion
                  </span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- ./col -->
          </div><!-- /.row -->


          <!-- Small boxes (Stat box) -->
          <div class="row">
            <div class="col-md-4 col-sm-12 col-xs-12">
              <div class="info-box bg-red">
                <span class="info-box-icon"><i class="fa fa-square-o"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">RitzCarltonClub.com</span>
                  <span class="info-box-number">300 Pages</span>
                  <div class="progress">
                    <div class="progress-bar" style="width: 20%"></div>
                  </div>
                  <span class="progress-description">
                    20% to completion
                  </span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- ./col -->
            <div class="col-md-4 col-sm-12 col-xs-12">
              <div class="info-box bg-red">
                <span class="info-box-icon"><i class="fa fa-square-o"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">GrandResidenceClub.com</span>
                  <span class="info-box-number">49 Crawled Pages (5/9)<small class="label pull-right bg-green">new</small></span>
                  
                        <div class="progress-white progress-striped active">
                          <div class="progress-bar progress-bar-white-striped" style="width: 10%"></div>
                        </div>
                  <span class="progress-description">
                    10% to completion
                  </span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- ./col -->
            <div class="col-md-4 col-sm-12 col-xs-12">
              <div class="info-box bg-red">
                <span class="info-box-icon"><i class="fa fa-square-o"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">47ParkStreet.com</span>
                  <span class="info-box-number">41 Crawled Pages (5/9)<small class="label pull-right bg-green">new</small></span>
                  
                        <div class="progress-white progress-striped active">
                          <div class="progress-bar progress-bar-white-striped" style="width: 10%"></div>
                        </div>
                  <span class="progress-description">
                    10% to completion
                  </span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- ./col -->
          </div><!-- /.row -->

						
  					<div class="row">						
          	  <div class="col-md-8 col-sm-12 col-xs-12">
						  	<div class="box box-default">
          	      <div class="box-header with-border">
          	        <h3 class="box-title">Migration Timeline</h3>
          	        <div class="box-tools pull-right">
          	          <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
          	          <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
          	        </div>
          	      </div><!-- /.box-header -->
          	      <div class="box-body">
          	        <div class="row">
          	  				<div class="col-md-12 col-sm-12 col-xs-12">
          	  					<div id="myfirstchart" style="height: 250px;"></div> 
						  				</div>
						  			</div>
						  		</div>
						  	</div>
						  </div>
          	  <div class="col-md-4 col-sm-12 col-xs-12">
						  	<div class="box box-default">
          	      <div class="box-header with-border">
          	        <h3 class="box-title">Migration Tasks</h3>
          	        <div class="box-tools pull-right">
          	          <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
          	          <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
          	        </div>
          	      </div><!-- /.box-header -->
          	      <div class="box-body">
          	        <div class="row">
          	          <div class="col-md-8">
          	            <div class="chart-responsive">
          	              <canvas id="pieChart" height="150"></canvas>
          	            </div><!-- ./chart-responsive -->
          	          </div><!-- /.col -->
          	          <div class="col-md-4">
          	            <ul class="chart-legend clearfix">
          	              <li><i class="fa fa-circle-o text-red"></i> Content</li>
          	              <li><i class="fa fa-circle-o text-green"></i> PoC</li>
          	              <li><i class="fa fa-circle-o text-yellow"></i> Prototype</li>
          	              <li><i class="fa fa-circle-o text-aqua"></i> Migration</li>
          	              <li><i class="fa fa-circle-o text-light-blue"></i> ImpEx Script</li>
          	              <li><i class="fa fa-circle-o text-gray"></i> Testing</li>
          	            </ul>
          	          </div><!-- /.col -->
          	        </div><!-- /.row -->
          	      </div><!-- /.box-body -->
          	      <div class="box-footer no-padding">
          	        <ul class="nav nav-pills nav-stacked">
          	          <li><a href="#"># <span class="pull-right text-red"><i class="fa fa-angle-down"></i> 12%</span></a></li>
          	          <li><a href="#"># <span class="pull-right text-green"><i class="fa fa-angle-up"></i> 4%</span></a></li>
          	        </ul>
          	      </div><!-- /.footer -->
          	    </div><!-- /.box -->
          	  </div>
          	</div>

					<div class="row">
          	<div class="col-md-12 col-sm-12 col-xs-12" id="tasks">
					  	<h2 class='page-header'><a href="#tasks">#Tasks & Dates</a></h2>
            </div>
          </div>
            
          <!-- Main row -->
          <div class="row">
            <!-- Left col -->
            <section class="col-lg-5 connectedSortable">
              <!-- Custom table (tasks)-->

							<div class="box">
                <div class="box-header">
                  <h3 class="box-title">Phase 2A.1 Tasks</h3>
                  <div class="box-tools pull-right">
      							<button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
    							</div><!-- /.box-tools -->
                </div><!-- /.box-header -->
                <div class="box-body no-padding">
                  <table class="table table-striped">
                    <tbody><tr>
                      <th style="width: 10px">#</th>
                      <th>Task</th>
                      <th>Progress</th>
                      <th style="width: 40px">Label</th>
                    </tr>
                    <tr>
                      <td>1.</td>
                      <td>Document & Capture Content</td>
                      <td>
                        <div class="progress progress-striped progress-xs active">
                          <div class="progress-bar progress-bar-danger" style="width: 95%"></div>
                        </div>
                      </td>
                      <td><span class="badge bg-red">95%</span></td>
                    </tr>
                    <tr>
                      <td>2.</td>
                      <td>Code Rewrite</td>
                      <td>
                        <div class="progress progress-xs">
                          <div class="progress-bar progress-bar-yellow" style="width: 70%"></div>
                        </div>
                      </td>
                      <td><span class="badge bg-yellow">70%</span></td>
                    </tr>
                    <tr>
                      <td>3.</td>
                      <td>Hybris ImpEx Import Scripts</td>
                      <td>
                        <div class="progress progress-xs progress-striped active">
                          <div class="progress-bar progress-bar-primary" style="width: 10%"></div>
                        </div>
                      </td>
                      <td><span class="badge bg-light-blue">10%</span></td>
                    </tr>
                    <tr>
                      <td>4.</td>
                      <td>Pre-Implementation</td>
                      <td>
                        <div class="progress progress-xs progress-striped active">
                          <div class="progress-bar progress-bar-success" style="width: 10%"></div>
                        </div>
                      </td>
                      <td><span class="badge bg-green">10%</span></td>
                    </tr>
                    <tr>
                      <td>5.</td>
                      <td>Implementation</td>
                      <td>
                        <div class="progress progress-xs progress-striped active">
                          <div class="progress-bar progress-bar-success" style="width: 0%"></div>
                        </div>
                      </td>
                      <td><span class="badge bg-green">0%</span></td>
                    </tr>
                    <tr>
                      <td>6.</td>
                      <td>Post Implementation</td>
                      <td>
                        <div class="progress progress-xs progress-striped active">
                          <div class="progress-bar progress-bar-success" style="width: 0%"></div>
                        </div>
                      </td>
                      <td><span class="badge bg-green">0%</span></td>
                    </tr>
                  </tbody></table>
                </div><!-- /.box-body -->
              </div>

              <!-- Custom table (tasks)-->

							<div class="box collapsed-box">
                <div class="box-header">
                  <h3 class="box-title">Phase 2A.2 Tasks</h3>
                  <div class="box-tools pull-right">
      							<button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i></button>
    							</div><!-- /.box-tools -->
                </div><!-- /.box-header -->
                <div class="box-body no-padding">
                  <table class="table table-striped">
                    <tbody><tr>
                      <th style="width: 10px">#</th>
                      <th>Task</th>
                      <th>Progress</th>
                      <th style="width: 40px">Label</th>
                    </tr>
                    <tr>
                      <td>1.</td>
                      <td>Document & Capture Content</td>
                      <td>
                        <div class="progress progress-striped progress-xs active">
                          <div class="progress-bar progress-bar-danger" style="width: 10%"></div>
                        </div>
                      </td>
                      <td><span class="badge bg-red">10%</span></td>
                    </tr>
                    <tr>
                      <td>2.</td>
                      <td>Code Rewrite</td>
                      <td>
                        <div class="progress progress-xs">
                          <div class="progress-bar progress-bar-yellow" style="width: 10%"></div>
                        </div>
                      </td>
                      <td><span class="badge bg-yellow">10%</span></td>
                    </tr>
                    <tr>
                      <td>3.</td>
                      <td>Hybris ImpEx Import Scripts</td>
                      <td>
                        <div class="progress progress-xs progress-striped active">
                          <div class="progress-bar progress-bar-primary" style="width: 10%"></div>
                        </div>
                      </td>
                      <td><span class="badge bg-light-blue">10%</span></td>
                    </tr>
                    <tr>
                      <td>4.</td>
                      <td>Pre-Implementation</td>
                      <td>
                        <div class="progress progress-xs progress-striped active">
                          <div class="progress-bar progress-bar-success" style="width: 10%"></div>
                        </div>
                      </td>
                      <td><span class="badge bg-green">10%</span></td>
                    </tr>
                    <tr>
                      <td>5.</td>
                      <td>Implementation</td>
                      <td>
                        <div class="progress progress-xs progress-striped active">
                          <div class="progress-bar progress-bar-success" style="width: 0%"></div>
                        </div>
                      </td>
                      <td><span class="badge bg-green">0%</span></td>
                    </tr>
                    <tr>
                      <td>6.</td>
                      <td>Post Implementation</td>
                      <td>
                        <div class="progress progress-xs progress-striped active">
                          <div class="progress-bar progress-bar-success" style="width: 0%"></div>
                        </div>
                      </td>
                      <td><span class="badge bg-green">0%</span></td>
                    </tr>
                  </tbody></table>
                </div><!-- /.box-body -->
              </div>
              <!-- Custom table (tasks)-->

							<div class="box collapsed-box">
                <div class="box-header">
                  <h3 class="box-title">Phase 2A.3 Tasks</h3>
                  <div class="box-tools pull-right">
      							<button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i></button>
    							</div><!-- /.box-tools -->
                </div><!-- /.box-header -->
                <div class="box-body no-padding">
                  <table class="table table-striped">
                    <tbody><tr>
                      <th style="width: 10px">#</th>
                      <th>Task</th>
                      <th>Progress</th>
                      <th style="width: 40px">Label</th>
                    </tr>
                    <tr>
                      <td>1.</td>
                      <td>Mindtree Development Tasks</td>
                      <td>
                        <div class="progress progress-striped progress-xs active">
                          <div class="progress-bar progress-bar-danger" style="width: 10%"></div>
                        </div>
                      </td>
                      <td><span class="badge bg-red">10%</span></td>
                    </tr>
                    <tr>
                      <td>2.</td>
                      <td>Mindtree Implementation Tasks</td>
                      <td>
                        <div class="progress progress-xs">
                          <div class="progress-bar progress-bar-yellow" style="width: 10%"></div>
                        </div>
                      </td>
                      <td><span class="badge bg-yellow">10%</span></td>
                    </tr>
                    <tr>
                      <td>3.</td>
                      <td>Mindtree Post Implementation Tasks</td>
                      <td>
                        <div class="progress progress-xs progress-striped active">
                          <div class="progress-bar progress-bar-primary" style="width: 10%"></div>
                        </div>
                      </td>
                      <td><span class="badge bg-light-blue">10%</span></td>
                    </tr>
                  </tbody></table>
                </div><!-- /.box-body -->
              </div>
              
              <!-- Custom table (tasks)-->

							<div class="box collapsed-box">
                <div class="box-header">
                  <h3 class="box-title">Phase 2A.4 Tasks</h3>
                  <div class="box-tools pull-right">
      							<button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i></button>
    							</div><!-- /.box-tools -->
                </div><!-- /.box-header -->
                <div class="box-body no-padding">
                  <table class="table table-striped">
                    <tbody><tr>
                      <th style="width: 10px">#</th>
                      <th>Task</th>
                      <th>Progress</th>
                      <th style="width: 40px">Label</th>
                    </tr>
                    <tr>
                      <td>1.</td>
                      <td>Document & Capture Content</td>
                      <td>
                        <div class="progress progress-striped progress-xs active">
                          <div class="progress-bar progress-bar-danger" style="width: 10%"></div>
                        </div>
                      </td>
                      <td><span class="badge bg-red">10%</span></td>
                    </tr>
                    <tr>
                      <td>2.</td>
                      <td>Code Rewrite</td>
                      <td>
                        <div class="progress progress-xs">
                          <div class="progress-bar progress-bar-yellow" style="width: 10%"></div>
                        </div>
                      </td>
                      <td><span class="badge bg-yellow">10%</span></td>
                    </tr>
                    <tr>
                      <td>3.</td>
                      <td>Hybris ImpEx Import Scripts</td>
                      <td>
                        <div class="progress progress-xs progress-striped active">
                          <div class="progress-bar progress-bar-primary" style="width: 10%"></div>
                        </div>
                      </td>
                      <td><span class="badge bg-light-blue">10%</span></td>
                    </tr>
                    <tr>
                      <td>4.</td>
                      <td>Pre-Implementation</td>
                      <td>
                        <div class="progress progress-xs progress-striped active">
                          <div class="progress-bar progress-bar-success" style="width: 10%"></div>
                        </div>
                      </td>
                      <td><span class="badge bg-green">10%</span></td>
                    </tr>
                    <tr>
                      <td>5.</td>
                      <td>Implementation</td>
                      <td>
                        <div class="progress progress-xs progress-striped active">
                          <div class="progress-bar progress-bar-success" style="width: 0%"></div>
                        </div>
                      </td>
                      <td><span class="badge bg-green">0%</span></td>
                    </tr>
                    <tr>
                      <td>6.</td>
                      <td>Post Implementation</td>
                      <td>
                        <div class="progress progress-xs progress-striped active">
                          <div class="progress-bar progress-bar-success" style="width: 0%"></div>
                        </div>
                      </td>
                      <td><span class="badge bg-green">0%</span></td>
                    </tr>
                  </tbody></table>
                </div><!-- /.box-body -->
              </div>              
              
              
            </section><!-- /.Left col -->
            <!-- right col (We are only adding the ID to make the widgets sortable)-->
            <section class="col-lg-7 connectedSortable">


							<div class="box">
                <div class="box-header">
                  <h3 class="box-title">Migration Calendar</h3>
                </div><!-- /.box-header -->
              		<div class="box box-primary">
                		<div class="box-body no-padding">
                  		<!-- THE CALENDAR -->
                  		<div id="calendar"></div>
                		</div><!-- /.box-body -->
              		</div><!-- /. box -->
							</div>

            </section><!-- right col -->
          </div><!-- /.row (main row) -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->


	<?php require_once('/footer.php'); ?>
    
    <!-- Page specific script -->
    <script type="text/javascript">
      $(function () {

        /* initialize the external events
         -----------------------------------------------------------------*/
        function ini_events(ele) {
          ele.each(function () {

            // create an Event Object (http://arshaw.com/fullcalendar/docs/event_data/Event_Object/)
            // it doesn't need to have a start or end
            var eventObject = {
              title: $.trim($(this).text()) // use the element's text as the event title
            };

            // store the Event Object in the DOM element so we can get to it later
            $(this).data('eventObject', eventObject);

            // make the event draggable using jQuery UI
            $(this).draggable({
              zIndex: 1070,
              revert: true, // will cause the event to go back to its
              revertDuration: 0  //  original position after the drag
            });

          });
        }
        ini_events($('#external-events div.external-event'));

        /* initialize the calendar
         -----------------------------------------------------------------*/
        //Date for the calendar events (dummy data)
        var date = new Date();
        var d = date.getDate(),
                m = date.getMonth(),
                y = date.getFullYear();
                jan = 00;
                feb = 01;
                mar = 02;
                apr = 03;
                may = 04;
                jun = 05;
                jul	= 06;
                aug = 07;
                sep = 08;
                oct = 09;
                nov = 10;
                dec = 11;
        $('#calendar').fullCalendar({
          header: {
            left: 'prev,next today',
            center: 'title',
            right: 'month,agendaWeek,agendaDay'
          },
          buttonText: {
            today: 'today',
            month: 'month',
            week: 'week',
            day: 'day'
          },
          //Random default events
          events: [
            {
              title: 'Kickoff and Hybris Overview',
              start: new Date(2015, may, 13, 15, 00),
              url: '/pages/Web Redesign 2A Planning Development and Implementation.ics',
              backgroundColor: "#f56954", //red
              borderColor: "#f56954" //red
            },
            {
              title: 'Developer Standards for CSS Classes and CSS Components using Bootstrap 3.0',
              start: new Date(y, may, 27, 14, 0),
              end: new Date(y, may, 27, 15, 0),
              url: '/pages/Web Redesign 2A Planning Development and Implementation.ics',
              allDay: false,
              backgroundColor: "#00c0ef", //Info (aqua)
              borderColor: "#00c0ef" //Info (aqua)
            },
            {
              title: 'Meeting',
              start: new Date(y, m, 28),
              end: new Date(y, m, 29),
              url: 'http://google.com/',
              backgroundColor: "#3c8dbc", //Primary (light-blue)
              borderColor: "#3c8dbc" //Primary (light-blue)
            }
          ],
          editable: true,
          droppable: true, // this allows things to be dropped onto the calendar !!!
          drop: function (date, allDay) { // this function is called when something is dropped

            // retrieve the dropped element's stored Event Object
            var originalEventObject = $(this).data('eventObject');

            // we need to copy it, so that multiple events don't have a reference to the same object
            var copiedEventObject = $.extend({}, originalEventObject);

            // assign it the date that was reported
            copiedEventObject.start = date;
            copiedEventObject.allDay = allDay;
            copiedEventObject.backgroundColor = $(this).css("background-color");
            copiedEventObject.borderColor = $(this).css("border-color");

            // render the event on the calendar
            // the last `true` argument determines if the event "sticks" (http://arshaw.com/fullcalendar/docs/event_rendering/renderEvent/)
            $('#calendar').fullCalendar('renderEvent', copiedEventObject, true);

            // is the "remove after drop" checkbox checked?
            if ($('#drop-remove').is(':checked')) {
              // if so, remove the element from the "Draggable Events" list
              $(this).remove();
            }

          }
        });

        /* ADDING EVENTS */
        var currColor = "#3c8dbc"; //Red by default
        //Color chooser button
        var colorChooser = $("#color-chooser-btn");
        $("#color-chooser > li > a").click(function (e) {
          e.preventDefault();
          //Save color
          currColor = $(this).css("color");
          //Add color effect to button
          $('#add-new-event').css({"background-color": currColor, "border-color": currColor});
        });
        $("#add-new-event").click(function (e) {
          e.preventDefault();
          //Get value and make sure it is not null
          var val = $("#new-event").val();
          if (val.length == 0) {
            return;
          }

          //Create events
          var event = $("<div />");
          event.css({"background-color": currColor, "border-color": currColor, "color": "#fff"}).addClass("external-event");
          event.html(val);
          $('#external-events').prepend(event);

          //Add draggable funtionality
          ini_events(event);

          //Remove event from text input
          $("#new-event").val("");
        });
      });
    </script>      
      
