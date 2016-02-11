<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Marriott Vacation Club Web Dev | Components</title>
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
    
    <!-- DATA TABLES -->
    <link href="/plugins/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />

    <!-- fullCalendar 2.2.5-->
    <link href="/plugins/fullcalendar/fullcalendar.min.css" rel="stylesheet" type="text/css" />
    <link href="/plugins/fullcalendar/fullcalendar.print.css" rel="stylesheet" type="text/css" media='print' />
    
    <!-- PrismJS.com -->
    <link href="/dist/css/prism.css" rel="stylesheet" /> 
    
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
            <small>HTML5</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Coding Standards</li>
            <li><a href="#">HTML5</a></li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8">

              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title">HTML Tag Library</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body">
                	<p style="background-position:left;padding-left:20px;height:18px;" class="html5badge">= New in HTML5.</p>
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>HTML5 Tag&nbsp;&nbsp; </th>
                        <th>Description</th>
                      </tr>
                    </thead>
                    <tbody>
											<tr>
											  <td><a href="http://www.w3schools.com/tags/tag_comment.asp" target="_w3schools">&lt;!--...--&gt;</a></td>
											  <td>Defines a comment</td>
											</tr>
											<tr>
											  <td><a href="http://www.w3schools.com/tags/tag_doctype.asp" target="_w3schools">&lt;!DOCTYPE&gt;</a>&nbsp;</td>
											  <td>Defines the document type</td>
											</tr>
											<tr>
											  <td><a href="http://www.w3schools.com/tags/tag_a.asp" target="_w3schools">&lt;a&gt;</a></td>
											  <td>Defines a hyperlink</td>
											</tr>
											<tr>
											  <td><a href="http://www.w3schools.com/tags/tag_abbr.asp" target="_w3schools">&lt;abbr&gt;</a></td>
											  <td>Defines an abbreviation or an acronym</td>
											</tr>
											<tr>
											  <td><a class="notsupported" href="http://www.w3schools.com/tags/tag_acronym.asp" target="_w3schools">&lt;acronym&gt;</a></td>
											  <td><span class="deprecated">Not supported in HTML5. Use &lt;abbr&gt; instead.<br></span>Defines an acronym</td>
											</tr>
											<tr>
											  <td><a href="http://www.w3schools.com/tags/tag_address.asp" target="_w3schools">&lt;address&gt;</a></td>
											  <td>Defines contact information for the author/owner of a document</td>
											</tr>
											<tr>
											  <td><a class="notsupported" href="http://www.w3schools.com/tags/tag_applet.asp" target="_w3schools">&lt;applet&gt;</a></td>
											  <td><span class="deprecated">Not supported in HTML5. Use &lt;embed&gt; or &lt;object&gt; instead.<br></span>Defines an embedded applet</td>
											</tr>
											<tr>
											  <td><a href="http://www.w3schools.com/tags/tag_area.asp" target="_w3schools">&lt;area&gt;</a></td>
											  <td>Defines an area inside an image-map</td>
											</tr>
											<tr>
											  <td class="html5badge"><a href="http://www.w3schools.com/tags/tag_article.asp" target="_w3schools">&lt;article&gt;</a></td>
											  <td>Defines an article</td>
											</tr>
											<tr>
											  <td class="html5badge"><a href="http://www.w3schools.com/tags/tag_aside.asp" target="_w3schools">&lt;aside&gt;</a></td>
											  <td>Defines content aside from the page content</td>
											</tr>
											<tr>
											  <td class="html5badge"><a href="http://www.w3schools.com/tags/tag_audio.asp" target="_w3schools">&lt;audio&gt;</a></td>
											  <td>Defines sound content</td>
											</tr>
											<tr>
											  <td><a href="http://www.w3schools.com/tags/tag_b.asp" target="_w3schools">&lt;b&gt;</a></td>
											  <td>Defines bold text</td>
											</tr>
											<tr>
											  <td><a href="http://www.w3schools.com/tags/tag_base.asp" target="_w3schools">&lt;base&gt;</a></td>
											  <td>Specifies the base URL/target for all relative URLs in a document</td>
											</tr>
											<tr>
											  <td><a class="notsupported" href="http://www.w3schools.com/tags/tag_basefont.asp" target="_w3schools">&lt;basefont&gt;</a></td>
											  <td><span class="deprecated">Not supported in HTML5. Use CSS instead.<br></span>Specifies a default color, size, and font for all text in a document</td>
											</tr>
											<tr>
											  <td class="html5badge"><a href="http://www.w3schools.com/tags/tag_bdi.asp" target="_w3schools">&lt;bdi&gt;</a></td>
											  <td>Isolates a part of text that might be formatted in a different direction 
											from other text outside it</td>
											</tr>
											<tr>
											  <td><a href="http://www.w3schools.com/tags/tag_bdo.asp" target="_w3schools">&lt;bdo&gt;</a></td>
											  <td>Overrides the current text direction</td>
											</tr>
											<tr>
											  <td><a class="notsupported" href="http://www.w3schools.com/tags/tag_big.asp" target="_w3schools">&lt;big&gt;</a></td>
											  <td><span class="deprecated">Not supported in HTML5. Use CSS instead.<br></span>Defines big text</td>
											</tr>
											<tr>
											  <td><a href="http://www.w3schools.com/tags/tag_blockquote.asp" target="_w3schools">&lt;blockquote&gt;</a></td>
											  <td>Defines a section that is quoted from another source</td>
											</tr>
											<tr>
											  <td><a href="http://www.w3schools.com/tags/tag_body.asp" target="_w3schools">&lt;body&gt;</a></td>
											  <td>Defines the document's body</td>
											</tr>
											<tr>
											  <td><a href="http://www.w3schools.com/tags/tag_br.asp" target="_w3schools">&lt;br&gt;</a></td>
											  <td>Defines a single line break</td>
											</tr>
											<tr>
											  <td><a href="http://www.w3schools.com/tags/tag_button.asp" target="_w3schools">&lt;button&gt;</a></td>
											  <td>Defines a clickable button</td>
											</tr>
											<tr>
											  <td class="html5badge"><a href="http://www.w3schools.com/tags/tag_canvas.asp" target="_w3schools">&lt;canvas&gt;</a></td>
											  <td>Used to draw graphics, on the fly, via scripting (usually JavaScript)</td>
											</tr>
											<tr>
											  <td><a href="http://www.w3schools.com/tags/tag_caption.asp" target="_w3schools">&lt;caption&gt;</a></td>
											  <td>Defines a table caption</td>
											</tr>
											<tr>
											  <td><a class="notsupported" href="http://www.w3schools.com/tags/tag_center.asp" target="_w3schools">&lt;center&gt;</a></td>
											  <td><span class="deprecated">Not supported in HTML5. Use CSS instead.<br></span>Defines centered text</td>
											</tr>
											<tr>
											  <td><a href="http://www.w3schools.com/tags/tag_cite.asp" target="_w3schools">&lt;cite&gt;</a></td>
											  <td>Defines the title of a work</td>
											</tr>
											<tr>
											  <td><a href="http://www.w3schools.com/tags/tag_code.asp" target="_w3schools">&lt;code&gt;</a></td>
											  <td>Defines a piece of computer code</td>
											</tr>
											<tr>
											  <td><a href="http://www.w3schools.com/tags/tag_col.asp" target="_w3schools">&lt;col&gt;</a></td>
											  <td>Specifies column properties for each column within a &lt;colgroup&gt; element&nbsp;</td>
											</tr>
											<tr>
											  <td><a href="http://www.w3schools.com/tags/tag_colgroup.asp" target="_w3schools">&lt;colgroup&gt;</a></td>
											  <td>Specifies a group of one or more columns in a table for formatting</td>
											</tr>
											<tr>
											  <td class="html5badge"><a href="http://www.w3schools.com/tags/tag_datalist.asp" target="_w3schools">&lt;datalist&gt;</a></td>
											  <td>Specifies a list of pre-defined options for input controls</td>
											</tr>
											<tr>
											  <td><a href="http://www.w3schools.com/tags/tag_dd.asp" target="_w3schools">&lt;dd&gt;</a></td>
											  <td>Defines a description/value of a term in a description list</td>
											</tr>
											<tr>
											  <td><a href="http://www.w3schools.com/tags/tag_del.asp" target="_w3schools">&lt;del&gt;</a></td>
											  <td>Defines text that has been deleted from a document</td>
											</tr>
											<tr>
											  <td class="html5badge"><a href="http://www.w3schools.com/tags/tag_details.asp" target="_w3schools">&lt;details&gt;</a></td>
											  <td>Defines additional details that the user can view or hide</td>
											</tr>
											<tr>
											  <td><a href="http://www.w3schools.com/tags/tag_dfn.asp" target="_w3schools">&lt;dfn&gt;</a></td>
											  <td>Represents the defining instance of a term</td>
											</tr>
											<tr>
											  <td class="html5badge"><a href="http://www.w3schools.com/tags/tag_dialog.asp" target="_w3schools">&lt;dialog&gt;</a></td>
											  <td>Defines a dialog box or window</td>
											</tr>
											<tr>
											  <td><a class="notsupported" href="http://www.w3schools.com/tags/tag_dir.asp" target="_w3schools">&lt;dir&gt;</a></td>
											  <td><span class="deprecated">Not supported in HTML5. Use &lt;ul&gt; instead.<br></span>Defines a directory list</td>
											</tr>
											<tr>
											  <td><a href="http://www.w3schools.com/tags/tag_div.asp" target="_w3schools">&lt;div&gt;</a></td>
											  <td>Defines a section in a document</td>
											</tr>
											<tr>
											  <td><a href="http://www.w3schools.com/tags/tag_dl.asp" target="_w3schools">&lt;dl&gt;</a></td>
											  <td>Defines a description list</td>
											</tr>
											<tr>
											  <td><a href="http://www.w3schools.com/tags/tag_dt.asp" target="_w3schools">&lt;dt&gt;</a></td>
											  <td>Defines a term/name in a description list</td>
											</tr>
											<tr>
											  <td><a href="http://www.w3schools.com/tags/tag_em.asp" target="_w3schools">&lt;em&gt;</a></td>
											  <td>Defines emphasized text&nbsp;</td>
											</tr>
											<tr>
											  <td class="html5badge"><a href="http://www.w3schools.com/tags/tag_embed.asp" target="_w3schools">&lt;embed&gt;</a></td>
											  <td>Defines a container for an external (non-HTML) application</td>
											</tr>
											<tr>
											  <td><a href="http://www.w3schools.com/tags/tag_fieldset.asp" target="_w3schools">&lt;fieldset&gt;</a></td>
											  <td>Groups related elements in a form</td>
											</tr>
											<tr>
											  <td class="html5badge"><a href="http://www.w3schools.com/tags/tag_figcaption.asp" target="_w3schools">&lt;figcaption&gt;</a></td>
											  <td>Defines a caption for a &lt;figure&gt; element</td>
											</tr>
											<tr>
											  <td class="html5badge"><a href="http://www.w3schools.com/tags/tag_figure.asp" target="_w3schools">&lt;figure&gt;</a></td>
											  <td>Specifies self-contained content</td>
											</tr>
											<tr>
											  <td><a class="notsupported" href="http://www.w3schools.com/tags/tag_font.asp" target="_w3schools">&lt;font&gt;</a></td>
											  <td><span class="deprecated">Not supported in HTML5. Use CSS instead.<br></span>Defines font, color, and size for text</td>
											</tr>
											<tr>
											  <td class="html5badge"><a href="http://www.w3schools.com/tags/tag_footer.asp" target="_w3schools">&lt;footer&gt;</a></td>
											  <td>Defines a footer for a document or section</td>
											</tr>
											<tr>
											  <td><a href="http://www.w3schools.com/tags/tag_form.asp" target="_w3schools">&lt;form&gt;</a></td>
											  <td>Defines an HTML form for user input</td>
											</tr>
											<tr>
											  <td><a class="notsupported" href="http://www.w3schools.com/tags/tag_frame.asp" target="_w3schools">&lt;frame&gt;</a></td>
											  <td><span class="deprecated">Not supported in HTML5.<br></span>Defines a window (a frame) in a frameset</td>
											</tr>
											<tr>
											  <td><a class="notsupported" href="http://www.w3schools.com/tags/tag_frameset.asp" target="_w3schools">&lt;frameset&gt;</a></td>
											  <td><span class="deprecated">Not supported in HTML5.<br></span>Defines a set of frames</td>
											</tr>
											<tr>
											  <td><a href="http://www.w3schools.com/tags/tag_hn.asp" target="_w3schools">&lt;h1&gt; to &lt;h6&gt;</a></td>
											  <td> Defines HTML headings</td>
											</tr>
											<tr>
											  <td><a href="http://www.w3schools.com/tags/tag_head.asp" target="_w3schools">&lt;head&gt;</a></td>
											  <td>Defines information about the document</td>
											</tr>
											<tr>
											  <td class="html5badge"><a href="http://www.w3schools.com/tags/tag_header.asp" target="_w3schools">&lt;header&gt;</a></td>
											  <td>Defines a header for a document or section</td>
											</tr>
											<tr>
											  <td><a href="http://www.w3schools.com/tags/tag_hr.asp" target="_w3schools">&lt;hr&gt;</a></td>
											  <td> Defines a thematic change in the content</td>
											</tr>
											<tr>
											  <td><a href="http://www.w3schools.com/tags/tag_html.asp" target="_w3schools">&lt;html&gt;</a></td>
											  <td>Defines the root of an HTML document</td>
											</tr>
											<tr>
											  <td><a href="http://www.w3schools.com/tags/tag_i.asp" target="_w3schools">&lt;i&gt;</a></td>
											  <td>Defines a part of text in an alternate voice or mood</td>
											</tr>
											<tr>
											  <td><a href="http://www.w3schools.com/tags/tag_iframe.asp" target="_w3schools">&lt;iframe&gt;</a></td>
											  <td>Defines an inline frame
											  	
											  </td>
											</tr>
											<tr>
											  <td><a href="http://www.w3schools.com/tags/tag_img.asp" target="_w3schools">&lt;img&gt;</a></td>
											  <td>Defines an image
														
													<h4>Responsive images</h4>
													<p>Images in Bootstrap 3 can be made responsive-friendly via the addition of the .img-responsive class. This applies max-width: 100%;, height: auto; and display: block; to the image so that it scales nicely to the parent element.</p>
															
											  	<div class="zero-clipboard"><span class="btn-clipboard" data-clipboard-target="clipboard-img">Copy</span></div>
											  	<pre><code id="clipboard-img" class="language-markup"> 	
