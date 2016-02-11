
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
		<link rel='stylesheet' type='text/css' href='stylesheets/main.css'>
    
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
</head>
<body style="background-color:#3d3d3d;">


<div class="container" style="background-color:#fff;">
		<header>
					<div class="topNavigation col-xs-12">
						<br>
					</div><!-- .topNavigation -->

					<nav class="mainNavigation col-xs-12">
						<div class="navBackground">
							<div class="padding">
								<a href="#"><img src="assets/logo.png" alt="Marriott Vacation Club"></a>

								<div class="clearfix"></div>
							</div>
						</div>
					</nav><!-- .topNavigation -->

					<div class="headerImage col-xs-12">
						<img src="assets/header_identify_account.jpg" alt="Header Image" class="logout-header visible-md-block visible-lg-block">
					</div><!-- .headerImage -->


					<div class="clearfix"></div>
		</header>
		<div class="sidebar visible-md-block visible-lg-block col-xs-3">
			<div id="sectionNav"> 
				<div id="container">
					<ul class="nav navTabs">
						<li class="first">
						<a class="sectionNav1" href="#">Overview</a>
						</li>
						<li>
						<a class="sectionNav2 double" href="#">Marriott Vacation<br>Club Collection</a>
						</li>
						<li>
						<a class="sectionNav3" href="#">Marriott Collection</a>
						</li>
						<li>
						<a class="sectionNav4" href="#">Explorer Collection</a>
						</li>
						<li>
						<a class="sectionNav5 double" href="#">World Traveler<br>Collection</a>
						</li>
						<li class="last">
						<a class="sectionNav6" href="#" onclick="">Video Highlights</a>
						</li>
						
					</ul>
				</div>
    	
    	
				<h2>Questions?</h2>
				<p>
					Contact Service Advisor<br>
					John Doe at <strong><a href="tel:888-888-8888x1234">888-888-8888</a></strong><br>
					Ext: <strong>1234</strong> or <a href="#">Click here</a>
				</p>
				<p>
					<a href="#"><i class="fa fa-comments"></i> Chat Online</a><br>
					<a href="#"><i class="fa fa-phone"></i> Click to Talk</a>
				</p>
    	
				<div id="sidecontent">
 					<div class="row clearfix">
						<div style="padding-left:20px;">Sidebar Content Area</div>
					</div>
				</div>
			</div>
		</div>
		
		
<div id="contentarea" class="content col-xs-12 col-md-9">
 <div class="row clearfix">
  <div class="col-xs-12 col-md-12">
   <h1>MVC WYSIWYG Content Builder</h1>
    <p>Drag and drop content from the right panel</p>
  </div>
  <div class="col-xs-6 col-md-4">
   <img src="assets\minimalist-basic\e09-1.jpg" class="square img-responsive" alt="">	
  </div>
 </div>
</div>
		
		
		
		<footer class="col-xs-12">
						<div class="footerBackground">
							<div class="padding">
								<p class="social">
									<a href="#"><i class="fa fa-facebook-square"></i></a>
									<a href="#"><i class="fa fa-twitter-square"></i></a>
								</p>

								<div class="clearfix"></div>
