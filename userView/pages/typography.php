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
  <body class="skin-blue sidebar-mini fixed" data-spy="scroll" data-target="#scrollspy">
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


          <!-- START TYPOGRAPHY -->
          <h2 class="page-header">Typography</h2>
          

          <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
              <div class="box box-solid">
                <div class="box-header with-border">
                  <h3 class="box-title">Primary Palette</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
            			<div class="col-md-6 col-sm-6 col-xs-12">
            			  <div class="info-box" style="border: 1px solid #8b5f10;">
            			    <span class="info-box-icon" style="background-color:#8B5F10; color:#fff;"><i class="glyphicon glyphicon-font"></i></span>
            			    <div class="info-box-content">
            			      <h4>Brown</h4>
            			      <span class=""><b>RGB</b>: rgb(139,95,16)</span><br />
            			      <span class=""><b>HEX</b>: #8B5F10</span>
            			    </div><!-- /.info-box-content -->
            			  </div><!-- /.info-box -->
            			</div><!-- /.col -->
            			<div class="col-md-6 col-sm-6 col-xs-12">
            			  <div class="info-box" style="border: 1px solid #8B5F10;">
            			    <span class="info-box-icon" style="background: rgba(0,0,0,0.0); color:#000; border-bottom: 0px solid #8b5f10; border-right: 1px solid #8b5f10;"><i class="glyphicon glyphicon-font"></i></span>
            			    <div class="info-box-content">
            			      <h4>White</h4>
            			      <span class=""><b>RGB</b>: rgb(255,255,255)</span><br />
            			      <span class=""><b>HEX</b>: #FFFFFF</span>
            			    </div><!-- /.info-box-content -->
            			  </div><!-- /.info-box -->
            			</div><!-- /.col -->
            		</div>
            	</div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
              <div class="box box-solid">
                <div class="box-header with-border">
                  <h3 class="box-title">Neutral Palette</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
            			<div class="col-md-6 col-sm-6 col-xs-12">
            			  <div class="info-box" style="border: 1px solid #B29463;">
            			    <span class="info-box-icon" style="background-color:#B29463; color:#fff;"><i class="glyphicon glyphicon-font"></i></span>
            			    <div class="info-box-content">
            			      <h4>Gold</h4>
            			      <span class=""><b>RGB</b>: rgb(178,148,99)</span><br />
            			      <span class=""><b>HEX</b>: #B29463</span>
            			    </div><!-- /.info-box-content -->
            			  </div><!-- /.info-box -->
            			</div><!-- /.col -->
            			<div class="col-md-6 col-sm-6 col-xs-12">
            			  <div class="info-box" style="border: 1px solid #E1CEB4;">
            			    <span class="info-box-icon" style="background-color:#E1CEB4; color:#000; border-right: 1px solid #E1CEB4;"><i class="glyphicon glyphicon-font"></i></span>
            			    <div class="info-box-content">
            			      <h4>Beige</h4>
            			      <span class=""><b>RGB</b>: rgb(225,206,180)</span><br />
            			      <span class=""><b>HEX</b>: #E1CEB4</span>
            			    </div><!-- /.info-box-content -->
            			  </div><!-- /.info-box -->
            			</div><!-- /.col -->
            		</div>
            	</div>
            </div>
          </div><!-- /.row -->                    

          <!-- =========================================================== -->                    
          
          <div class="row">
            <div class="col-md-6">
              <div class="box box-solid">
                <div class="box-header with-border">
                  <i class="fa fa-text-width"></i>
                  <h3 class="box-title">Headlines</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <h1>h1. Bootstrap heading</h1>
                  <h2>h2. Bootstrap heading</h2>
                  <h3>h3. Bootstrap heading</h3>
                  <h4>h4. Bootstrap heading</h4>
                  <h5>h5. Bootstrap heading</h5>
                  <h6>h6. Bootstrap heading</h6>
                </div><!-- /.box-body -->
                <div class="box-footer">
                  <ul class="nav nav-pills nav-stacked">
                    <li>
                	<div class="zero-clipboard"><span class="btn-clipboard" data-clipboard-target="clipboard-headlines">Copy</span></div>
											<pre>