&lt;img src="..." class="img-responsive" alt="Name of Image"&gt;
													</code></pre>
													
													<p>To center images which use the .img-responsive class, use .center-block.</p>
													<h4>Image shapes</h4>
													<p>
													Add classes to an <img> element to easily style images in any project
													</p>
											  	<div class="zero-clipboard"><span class="btn-clipboard" data-clipboard-target="clipboard-img2">Copy</span></div>
													<pre><code id="clipboard-img2" class="language-markup">
&lt;img src="..." alt="..." class="img-rounded"&gt;
&lt;img src="..." alt="..." class="img-circle"&gt;
&lt;img src="..." alt="..." class="img-thumbnail"&gt;
													</code></pre>
													<div class="callout callout-danger">
    												<h4 id="cross-browser-compatibility">Cross-browser compatibility</h4>
    												<p>Keep in mind that Internet Explorer 8 lacks support for rounded corners.</p>
  												</div>
											  </td>
											</tr>
											<tr>
											  <td><a href="http://www.w3schools.com/tags/tag_input.asp" target="_w3schools">&lt;input&gt;</a></td>
											  <td>Defines an input control</td>
											</tr>
											<tr>
											  <td><a href="http://www.w3schools.com/tags/tag_ins.asp" target="_w3schools">&lt;ins&gt;</a></td>
											  <td>Defines a text that has been inserted into a document</td>
											</tr>
											<tr>
											  <td><a href="http://www.w3schools.com/tags/tag_kbd.asp" target="_w3schools">&lt;kbd&gt;</a></td>
											  <td>Defines keyboard input</td>
											</tr>
											<tr>
											  <td class="html5badge"><a href="http://www.w3schools.com/tags/tag_keygen.asp" target="_w3schools">&lt;keygen&gt;</a></td>
											  <td>Defines a key-pair generator field (for forms)</td>
											</tr>
											<tr>
											  <td><a href="http://www.w3schools.com/tags/tag_label.asp" target="_w3schools">&lt;label&gt;</a></td>
											  <td>Defines a label&nbsp;for an &lt;input&gt; element</td>
											</tr>
											<tr>
											  <td><a href="http://www.w3schools.com/tags/tag_legend.asp" target="_w3schools">&lt;legend&gt;</a></td>
											  <td>Defines a caption for a &lt;fieldset&gt; element</td>
											</tr>
											<tr>
											  <td><a href="http://www.w3schools.com/tags/tag_li.asp" target="_w3schools">&lt;li&gt;</a></td>
											  <td>Defines a list item</td>
											</tr>
											<tr>
											  <td><a href="http://www.w3schools.com/tags/tag_link.asp" target="_w3schools">&lt;link&gt;</a></td>
											  <td>Defines the relationship between a document and an external resource (most 
											used to link to style sheets)</td>
											</tr>
											<tr>
											  <td class="html5badge"><a href="http://www.w3schools.com/tags/tag_main.asp" target="_w3schools">&lt;main&gt;</a></td>
											  <td>Specifies the main content of a document</td>
											</tr>
											<tr>
											  <td><a href="http://www.w3schools.com/tags/tag_map.asp" target="_w3schools">&lt;map&gt;</a></td>
											  <td>Defines a client-side image-map</td>
											</tr>
											<tr>
											  <td class="html5badge"><a href="http://www.w3schools.com/tags/tag_mark.asp" target="_w3schools">&lt;mark&gt;</a></td>
											  <td>Defines marked/highlighted text</td>
											</tr>
											<tr>
											  <td><a href="http://www.w3schools.com/tags/tag_menu.asp" target="_w3schools">&lt;menu&gt;</a></td>
											  <td>Defines a list/menu of commands</td>
											</tr>
											<tr>
											  <td class="html5badge"><a href="http://www.w3schools.com/tags/tag_menuitem.asp" target="_w3schools">&lt;menuitem&gt;</a></td>
											  <td>Defines a command/menu item that the user can invoke from a popup menu</td>
											</tr>
											<tr>
											  <td><a href="http://www.w3schools.com/tags/tag_meta.asp" target="_w3schools">&lt;meta&gt;</a></td>
											  <td>Defines metadata about an HTML document</td>
											</tr>
											<tr>
											  <td class="html5badge"><a href="http://www.w3schools.com/tags/tag_meter.asp" target="_w3schools">&lt;meter&gt;</a></td>
											  <td>Defines a scalar measurement within a known range (a gauge)</td>
											</tr>
											<tr>
											  <td class="html5badge"><a href="http://www.w3schools.com/tags/tag_nav.asp" target="_w3schools">&lt;nav&gt;</a></td>
											  <td>Defines navigation links</td>
											</tr>
											<tr>
											  <td><a class="notsupported" href="http://www.w3schools.com/tags/tag_noframes.asp" target="_w3schools">&lt;noframes&gt;</a></td>
											  <td><span class="deprecated">Not supported in HTML5.<br></span>Defines an alternate content for users that do not support frames</td>
											</tr>
											<tr>
											  <td><a href="http://www.w3schools.com/tags/tag_noscript.asp" target="_w3schools">&lt;noscript&gt;</a></td>
											  <td>Defines an alternate content for users that do not support 
											client-side scripts</td>
											</tr>
											<tr>
											  <td><a href="http://www.w3schools.com/tags/tag_object.asp" target="_w3schools">&lt;object&gt;</a></td>
											  <td>Defines an embedded object</td>
											</tr>
											<tr>
											  <td><a href="http://www.w3schools.com/tags/tag_ol.asp" target="_w3schools">&lt;ol&gt;</a></td>
											  <td>Defines an ordered list</td>
											</tr>
											<tr>
											  <td><a href="http://www.w3schools.com/tags/tag_optgroup.asp" target="_w3schools">&lt;optgroup&gt;</a></td>
											  <td>Defines a group of related options in a drop-down list</td>
											</tr>
											<tr>
											  <td><a href="http://www.w3schools.com/tags/tag_option.asp" target="_w3schools">&lt;option&gt;</a></td>
											  <td>Defines an option in a drop-down list</td>
											</tr>
											<tr>
											  <td class="html5badge"><a href="http://www.w3schools.com/tags/tag_output.asp" target="_w3schools">&lt;output&gt;</a></td>
											  <td>Defines the result of a calculation</td>
											</tr>
											<tr>
											  <td><a href="http://www.w3schools.com/tags/tag_p.asp" target="_w3schools">&lt;p&gt;</a></td>
											  <td>Defines a paragraph</td>
											</tr>
											<tr>
											  <td><a href="http://www.w3schools.com/tags/tag_param.asp" target="_w3schools">&lt;param&gt;</a></td>
											  <td>Defines a parameter for an object</td>
											</tr>
											<tr>
											  <td><a href="http://www.w3schools.com/tags/tag_pre.asp" target="_w3schools">&lt;pre&gt;</a></td>
											  <td>Defines preformatted text</td>
											</tr>
											<tr>
											  <td class="html5badge"><a href="http://www.w3schools.com/tags/tag_progress.asp" target="_w3schools">&lt;progress&gt;</a></td>
											  <td>Represents the progress of a task</td>
											</tr>
											<tr>
											  <td><a href="http://www.w3schools.com/tags/tag_q.asp" target="_w3schools">&lt;q&gt;</a></td>
											  <td>Defines a short quotation</td>
											</tr>
											<tr>
											  <td class="html5badge"><a href="http://www.w3schools.com/tags/tag_rp.asp" target="_w3schools">&lt;rp&gt;</a></td>
											  <td>Defines what to show in browsers that do not support ruby annotations</td>
											</tr>
											<tr>
											  <td class="html5badge"><a href="http://www.w3schools.com/tags/tag_rt.asp" target="_w3schools">&lt;rt&gt;</a></td>
											  <td>Defines an explanation/pronunciation of characters (for East Asian 
											typography)</td>
											</tr>
											<tr>
											  <td class="html5badge"><a href="http://www.w3schools.com/tags/tag_ruby.asp" target="_w3schools">&lt;ruby&gt;</a></td>
											  <td>Defines a ruby annotation (for East Asian typography)</td>
											</tr>
											<tr>
											  <td><a href="http://www.w3schools.com/tags/tag_s.asp" target="_w3schools">&lt;s&gt;</a></td>
											  <td>Defines text that is no longer correct</td>
											</tr>
											<tr>
											  <td><a href="http://www.w3schools.com/tags/tag_samp.asp" target="_w3schools">&lt;samp&gt;</a></td>
											  <td>Defines sample output from a computer program</td>
											</tr>
											<tr>
											  <td><a href="http://www.w3schools.com/tags/tag_script.asp" target="_w3schools">&lt;script&gt;</a></td>
											  <td>Defines a client-side script</td>
											</tr>
											<tr>
											  <td class="html5badge"><a href="http://www.w3schools.com/tags/tag_section.asp" target="_w3schools">&lt;section&gt;</a></td>
											  <td>Defines a section in a document</td>
											</tr>
											<tr>
											  <td><a href="http://www.w3schools.com/tags/tag_select.asp" target="_w3schools">&lt;select&gt;</a></td>
											  <td>Defines a drop-down list</td>
											</tr>
											<tr>
											  <td><a href="http://www.w3schools.com/tags/tag_small.asp" target="_w3schools">&lt;small&gt;</a></td>
											  <td>Defines smaller text</td>
											</tr>
											<tr>
											  <td class="html5badge"><a href="http://www.w3schools.com/tags/tag_source.asp" target="_w3schools">&lt;source&gt;</a></td>
											  <td>Defines multiple media resources for media elements (&lt;video&gt; and &lt;audio&gt;)</td>
											</tr>
											<tr>
											  <td><a href="http://www.w3schools.com/tags/tag_span.asp" target="_w3schools">&lt;span&gt;</a></td>
											  <td>Defines a section in a document</td>
											</tr>
											<tr>
											  <td><a class="notsupported" href="http://www.w3schools.com/tags/tag_strike.asp" target="_w3schools">&lt;strike&gt;</a></td>
											  <td><span class="deprecated">Not supported in HTML5. Use &lt;del&gt; or &lt;s&gt; instead.<br></span>Defines strikethrough text</td>
											</tr>
											<tr>
											  <td><a href="http://www.w3schools.com/tags/tag_strong.asp" target="_w3schools">&lt;strong&gt;</a></td>
											  <td>Defines important text</td>
											</tr>
											<tr>
											  <td><a href="http://www.w3schools.com/tags/tag_style.asp" target="_w3schools">&lt;style&gt;</a></td>
											  <td>Defines style information for a document</td>
											</tr>
											<tr>
											  <td><a href="http://www.w3schools.com/tags/tag_sub.asp" target="_w3schools">&lt;sub&gt;</a></td>
											  <td>Defines subscripted text</td>
											</tr>
											<tr>
											  <td class="html5badge"><a href="http://www.w3schools.com/tags/tag_summary.asp" target="_w3schools">&lt;summary&gt;</a></td>
											  <td>Defines a visible heading for a &lt;details&gt; element</td>
											</tr>
											<tr>
											  <td><a href="http://www.w3schools.com/tags/tag_sup.asp" target="_w3schools">&lt;sup&gt;</a></td>
											  <td>Defines superscripted text</td>
											</tr>
											<tr>
											  <td><a href="http://www.w3schools.com/tags/tag_table.asp" target="_w3schools">&lt;table&gt;</a></td>
											  <td>Defines a table</td>
											</tr>
											<tr>
											  <td><a href="http://www.w3schools.com/tags/tag_tbody.asp" target="_w3schools">&lt;tbody&gt;</a></td>
											  <td>Groups the body content in a table</td>
											</tr>
											<tr>
											  <td><a href="http://www.w3schools.com/tags/tag_td.asp" target="_w3schools">&lt;td&gt;</a></td>
											  <td>Defines a cell in a table</td>
											</tr>
											<tr>
											  <td><a href="http://www.w3schools.com/tags/tag_textarea.asp" target="_w3schools">&lt;textarea&gt;</a></td>
											  <td>Defines a multiline input control (text area)</td>
											</tr>
											<tr>
											  <td><a href="http://www.w3schools.com/tags/tag_tfoot.asp" target="_w3schools">&lt;tfoot&gt;</a></td>
											  <td>Groups the footer content in a table</td>
											</tr>
											<tr>
											  <td><a href="http://www.w3schools.com/tags/tag_th.asp" target="_w3schools">&lt;th&gt;</a></td>
											  <td>Defines a header cell in a table</td>
											</tr>
											<tr>
											  <td><a href="http://www.w3schools.com/tags/tag_thead.asp" target="_w3schools">&lt;thead&gt;</a></td>
											  <td>Groups the header content in a table</td>
											</tr>
											<tr>
											  <td class="html5badge"><a href="http://www.w3schools.com/tags/tag_time.asp" target="_w3schools">&lt;time&gt;</a></td>
											  <td>Defines a date/time</td>
											</tr>
											<tr>
											  <td><a href="http://www.w3schools.com/tags/tag_title.asp" target="_w3schools">&lt;title&gt;</a></td>
											  <td>Defines a title for the document</td>
											</tr>
											<tr>
											  <td><a href="http://www.w3schools.com/tags/tag_tr.asp" target="_w3schools">&lt;tr&gt;</a></td>
											  <td>Defines a row in a table</td>
											</tr>
											<tr>
											  <td class="html5badge"><a href="http://www.w3schools.com/tags/tag_track.asp" target="_w3schools">&lt;track&gt;</a></td>
											  <td>Defines text tracks for media elements (&lt;video&gt; and &lt;audio&gt;)</td>
											</tr>
											<tr>
											  <td><a href="http://www.w3schools.com/tags/tag_tt.asp" class="notsupported">&lt;tt&gt;</a></td>
											  <td><span class="deprecated">Not supported in HTML5. Use CSS instead.<br></span>Defines teletype text</td>
											</tr>
											<tr>
											  <td><a href="http://www.w3schools.com/tags/tag_u.asp" target="_w3schools">&lt;u&gt;</a></td>
											  <td>Defines text that should be stylistically different from normal text</td>
											</tr>
											<tr>
											  <td><a href="http://www.w3schools.com/tags/tag_ul.asp" target="_w3schools">&lt;ul&gt;</a></td>
											  <td>Defines an unordered list</td>
											</tr>
											<tr>
											  <td><a href="http://www.w3schools.com/tags/tag_var.asp" target="_w3schools">&lt;var&gt;</a></td>
											  <td>Defines a variable</td>
											</tr>
											<tr>
											  <td class="html5badge"><a href="http://www.w3schools.com/tags/tag_video.asp" target="_w3schools">&lt;video&gt;</a></td>
											  <td><p>Defines a video or movie</p>
											  	<div class="callout callout-info">
    												<h4 id="cross-browser-compatibility">YouTube not supported with &lt;video&gt; tag.</h4>
    												<p>In order to add a poster image for YouTube, you must add some additional CSS and jQuery code.  See below.</p>
  												</div>
													<p>
														<span class="text-red">Note*</span>:  The <code>&lt;video&gt;</code> tag does not support YouTube.  Use YouTube's preferred <code>&lt;iframe&gt;</code> method.  
													</p>
													<h4>YouTube Video</h4>
											  	<div class="zero-clipboard"><span class="btn-clipboard" data-clipboard-target="clipboard-iframevideo">Copy</span></div>
													<pre><code id="clipboard-iframevideo" class="language-markup">
