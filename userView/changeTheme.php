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
<script type="text/javascript">
	$( document ).ready(function() { 
		var currentPageTheme = "skin-yellow-light";
	
		$("body").removeClass("skin-blue");
		$("body").removeClass("skin-black");
		$("body").removeClass("skin-purple");
		$("body").removeClass("skin-yellow");
		$("body").removeClass("skin-red");
		$("body").removeClass("skin-green");
		
		
		$("body").addClass(currentPageTheme);
	});
</script>