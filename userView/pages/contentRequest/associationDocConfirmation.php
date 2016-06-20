<!DOCTYPE html>

<?php 
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
?>

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

		<?php require_once('../../header.php'); ?>
		<?php require_once('../../sidebar.php'); ?>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper" height="700px">
        <section class="content">
			<h2 class="page-header">Production Content Request</h2>
			<p>Here you will be able to submit new content to our IDS Developer Team. Once the request has been submitted, our team will review the request and contact you if we have any questions. Please keep in mind to fill all information on the form requests.</p>
			
			<style>
				.truncate {
				  width: 100%;
				  white-space: nowrap;
				  overflow: hidden;
				  text-overflow: ellipsis;
				}
			</style>
			<div class="contentRequestOptions">
				<ul class="col-md-12 associationDocTable">					
					<?php
						error_reporting(E_ALL & ~E_NOTICE);
						ini_set('display_errors', 1);
						session_start(); 
						
						
						$name = $_POST['name'];
						$description = $_POST['description'];
						$group = $_POST['group'];
						$uniqueDocID = $_POST['uniqueDocID'];
						$resortCode = $_POST['resortCode'];
						$date = $_POST['date'];
						$fileName = $_POST['fileToUpload'];
						$sqlAction = $_POST['sqlAction'];
						
						
						
						/* 
						print "--------------------------------------<br/>";
						for($x = 0; $x <= count($sqlAction); $x++ ){
							if(in_array("INSERT", $_POST['sqlAction'] )){
								print $sqlAction[$x]."<br/>";
							};
						}
						print "--------------------------------------";
						 */
						
						print "<div class='col-md-12' style='padding: 0 0 10px 0;'>";
							print "<div style='border-left: 1px solid #dedede; border-right: 1px solid #dedede; background-color: #D1D9CA; padding: 10px;'>";
								print "<div class='col-md-1' style='margin-left: 0; font-weight: bold;'>Action</div>";
								print "<div class='col-md-2' style='font-weight: bold;'>Name</div>";
								print "<div class='col-md-2' style='font-weight: bold;'>Description</div>";
								print "<div class='col-md-1' style='font-weight: bold;'>Group</div>";
								print "<div class='col-md-1' style='font-weight: bold;'>Unique Doc ID</div>";
								print "<div class='col-md-1' style='font-weight: bold;'>Resort Code</div>";
								print "<div class='col-md-1' style='font-weight: bold;'>Date</div>";
								print "<div class='col-md-3' style='font-weight: bold;'>File Name</div>";
							print "<div class='clearfix'></div></div>";
							
							for($x = 0; $x <= count($name); $x++ ){
								if(in_array("INSERT", $_POST['sqlAction'] )){
									print "<div style='padding: 10px; border-bottom: 1px solid #D1D9CA; border-left: 1px solid #dedede; border-right: 1px solid #dedede;'>";
										print "<span class='col-md-1'>".$sqlAction[$x]."</span>";
										print "<span class='col-md-2'>".$name[$x]."</span>";
										print "<span class='col-md-2'>".$description[$x]."</span>";
										print "<span class='col-md-1'>".$group[$x]."</span>";
										print "<span class='col-md-1'>".$uniqueDocID[$x]."</span>";
										print "<span class='col-md-1'>".$resortCode[$x]."</span>";
										print "<span class='col-md-1'>".$date[$x]."</span>";
										print "<span class='col-md-3'><div class='truncate' title='".$fileName[$x]."'>".$fileName[$x]."</div></span>";
									print "<div class='clearfix'></div></div>";
								};
							};
						print "</div>";
						
					?>

					<div class="clearfix"></div>
					
					<div class="panel-group">
						<div class="panel panel-default" style="padding: 0 0 10px 0;">
							<a data-toggle="collapse" href="#collapse1">
								<div class="panel-heading col-md-9">
									<h4 class="panel-title" style="margin-top: 15px;">
										<strong>Cick here</strong> to view ImpexScript
									</h4>
								</div>
									
								<span class="pull-right col-md-3" style="margin-top: 5px;">
									<a type="" form="" id="asscDoc_downloadLink" class="pull-right  btn btn-warning" style="margin: 10px 15px 10px 10px">Download Impex Script</a>
									
									<!--<a type="" form="" id="asscDoc_emailLink" class="pull-right  btn btn-primary" style="margin: 10px 0px " disabled>E-Mail Impex Script</a>-->
								</span>

								<div class="clearfix"></div>
							</a>
							
							<div id="collapse1" class="panel-collapse collapse">
								<div class="panel-body" style="border: none; min-height: 100px;">
									<div class="outPutImpex col-xs-12" id="outPutImpex">
									
										<div>$productCatalog=Input Catalog</div>
										
										<div>		
											$catalogVersion=catalogVersion(CatalogVersion.catalog(Catalog.id[default=$productCatalog]),CatalogVersion.version[default=Staged])[default=$productCatalog:Staged]
										</div>

										<div style="list-style: none; margin-top: 10px;">
											INSERT_UPDATE Media;$catalogVersion[unique=true];code[unique=true];@media[translator=de.hybris.platform.impex.jalo.media.MediaDataTranslator];mime[default='application/pdf']
										</div>
										
										<ul style="list-style: none; margin-top: 10px;">
											<?php
												print "<li>";
												for($x = 0; $x <= count($name); $x++ ){
													if(isset($name[$x])){
														print ";i_media_".$resortCode[$x]."_".$date[$x]."_ASSOC_DOC".($x+1);
														print ";".$fileName[$x]."";
														print "</br>";
													};
												};
												print "</li>";
											?>
										</ul>


										<div style="list-style: none; margin-top: 10px;">
											INSERT_UPDATE MVWCAssociationDoc;syncItemKey(code)[unique=true];$catalogVersion;name;description;resort(code[unique=true],$catalogVersion);date;group;doc(code,$catalogVersion)
										</div>
										
										<ul style="list-style: none; margin-top: 10px;">
											<?php
												print "<li>";
												for($x = 0; $x <= count($name); $x++ ){
													if(isset($name[$x])){
														print ";resortAssocDoc".$resortCode[$x]."Board".($x+1);
														print ";;".$name[$x]."";
														print ";".$description[$x]."";
														print ";".$resortCode[$x]."";
														print ";;".$group[$x]."";
														print ";;i_media_".$resortCode[$x]."_".$date[$x]."_ASSOC_DOC".($x+1);
														print "</br>";
													};
												};
												print "</li>";
											?>
										</ul>
									</div><!-- close outPutImpex -->
								</div><!-- close panel-body -->
							</div><!-- close collapse1 -->
						</div><!-- close panel panel-defaul -->
					</div><!-- close panel-group -->
					<div class="clearfix"></div>
				</ul><!-- close associationDocTable -->
				<div class="clearfix"></div>
			</div><!-- close contentRequestOptions -->
		</section><!-- close content -->
      </div><!-- /.content-wrapper -->

	<?php require_once('../../footer.php'); ?>
	<script>
		$( window ).load(function() {
			function downloadInnerHtml(filename, elId, mimeType) {
				var elHtml = document.getElementById(elId).innerText;
				var link = document.createElement('a');
				mimeType = mimeType || 'text/plain';

				link.setAttribute('href', 'data:' + mimeType + ';charset=utf-8,' + encodeURIComponent(elHtml));
				link.click(); 
			};

			var fileName =  'tags.txt'; // You can use the .txt extension if you want
			//downloadInnerHtml(fileName, 'outPutImpex','text/txt');
			
			$('#asscDoc_downloadLink').click(function(){
				downloadInnerHtml(fileName, 'outPutImpex','text/plain');
			});
		});
	</script>
      