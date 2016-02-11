
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>MVC WYSIWYG Content Builder</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">  

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,600,800' rel='stylesheet' type='text/css'>
    <link href="assets/minimalist-basic/content.css" rel="stylesheet" type="text/css" />
    

    <link href="scripts/contentbuilder.css" rel="stylesheet" type="text/css" />
    <!-- FontAwesome 4.3.0 -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    
    
		<link rel='stylesheet' type='text/css' href='stylesheets/bootstrap.min.css'>
		<link rel='stylesheet' type='text/css' href='stylesheets/bootstrap-theme.min.css'>
		<link rel='stylesheet' type='text/css' href='stylesheets/font-awesome.min.css'>
		<link rel='stylesheet' type='text/css' href='stylesheets/sidr-dark.min.css'>
		<link rel='stylesheet' type='text/css' href='stylesheets/mvc.co.jp.css'>
    
    <style>
        body {margin:0 0 57px} /* give space 70px on the bottom for panel */
        #panelCms {width:100%;height:57px;border-top: #eee 1px solid;background:rgba(255,255,255,0.95);position:fixed;bottom:0;padding:10px;box-sizing:border-box;text-align:center;white-space:nowrap;z-index:10001;}
        #panelCms button {border-radius:4px;padding: 10px 15px;text-transform:uppercase;font-size: 11px;letter-spacing: 1px;line-height: 1;}
    </style>
    <style>
				.video { position: relative; padding-bottom: 56.25%; /* 16:9 */ height: 0; }
				.video img { position: absolute; display: block; top: 0; left: 0; width: 100%; height: 100%; z-index: 20; cursor: pointer; }
				
				.video iframe { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }
				 
				/* image poster clicked, player class added using js */
				.video.player img { display: none; }
				.video.player:after { display: none; }
				
				
		</style>
  <link rel="stylesheet" href="assets-mah/socicon/css/socicon.min.css" type="text/css">
  <link rel="stylesheet" href="assets-mah/style.css" type="text/css">
  
  <!-- Paste any valid HTML code here. The code will be inserted to the end of <head> section, right before </head> -->
</head>
<body>



<section>
		<div class="row">
      	<section class="clear-float">
  					<div class="container-fluid" id="header01">
      					<div class="fullWidthContent">
										<div class="container">
												<div class="navBackground col-xs-12 col-sm-4 col-md-3">
														<div class="padding">
																<img src="//www.marriottvacationclub.co.jp/img/top_header_logo.png">
																<div class="clearfix"></div>
														</div>
												</div>
												<div class="col-xs-12 col-sm-8 col-md-9 visible-lg">
														<div class="row">
																<div class="hdContBox">
																		<ul class="clearfix">
																				<li><a href="#">オーナー様専用ご予約・お問い合わせ</a></li>
																				<li><a href="#">メンバー様専用ご予約・お問い合わせ</a></li>
																		</ul>
																</div>

																<div id="headR">
<ul class="clearfix">
<li class="gm"><img src="//www.marriottvacationclub.co.jp/img_rn/top_gm_left.gif" alt="" width="10" height="41"></li>

<li class="gm"><a href="#"><img src="//www.marriottvacationclub.co.jp/img_rn/nav01.gif" alt="???" name="nav01" width="48" height="41" border="0" id="nav01"></a></li>
<li class="gm"><img src="//www.marriottvacationclub.co.jp/img/top_gm_line.gif" alt="" width="1" height="41"></li>

<li class="gm"><a href="#"><img src="//www.marriottvacationclub.co.jp/img_rn/nav03.gif" alt="??????????" name="nav03" width="82" height="41" border="0" id="nav03"></a></li>
<li class="gm"><img src="//www.marriottvacationclub.co.jp/img/top_gm_line.gif" alt="" width="1" height="41"></li>

<li class="gm"><a href="#" target="blank"><img src="//www.marriottvacationclub.co.jp/img_rn/nav04.gif" alt="?????????" name="nav04" width="87" height="41" border="0" id="nav04"></a></li>
<li class="gm"><img src="//www.marriottvacationclub.co.jp/img/top_gm_line.gif" alt="" width="1" height="41"></li>

<li class="gm"><a href="#"><img src="http://www.marriottvacationclub.co.jp/img_rn/nav05.gif" alt="????(????/???????)" name="nav05" width="130" height="41" border="0" id="nav05"></a></li>
<li class="gm"><img src="//www.marriottvacationclub.co.jp/img/top_gm_line.gif" alt="" width="1" height="41"></li>

<li class="gm"><a href="#"><img src="http://www.marriottvacationclub.co.jp/img_rn/nav06.gif" alt="?????(????/???????)" name="nav06" width="132" height="41" border="0" id="nav06"></a></li>

<li class="gmEnd"><img src="//www.marriottvacationclub.co.jp/img_rn/top_gm_right.gif" alt="" width="10" height="41"></li>

</ul>
</div>
														</div>
												</div>
										</div>
								</div>
      			</div>
    		</section>
  	</div>
  	<div id="header03">
		</div>
</section>  		