<code id="clipboard-headlines" class="language-markup"> 	
&lt;h1&gt;h1. Bootstrap heading&lt;/h1&gt;
&lt;h2&gt;h2. Bootstrap heading&lt;/h2&gt;
&lt;h3&gt;h3. Bootstrap heading&lt;/h3&gt;
&lt;h4&gt;h4. Bootstrap heading&lt;/h4&gt;
&lt;h5&gt;h5. Bootstrap heading&lt;/h5&gt;
&lt;h6&gt;h6. Bootstrap heading&lt;/h6&gt;
</code>
										</pre>
                   	</li>
                  </ul>
                </div><!-- /.footer -->
              </div><!-- /.box -->
            </div><!-- ./col -->
            <div class="col-md-6">
              <div class="box box-solid">
                <div class="box-header with-border">
                  <i class="fa fa-text-width"></i>
                  <h3 class="box-title">Text Emphasis</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <p class="lead">Lead to emphasize importance</p>
                  <p class="text-green">Text green to emphasize success</p>
                  <p class="text-aqua">Text aqua to emphasize info</p>
                  <p class="text-light-blue">Text light blue to emphasize info (2)</p>
                  <p class="text-red">Text red to emphasize error</p>
                  <p class="text-yellow">Text yellow to emphasize warning</p>
                  <p class="text-muted">Text muted to emphasize general</p>
                </div><!-- /.box-body -->
                <div class="box-footer">
                  <ul class="nav nav-pills nav-stacked">
                    <li>
                	<div class="zero-clipboard"><span class="btn-clipboard" data-clipboard-target="clipboard-emphasize">Copy</span></div>
											<pre>
<code id="clipboard-emphasize" class="language-markup"> 	
&lt;p class="lead"&gt;Lead to emphasize importance&lt;/p&gt;
&lt;p class="text-green"&gt;Text green to emphasize success&lt;/p&gt;
&lt;p class="text-aqua"&gt;Text aqua to emphasize info&lt;/p&gt;
&lt;p class="text-light-blue"&gt;Text light blue to emphasize info (2)&lt;/p&gt;
&lt;p class="text-red"&gt;Text red to emphasize danger&lt;/p&gt;
&lt;p class="text-yellow"&gt;Text yellow to emphasize warning&lt;/p&gt;
&lt;p class="text-muted"&gt;Text muted to emphasize general&lt;/p&gt;
</code>
										</pre>
                   	</li>
                  </ul>
                </div><!-- /.footer -->
              </div><!-- /.box -->
            </div><!-- ./col -->
          </div><!-- /.row -->

          <div class="row">
            <div class="col-md-6">
              <div class="box box-solid">
                <div class="box-header with-border">
                  <i class="fa fa-text-width"></i>
                  <h3 class="box-title">Block Quotes</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <blockquote>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                    <small>Someone famous in <cite title="Source Title">Source Title</cite></small>
                  </blockquote>
                </div><!-- /.box-body -->
                <div class="box-footer">
                  <ul class="nav nav-pills nav-stacked">
                    <li>
                	<div class="zero-clipboard"><span class="btn-clipboard" data-clipboard-target="clipboard-text2">Copy</span></div>
											<pre>
<code id="clipboard-text2" class="language-markup"> 	
&lt;blockquote&gt;
	&lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.&lt;/p&gt;
	&lt;small>Someone famous in &lt;cite title="Source Title"&gt;Source Title&lt;/cite&gt;&lt;/small&gt;
&lt;/blockquote&gt;
</code>
										</pre>
                   	</li>
                  </ul>
                </div><!-- /.footer -->
              </div><!-- /.box -->
            </div><!-- ./col -->
            <div class="col-md-6">
              <div class="box box-solid">
                <div class="box-header with-border">
                  <i class="fa fa-text-width"></i>
                  <h3 class="box-title">Block Quotes Pulled Right</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body clearfix">
                  <blockquote class="pull-right">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                    <small>Someone famous in <cite title="Source Title">Source Title</cite></small>
                  </blockquote>
                </div><!-- /.box-body -->
                <div class="box-footer">
                  <ul class="nav nav-pills nav-stacked">
                    <li>
                	<div class="zero-clipboard"><span class="btn-clipboard" data-clipboard-target="clipboard-blockquote">Copy</span></div>
											<pre>