&lt;!-- YouTube video must be in the embed format:
http://www.youtube.com/embed/98lscvpR9qE
 --&gt;

&lt;!-- 16:9 aspect ratio --&gt;
													
&lt;div class="embed-responsive embed-responsive-16by9"&gt;
  &lt;iframe class="embed-responsive-item" src="..."&gt;&lt;/iframe&gt;
&lt;/div&gt;

&lt;!-- 4:3 aspect ratio --&gt;
&lt;div class="embed-responsive embed-responsive-4by3"&gt;
  &lt;iframe class="embed-responsive-item" src="..."&gt;&lt;/iframe&gt;
&lt;/div&gt;
													</code></pre>
													
													<!-- 16:9 aspect ratio -->
													<div data-example-id="responsive-embed-16by9-iframe-youtube">
    												<div class="embed-responsive embed-responsive-16by9">
      												<iframe allowfullscreen="" src="http://www.youtube.com/embed/98lscvpR9qE" class="embed-responsive-item"></iframe>
    												</div>
  												</div>

													<h4>YouTube Video with Poster Image</h4>
													<p>
													However, if you need to add a poster image to the video, you will need to add a couple lines of inline <code>&lt;style&gt;</code> and <code>&lt;script&gt;</code> code:
													</p>
													
<style>
.video { position: relative; padding-bottom: 56.25%; /* 16:9 */ height: 0; }
.video img { position: absolute; display: block; top: 0; left: 0; width: 100%; height: 100%; z-index: 20; cursor: pointer; }

