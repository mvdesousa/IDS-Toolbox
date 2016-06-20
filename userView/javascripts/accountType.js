$( document ).ready(function() {
	console.log($(".myAccountItem .accountTypeValue span").html());
	
	var accountType = $(".myAccountItem .accountTypeValue span").html();
	
	if( accountType == "Administrator"){
		$(".panel-body").css({
			background: "url('images/bg/adminTool-bg-50perc.png') no-repeat top right",
			backgroundSize: '100px'
		});
	}else if( accountType == "Associate"){
		$(".messageSection.adminMessageContent").hide();
		
		$(".panel-body").css({
			background: "url('images/bg/associateTool-bg-50perc.png') no-repeat top right",
			backgroundSize: '100px'
		});
	};
	
});