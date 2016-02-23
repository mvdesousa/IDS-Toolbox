$( document ).ready(function() {
	console.log($(".myAccountItem .dataBaseValue.accountTypeValue").html());
	
	var accountType = $(".myAccountItem .dataBaseValue.accountTypeValue").html();
	
	if( accountType == "Administrator"){
		$(".panel-body").css({
			background: "url('images/bg/adminTool-bg-50perc.png') no-repeat bottom right",
			backgroundSize: '100px'
		});
	}else if( accountType == "Associate"){
		$(".messageSection.adminMessageContent").hide();
		
		$(".panel-body").css({
			background: "url('images/bg/associateTool-bg-50perc.png') no-repeat bottom right",
			backgroundSize: '100px'
		});
	};
	
});