<div class="container">	
		<section id="contentarea">
				<div class="row">	
						<div class="col-xs-12 col-md-12">
            		<img src="http://www.marriottvacationclub.co.jp/img/program/program_main01.jpg" style="width:100%;" class="img-responsive">
        		</div>
				</div>
				<div class="row">	
						<div class="row clearfix visible-xs-block center">
								<div class="col-xs-12">
										<img src="http://www.marriottvacationclub.co.jp/img/program/program_check01_pic01.jpg" class="img-responsive center-block">
										<img src="http://www.marriottvacationclub.co.jp/img/program/program_check02_pic01.jpg" class="img-responsive center-block">
										<img src="http://www.marriottvacationclub.co.jp/img/program/program_check03_pic01.jpg" class="img-responsive center-block">
								</div>
						</div>
						<div class="row clearfix hidden-xs">
								<div class="col-sm-4">
										<img src="http://www.marriottvacationclub.co.jp/img/program/program_check01_pic01.jpg" class="img-responsive">
								</div>
								<div class="col-sm-4">
										<img src="http://www.marriottvacationclub.co.jp/img/program/program_check02_pic01.jpg" class="img-responsive">
								</div>
								<div class="col-sm-4">
										<img src="http://www.marriottvacationclub.co.jp/img/program/program_check03_pic01.jpg" class="img-responsive">
								</div>
						</div>
				</div>
				<div class="row">	
						<div class="col-xs-12">
								<img src="http://www.marriottvacationclub.co.jp/img/program/program_tit01.jpg" class="img-responsive">	
						</div>
				</div>
		</section>
</div>		
		
		
<footer class="container" style="background-color:transparent;">
	

</footer>
<br /><br />

<br /><br />

<!-- CUSTOM PANEL (can be used for "save" button or your own custom buttons) -->
<div id="panelCms" style="background-color:#3d3d3d;">    
    <button onclick="reset()"  class="btn btn-default"> Reset Page </button> &nbsp;
    <!---<button onclick="viewSidebar()" class="btn btn-default"> View Sidebar HTML </button> &nbsp;--->
    <button onclick="view()" class="btn btn-default"> View Content HTML </button> &nbsp;
    <button onclick="save()" class="btn btn-primary"> Save </button> &nbsp;
    <button id="footerBtn" onclick="hidefooter()" class="btn btn-default"> Hide Footer </button> &nbsp;
    <a id="fullWidth" class="btn btn-default" href="marriottasiaholidays-fluid.php"> Full Width Template </a> &nbsp;
    <!---<button id="sidebarBtn" onclick="hidesidebar()" class="btn btn-default"> Remove Sidebar </button> &nbsp;--->
</div>

<script src="scripts/jquery-1.11.1.min.js" type="text/javascript"></script>
<script src="scripts/jquery-ui.min.js" type="text/javascript"></script>
<!-- Bootstrap 3.3.2 JS -->
<script src="/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="scripts/contentbuilder.js" type="text/javascript"></script>

<script src="assets-mah/jquery-parallax/jquery.parallax.js" type="text/javascript"></script>
<script src="assets-mah/social-likes/social-likes.js" type="text/javascript"></script>
<script src="assets-mah/script.js" type="text/javascript"></script>

<script type="text/javascript">
    jQuery(document).ready(function ($) {

        //Load saved Content
        if (localStorage.getItem('mahhome') != null) {
            $("#contentarea").html(localStorage.getItem('mvccojphome'));
        }

        //Run the builder
        $("#contentarea").contentbuilder({
            snippetOpen: true,
            imageselect: 'images.html',
            fileselect: 'images.html',
            snippetFile: 'assets/snippets-mah.php',
            toolbar: 'left'
        });
        
        
        if (localStorage.getItem('sidebar') != null) {
            $("#sidecontent").html(localStorage.getItem('sidebar'));
        }
        
				//$("#sidecontent").contentbuilder({
				//		snippetOpen: true,
				//		toolbar: 'top'	
				//});
    });

    function save() {
        //Save Content
        var sHTML = $('#contentarea').data('contentbuilder').html();
        localStorage.setItem('mvccojphome', sHTML);
        
        //Save Content
        //var sHTML = $('#sidecontent').data('contentbuilder').html();
        //localStorage.setItem('sidebar', sHTML);
        
        alert('Saved Successfully');
    }

    function view() {
        $('#contentarea').data('contentbuilder').viewHtml(); //this is just a helper method to view/edit HTML source.
    }
    function viewSidebar() {
        $('#sidecontent').data('contentbuilder').viewHtml(); //this is just a helper method to view/edit HTML source.
    }
    
    function hidefooter() {
        $('footer').toggleClass( "hidden" );
        $('#footerBtn').html($('#footerBtn').text() == 'Show Footer' ? 'Remove Footer' : 'Show Footer');
    }
    function hidesidebar() {
        $('#sectionNav').toggleClass( "hidden" );
        $('#sidebarBtn').html($('#sidebarBtn').text() == 'Remove Sidebar' ? 'Show Sidebar' : 'Remove Sidebar');
        $('#contentarea').toggleClass( "col-md-9 col-md-12");
    }
    
    function reset() {
        //Reset Content
        localStorage.removeItem('mvccojphome');
        localStorage.removeItem('sidebar');
        //Run the builder
        //Run the builder
        location.reload();
				
        alert('Reset Content');
    }
    
</script>
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
</body>
</html>
