<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Marriott Vacation Club Web Dev | Dashboard</title>
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
  <body class="skin-blue sidebar-mini">
    <div class="wrapper">

		<?php require_once('/header.php'); ?>
		<?php require_once('/sidebar.php'); ?>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Hybris Marketing Sites Dashboard
            <small>Migration of the marketing web sites to the hybris CMS platform.</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
          </ol>
        </section>

				<section class="content body">
					<section id='introduction'>
					  <h2 class='page-header'><a href="#introduction">#Introduction</a></h2>
					  <p class='lead'>
					    The <b>MVCToolbox</b> will guide you through the documentation and associated tasks related to the hybris migration.
					  </p>
					</section><!-- /#introduction -->
        	
        	
          <!-- Small boxes (Stat box) -->
          <div class="row">
          	<div class="col-md-12 col-sm-12 col-xs-12" id="overview">

							<?php    

							$searchfor = $_GET['q'];
							
							echo "<p>Searching for keyword <b>$searchfor</b></p>";
							
							function getplaintext($html, $numchars) {
    						// Remove the HTML tags
    						$html = strip_tags($html);
    						// Convert HTML entities to single characters
    						$html = html_entity_decode($html, ENT_QUOTES, 'UTF-8');
    						// Make the string the desired number of characters
    						// Note that substr is not good as it counts by bytes and not characters
    						$html = mb_substr($html, 0, $numchars, 'UTF-8');
    						// Add an elipsis
    						//$html .= "...";
    						return $html;
							}
							
							function trim_all( $str , $what = NULL , $with = ' ' )
							{
								if( $what === NULL )
								{
									//	Character      Decimal      Use
									//	"\0"            0           Null Character
									//	"\t"            9           Tab
									//	"\n"           10           New line
									//	"\x0B"         11           Vertical Tab
									//	"\r"           13           New Line in Mac
									//	" "            32           Space
									
									$what	= "\\x00-\\x20";	//all white-spaces and control chars
								}
								
								return trim( preg_replace( "/[".$what."]+/" , $with , $str ) , $what );
							}
								// the following line prevents the browser from parsing this as HTML.
								header('Content-Type: text/plain');
								
							foreach (glob("pages/*") as $file) {
    								$matches = array();
    								
								// get the file contents, assuming the file to be readable (and exist)
								$contents = file_get_contents($file);
								$contents = preg_replace('/^\p{Z}+|\p{Z}+$/u', '', $contents);
								// finalise the regular expression, matching the whole line
								$pattern = "(.*$searchfor)";
								
								// search, and store all matching occurences in $matches
								if(preg_match_all(trim($pattern), $contents, $matches)){
    							echo '<a href="'.$file.'">'.$file.'</a><br />';
									foreach($matches[0] as $value) 
										{   
											//echo "Length: " . strlen($value) . "<br />";
											//echo "Trimmed Length: " . strlen(trim_all(trim($value))) . "<br />";
											$value = getplaintext(trim_all(trim($value)),250) . "<br />";
											//echo "Re-trimmed Length: " . strlen(trim($value)) . "<br />";
											if(!empty(trim_all($value))&&strlen(trim_all($value)) > 6){
        								echo '<i class="fa fa-chevron-right"></i> '.$value;
        							}
										} 
										
   								
   								echo "<br />";
   								unset($array);
								}
								else{
							   	//echo "No matches found<br />";
								}
						}

								?>

						</div>
          </div><!-- /.row (main row) -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->


	<?php require_once('/footer.php'); ?>
    
    <!-- Page specific script -->
