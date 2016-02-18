<?php
	$hybris = "http://10.206.6.37:9001";
?>

<!-- jQuery 2.1.3 -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

<!-- jQuery UI 1.11.2 -->
<script src="http://code.jquery.com/ui/1.11.2/jquery-ui.min.js" type="text/javascript"></script>
<script src="/IDS-Toolbox/userView/javascripts/scrollableDiv.js" type="text/javascript"></script>

<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<!-- jQuery 2.1.3 -->
<script src="/IDS-Toolbox/userView/dist/js/ZeroClipboard.js"></script>

<!-- Main Header -->
<header class="main-header">
	<!-- Logo -->
	<a href="/IDS-Toolbox/userView/index.php" class="logo">
		<!-- mini logo for sidebar mini 50x50 pixels -->
		<span class="logo-mini"><b>IDS</b></span>
		<!-- logo for regular state and mobile devices -->
		<span class="logo-lg"><b>IDS</b>Toolbox</span>
	</a>

	<!-- Header Navbar -->
	<nav class="navbar navbar-static-top" role="navigation">
		<!-- Sidebar toggle button-->
		<a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
			<span class="sr-only">Toggle navigation</span>
		</a>
		
		<!-- Navbar Right Menu-->
		<div class="navbar-custom-menu">
			<ul class="nav navbar-nav">
				<!-- Control Sidebar Toggle Button -->
				<li>
				<a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
				</li>
			</ul>
		</div>
	</nav>
	
	<style>
				video.html5Video{
					width: 100%;
				}
	</style>
</header>

<script>
	$( document ).ready(function() {
			$("pre").each(function(){
				var b='<div class="zero-clipboard"><span class="btn-clipboard" data-clipboard-target="clipboard-text">Copy</span></div>';
				//var b='<button id="target-to-copy" data-clipboard-target="clipboard-text">Click To Copy</button>';
				//$(this).before(b)
				}
			);
		  var clientTarget = new ZeroClipboard( $('.btn-clipboard'), {
				moviePath: "/IDS-Toolbox/userView/dist/flash/ZeroClipboard.swf",
				debug: false
				} );
				clientTarget.on( "load", function(clientTarget)
				{
					clientTarget.on( "complete", function(clientTarget, args) {
						clientTarget.setText( args.text );
					} );
				} );
				$("span.btn-clipboard").hover(
				  function () {
					  $(this).addClass("btn-clipboard-hover");
				  }, 
				  function () {
					  $(this).removeClass("btn-clipboard-hover");
				  }
				);
	});
</script>


<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-black-light                        |
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
<script type="text/javascript">
	$(document).ready(function() { 
		if (localStorage.getItem("skin") === null) {
			//Here is where you can set the initial page theme. If you change
			//the theme color on the settings tab, it will save the new theme
			//on your local storage.
			var currentPageTheme = "skin-black-light";
			/* $("body").removeClass("skin-blue");
			$("body").removeClass("skin-black");
			$("body").removeClass("skin-purple");
			$("body").removeClass("skin-yellow");
			$("body").removeClass("skin-red");
			$("body").removeClass("skin-green"); */
			
			$("body").addClass(currentPageTheme);
		}
	});
</script>

<script type="text/javascript">
	$(document).ready(function(){
		$('[data-toggle="tooltip"]').tooltip({
			placement : 'top'
		});
	});
</script>

<?php
	include "includes/pageModal.php";
?>
