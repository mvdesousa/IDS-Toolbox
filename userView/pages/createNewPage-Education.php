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
            Creating New Page - Education
            <small>How-To: How to create a new page in Hybris.</small>
          </h1>
          <?php
          $parentPage = "Coding Standards";
          $pageName = "Forms";
          ?>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active"><a href="#"><?php echo $parentPage; ?></a></li>
            <li><a href="#"><?php echo $pageName; ?></a></li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
			<!-- START PAGE -->
			<h2 class="page-header">MVC Forms</h2>
			<!-- START ROW -->
			<div class="row">
				<div class="col-md-12">
					<div class="col-md-6">
						<div class="box box-solid">
							<div class="box-header with-border">
								<h3 class="box-title">Instructions</h3>
							</div><!-- /.box-header -->
							
							<div class="box-body">
								<ol>
									<li><!--step 1-->
										Click on the plus icon under the search bar in WCMS.
										
										<br/><br/>
										<center>Step - Create New Page<img class="img-responsive" src="videoTutorial\screenShots\WCMS\creatingNewPage-Education\createNewPage-createItemButton.png"/></center>
									</li>
									
									<hr></hr>
									
									<li><!--step 2-->
										When the <strong>"Create New Page - Select desired type"</strong> overlay comes up, you then select which Page Type you would like to create. For this example we are creating an Educational Page. Therefore you will select, <strong>Content Page</strong>. 
										
										<br/><br/>
										<center>Step - Select New Page Template<img class="img-responsive" src="videoTutorial\screenShots\WCMS\creatingNewPage-Education\createNewPage-selectDesiredType-overlay.png"/></center>
									</li>
									
									<hr></hr>
									
									<li><!--step 3-->
										After selecting your desired page type, you will get another overlay called "<strong>Create New Page - Select Master Template</strong>". For this example we will be selecting "<strong>Generic Education Page Template - MVW-S</strong>", <i>which has a thumbmail showing you a quick preview of how the page is laid out</i>.
										
										<br/><br/>
										<center>Step - Select New Page Template<img class="img-responsive" src="videoTutorial\screenShots\WCMS\creatingNewPage-Education\createNewPage-createNewPage-selectMasterTemplate-overlay.png"/></center>
									</li>
									
									<hr></hr>
									
									<li><!--step 4-->
										After selecting the page template for the new page we will be prompted with an overlay with a quick form. In this form you will find 7 options; <strong>Page Template, ID, Name, Catalog Version, Positioning, Label, and Other.</strong> <br/><br/> 
									
										<br/><br/>	
										<center>			
											Step - Page Properties<img class="img-responsive" src="videoTutorial\screenShots\WCMS\creatingNewPage-Education\createNewPage-createNewPage-pageProperties.png"/>
											<small><strong>Note: </strong>We will only be filling out a couple of these, the others will be pre-populated by Hybris</small>
										</center>
										
										<br/><br/>	
										<dl style="margin-left: 25px;">
											<dt style="float: left; margin-right: 5px"> ID </dt>
											<dd> - The ID section will be the unique ID name for this page, it has to be unique from any other page.</dd>
											
											<dt style="float: left; margin-right: 5px"> Name </dt>
											<dd> - The page name can be the same as any other, but its good to keep it unique. This will make it easier for you to search for this page later to edit it in WCMS.</dd>
											
											<dt style="float: left; margin-right: 5px"> Label </dt>
											<dd> - The label field is what the path to the page will be. You do not have to include <span class="token attr-value" style="font-style: italic; padding: 1px 5px; background-color: #dedede;">/timeshare/mvco/</span> that is altomatically included from one of our Java Controllers. All you need to do is set a new path, in this example; <span class="token attr-value" style="font-style: italic; padding: 1px 5px; background-color: #dedede;">"idsToolbox/education/example"</span></dd>
										</dl>
									</li>
									
									<hr></hr>
									
									<li><!--step 5-->
										After you have completed the page properties overlay. You will then be presented with the WCMS page with all of its components. First thing you will have to do is add a logo to the page, which is also our escape hatch for users to go back to the home page. 
										
										<br/><br/>
										<center>Step - Adding MVWC Logo<img class="img-responsive" src="videoTutorial\screenShots\WCMS\creatingNewPage-Education\createNewPage-addLogo.png"/></center>
									</li>
									
									<hr></hr>
									
									<li><!--step 6-->
										When you click on the plus icon on the far right of the [csv_MVWC_HeaderMVCLogo] you will see the Select Desired Type overlay. Make sure to select MVC Banner Component. Our logo for MVWC is a Mvc Banner Component and not a MvcParagraphComponent (This does matter).
										
										<br/>
										<br/>
										
										<center>Step - Select Desired Type <img class="img-responsive" src="videoTutorial\screenShots\WCMS\creatingNewPage-Education\createNewPage-addLogo-selectDesiredType-overlay.png"/></center>
									</li>
									
									<hr></hr>
									
									<li><!--step 7-->
										After you have selected the <strong>Mvc Banner Component</strong> you will be sent to search for the component. If for any  reason you have to create a new logo, you should select <strong>Create a new item</strong>. We already have our logo created so we don't have to create a new item, but we do have to <strong>Select and existing reference</strong>.
										
										<br/>
										<br/>
									
										<center>Step - Select Existing Reference<img class="img-responsive" src="videoTutorial\screenShots\WCMS\creatingNewPage-Education\createNewPage-addLogo-selectAnExistingReference-overlay.png"/></center>
									</li>
									
									<hr></hr>
									
									<li><!--step 8-->
										After clicking on <strong>Select an existing reference</strong> in the Step above, you will then be able to search for the logo component. You could search for the <strong>Name</strong>, or <strong>ID</strong>. But since we only have one logo for MVWC.com, its easier for you to just do a <strong>blank search</strong> and you'll see all of the results that are <strong>Mvc Banner Component</strong> (in our case, only 1 will show up).
										
										<br/>
										<br/>
									
										<center>Step - Searching for an Existing Logo Component<img class="img-responsive" src="videoTutorial\screenShots\WCMS\creatingNewPage-Education\createNewPage-addLogo-searchComponent-overlay.png"/></center>
									
									</li>
									
									<hr></hr>
									
									<li><!--step 9-->
										Once you have completed the search, and you get the results. You will select <strong>NAME: Header Logo Component</strong>. This is our current logo for MVWC, with the gold color.
										
										<br/>
										<br/>
										
										<center>Step - Search Results<img class="img-responsive" src="videoTutorial\screenShots\WCMS\creatingNewPage-Education\createNewPage-addLogo-searchResults-overlay.png"/></center>
									</li>
								</ol>

							</div><!-- /.box-body -->
						</div><!-- /.box -->
					</div>
					
					<div class="col-md-6 scrollableDiv">
						<div class="box box-solid scrollThisPlease">
							<div class="box-header with-border">
								<h3 class="box-title">HTML5 Video</h3>
							</div><!-- /.box-header -->
							
							<div class="box-body">
								<video controls class="html5Video">
									<source src="http://10.206.6.49/IDS-Toolbox/userView/pages/videoTutorial/educationPage-createNewPageExample.mp4" type="video/mp4">
									<source src="http://10.206.6.49/IDS-Toolbox/userView/pages/videoTutorial/educationPage-createNewPageExample.webm" type="video/webm">
								</video>
							</div><!-- /.box-body -->
						</div><!-- /.box -->
					</div>
				</div>
			</div>
			<!-- END CONTENT -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      

    <!-- PrismJS.com -->
    <script src="/IDS-Toolbox/userView/dist/js/prism.js"></script>   
		<?php require_once('../footer.php'); ?>
		
    
    