.video iframe { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }
 
/* image poster clicked, player class added using js */
.video.player img { display: none; }
.video.player:after { display: none; }
</style>

<div class="video">
    <img src="http://www.marriottvacationclub.com/vacation-resorts/images/video/hero_placeholder.jpg">
    <!-- <iframe width="940" height="529" src="http://www.youtube.com/embed/98lscvpR9qE?autoplay=1" frameborder="0" allowfullscreen></iframe>-->
</div>

<script>
	
$(function() { 
    var videos  = $(".video");
 
        videos.on("click", function(){
            var elm = $(this),
                conts   = elm.contents(),
                le      = conts.length,
                ifr     = null;
 
            for(var i = 0; i<le; i++){
              if(conts[i].nodeType == 8) ifr = conts[i].textContent;
            }
 
            elm.addClass("player").html(ifr);
            elm.off("click");
        });
});
	
</script>
													<br />
											  	
<div class="zero-clipboard"><span class="btn-clipboard" data-clipboard-target="clipboard-iframe" style="top: 7px;">Copy</span></div>
<pre id="clipboard-iframe" data-src="examples/youtube-poster.html" class="language-markup"></pre>	
											  </td>
											</tr>
											<tr>
											  <td class="html5badge"><a href="http://www.w3schools.com/tags/tag_wbr.asp" target="_w3schools">&lt;wbr&gt;</a></td>
											  <td>Defines a possible line-break</td>
											</tr>
										</tbody>
                    <tfoot>
                      <tr>
                        <th>HTML5 Tag</th>
                        <th>Description</th>
                      </tr>
                    </tfoot>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
            	<div class="row">
              <div class="box box-solid">
                <div class="box-header with-border">
                  <i class="fa fa-code"></i>
                  <h3 class="box-title">Frequently Used Tags</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body">
                  
                  <table id="example3" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th width="100px">HTML5 Tag</th>
                        <th>Description</th>
                      </tr>
                    </thead>
                    <tbody>
											<tr>
											  <td><a href="http://www.w3schools.com/tags/tag_comment.asp" target="_w3schools">&lt;!--...--&gt;</a></td>
											  <td>Defines a comment</td>
											</tr>
											<tr>
											  <td><a href="http://www.w3schools.com/tags/tag_comment.asp" target="_w3schools">&lt;!--...//--&gt;</a></td>
											  <td>Defines a comment.  In JavaScript, the extra // prevent JavaScript from executing any code in between the comment.</td>
											</tr>
											<tr>
											  <td><a href="http://www.w3schools.com/tags/tag_a.asp" target="_w3schools">&lt;a&gt;</a></td>
											  <td>Defines a hyperlink</td>
											</tr>
											<tr>
											  <td class="html5badge"><a href="http://www.w3schools.com/tags/tag_article.asp" target="_w3schools">&lt;article&gt;</a></td>
											  <td>Defines an article</td>
											</tr>
											<tr>
											  <td><a href="http://www.w3schools.com/tags/tag_blockquote.asp" target="_w3schools">&lt;blockquote&gt;</a></td>
											  <td>Defines a section that is quoted from another source</td>
											</tr>
											<tr>
											  <td><a href="http://www.w3schools.com/tags/tag_br.asp" target="_w3schools">&lt;br&gt;</a></td>
											  <td>Defines a single line break</td>
											</tr>
											<tr>
											  <td><a href="http://www.w3schools.com/tags/tag_button.asp" target="_w3schools">&lt;button&gt;</a></td>
											  <td>Defines a clickable button</td>
											</tr>
											<tr>
											  <td><a href="http://www.w3schools.com/tags/tag_div.asp" target="_w3schools">&lt;div&gt;</a></td>
											  <td>Defines a section in a document</td>
											</tr>
											<tr>
											  <td><a href="http://www.w3schools.com/tags/tag_p.asp" target="_w3schools">&lt;p&gt;</a></td>
											  <td>Defines a paragraph</td>
											</tr>
											<tr>
											  <td class="html5badge"><a href="http://www.w3schools.com/tags/tag_section.asp" target="_w3schools">&lt;section&gt;</a></td>
											  <td>Defines a section in a document</td>
											</tr>
										</tbody>
									</table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
              </div><div class="row">
              <div class="box box-solid">
                <div class="box-header with-border">
                  <i class="fa fa-code"></i>
                  <h3 class="box-title">Related Material</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <ul class="nav nav-pills nav-stacked">
                    <li><a href="#">CSS Classes <span class="pull-right text-red"><i class="fa fa-file-text"></i></span></a></li>
                    <li><a href="#">Font Awesome Icons <span class="pull-right"><i class="fa fa-wheelchair"></i> <i class="fa fa-twitter"></i> <i class="fa fa-instagram"></i> <i class="fa fa-ellipsis-h"></i></span></a></li>
                  </ul>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
              </div>
            </div><!-- ./col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      

    <!-- PrismJS.com -->
    <script src="/dist/js/prism.js"></script>   
		<?php require_once('../footer.php'); ?>
		

    <!-- page script -->
    <script type="text/javascript">
      $(function() {
        $("#example1").dataTable();
      });
    </script>		