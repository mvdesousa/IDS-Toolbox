
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
</head>
<body style="background-color:#3d3d3d;">


<div class="container" style="background-color:#fff;">
	
<div id="contentarea" class="content col-xs-12 col-md-12">
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

</div>
<br /><br />

<!-- CUSTOM PANEL (can be used for "save" button or other custom buttons) -->
<div id="panelCms" style="background-color:#3d3d3d;">    
    <button onclick="reset()"  class="btn btn-default"> Reset Page </button> &nbsp;
    <button onclick="view()" class="btn btn-default"> View HTML </button> &nbsp;
    <button onclick="save()" class="btn btn-primary"> Save </button> &nbsp;
    <button onclick="hidefooter()" class="btn btn-default"> Hide Footer </button> &nbsp;
    <button onclick="hidesidebar()" class="btn btn-default"> Remove Sidebar </button> &nbsp;
</div>

<script src="scripts/jquery-1.11.1.min.js" type="text/javascript"></script>
<script src="scripts/jquery-ui.min.js" type="text/javascript"></script>
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
            snippetFile: 'assets/minimalist-basic/snippets.html',
            toolbar: 'left'
        });
        
        
    });

    function save() {
        //Save Content
        var sHTML = $('#contentarea').data('contentbuilder').html();
        localStorage.setItem('content', sHTML);
        
        
        alert('Saved Successfully');
    }

    function view() {
        $('#contentarea').data('contentbuilder').viewHtml(); //this is just a helper method to view/edit HTML source.
    }
    
    function hidefooter() {
        $('footer').hide();
    }
    function hidesidebar() {
        $('#contentarea').toggleClass( "col-md-9 col-md-12");
    }
    
    function reset() {
        //Reset Content
        localStorage.removeItem('content');
        //Run the builder
        //Run the builder
        location.reload();
				
        alert('Reset Content');
    }
    
</script>

</body>
</html>
