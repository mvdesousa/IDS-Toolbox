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
            Creating New Page
            <small>Education Page Example</small>
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
			<h2 class="page-header">How to create a new page in Hybris</h2>
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
									<li id="tutorialStep1"><!--step 1-->
										Click on the plus icon under the search bar in WCMS.
										
										<br/><br/>
										<center>Step - Create New Page<img class="img-responsive" src="videoTutorial\screenShots\WCMS\creatingNewPage-Education\createNewPage-createItemButton.png"/></center>
									</li>
									
									<hr></hr>
									
									<li id="tutorialStep2"><!--step 2-->
										When the <strong>"Create New Page - Select desired type"</strong> overlay comes up, you then select which Page Type you would like to create. For this example we are creating an Educational Page. Therefore you will select, <strong>Content Page</strong>. 
										
										<br/><br/>
										<center>Step - Select New Page Template<img class="img-responsive" src="videoTutorial\screenShots\WCMS\creatingNewPage-Education\createNewPage-selectDesiredType-overlay.png"/></center>
									</li>
									
									<hr></hr>
									
									<li id="tutorialStep3"><!--step 3-->
										After selecting your desired page type, you will get another overlay called "<strong>Create New Page - Select Master Template</strong>". For this example we will be selecting "<strong>Generic Education Page Template - MVW-S</strong>", <i>which has a thumbmail showing you a quick preview of how the page is laid out</i>.
										
										<br/><br/>
										<center>Step - Select New Page Template<img class="img-responsive" src="videoTutorial\screenShots\WCMS\creatingNewPage-Education\createNewPage-createNewPage-selectMasterTemplate-overlay.png"/></center>
									</li>
									
									<hr></hr>
									
									<li id="tutorialStep4"><!--step 4-->
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
									
									<li id="tutorialStep5"><!--step 5-->
										After you have completed the page properties overlay. You will then be presented with the WCMS page with all of its components. First thing you will have to do is add a logo to the page, which is also our escape hatch for users to go back to the home page. 
										
										<br/><br/>
										<center>Step - Adding MVWC Logo<img class="img-responsive" src="videoTutorial\screenShots\WCMS\creatingNewPage-Education\createNewPage-addLogo.png"/></center>
									</li>
									
									<hr></hr>
									
									<li id="tutorialStep6"><!--step 6-->
										When you click on the plus icon on the far right of the [csv_MVWC_HeaderMVCLogo] you will see the Select Desired Type overlay. Make sure to select MVC Banner Component. Our logo for MVWC is a Mvc Banner Component and not a MvcParagraphComponent (This does matter).
										
										<br/>
										<br/>
										
										<center>Step - Select Desired Type <img class="img-responsive" src="videoTutorial\screenShots\WCMS\creatingNewPage-Education\createNewPage-addLogo-selectDesiredType-overlay.png"/></center>
									</li>
									
									<hr></hr>
									
									<li id="tutorialStep7"><!--step 7-->
										After you have selected the <strong>Mvc Banner Component</strong> you will be sent to search for the component. If for any  reason you have to create a new logo, you should select <strong>Create a new item</strong>. We already have our logo created so we don't have to create a new item, but we do have to <strong>Select and existing reference</strong>.
										
										<br/>
										<br/>
									
										<center>Step - Select Existing Reference<img class="img-responsive" src="videoTutorial\screenShots\WCMS\creatingNewPage-Education\createNewPage-addLogo-selectAnExistingReference-overlay.png"/></center>
									</li>
									
									<hr></hr>
									
									<li id="tutorialStep8"><!--step 8-->
										After clicking on <strong>Select an existing reference</strong> in the Step above, you will then be able to search for the logo component. You could search for the <strong>Name</strong>, or <strong>ID</strong>. But since we only have one logo for MVWC.com, its easier for you to just do a <strong>blank search</strong> and you'll see all of the results that are <strong>Mvc Banner Component</strong> (in our case, only 1 will show up).
										
										<br/>
										<br/>
									
										<center>Step - Searching for an Existing Logo Component<img class="img-responsive" src="videoTutorial\screenShots\WCMS\creatingNewPage-Education\createNewPage-addLogo-searchComponent-overlay.png"/></center>
									
									</li>
									
									<hr></hr>
									
									<li id="tutorialStep9"><!--step 9-->
										Once you have completed the search, and you get the results. You will select <strong>NAME: Header Logo Component</strong>. This is our current logo for MVWC, with the gold color.
										
										<br/>
										<br/>
										
										<center>Step - Search Results<img class="img-responsive" src="videoTutorial\screenShots\WCMS\creatingNewPage-Education\createNewPage-addLogo-searchResults-overlay.png"/></center>
									</li>
									
									<hr></hr>
									
									<li id="tutorialStep10"><!--step 10-->
										Once you have added the existing logo, you can now start adding other components to the page. Take a look at the screenshot below, you will see that <strong>[csn_EDU_OwnersAssociation_Enrolled_LeftNav]</strong> is not defined.
										
										<br/>
										<br/>
										
										That is because we do not have anything in the Left Nav Component. Click on the far plus icon to add a new instance of the left nav for desktop.
										
										<br/>
										<br/>
										
										<center>Step - Adding Left Navigation - Desktop<img class="img-responsive" src="videoTutorial\screenShots\WCMS\creatingNewPage-Education\createNewPage-addLeftNav-desktop.png"/></center>
									</li>
									
									<hr></hr>
									
									<li id="tutorialStep11"><!--step 11-->
										Once you have clicked on the plus icon, you will see an overlay box with two options; <strong>MvcParagraphComponent</strong>, and <strong>Navigation Components Collection</strong>. For this example we will select <strong>Navigation Components Collection</strong> because we already have a nav created for Education Pages.
										
										<br/>
										<br/>
										
										<center>Step - Select Navigation Components Collection - Desktop<img class="img-responsive" src="videoTutorial\screenShots\WCMS\creatingNewPage-Education\createNewPage-addLeftNav-selectDesiredType-navigationComponentsCollection.png"/></center>
									</li>
									
									<hr></hr>
									
									<li id="tutorialStep12"><!--step 12-->
										Once you have clicked on the plus icon, you will see an overlay box with two options; <strong>MvcParagraphComponent</strong>, and <strong>Navigation Components Collection</strong>. For this example we will select <strong>Navigation Components Collection</strong> because we already have a nav created for Education Pages.
										
										<br/>
										<br/>
										
										<center>Step - Select Existing Reference - Desktop<img class="img-responsive" src="videoTutorial\screenShots\WCMS\creatingNewPage-Education\createNewPage-addLeftNav-selectExistingReference-desktop.png"/></center>
									</li>
									
									<hr></hr>
									
									<li id="tutorialStep13"><!--step 13-->
										When you click on <strong>Select an existing reference</strong>, you will see the search box. Again we will click on the Search Button, without any ID or Name. This will give us a full list of all <strong>MVWCNavigationCollection</strong> component type.
										
										<br/>
										<br/>
										
										<center>Step - Search for an Existing Left Navigation - Desktop<img class="img-responsive" src="videoTutorial\screenShots\WCMS\creatingNewPage-Education\createNewPage-addLeftNav-searchResultdesktop.png"/></center>
									</li>
									
									<hr></hr>
									
									<li id="tutorialStep14"><!--step 14-->
										Once you get the search results, please select <strong>Education Owner Resource (Combined) Enrolled Left Navigation</strong>. We already have the navigation for education pages created, which is why we wont be creating another leftNav. Also please make sure to select the correct nav, some pages have other leftNav than others.
										
										<br/>
										<br/>
										
										<center>Step - Selecting the Existing LeftNav - Desktop<img class="img-responsive" src="videoTutorial\screenShots\WCMS\creatingNewPage-Education\createNewPage-addLeftNav-selectExistingCombinedNav.png"/></center>
									</li>
									
									<hr></hr>
									
									<li id="tutorialStep15"><!--step 15-->
										Once you have created the left navigation for desktop, you will do the same for mobile. <strong>Note: </strong>While creating an education page you will have to select the same existing reference of combited left nav. We had to use the same navigation reference for both desktop and mobile, because we have each link itself being owner based. On other pages you'll notice that the left navigation reference is created specifically for that page group. <strong>Example;</strong> <i>Owner Community, My Account, Explorer Destination, etc..</i>
										
										<br/>
										<br/>
										
										<center>Step - Selecting the Existing LeftNav - Mobile<img class="img-responsive" src="videoTutorial\screenShots\WCMS\creatingNewPage-Education\createNewPage-addLeftNav-addExistingLeftNavReference-mobile.png"/></center>
									</li>
									
									<hr></hr>
									
									<li id="tutorialStep16"><!--step 16-->
										Once you are done with the left nav, you will have to add a breadcrumb component. For each page the breadcrumb will most likely be unique so we will have to create a new reference for each breadcrumb (<strong>Note: </strong> Each page only has one breadcrumb). So we will go ahead and click on the far right plus icon to add a new breadcrumb.
										
										<br/>
										<br/>
										
										<center>Step - Creating New Page Breadcrumb<img class="img-responsive" src="videoTutorial\screenShots\WCMS\creatingNewPage-Education\createNewPage-addBreadCrumb.png"/></center>
									</li>
									
									<hr></hr>
									
									<li id="tutorialStep17"><!--step 17-->
										Once you click on the plus icon, we will be able to select our desired type. In this case we only have <strong>MvcParagraphComponent</strong> set for all the breadcrumbs.
										
										<br/>
										<br/>
										
										<center>Step - Selecting desired breadcrumb type<img class="img-responsive" src="videoTutorial\screenShots\WCMS\creatingNewPage-Education\createNewPage-addBreadCrumb-selectDesiredType.png"/></center>
									</li>
									
									<hr></hr>
									
									<li id="tutorialStep18"><!--step 18-->
										Once you have selected the desired type, you will be asked to either Select and existing reference or Create a new item.
										
										<br/>
										<br/>
										
										<center>Step - Creating a new item<img class="img-responsive" src="videoTutorial\screenShots\WCMS\creatingNewPage-Education\createNewPage-addBreadCrumb-createNewItem.png"/></center>
									</li>
									
									<hr></hr>
									
									<li id="tutorialStep19"><!--step 19-->
										When the component properties overlay comes up, all you will have to fill out is the <strong>Name</strong> field. Make sure its something unique, so that later on when you try to search for this page WCMS will easily find it for you. By default Hybris sets the name to MvcParagraphComponent, for this new page that we are creating we will call it <strong>idsToolbox-educationExample-breadcrumb</strong>
										
										<br/>
										<br/>
										
										<center>Step - Breadcrumb component properties<img class="img-responsive" src="videoTutorial\screenShots\WCMS\creatingNewPage-Education\createNewPage-addBreadCrumb-componentProperties.png"/></center>
										
										<br/>
										<br/>
										
										<center>Example: A successfully added breadcrumb component<img class="img-responsive" src="videoTutorial\screenShots\WCMS\creatingNewPage-Education\createNewPage-addBreadCrumb-confirmComponent.png"/>The red indicates that it hasn't been synced yet, we will do that later on</center>
									</li>
									
									<hr></hr>
									
									<li id="tutorialStep20"><!--step 20-->
										After you have completed with the breadcrumb you will now create the alert area. Click on the far right plus icon on the <Strong>csn_EDU_GenereicPage_AlertArea</strong>, an overlay will come up asking you to either <strong>Select and existing reference</strong>, or <strong>Create a new item</strong>. Remember because the alert area is a unique content per page, we will need to <strong>Create a new item</strong>.
										
										<br/>
										<br/>
										
										<center>
											Step - Add new alert area
											<div>
												<img class="img-responsive" src="videoTutorial\screenShots\WCMS\creatingNewPage-Education\createNewPage-addAlertArea.png"/>
											</div>
											
											<br/>
											
											Step - Create new item
											<div>
												<img class="img-responsive" src="videoTutorial\screenShots\WCMS\creatingNewPage-Education\createNewPage-addAlertArea-createNewItem.png"/>
											</div>
										</center>
									</li>
									
									<hr></hr>
									
									<li id="tutorialStep21"><!--step 21-->
										Now we will be creating a new component. All we have to fill out in this section is the <strong>Name</strong>. Remember to always keep a good naming structure, so that its easier for you to relate components. For this example we will name our alert are component <strong>idsToolbox-educationExample-alertArea</strong>.
										
										<br/>
										<br/>
										
										<center>
											Step - Create new alert area component
											<div>
												<img class="img-responsive" src="videoTutorial\screenShots\WCMS\creatingNewPage-Education\createNewPage-addAlertArea-addComponentName.png"/>
											</div>
										</center>
									</li>
									
									<hr></hr>
									
									<li id="tutorialStep22"><!--step 22-->
										After you are done creating your alert area. We will now create the content section, by clicking on the far right plus icon. Once you have clicked on the far right icon, you will select <strong>MvcParagraphComponent</strong>, the next step you will select <strong>Create a new item</strong>, and on the final step you will add the new component name.
										
										<br/>
										<br/>
										
										<center>
											Step - Create new content area component
											<div>
												<img class="img-responsive" src="videoTutorial\screenShots\WCMS\creatingNewPage-Education\createNewPage-contentArea-addComponentName.png"/>
											</div>
										</center>
									</li>
									
									<hr></hr>
									
									<li id="tutorialStep23"><!--step 23-->
										By now you should be able to add a component slot so we will leave the final step for you to practice. Please go ahead and add a component for the legal code area. <strong>Note: </strong> Generally legal code areas are unique per page and per content so make sure you are creating a new reference, unless you are utilizing the same legal code for multiple pages. This is not common, but you may come across a scenario where you will need to share the same component on different pages. Like we do with the <a href="owners.marriottvacationclub.com">owners.marriottvacationclub.com</a> logo for example.
										
										<br/>
										<br/>
										
										<center>
											Step - Create new legal code
											<div>
												<img class="img-responsive" src="videoTutorial\screenShots\WCMS\creatingNewPage-Education\createNewPage-addLegalCode.png"/>
											</div>
											This is how it should look after you have created the new legal code area
										</center>
									</li>
									
									<hr></hr>
									
									<li id="tutorialStep24"><!--step 24-->
										After you have created all of the components, we will now be able to add content to each one. We will show you how to add text to the content area and then view it on the browser. Look for the <Strong>Content Area Component</Strong> and click on the far right pencil icon.
										
										<br/>
										<br/>
										
										<center>
											Step - Adding content
											<div>
												<img class="img-responsive" src="videoTutorial\screenShots\WCMS\creatingNewPage-Education\createNewPage-addContentText.png"/>
											</div>
											This is the content area component in our example
										</center>
									</li>
									
									<hr></hr>
									
									<li id="tutorialStep25"><!--step 25-->
										After clicking on the pencil icon, you will see a window sliding into your view to the right of the screen. Inside the <strong>Component Property Window</strong> you will see multiple panels; <strong>Basic</strong>, <strong>Editorial</strong>, <strong>Context Visibility</strong>, and <strong>Administration</strong>. To add content to a component you will be doing it so from the <strong>Editorial</strong> panel.
										
										<br/>
										<br/>
										
										This panel accepts <strong>HTML</strong>, <strong>jQuery</strong>, <strong>CSS</strong>. Because we are in <strong>WCMS</strong>, we are able to add those languages into our component area and Hybris will not break the code. It will read our code and display it correctly in our browser. So for this example we have added an HTML heading and a bolded text.
										
										<br/>
										<br/>
										
										<strong style="color: red;">Note:</strong> If you do not close your HTML tags properly it could break the code. For example if you forget to close an extra div, the browser will break your code. Make sure that you close any HTML tag that you may have opened. This also goes for jQuery content, if you break it here the browser will catch it.
										
										
										<br/>
										<br/>
										
										<center>
											Step - Property Panel
											<div>
												<img class="img-responsive" src="videoTutorial\screenShots\WCMS\creatingNewPage-Education\createNewPage-addContentText-rightPanel.png"/>
											</div>
											This is the property panel window
										</center>
									</li>
									
									<hr></hr>
									
									<li id="tutorialStep26"><!--step 26-->
										Now that you have added all components and its content, we are now going to push it live. If you look on the top right corner of your page, you will be able to view a red icon. That is our synchronization icon, go ahead and click on the sync and it will not only sync the components but also the page itself.
										
										<br/>
										<br/>
										
										<div>
											<center class="col-md-6">
												Step - Syncing Page
												<div>
													<img class="img-responsive" src="videoTutorial\screenShots\WCMS\creatingNewPage-Education\createNewPage-pageRedSync.png"/>
												</div>
												Not Synced Status
											</center>
											
											<center class="col-md-6">
												Step - Syncing Page
												<div>
													<img class="img-responsive" src="videoTutorial\screenShots\WCMS\creatingNewPage-Education\createNewPage-pageRedSyncing.png"/>
												</div>
												Syncing Status
											</center>
										</div>
										<div class="clearfix"></div>
											
											<br/>
											<br/>
											
											<center>
												Step - Syncing Page
												<div>
													<img class="img-responsive" src="videoTutorial\screenShots\WCMS\creatingNewPage-Education\createNewPage-syncComplete.png"/>
												</div>
												Sync Completed
											</center>
											
											<br/>
											<br/>
											
											Once you have completed the sync of the page, you will see that all of the icons on the components slots along with the page sync icon itself are now in green. Meaning that the page and all of its components were synced. If you wanted to sync component by compnent, you would have to simply click on the sync icon related to that compnent it self.
									</li>
									
									<hr></hr>
									
									<li id="tutorialStep27"><!--step 27-->
										Once you have synced the page, you will now be able to view it on the browser. Its easy to do it so, because we have our path already completed. So all we have to do is click on the page pencil icon next to the page sync icon, on the far top right. Once you have clicked on the page edit icon, we will see the property panel to the right of the screen. We will now copy whats inside of the <Strong>Label</Strong>.
											
										<br/>
										<br/>
											
										<center>
											Step - Viewing page on browser
											<div>
												<img class="img-responsive" src="videoTutorial\screenShots\WCMS\creatingNewPage-Education\createNewPage-pageEditIcon.png"/>
											</div>
											Page edit icon
										</center>
										
										<br/>
										<br/>
											
										<center>
											Step - Page attributes
											<div>
												<img class="img-responsive" src="videoTutorial\screenShots\WCMS\creatingNewPage-Education\createNewPage-pageAttributes.png"/>
											</div>
											Copy <Strong>Label</Strong> field
										</center>
									</li>
									
									<hr></hr>
									
									<li id="tutorialStep28"><!--step 28-->
										Once you are ready to view the page, copy the <strong>Label</strong>, open your browser and go to the owners environment that you are working on (In our example we are in ST01.Owners.MarriottVacationClub.com). Once there, go to the browser url and at the end of <strong>/timeshare/mvco/</strong> you will paste your <strong>Label</strong>. For our example our page label is <strong>/idsToolbox/education/example</strong>.
											
										<br/>
										<br/>
											
										<center>
											Step - New page browser view
											<div>
												<img class="img-responsive" src="videoTutorial\screenShots\WCMS\creatingNewPage-Education\createNewPage-browserView.png"/>
											</div>
											Chrome Browser Version 45.0.2454.85 - New Page Preview
										</center>
									</li>
									
									
									
									
									
									
									
								</ol>

							</div><!-- /.box-body -->
							
							<center><small><strong>Note for Marcos</strong>: Stopped at [3m:19s] on the video. Please finish tutorial.</small></center>
							
						</div><!-- /.box -->
					</div>
					
					<div class="col-md-6 scrollableDiv">
						<div class="panel-group">
							<div class="panel panel-default">
								<div class="panel-heading">
								  <h4 class="panel-title">
									<a data-toggle="collapse" href="#collapse1">Quick Links</a>
								  </h4>
								</div>

								<div id="collapse1" class="panel-collapse collapse">
									<div class="panel-body">
										<ul style="list-style: none;" class="col-md-6 col-sm-12">
											<li>
												<a href="#tutorialStep1">1. Create New Page</a>
												
												<ul style="list-style: none;">
													<li><a href="#tutorialStep2">2. Select new page desired type</a></li>
													<li><a href="#tutorialStep3">3. Select new page Template</a></li>
													<li><a href="#tutorialStep4">4. New page properties</a></li>
												</ul>
											</li>
											<li>
												<a href="#tutorialStep5">5. Adding MVWC Logo</a>
												
												<ul style="list-style: none;">
													<li><a href="#tutorialStep6">6. Select logo desired type</a></li>
													<li><a href="#tutorialStep7">7. Selecting an existing logo reference</a></li>
													<li><a href="#tutorialStep8">8. Searching for an existing logo</a></li>
													<li><a href="#tutorialStep9">9. Selecting correct mvc logo</a></li>
												</ul>
											</li>
											<li>
												<a href="#tutorialStep10">10. Left Navigation for Desktop</a>
											
												<ul style="list-style: none;">
													<li><a href="#tutorialStep11">11. Select Navigation Components Collection - Desktop</a></li>
													<li><a href="#tutorialStep12">12. Select Existing Reference</a></li>
													<li><a href="#tutorialStep13">13. Search for an Existing Left Navigation</a></li>
													<li><a href="#tutorialStep14">14. Selecting the Existing LeftNav</a></li>
												</ul>
											</li>
										</ul>
										
										
										<ul style="list-style: none;" class="col-md-6 col-sm-12">
											<li>
												<a href="#tutorialStep15">15. Left Navigation for Mobile</a>
											
												<ul style="list-style: none;">
													<li><a href="#tutorialStep16">16. Select Navigation Components Collection - Mobile</a></li>
													<li><a href="#tutorialStep17">17. Select Existing Reference</a></li>
													<li><a href="#tutorialStep18">18. Search for an Existing Left Navigation</a></li>
													<li><a href="#tutorialStep19">19. Selecting the Existing LeftNav</a></li>
												</ul>
											</li>
											<li>
												<a href="#tutorialStep20">20. Create Alert Area</a>
												
												<ul style="list-style: none;">
													<li><a href="#tutorialStep21">21. Select new page desired type</a></li>
													<li><a href="#tutorialStep22">22. Select new page Template</a></li>
													<li><a href="#tutorialStep23">23. Create new legal code</a></li>
												</ul>
											</li>
											<li>
												<a href="#tutorialStep24">24. Adding content to component</a>
												
												<ul style="list-style: none;">
													<li><a href="#tutorialStep25">25. New page properties</a></li>
												</ul>
											</li>
											
											<li><a href="#tutorialStep26">26. Syncing Page/Component</a></li>
											
											<li><a href="#tutorialStep27">27. Getting page URL</a></li>
											
											<li><a href="#tutorialStep28">27. Viewing new page on browser</a></li>
										</ul>
										
									</div>
								  
									<div class="panel-footer">Quicklinks within this page only.</div>
								</div>
							</div>
						</div>
						
						<div class="box box-solid scrollThisPlease">
							<div class="box-header with-border">
								<h3 class="box-title">HTML5 Video</h3>
							</div><!-- /.box-header -->
							
							<div class="box-body">
								<video controls class="html5Video" poster="videoTutorial\screenShots\WCMS\creatingNewPage-Education\createNewPage-browserView.png">
									
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
		
    
    