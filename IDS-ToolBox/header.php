<?php
$hybris = "http://10.206.6.37:9001"
?>
    <!-- jQuery 2.1.3 -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <!-- jQuery UI 1.11.2 -->
    <script src="http://code.jquery.com/ui/1.11.2/jquery-ui.min.js" type="text/javascript"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->      
      
    <!-- jQuery 2.1.3 -->
    <script src="/dist/js/ZeroClipboard.js"></script>
    
      <!-- Main Header -->
      <header class="main-header">

        <!-- Logo -->
        <a href="/index.php" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>MVC</b></span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>MVC</b>Toolbox</span>
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
    		moviePath: "/dist/flash/ZeroClipboard.swf",
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
<script type="text/javascript">
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip({
        placement : 'top'
    });
});
</script>