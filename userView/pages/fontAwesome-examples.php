<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Marriott Vacation Club Web Dev | Components</title>
<meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
<!-- Bootstrap 3.3.2 -->
<link href="/IDS-Toolbox/userView/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<!-- FontAwesome 4.3.0 -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<!-- Ionicons 2.0.0 -->
<link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css"/>
<!-- Theme style -->
<link href="/IDS-Toolbox/userView/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css"/>
<!-- AdminLTE Skins. Choose a skin from the css/skins 
				 folder instead of downloading all of them to reduce the load. -->
<link href="/IDS-Toolbox/userView/dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css"/>
<!-- iCheck -->
<link href="/IDS-Toolbox/userView/plugins/iCheck/flat/blue.css" rel="stylesheet" type="text/css"/>
<!-- DATA TABLES -->
<link href="/IDS-Toolbox/userView/plugins/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css"/>
<!-- fullCalendar 2.2.5-->
<link href="/IDS-Toolbox/userView/plugins/fullcalendar/fullcalendar.min.css" rel="stylesheet" type="text/css"/>
<link href="/IDS-Toolbox/userView/plugins/fullcalendar/fullcalendar.print.css" rel="stylesheet" type="text/css" media='print'/>
<!-- PrismJS.com -->
<link href="/IDS-Toolbox/userView/dist/css/prism.css" rel="stylesheet"/>
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
<body class="sidebar-mini">
<div class="wrapper">
	<?php require_once('../header.php'); ?>
	<?php require_once('../sidebar.php'); ?>
	<!-- Content Wrapper. Contains page content -->
	<div class="content-wrapper">
		<!-- Content Header (Page header) -->
		<section class="content-header">
		<h1>
		FontAwesome Examples<small>reference material</small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
			<li class="active">FontAwesome Icons</li>
			<li><a href="#">FontAwesome</a></li>
		</ol>
		</section>
		<!-- Main content -->
		<section class="content">
		<!-- START CAROUSEL-->
		<h2 class="page-header">version: 4.5.0</h2>
		<div class="row">
			<div class="col-md-12">
				<div class="box box-solid">
					<div class="box-body">
						<div class="container">
							<section id="basic">
							<h2 class="page-header">
							Basic Icons
							<div class="pull-right text-default margin-top padding-top-sm hidden-xs">
								<a href="https://github.com/FortAwesome/Font-Awesome/blob/v4.5.0/less/core.less" class="text-muted padding-right">View LESS</a>
								<a href="https://github.com/FortAwesome/Font-Awesome/blob/v4.5.0/scss/_core.scss" class="text-muted">View SASS</a>
							</div>
							</h2>
							<div class="row">
								<div class="col-md-3 col-sm-4">
									<p>
										<i class="fa fa-camera-retro"></i> fa-camera-retro
									</p>
								</div>
								<div class="col-md-9 col-sm-8">
									<p>
										 You can place Font Awesome icons just about anywhere using the CSS Prefix <code>fa</code> and the icon's name. Font Awesome is designed to be used with inline elements (we like the <code>&lt;i&gt;</code> tag for brevity, but using a <code>&lt;span&gt;</code> is more semantically correct).
									</p>
									<div class="highlight">
									
										<style>
											.highlight pre code.html{
												float: left !important;
											}
											pre {
												display: block;
												padding: 9.5px;
												margin: 0 0 10px;
												font-size: 13px;
												line-height: 1.42857143;
												word-break: break-all;
												word-wrap: break-word;
												color: #333333;
												background-color: #f5f5f5;
												border: 1px solid #eeeeee;
												border-radius: 4px;
											}
											pre code {
												padding: 0;
												font-size: inherit;
												color: inherit;
												white-space: pre-wrap;
												background-color: transparent;
												border-radius: 0;
											}
											
											.nt {color: #2f6f9f;}
											.na {color: #4f9fcf;}
											.s {color: #d44950;}
											.ni {color: #999999;}
										</style>
										
										<pre>
											<code class="html"><span class="nt">&lt;i </span><span class="na">class=</span><span class="s">"fa fa-camera-retro"</span><span class="nt">&gt;&lt;/i&gt;</span> fa-camera-retro </code>
										</pre>
									</div>
									<div class="alert alert-success">
										<ul class="fa-ul">
											<li>
											<i class="fa fa-info-circle fa-lg fa-li"></i>
											If you change the font-size of the icon's container, the icon gets bigger. Same things goes for color, drop shadow, and anything else that gets inherited using CSS. </li>
										</ul>
									</div>
								</div>
							</div>
							</section>
							<section id="larger">
							<h2 class="page-header">
							Larger Icons
							<div class="pull-right text-default margin-top padding-top-sm hidden-xs">
								<a href="https://github.com/FortAwesome/Font-Awesome/blob/v4.5.0/less/larger.less" class="text-muted padding-right">View LESS</a>
								<a href="https://github.com/FortAwesome/Font-Awesome/blob/v4.5.0/scss/_larger.scss" class="text-muted">View SASS</a>
							</div>
							</h2>
							<div class="row">
								<div class="col-md-3 col-sm-4">
									<p>
										<i class="fa fa-camera-retro fa-lg"></i> fa-lg
									</p>
									<p>
										<i class="fa fa-camera-retro fa-2x"></i> fa-2x
									</p>
									<p>
										<i class="fa fa-camera-retro fa-3x"></i> fa-3x
									</p>
									<p>
										<i class="fa fa-camera-retro fa-4x"></i> fa-4x
									</p>
									<p>
										<i class="fa fa-camera-retro fa-5x"></i> fa-5x
									</p>
								</div>
								<div class="col-md-9 col-sm-8">
									<p>
										 To increase icon sizes relative to their container, use the <code>fa-lg</code> (33% increase), <code>fa-2x</code>, <code>fa-3x</code>, <code>fa-4x</code>, or <code>fa-5x</code> classes.
									</p>
									<div class="highlight">
										<pre>
											<code class="html"><span class="nt">&lt;i </span><span class="na">class=</span><span class="s">"fa fa-camera-retro fa-lg"</span><span class="nt">&gt;&lt;/i&gt;</span> fa-lg <span class="nt">&lt;i </span><span class="na">class=</span><span class="s">"fa fa-camera-retro fa-2x"</span><span class="nt">&gt;&lt;/i&gt;</span> fa-2x <span class="nt">&lt;i </span><span class="na">class=</span><span class="s">"fa fa-camera-retro fa-3x"</span><span class="nt">&gt;&lt;/i&gt;</span> fa-3x <span class="nt">&lt;i </span><span class="na">class=</span><span class="s">"fa fa-camera-retro fa-4x"</span><span class="nt">&gt;&lt;/i&gt;</span> fa-4x <span class="nt">&lt;i </span><span class="na">class=</span><span class="s">"fa fa-camera-retro fa-5x"</span><span class="nt">&gt;&lt;/i&gt;</span> fa-5x </code>
										</pre>
									</div>
									<div class="alert alert-success">
										<ul class="fa-ul">
											<li>
											<i class="fa fa-exclamation-triangle fa-li fa-lg"></i>
											If your icons are getting chopped off on top and bottom, make sure you have sufficient line-height. </li>
										</ul>
									</div>
								</div>
							</div>
							</section>
							<section id="fixed-width">
							<h2 class="page-header">
							Fixed Width Icons
							<div class="pull-right text-default margin-top padding-top-sm hidden-xs">
								<a href="https://github.com/FortAwesome/Font-Awesome/blob/v4.5.0/less/fixed-width.less" class="text-muted padding-right">View LESS</a>
								<a href="https://github.com/FortAwesome/Font-Awesome/blob/v4.5.0/scss/_fixed-width.scss" class="text-muted">View SASS</a>
							</div>
							</h2>
							<div class="row">
								<div class="col-md-3 col-sm-4">
									<div class="list-group">
										<a class="list-group-item" href="#"><i class="fa fa-home fa-fw"></i>&nbsp; Home</a>
										<a class="list-group-item" href="#"><i class="fa fa-book fa-fw"></i>&nbsp; Library</a>
										<a class="list-group-item" href="#"><i class="fa fa-pencil fa-fw"></i>&nbsp; Applications</a>
										<a class="list-group-item" href="#"><i class="fa fa-cog fa-fw"></i>&nbsp; Settings</a>
									</div>
								</div>
								<div class="col-md-9 col-sm-8">
									<p>
										 Use <code>fa-fw</code> to set icons at a fixed width. Great to use when different icon widths throw off alignment. Especially useful in things like nav lists &amp; list groups.
									</p>
									<div class="highlight">
										<pre>
											<code class="html"><span class="nt">&lt;div</span><span class="na">class=</span><span class="s">"list-group"</span><span class="nt">&gt;</span>
											<span class="nt">&lt;a </span><span class="na">class=</span><span class="s">"list-group-item"</span><span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;&lt;i </span><span class="na">class=</span><span class="s">"fa fa-home fa-fw"</span><span class="nt">&gt;&lt;/i&gt;</span><span class="ni">&amp;nbsp;</span> Home<span class="nt">&lt;/a&gt;</span>
											<span class="nt">&lt;a </span><span class="na">class=</span><span class="s">"list-group-item"</span><span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;&lt;i </span><span class="na">class=</span><span class="s">"fa fa-book fa-fw"</span><span class="nt">&gt;&lt;/i&gt;</span><span class="ni">&amp;nbsp;</span> Library<span class="nt">&lt;/a&gt;</span>
											<span class="nt">&lt;a </span><span class="na">class=</span><span class="s">"list-group-item"</span><span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;&lt;i </span><span class="na">class=</span><span class="s">"fa fa-pencil fa-fw"</span><span class="nt">&gt;&lt;/i&gt;</span><span class="ni">&amp;nbsp;</span> Applications<span class="nt">&lt;/a&gt;</span>
											<span class="nt">&lt;a </span><span class="na">class=</span><span class="s">"list-group-item"</span><span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;&lt;i </span><span class="na">class=</span><span class="s">"fa fa-cog fa-fw"</span><span class="nt">&gt;&lt;/i&gt;</span><span class="ni">&amp;nbsp;</span> Settings<span class="nt">&lt;/a&gt;</span>
											<span class="nt">&lt;/div&gt;</span>
											</code>
										</pre>
									</div>
								</div>
							</div>
							</section>
							<section id="list">
							<h2 class="page-header">
							List Icons
							<div class="pull-right text-default margin-top padding-top-sm hidden-xs">
								<a href="https://github.com/FortAwesome/Font-Awesome/blob/v4.5.0/less/list.less" class="text-muted padding-right">View LESS</a>
								<a href="https://github.com/FortAwesome/Font-Awesome/blob/v4.5.0/scss/_list.scss" class="text-muted">View SASS</a>
							</div>
							</h2>
							<div class="row">
								<div class="col-md-3 col-sm-4">
									<ul class="fa-ul">
										<li><i class="fa-li fa fa-check-square"></i>List icons</li>
										<li><i class="fa-li fa fa-check-square"></i>can be used</li>
										<li><i class="fa-li fa fa-spinner fa-spin"></i>as bullets</li>
										<li><i class="fa-li fa fa-square"></i>in lists</li>
									</ul>
								</div>
								<div class="col-md-9 col-sm-8">
									<p>
										Use <code>fa-ul</code> and <code>fa-li</code> to easily replace default bullets in unordered lists.
									</p>
									<div class="highlight">
										<pre>
											<code class="html"><span class="nt">&lt;ul</span><span class="na">class=</span><span class="s">"fa-ul"</span><span class="nt">&gt;</span>
											<span class="nt">&lt;li&gt;&lt;i </span><span class="na">class=</span><span class="s">"fa-li fa fa-check-square"</span><span class="nt">&gt;&lt;/i&gt;</span>List icons<span class="nt">&lt;/li&gt;</span>
											<span class="nt">&lt;li&gt;&lt;i </span><span class="na">class=</span><span class="s">"fa-li fa fa-check-square"</span><span class="nt">&gt;&lt;/i&gt;</span>can be used<span class="nt">&lt;/li&gt;</span>
											<span class="nt">&lt;li&gt;&lt;i </span><span class="na">class=</span><span class="s">"fa-li fa fa-spinner fa-spin"</span><span class="nt">&gt;&lt;/i&gt;</span>as bullets<span class="nt">&lt;/li&gt;</span>
											<span class="nt">&lt;li&gt;&lt;i </span><span class="na">class=</span><span class="s">"fa-li fa fa-square"</span><span class="nt">&gt;&lt;/i&gt;</span>in lists<span class="nt">&lt;/li&gt;</span>
											<span class="nt">&lt;/ul&gt;</span>
											</code>
										</pre>
									</div>
								</div>
							</div>
							</section>
							<section id="bordered-pulled">
							<h2 class="page-header">
							Bordered &amp; Pulled Icons
							<div class="pull-right text-default margin-top padding-top-sm hidden-xs">
								<a href="https://github.com/FortAwesome/Font-Awesome/blob/v4.5.0/less/bordered-pulled.less" class="text-muted padding-right">View LESS</a>
								<a href="https://github.com/FortAwesome/Font-Awesome/blob/v4.5.0/scss/_bordered-pulled.scss" class="text-muted">View SASS</a>
							</div>
							</h2>
							<div class="row">
								<div class="col-md-3 col-sm-4">
									<p>
										<i class="fa fa-quote-left fa-3x fa-pull-left fa-border"></i>
										…tomorrow we will run faster, stretch out our arms farther… And then one fine morning— So we beat on, boats against the current, borne back ceaselessly into the past.
									</p>
								</div>
								<div class="col-md-9 col-sm-8">
									<p>
										 Use <code>fa-border</code> and <code>fa-pull-right</code> or <code>fa-pull-left</code> for easy pull quotes or article icons.
									</p>
									<div class="highlight">
										<pre>
											<code class="html"><span class="nt">&lt;i </span><span class="na">class=</span><span class="s">"fa fa-quote-left fa-3x fa-pull-left fa-border"</span><span class="nt">&gt;&lt;/i&gt;</span>
											...tomorrow we will run faster, stretch out our arms farther... And then one fine morning— So we beat on, boats against the current, borne back ceaselessly into the past. </code>
										</pre>
									</div>
								</div>
							</div>
							</section>
							<section id="animated">
							<h2 class="page-header">
							Animated Icons
							<div class="pull-right text-default margin-top padding-top-sm hidden-xs">
								<a href="https://github.com/FortAwesome/Font-Awesome/blob/v4.5.0/less/animated.less" class="text-muted padding-right">View LESS</a>
								<a href="https://github.com/FortAwesome/Font-Awesome/blob/v4.5.0/scss/_animated.scss" class="text-muted">View SASS</a>
							</div>
							</h2>
							<div class="row">
								<div class="col-md-3 col-sm-4">
									<p>
										<i class="fa fa-spinner fa-spin fa-3x fa-fw margin-bottom"></i>
										<i class="fa fa-circle-o-notch fa-spin fa-3x fa-fw margin-bottom"></i>
										<i class="fa fa-refresh fa-spin fa-3x fa-fw margin-bottom"></i>
										<i class="fa fa-cog fa-spin fa-3x fa-fw margin-bottom"></i>
										<i class="fa fa-spinner fa-pulse fa-3x fa-fw margin-bottom"></i>
									</p>
								</div>
								<div class="col-md-9 col-sm-8">
									<p>
										 Use the <code>fa-spin</code> class to get any icon to rotate, and use <code>fa-pulse</code> to have it rotate with 8 steps. Works well with <code>fa-spinner</code>, <code>fa-refresh</code>, and <code>fa-cog</code>.
									</p>
									<div class="highlight">
										<pre>
											<code class="html"><span class="nt">&lt;i </span><span class="na">class=</span><span class="s">"fa fa-spinner fa-spin"</span><span class="nt">&gt;&lt;/i&gt;</span>
											<span class="nt">&lt;i </span><span class="na">class=</span><span class="s">"fa fa-circle-o-notch fa-spin"</span><span class="nt">&gt;&lt;/i&gt;</span>
											<span class="nt">&lt;i </span><span class="na">class=</span><span class="s">"fa fa-refresh fa-spin"</span><span class="nt">&gt;&lt;/i&gt;</span>
											<span class="nt">&lt;i </span><span class="na">class=</span><span class="s">"fa fa-cog fa-spin"</span><span class="nt">&gt;&lt;/i&gt;</span>
											<span class="nt">&lt;i </span><span class="na">class=</span><span class="s">"fa fa-spinner fa-pulse"</span><span class="nt">&gt;&lt;/i&gt;</span>
											</code>
										</pre>
									</div>
									<p class="alert alert-success">
										<i class="fa fa-exclamation-triangle fa-lg"></i> Some browsers on some platforms have issues with animated icons resulting in a jittery wobbling effect. See <a href="https://github.com/FortAwesome/Font-Awesome/issues/671" class="alert-link" target="_blank">issue #671</a> for examples and possible workarounds.
									</p>
									<p class="alert alert-success">
										<i class="fa fa-info-circle fa-lg"></i> CSS3 animations aren't supported in IE8 - IE9.
									</p>
								</div>
							</div>
							</section>
							<section id="rotated-flipped">
							<h2 class="page-header">
							Rotated &amp; Flipped
							<div class="pull-right text-default margin-top padding-top-sm hidden-xs">
								<a href="https://github.com/FortAwesome/Font-Awesome/blob/v4.5.0/less/rotated-flipped.less" class="text-muted padding-right">View LESS</a>
								<a href="https://github.com/FortAwesome/Font-Awesome/blob/v4.5.0/scss/_rotated-flipped.scss" class="text-muted">View SASS</a>
							</div>
							</h2>
							<div class="row">
								<div class="col-md-3 col-sm-4">
									<p style="font-size: 18px;">
										<i class="fa fa-shield"></i>&nbsp; normal<br>
										<i class="fa fa-shield fa-rotate-90"></i>&nbsp; fa-rotate-90<br>
										<i class="fa fa-shield fa-rotate-180"></i>&nbsp; fa-rotate-180<br>
										<i class="fa fa-shield fa-rotate-270"></i>&nbsp; fa-rotate-270<br>
										<i class="fa fa-shield fa-flip-horizontal"></i>&nbsp; fa-flip-horizontal<br>
										<i class="fa fa-shield fa-flip-vertical"></i>&nbsp; fa-flip-vertical
									</p>
								</div>
								<div class="col-md-9 col-sm-8">
									<p>
										 To arbitrarily rotate and flip icons, use the <code>fa-rotate-*</code> and <code>fa-flip-*</code> classes.
									</p>
									<div class="highlight">
										<pre>
											<code class="html"><span class="nt">&lt;i </span><span class="na">class=</span><span class="s">"fa fa-shield"</span><span class="nt">&gt;&lt;/i&gt;</span> normal<span class="nt">&lt;br&gt;</span>
											<span class="nt">&lt;i </span><span class="na">class=</span><span class="s">"fa fa-shield fa-rotate-90"</span><span class="nt">&gt;&lt;/i&gt;</span> fa-rotate-90<span class="nt">&lt;br&gt;</span>
											<span class="nt">&lt;i </span><span class="na">class=</span><span class="s">"fa fa-shield fa-rotate-180"</span><span class="nt">&gt;&lt;/i&gt;</span> fa-rotate-180<span class="nt">&lt;br&gt;</span>
											<span class="nt">&lt;i </span><span class="na">class=</span><span class="s">"fa fa-shield fa-rotate-270"</span><span class="nt">&gt;&lt;/i&gt;</span> fa-rotate-270<span class="nt">&lt;br&gt;</span>
											<span class="nt">&lt;i </span><span class="na">class=</span><span class="s">"fa fa-shield fa-flip-horizontal"</span><span class="nt">&gt;&lt;/i&gt;</span> fa-flip-horizontal<span class="nt">&lt;br&gt;</span>
											<span class="nt">&lt;i </span><span class="na">class=</span><span class="s">"fa fa-shield fa-flip-vertical"</span><span class="nt">&gt;&lt;/i&gt;</span> fa-flip-vertical </code>
										</pre>
									</div>
								</div>
							</div>
							</section>
							<section id="stacked">
							<h2 class="page-header">
							Stacked Icons
							<div class="pull-right text-default margin-top padding-top-sm hidden-xs">
								<a href="https://github.com/FortAwesome/Font-Awesome/blob/v4.5.0/less/stacked.less" class="text-muted padding-right">View LESS</a>
								<a href="https://github.com/FortAwesome/Font-Awesome/blob/v4.5.0/scss/_stacked.scss" class="text-muted">View SASS</a>
							</div>
							</h2>
							<div class="row">
								<div class="col-md-3 col-sm-4">
									<div class="margin-bottom">
										<span class="fa-stack fa-lg">
										<i class="fa fa-square-o fa-stack-2x"></i>
										<i class="fa fa-twitter fa-stack-1x"></i>
										</span>
										fa-twitter on fa-square-o<br>
										<span class="fa-stack fa-lg">
										<i class="fa fa-circle fa-stack-2x"></i>
										<i class="fa fa-flag fa-stack-1x fa-inverse"></i>
										</span>
										fa-flag on fa-circle<br>
										<span class="fa-stack fa-lg">
										<i class="fa fa-square fa-stack-2x"></i>
										<i class="fa fa-terminal fa-stack-1x fa-inverse"></i>
										</span>
										fa-terminal on fa-square<br>
										<span class="fa-stack fa-lg">
										<i class="fa fa-camera fa-stack-1x"></i>
										<i class="fa fa-ban fa-stack-2x text-danger"></i>
										</span>
										fa-ban on fa-camera
									</div>
								</div>
								<div class="col-md-9 col-sm-8">
									<p>
										 To stack multiple icons, use the <code>fa-stack</code> class on the parent, the <code>fa-stack-1x</code>
										for the regularly sized icon, and <code>fa-stack-2x</code> for the larger icon. <code>fa-inverse</code>
										can be used as an alternative icon color. You can even throw <a href="#larger">larger icon</a> classes on the parent to get further control of sizing.
									</p>
									<div class="highlight">
										<pre>
											<code class="html"><span class="nt">&lt;span</span><span class="na">class=</span><span class="s">"fa-stack fa-lg"</span><span class="nt">&gt;</span>
											<span class="nt">&lt;i </span><span class="na">class=</span><span class="s">"fa fa-square-o fa-stack-2x"</span><span class="nt">&gt;&lt;/i&gt;</span>
											<span class="nt">&lt;i </span><span class="na">class=</span><span class="s">"fa fa-twitter fa-stack-1x"</span><span class="nt">&gt;&lt;/i&gt;</span>
											<span class="nt">&lt;/span&gt;</span>
											fa-twitter on fa-square-o<span class="nt">&lt;br&gt;</span>
											<span class="nt">&lt;span</span><span class="na">class=</span><span class="s">"fa-stack fa-lg"</span><span class="nt">&gt;</span>
											<span class="nt">&lt;i </span><span class="na">class=</span><span class="s">"fa fa-circle fa-stack-2x"</span><span class="nt">&gt;&lt;/i&gt;</span>
											<span class="nt">&lt;i </span><span class="na">class=</span><span class="s">"fa fa-flag fa-stack-1x fa-inverse"</span><span class="nt">&gt;&lt;/i&gt;</span>
											<span class="nt">&lt;/span&gt;</span>
											fa-flag on fa-circle<span class="nt">&lt;br&gt;</span>
											<span class="nt">&lt;span</span><span class="na">class=</span><span class="s">"fa-stack fa-lg"</span><span class="nt">&gt;</span>
											<span class="nt">&lt;i </span><span class="na">class=</span><span class="s">"fa fa-square fa-stack-2x"</span><span class="nt">&gt;&lt;/i&gt;</span>
											<span class="nt">&lt;i </span><span class="na">class=</span><span class="s">"fa fa-terminal fa-stack-1x fa-inverse"</span><span class="nt">&gt;&lt;/i&gt;</span>
											<span class="nt">&lt;/span&gt;</span>
											fa-terminal on fa-square<span class="nt">&lt;br&gt;</span>
											<span class="nt">&lt;span</span><span class="na">class=</span><span class="s">"fa-stack fa-lg"</span><span class="nt">&gt;</span>
											<span class="nt">&lt;i </span><span class="na">class=</span><span class="s">"fa fa-camera fa-stack-1x"</span><span class="nt">&gt;&lt;/i&gt;</span>
											<span class="nt">&lt;i </span><span class="na">class=</span><span class="s">"fa fa-ban fa-stack-2x text-danger"</span><span class="nt">&gt;&lt;/i&gt;</span>
											<span class="nt">&lt;/span&gt;</span>
											fa-ban on fa-camera </code>
										</pre>
									</div>
								</div>
							</div>
							</section>
							<section id="bootstrap">
							<h2 class="page-header">Bootstrap 3 Examples</h2>
							<div class="row">
								<div class="col-md-3 col-sm-4">
									<p>
										<a class="btn btn-danger" href="#">
										<i class="fa fa-trash-o fa-lg"></i> Delete</a>
										<a class="btn btn-default btn-sm" href="#">
										<i class="fa fa-cog"></i> Settings</a>
									</p>
									<p>
										<a class="btn btn-lg btn-success" href="#">
										<i class="fa fa-flag fa-2x pull-left"></i> Font Awesome<br>
										Version 4.5.0</a>
									</p>
									<div class="margin-bottom">
										<div class="btn-group">
											<a class="btn btn-default" href="#"><i class="fa fa-align-left"></i></a>
											<a class="btn btn-default" href="#"><i class="fa fa-align-center"></i></a>
											<a class="btn btn-default" href="#"><i class="fa fa-align-right"></i></a>
											<a class="btn btn-default" href="#"><i class="fa fa-align-justify"></i></a>
										</div>
									</div>
									<div class="margin-bottom">
										<div class="input-group margin-bottom-sm">
											<span class="input-group-addon"><i class="fa fa-envelope-o fa-fw"></i></span>
											<input class="form-control" type="text" placeholder="Email address">
										</div>
										<div class="input-group">
											<span class="input-group-addon"><i class="fa fa-key fa-fw"></i></span>
											<input class="form-control" type="password" placeholder="Password">
										</div>
									</div>
									<div class="margin-bottom">
										<div class="btn-group open">
											<a class="btn btn-primary" href="#"><i class="fa fa-user fa-fw"></i> User</a>
											<a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#">
											<span class="fa fa-caret-down"></span></a>
											<ul class="dropdown-menu">
												<li><a href="#"><i class="fa fa-pencil fa-fw"></i> Edit</a></li>
												<li><a href="#"><i class="fa fa-trash-o fa-fw"></i> Delete</a></li>
												<li><a href="#"><i class="fa fa-ban fa-fw"></i> Ban</a></li>
												<li class="divider"></li>
												<li><a href="#"><i class="i"></i> Make admin</a></li>
											</ul>
										</div>
									</div>
								</div>
								<div class="col-md-9 col-sm-8">
									<p>
										 Font Awesome works great with the full range of Bootstrap components.
									</p>
									<div class="highlight">
										<pre>
											<code class="html"><span class="nt">&lt;a </span><span class="na">class=</span><span class="s">"btn btn-danger"</span><span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>
											<span class="nt">&lt;i </span><span class="na">class=</span><span class="s">"fa fa-trash-o fa-lg"</span><span class="nt">&gt;&lt;/i&gt;</span> Delete<span class="nt">&lt;/a&gt;</span>
											<span class="nt">&lt;a </span><span class="na">class=</span><span class="s">"btn btn-default btn-sm"</span><span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>
											<span class="nt">&lt;i </span><span class="na">class=</span><span class="s">"fa fa-cog"</span><span class="nt">&gt;&lt;/i&gt;</span> Settings<span class="nt">&lt;/a&gt;</span>
											<span class="nt">&lt;a </span><span class="na">class=</span><span class="s">"btn btn-lg btn-success"</span><span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>
											<span class="nt">&lt;i </span><span class="na">class=</span><span class="s">"fa fa-flag fa-2x pull-left"</span><span class="nt">&gt;&lt;/i&gt;</span> Font Awesome<span class="nt">&lt;br&gt;</span>Version 4.5.0<span class="nt">&lt;/a&gt;</span>
											<span class="nt">&lt;div</span><span class="na">class=</span><span class="s">"btn-group"</span><span class="nt">&gt;</span>
											<span class="nt">&lt;a </span><span class="na">class=</span><span class="s">"btn btn-default"</span><span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;&lt;i </span><span class="na">class=</span><span class="s">"fa fa-align-left"</span><span class="nt">&gt;&lt;/i&gt;&lt;/a&gt;</span>
											<span class="nt">&lt;a </span><span class="na">class=</span><span class="s">"btn btn-default"</span><span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;&lt;i </span><span class="na">class=</span><span class="s">"fa fa-align-center"</span><span class="nt">&gt;&lt;/i&gt;&lt;/a&gt;</span>
											<span class="nt">&lt;a </span><span class="na">class=</span><span class="s">"btn btn-default"</span><span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;&lt;i </span><span class="na">class=</span><span class="s">"fa fa-align-right"</span><span class="nt">&gt;&lt;/i&gt;&lt;/a&gt;</span>
											<span class="nt">&lt;a </span><span class="na">class=</span><span class="s">"btn btn-default"</span><span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;&lt;i </span><span class="na">class=</span><span class="s">"fa fa-align-justify"</span><span class="nt">&gt;&lt;/i&gt;&lt;/a&gt;</span>
											<span class="nt">&lt;/div&gt;</span>
											<span class="nt">&lt;div</span><span class="na">class=</span><span class="s">"input-group margin-bottom-sm"</span><span class="nt">&gt;</span>
											<span class="nt">&lt;span</span><span class="na">class=</span><span class="s">"input-group-addon"</span><span class="nt">&gt;&lt;i </span><span class="na">class=</span><span class="s">"fa fa-envelope-o fa-fw"</span><span class="nt">&gt;&lt;/i&gt;&lt;/span&gt;</span>
											<span class="nt">&lt;input</span><span class="na">class=</span><span class="s">"form-control"</span><span class="na">type=</span><span class="s">"text"</span><span class="na">placeholder=</span><span class="s">"Email address"</span><span class="nt">&gt;</span>
											<span class="nt">&lt;/div&gt;</span>
											<span class="nt">&lt;div</span><span class="na">class=</span><span class="s">"input-group"</span><span class="nt">&gt;</span>
											<span class="nt">&lt;span</span><span class="na">class=</span><span class="s">"input-group-addon"</span><span class="nt">&gt;&lt;i </span><span class="na">class=</span><span class="s">"fa fa-key fa-fw"</span><span class="nt">&gt;&lt;/i&gt;&lt;/span&gt;</span>
											<span class="nt">&lt;input</span><span class="na">class=</span><span class="s">"form-control"</span><span class="na">type=</span><span class="s">"password"</span><span class="na">placeholder=</span><span class="s">"Password"</span><span class="nt">&gt;</span>
											<span class="nt">&lt;/div&gt;</span>
											<span class="nt">&lt;div</span><span class="na">class=</span><span class="s">"btn-group open"</span><span class="nt">&gt;</span>
											<span class="nt">&lt;a </span><span class="na">class=</span><span class="s">"btn btn-primary"</span><span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;&lt;i </span><span class="na">class=</span><span class="s">"fa fa-user fa-fw"</span><span class="nt">&gt;&lt;/i&gt;</span> User<span class="nt">&lt;/a&gt;</span>
											<span class="nt">&lt;a </span><span class="na">class=</span><span class="s">"btn btn-primary dropdown-toggle"</span><span class="na">data-toggle=</span><span class="s">"dropdown"</span><span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>
											<span class="nt">&lt;span</span><span class="na">class=</span><span class="s">"fa fa-caret-down"</span><span class="nt">&gt;&lt;/span&gt;&lt;/a&gt;</span>
											<span class="nt">&lt;ul</span><span class="na">class=</span><span class="s">"dropdown-menu"</span><span class="nt">&gt;</span>
											<span class="nt">&lt;li&gt;&lt;a </span><span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;&lt;i </span><span class="na">class=</span><span class="s">"fa fa-pencil fa-fw"</span><span class="nt">&gt;&lt;/i&gt;</span> Edit<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
											<span class="nt">&lt;li&gt;&lt;a </span><span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;&lt;i </span><span class="na">class=</span><span class="s">"fa fa-trash-o fa-fw"</span><span class="nt">&gt;&lt;/i&gt;</span> Delete<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
											<span class="nt">&lt;li&gt;&lt;a </span><span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;&lt;i </span><span class="na">class=</span><span class="s">"fa fa-ban fa-fw"</span><span class="nt">&gt;&lt;/i&gt;</span> Ban<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
											<span class="nt">&lt;li</span><span class="na">class=</span><span class="s">"divider"</span><span class="nt">&gt;&lt;/li&gt;</span>
											<span class="nt">&lt;li&gt;&lt;a </span><span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;&lt;i </span><span class="na">class=</span><span class="s">"i"</span><span class="nt">&gt;&lt;/i&gt;</span> Make admin<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
											<span class="nt">&lt;/ul&gt;</span>
											<span class="nt">&lt;/div&gt;</span>
											</code>
										</pre>
									</div>
								</div>
							</div>
							</section>
						</div>
					</div>
					<!-- /.box-body -->
				</div>
				<!-- /.box -->
			</div>
			<!-- /.col -->
		</div>
		<!-- /.row -->
		<!-- END CAROUSEL-->
		</section>
		<!-- /.content -->
	</div>
	<!-- /.content-wrapper -->
</div>
<!-- close wrapper-->
<!-- PrismJS.com -->
<script src="/dist/js/prism.js"></script>
<?php require_once('../footer.php'); ?>