<code id="clipboard-blockquote" class="language-markup"> 	
&lt;blockquote class="pull-right"&gt;
	&lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.&lt;/p&gt;
	&lt;small>Someone famous in &lt;cite title="Source Title"&gt;Source Title&lt;/cite&gt;&lt;/small&gt;
&lt;/blockquote&gt;
</code>
										</pre>
                   	</li>
                  </ul>
                </div><!-- /.footer -->
              </div><!-- /.box -->
            </div><!-- ./col -->
          </div><!-- /.row -->

          <div class="row">
            <div class="col-md-4">
              <div class="box box-solid">
                <div class="box-header with-border">
                  <i class="fa fa-text-width"></i>
                  <h3 class="box-title">Unordered List</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <ul>
                    <li>Lorem ipsum dolor sit amet</li>
                    <li>Consectetur adipiscing elit</li>
                    <li>Integer molestie lorem at massa</li>
                    <li>Facilisis in pretium nisl aliquet</li>
                    <li>Nulla volutpat aliquam velit
                      <ul>
                        <li>Phasellus iaculis neque</li>
                        <li>Purus sodales ultricies</li>
                        <li>Vestibulum laoreet porttitor</li>
                        <li>Ac tristique libero volutpat</li>
                      </ul>
                    </li>
                    <li>Faucibus porta lacus fringilla</li>
                    <li>Aenean sit amet erat nunc</li>
                    <li>Eget porttitor lorem</li>
                  </ul>
                </div><!-- /.box-body -->
                <div class="box-footer">
                  <ul class="nav nav-pills nav-stacked">
                    <li>
                	<div class="zero-clipboard"><span class="btn-clipboard" data-clipboard-target="clipboard-unorderedlists">Copy</span></div>
											<pre>
<code id="clipboard-unorderedlists" class="language-markup"> 	
&lt;ul&gt;
  &lt;li&gt;Lorem ipsum dolor sit amet&lt;/li&gt;
  &lt;li&gt;Consectetur adipiscing elit&lt;/li&gt;
  &lt;li&gt;Integer molestie lorem at massa&lt;/li&gt;
  &lt;li&gt;Facilisis in pretium nisl aliquet&lt;/li&gt;
  &lt;li&gt;Nulla volutpat aliquam velit
    &lt;ul&gt;
      &lt;li&gt;Phasellus iaculis neque&lt;/li&gt;
      &lt;li&gt;Purus sodales ultricies&lt;/li&gt;
      &lt;li&gt;Vestibulum laoreet porttitor&lt;/li&gt;
      &lt;li&gt;Ac tristique libero volutpat&lt;/li&gt;
    &lt;/ul&gt;
  &lt;/li&gt;
  &lt;li&gt;Faucibus porta lacus fringilla&lt;/li&gt;
  &lt;li&gt;Aenean sit amet erat nunc&lt;/li&gt;
  &lt;li&gt;Eget porttitor lorem&lt;/li&gt;
&lt;/ul&gt;
</code>
										</pre>
                   	</li>
                  </ul>
                </div><!-- /.footer -->
              </div><!-- /.box -->
            </div><!-- ./col -->
            <div class="col-md-4">
              <div class="box box-solid">
                <div class="box-header with-border">
                  <i class="fa fa-text-width"></i>
                  <h3 class="box-title">Ordered Lists</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <ol>
                    <li>Lorem ipsum dolor sit amet</li>
                    <li>Consectetur adipiscing elit</li>
                    <li>Integer molestie lorem at massa</li>
                    <li>Facilisis in pretium nisl aliquet</li>
                    <li>Nulla volutpat aliquam velit
                      <ol>
                        <li>Phasellus iaculis neque</li>
                        <li>Purus sodales ultricies</li>
                        <li>Vestibulum laoreet porttitor</li>
                        <li>Ac tristique libero volutpat</li>
                      </ol>
                    </li>
                    <li>Faucibus porta lacus fringilla</li>
                    <li>Aenean sit amet erat nunc</li>
                    <li>Eget porttitor lorem</li>
                  </ol>
                </div><!-- /.box-body -->
                <div class="box-footer">
                  <ul class="nav nav-pills nav-stacked">
                    <li>
                	<div class="zero-clipboard"><span class="btn-clipboard" data-clipboard-target="clipboard-orderedlists">Copy</span></div>
											<pre>