<p class="visible-xs-block visible-sm-block">
									<a href="#">Owner Benefits &amp; Special</a> | <a href="#">Contact Us</a> | <a href="#">FAQ</a> | <a href="#">Site Map</a> | <a href="#">News Room</a><br>
									<a href="#">All Resorts</a> | <a href="#">Corporate Info</a> | <a href="#">Careers</a> | <a href="#">Help a Child!</a> | <a href="#">Internet Privacy Statement</a> | <a href="#">Terms of Use</a> | <a href="#">State and Legal Disclosures</a>
								</p>

								<div class="visible-md-block visible-lg-block">
									<p>This is neither an offer to sell nor a solicitation to buy to residents in jurisdictions in which registration requirements have not been fulfilled, and your eligibility to purchase will depend upon the jurisdiction of residency of the purchaser.</p>
									<p>
										<img src="/mvc.com/images/eho-logo.png" alt="Equal Housing Opportunity" class="pull-left">
										<span>This advertising material is being used for the purpose of soliciting sales of timeshare periods.</span>
									</p>

									<div class="clearfix"></div>

									<p>Marriott Vacation Club International and the programs and products provided under the Marriott Vacation Club brand are not owned, developed, or sold by Marriott International, Inc. Marriott Vacation Club International uses the Marriott marks under license from Marriott International, Inc. and its affiliates.</p>
									<p>
										<a href="#">Owner Benefits &amp; Special</a> | <a href="#">Contact Us</a> | <a href="#">FAQ</a> | <a href="#">Site Map</a> | <a href="#">News Room</a><br>
										<a href="#">All Resorts</a> | <a href="#">Corporate Info</a> | <a href="#">Careers</a> | <a href="#">Help a Child!</a> | <a href="#">Internet Privacy Statement</a> | <a href="#">Terms of Use</a> | <a href="#">State and Legal Disclosures</a>
									</p>
									<p>
										Images depicted may be developer's conceptual renderings and the description above may include features, furnishings and amenities that are proposed and subject to change at any time.
									</p>
									<p>
										Marriott International, Inc., Marriott Vacation Club International and their respective affiliates and subsidiaries, make no warranty, express or implied, as to the condition, capacity, performance or any other aspect of the activities, events, or service providers listed herein. No inquiry has been made into the activities or events, or the qualifications or the quality of services offered by the providers. Do not consider this an endorsement of or recommendation for any of the activities, events, or providers, Features, furnishings and amenities may be proposed and are subject to change.
									</p>
									<p>MDC-12-122</p>
								</div>

								<div class="footerExpand visible-xs-block visible-sm-block">
									<p>This is neither an offer to sell nor a solicitation to buy to residents in jurisdictions in which registration requirements have not been fulfilled, and your eligibility to purchase will depend upon the jurisdiction of residency of the purchaser.</p>

									<p>
										<img src="/mvc.com/images/eho-logo.png" alt="Equal Housing Opportunity" class="pull-left">
										<span>This advertising material is being used for the purpose of soliciting sales of timeshare periods.</span>
									</p>

									<div class="clearfix"></div>

									<p>Marriott Vacation Club International and the programs and products provided under the Marriott Vacation Club brand are not owned, developed, or sold by Marriott International, Inc. Marriott Vacation Club International uses the Marriott marks under license from Marriott International, Inc. and its affiliates.</p>
									
									<p>
										Images depicted may be developer's conceptual renderings and the description above may include features, furnishings and amenities that are proposed and subject to change at any time.
									</p>

									<p>
										Marriott International, Inc., Marriott Vacation Club International and their respective affiliates and subsidiaries, make no warranty, express or implied, as to the condition, capacity, performance or any other aspect of the activities, events, or service providers listed herein. No inquiry has been made into the activities or events, or the qualifications or the quality of services offered by the providers. Do not consider this an endorsement of or recommendation for any of the activities, events, or providers, Features, furnishings and amenities may be proposed and are subject to change.
									</p>

									<p>MDC-12-122</p>
								</div>

								<p>© Copyright 2007 - 2012, Marriott Vacation Club International. All Rights reserved.</p>
							</div><!-- .padding -->
						</div><!-- .footerBackground -->
					</footer>
</div>

<br /><br />

<!-- CUSTOM PANEL (can be used for "save" button or your own custom buttons) -->
<div id="panelCms" style="background-color:#3d3d3d;">    
    <button onclick="reset()"  class="btn btn-default"> Reset Page </button> &nbsp;
    <button onclick="viewSidebar()" class="btn btn-default"> View Sidebar HTML </button> &nbsp;
    <button onclick="view()" class="btn btn-default"> View Content HTML </button> &nbsp;
    <button onclick="save()" class="btn btn-primary"> Save </button> &nbsp;
    <button id="footerBtn" onclick="hidefooter()" class="btn btn-default"> Hide Footer </button> &nbsp;
    <button id="sidebarBtn" onclick="hidesidebar()" class="btn btn-default"> Remove Sidebar </button> &nbsp;
</div>

<script src="scripts/jquery-1.11.1.min.js" type="text/javascript"></script>
<script src="scripts/jquery-ui.min.js" type="text/javascript"></script>
<!-- Bootstrap 3.3.2 JS -->
<script src="/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="scripts/contentbuilder.js" type="text/javascript"></script>

<script type="text/javascript">
    jQuery(document).ready(function ($) {

        //Load saved Content
        if (localStorage.getItem('content') != null) {
            $("#contentarea").html(localStorage.getItem('content'));
        }

        //Run the builder
        $("#contentarea").contentbuilder({
            snippetOpen: true,
            imageselect: 'images.html',
            fileselect: 'images.html',
            snippetFile: 'assets/snippets.php',
            toolbar: 'left'
        });
        
        
        if (localStorage.getItem('sidebar') != null) {
            $("#sidecontent").html(localStorage.getItem('sidebar'));
        }
        
				$("#sidecontent").contentbuilder({
						snippetOpen: true,
						toolbar: 'top'	
				});
    });

    function save() {
        //Save Content
        var sHTML = $('#contentarea').data('contentbuilder').html();
        localStorage.setItem('content', sHTML);
        
        //Save Content
        var sHTML = $('#sidecontent').data('contentbuilder').html();
        localStorage.setItem('sidebar', sHTML);
        
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
        $('#sidebarBtn').html($('#sidebarBtn').text() == 'Show Sidebar' ? 'Remove Sidebar' : 'Show Sidebar');
        $('#contentarea').toggleClass( "col-md-9 col-md-12");
    }
    
    function reset() {
        //Reset Content
        localStorage.removeItem('content');
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
