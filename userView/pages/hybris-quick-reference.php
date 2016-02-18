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
    
    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <script>
    	

			jQuery('#toggleDemo').click(function () {

    	// Whatever other code here too

    	//Remove all rotate180
    	jQuery('.rotate180').removeClass('rotate180');
    	//Now just add it for 'this'
    	jQuery(this).children('.fa-angle-down').addClass('rotate180');
});
    </script>
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
  <body class="sidebar-mini">
    <div class="wrapper">

		<?php require_once('../header.php'); ?>
		<?php require_once('../sidebar.php'); ?>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            hybris
            <small>reference material</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Reference Material</li>
            <li><a href="#">hybris</a></li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">

              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Document Library</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Topic</th>
                        <th>Brief Description</th>
                        <th>Platform(s)</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Catalog</td>
                        <td>In the hybris Commerce Suite, a catalog is a data structure for holding, structuring, and managing products. It consists of catalog versions. Multiple catalogs can be organized in a catalog system</td>
                        <td>hybris 5+</td>
                      </tr>
                      <tr>
                        <td>Cockpit</td>
                        <td>A web front end of the hybris Commerce Suite enabling end users to perform a set of particular tasks. Example: The hybris Product Cockpit can be used for maintenance of catalogs, products, and categories.</td>
                        <td>hybris 5+</td>
                      </tr>
                      <tr>
                        <td>Content Block</td>
                        <td>A reusable piece of content that is maintained independently of product data. Different types include:
                        	<ul class="fa-ul">
														<li><i class="fa-li fa fa-caret-right text-blue"></i>A text block stores a defined formatted text.</li>
														<li><i class="fa-li fa fa-caret-right text-blue"></i>An image block stores a defined picture with caption.</li>
														<li><i class="fa-li fa fa-caret-right text-blue"></i>A table block stores a table with defined content.</li>
														<li><i class="fa-li fa fa-caret-right text-blue"></i>A TOC block used for printed publications calls an existing InDesign TOC style used by InDesign for automated creation of table of contents.</li>
                        	</ul>
                        <td>hybris 5+</td>
                      </tr>
                      <tr>
                        <td>Content Slot</td>
                        <td>A Content Slot is a section of the page that will support one or more Content Blocks.  Content Blocks can be rearranged within a Content Slot by dragging and dropping.
                        	<ul class="fa-ul">
														<li><i class="fa-li fa fa-caret-right text-blue"></i>A text block stores a defined formatted text.</li>
														<li><i class="fa-li fa fa-caret-right text-blue"></i>An image block stores a defined picture with caption.</li>
														<li><i class="fa-li fa fa-caret-right text-blue"></i>A table block stores a table with defined content.</li>
														<li><i class="fa-li fa fa-caret-right text-blue"></i>A TOC block used for printed publications calls an existing InDesign TOC style used by InDesign for automated creation of table of contents.</li>
                        	</ul>
                        <td>hybris 5+</td>
                      </tr>
                      <tr>
                        <td>Synchronizing, Synchronization</td>
                        <td>A synchronizing operation (called Publishing in hybris versions before 3.1-u5) copies specified content from a source catalog version to a target catalog version, for example from a staged to an online catalog version. That means the items referenced by the target catalog versions are overwritten to match the items referenced by the source catalog version.</td>
                        <td>hybris 5+</td>
                      </tr>
                      <tr>
                        <td>Add Content Block</td>
                        <td>A synchronizing operation (called Publishing in hybris versions before 3.1-u5) copies specified content from a source catalog version to a target catalog version, for example from a staged to an online catalog version. That means the items referenced by the target catalog versions are overwritten to match the items referenced by the source catalog version.</td>
                        <td>hybris 5+</td>
                      </tr>
                      <tr>
                        <td>Initial Setup</td>
                        <td>
                        	<ul class="fa-ul">
                        		<li><i class="fa-li fa fa-caret-right text-red fa-2x"></i>Set ANT Environment
                        			<p>
                        				In a Command Window, navigate to the directory "hybris/bin/platform".  Execute the batch file "setantenv".
                        				<img src="images/hybris/quickref/hybris-setup-step01.png" class="img-responsive">
                        			</p>
                        		</li>
                        	</ul></td>
                        <td>hybris 5+</td>
                      </tr>
                      <tr>
                        <td>Multichannel Cockpit</td>
                        <td>MCC is a cockpit that provides a high level overview of the hybris extensions.
                        <p><a href="<?php echo $hybris ?>/mcc/index.zul" target="_blank">hybris Multichannel Cockpit</a></p>
                        	<img src="images/hybris/quickref/hybris-mcc.png" class="img-responsive" alt="hybris MCC">
                        </td>
                        <td>hybris 5+</td>
                      </tr>
                    </tbody>
                    <tfoot>
                      <tr>
                        <th>Topic</th>
                        <th>Brief Description</th>
                        <th>Platform(s)</th>
                      </tr>
                    </tfoot>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      

		<?php require_once('../footer.php'); ?>
		

    <!-- page script -->
    <script type="text/javascript">
      $(function () {
        $("#example1").dataTable();
        $('#example2').dataTable({
          "bPaginate": true,
          "bLengthChange": false,
          "bFilter": false,
          "bSort": true,
          "bInfo": true,
          "bAutoWidth": false
        });
      });
    </script>		