<code id="clipboard-orderedlists" class="language-markup"> 	
&lt;ol&gt;
  &lt;li&gt;Lorem ipsum dolor sit amet&lt;/li&gt;
  &lt;li&gt;Consectetur adipiscing elit&lt;/li&gt;
  &lt;li&gt;Integer molestie lorem at massa&lt;/li&gt;
  &lt;li&gt;Facilisis in pretium nisl aliquet&lt;/li&gt;
  &lt;li&gt;Nulla volutpat aliquam velit
    &lt;ol&gt;
      &lt;li&gt;Phasellus iaculis neque&lt;/li&gt;
      &lt;li&gt;Purus sodales ultricies&lt;/li&gt;
      &lt;li&gt;Vestibulum laoreet porttitor&lt;/li&gt;
      &lt;li&gt;Ac tristique libero volutpat&lt;/li&gt;
  &lt;/ol&gt;
  &lt;/li&gt;
  &lt;li&gt;Faucibus porta lacus fringilla&lt;/li&gt;
  &lt;li&gt;Aenean sit amet erat nunc&lt;/li&gt;
  &lt;li&gt;Eget porttitor lorem&lt;/li&gt;
&lt;/ol&gt;
</code>
										</pre>
                   	</li>
                  </ul>
                </div><!-- /.footer -->
              </div><!-- /.box -->
            </div><!-- ./col -->
            <div class="col-md-4">
              <div class="box box-solid">
                <div class="box-header with-border">
                  <i class="fa fa-text-width"></i>
                  <h3 class="box-title">Unstyled List</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <ul class="list-unstyled">
                    <li>Lorem ipsum dolor sit amet</li>
                    <li>Consectetur adipiscing elit</li>
                    <li>Integer molestie lorem at massa</li>
                    <li>Facilisis in pretium nisl aliquet</li>
                    <li>Nulla volutpat aliquam velit
                      <ul>
                        <li>Phasellus iaculis neque</li>
                        <li>Purus sodales ultricies</li>
                        <li>Vestibulum laoreet porttitor</li>
                        <li>Ac tristique libero volutpat</li>
                      </ul>
                    </li>
                    <li>Faucibus porta lacus fringilla</li>
                    <li>Aenean sit amet erat nunc</li>
                    <li>Eget porttitor lorem</li>
                  </ul>
                </div><!-- /.box-body -->
                <div class="box-footer">
                  <ul class="nav nav-pills nav-stacked">
                    <li>
                	<div class="zero-clipboard"><span class="btn-clipboard" data-clipboard-target="clipboard-unstyledlists">Copy</span></div>
											<pre>
<code id="clipboard-unstyledlists" class="language-markup"> 	
&lt;ul class="list-unstyled"&gt;
  &lt;li&gt;Lorem ipsum dolor sit amet&lt;/li&gt;
  &lt;li&gt;Consectetur adipiscing elit&lt;/li&gt;
  &lt;li&gt;Integer molestie lorem at massa&lt;/li&gt;
  &lt;li&gt;Facilisis in pretium nisl aliquet&lt;/li&gt;
  &lt;li&gt;Nulla volutpat aliquam velit
    &lt;ul&gt;
      &lt;li&gt;Phasellus iaculis neque&lt;/li&gt;
      &lt;li&gt;Purus sodales ultricies&lt;/li&gt;
      &lt;li&gt;Vestibulum laoreet porttitor&lt;/li&gt;
      &lt;li&gt;Ac tristique libero volutpat&lt;/li&gt;
    &lt;/ul&gt;
  &lt;/li&gt;
  &lt;li&gt;Faucibus porta lacus fringilla&lt;/li&gt;
  &lt;li&gt;Aenean sit amet erat nunc&lt;/li&gt;
  &lt;li&gt;Eget porttitor lorem&lt;/li&gt;
&lt;/ul&gt;
</code>
										</pre>
                   	</li>
                  </ul>
                </div><!-- /.footer -->
              </div><!-- /.box -->
            </div><!-- ./col -->
          </div><!-- /.row -->

          <div class="row">
            <div class="col-md-6">
              <div class="box box-solid">
                <div class="box-header with-border">
                  <i class="fa fa-text-width"></i>
                  <h3 class="box-title">Description</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <dl>
                    <dt>Description lists</dt>
                    <dd>A description list is perfect for defining terms.</dd>
                    <dt>Euismod</dt>
                    <dd>Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.</dd>
                    <dd>Donec id elit non mi porta gravida at eget metus.</dd>
                    <dt>Malesuada porta</dt>
                    <dd>Etiam porta sem malesuada magna mollis euismod.</dd>
                  </dl>
                </div><!-- /.box-body -->
                <div class="box-footer">
                  <ul class="nav nav-pills nav-stacked">
                    <li>
                	<div class="zero-clipboard"><span class="btn-clipboard" data-clipboard-target="clipboard-description">Copy</span></div>
											<pre>
<code id="clipboard-description" class="language-markup"> 	
&lt;dl&gt;
  &lt;dt&gt;Description lists&lt;/dt&gt;
  &lt;dd&gt;A description list is perfect for defining terms.&lt;/dd&gt;
  &lt;dt&gt;Euismod&lt;/dt&gt;
  &lt;dd&gt;Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.&lt;/dd&gt;
  &lt;dd&gt;Donec id elit non mi porta gravida at eget metus.&lt;/dd&gt;
  &lt;dt&gt;Malesuada porta&lt;/dt&gt;
  &lt;dd&gt;Etiam porta sem malesuada magna mollis euismod.&lt;/dd&gt;
&lt;/dl&gt;
</code>
										</pre>
                   	</li>
                  </ul>
                </div><!-- /.footer -->
              </div><!-- /.box -->
            </div><!-- ./col -->
            <div class="col-md-6">
              <div class="box box-solid">
                <div class="box-header with-border">
                  <i class="fa fa-text-width"></i>
                  <h3 class="box-title">Description Horizontal</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <dl class="dl-horizontal">
                    <dt>Description lists</dt>
                    <dd>A description list is perfect for defining terms.</dd>
                    <dt>Euismod</dt>
                    <dd>Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.</dd>
                    <dd>Donec id elit non mi porta gravida at eget metus.</dd>
                    <dt>Malesuada porta</dt>
                    <dd>Etiam porta sem malesuada magna mollis euismod.</dd>
                    <dt>Felis euismod semper eget lacinia</dt>
                    <dd>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</dd>
                  </dl>
                </div><!-- /.box-body -->
                <div class="box-footer">
                  <ul class="nav nav-pills nav-stacked">
                    <li>
                	<div class="zero-clipboard"><span class="btn-clipboard" data-clipboard-target="clipboard-descriptionhorizontal">Copy</span></div>
											<pre>
<code id="clipboard-descriptionhorizontal" class="language-markup"> 	
&lt;dl&gt;
  &lt;dt&gt;Description lists&lt;/dt&gt;
  &lt;dd&gt;A description list is perfect for defining terms.&lt;/dd&gt;
  &lt;dt&gt;Euismod&lt;/dt&gt;
  &lt;dd&gt;Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.&lt;/dd&gt;
  &lt;dd&gt;Donec id elit non mi porta gravida at eget metus.&lt;/dd&gt;
  &lt;dt&gt;Malesuada porta&lt;/dt&gt;
  &lt;dd&gt;Etiam porta sem malesuada magna mollis euismod.&lt;/dd&gt;
&lt;/dl&gt;
</code>
										</pre>
                   	</li>
                  </ul>
                </div><!-- /.footer -->
              </div><!-- /.box -->
            </div><!-- ./col -->
          </div><!-- /.row -->
          

          
          
          <!-- END TYPOGRAPHY -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      

    <!-- PrismJS.com -->
    <script src="/IDS-Toolbox/userView//dist/js/prism.js"></script>   
		<?php require_once('../footer.php'); ?>
		
    
    