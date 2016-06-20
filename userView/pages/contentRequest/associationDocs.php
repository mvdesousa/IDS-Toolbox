<!DOCTYPE html>

<?php 
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
?>

<html>
  <head>
    <meta charset="UTF-8">
    <title>Marriott Vacation Club | IDS-Toolbox | Content Request</title>
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
    <!-- Morris chart -->
    <link href="/IDS-Toolbox/userView/plugins/morris/morris.css" rel="stylesheet" type="text/css" />
    <!-- jvectormap -->
    <link href="/IDS-Toolbox/userView/plugins/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
    <!-- Date Picker -->
    <link href="/IDS-Toolbox/userView/plugins/datepicker/datepicker3.css" rel="stylesheet" type="text/css" />
    <!-- Daterange picker -->
    <link href="/IDS-Toolbox/userView/plugins/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
    <!-- bootstrap wysihtml5 - text editor -->
    <link href="/IDS-Toolbox/userView/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />

    <!-- fullCalendar 2.2.5-->
    <link href="/IDS-Toolbox/userView/plugins/fullcalendar/fullcalendar.min.css" rel="stylesheet" type="text/css" />
    <link href="/IDS-Toolbox/userView/plugins/fullcalendar/fullcalendar.print.css" rel="stylesheet" type="text/css" media='print' />
    
    
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
  <body class="sidebar-mini fixed" data-spy="scroll" data-target="#scrollspy">
    <div class="wrapper">

		<?php require_once('../../header.php'); ?>
		<?php require_once('../../sidebar.php'); ?>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper" height="700px">
        <section class="content">
			<h2 class="page-header">Association Document - IDS Toolbox</h2>
			<p>With this form you will be able to generate an Impex Script which will be used to perform the association documents action desired, such as inserting/updating a new association document.</p>
			
			<style>
				.associationDocItem.active{
					background-color: #fefefe;
				}
				.optionThumb{
					margin-top: 5px;
				}
				.contentRequestOptions .associationDocNewItemList{
					min-height: 326px;
				}
				.contentRequestOptions ul{
					margin: 0;
					padding: 0;
				}
				.contentRequestOptions .optionItem{
					margin: 0;
					padding: 0;
				}
				.contentRequestOptions ul li{
					list-style: none;
					padding: 5px;
				}
				.contentRequestOptions ul a .optionTitle{
					margin-bottom: 10px;
					margin-top: 5px;
					font-weight: bold;
					color: #333;
				}
				.contentRequestOptions ul a{
					display: block;
					border-right: 1px solid #dedede;
					border-top: 1px solid #dedede;
					border-left: 1px solid #dedede;
				}
				.contentRequestOptions ul a:last-child{
					border-bottom: 1px solid #dedede;
				}
				.contentRequestOptions ul a img{
					-webkit-border-radius: 15px;
					border-radius: 10px;
				}
				
				.contentRequestOptions .optionPreview{
					font-size: 30px;
					position: absolute;
					bottom: 0;
					left: 0;
					z-index: 999;
					color: red;
					border: 1px solid red;
					width: 100%;
					height: 100%;
				}
				
				.deleteAsscDocListItemBtn{
					padding-top: 5px;
				}
				
				.contentRequestOptions h5{
					color: #3c8dbc;
				}
				
				@media (max-width: 600px) {
					
				}
			</style>
			<div class="contentRequestOptions">
			
			
			<div class="panel-group" id="accordion">
				<div class="panel panel-default">
					<div class="panel-heading" style="padding: 10px;">
						<h4 class="panel-title">
							<a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
							Create New Association Document</a>
						</h4>
					</div>
					
					<div id="collapse1" class="panel-collapse collapse in">
						<div class="panel-body">
							<ul class="col-md-12 associationDocTable">
								<div class="col-md-4 col-xs-12" style="padding-right: 5px;">
									<div>
										<h5>MVWC - Association Documents</h5>
									</div>
									
									<a href="#" class="addNewAsscDocItem">
										<li style="background-color: #D1D9CA">
											<div class="optionThumb col-xs-1">
												<i class="fa fa-plus" aria-hidden="true"></i>
											</div><!--close resort page option-->
											
											<div class="optionTitle col-xs-10">
												Create new document
											</div><!--close resort page option-->
											
											<div class="clearfix"></div>
										</li><!--close list item-->
										<div class="clearfix"></div>
									</a>
									
									<form class="associationDocForm" method="POST" id="associationDocForm" action="associationDocConfirmation.php" enctype='multipart/form-data'>
										<div class="associationDocNewItemList optionItem" style="border: 1px solid #dedede">
										</div>
									</form>
										
									<button type="submit" class="btn btn-success pull-left submitAsscDocBtn col-md-12 col-xs-12" type="submit" form="associationDocForm">Submit Association Document</button>
								</div>
								
								<div class="col-md-8 col-xs-12 optionItem scrollableDivAssociationDoc">
									<form  style="background-color: #fefefe" class="associationCurrentDocForm" method="POST" id="associationCurrentDocForm" action="#">
										<div style="margin-left: 15px;">
											<h5>Current Selected Association Document Information</h5>
										</div>
									
										<br/>
										
										<style>
											.requestContentSection{
												margin-bottom: 15px;
											}
											
											.submitAsscDocBtn{
												margin-top: 10px;
											}
											
											form.associationCurrentDocForm{
												margin-top: 35px;
												border: 1px solid #dedede;
											}
											
											input[type=date]{
												height: 27px !important;
											}
											
										</style>
										<div class="requestContentSection">
											<div class="col-xs-12 col-md-3">Action</div>
											<div class="col-xs-12 col-md-9">
												<span class="col-md-4" style="padding-left: 0;"><input type="radio" name="asscAction" value="insert" checked> Insert</span>
												<span class="col-md-4"><input type="radio" name="asscAction" value="update"> Update</span>
												<!--span class="col-md-4"><input type="radio" name="asscAction" value="delete"> Delete</span>-->
											</div>
											
											<div class="clearfix"></div>
										</div>
										
										
										<div class="requestContentSection">
											<div class=" col-xs-12 col-md-3">Name</div>
											<div class=" col-xs-12 col-md-9"><input required class="col-xs-12" type="text" size="10" name="name"  data-toggle="tooltip" title="Cannot be empty" data-placement="left"></div>
											
											<div class="clearfix"></div>
										</div>
										
										
										<div class="requestContentSection">
											<div class=" col-xs-12 col-md-3">Description</div>
											<div class=" col-xs-12 col-md-9"><input required class="col-xs-12" type="text" size="10" name="description"  data-toggle="tooltip" title="Cannot be empty" data-placement="left"></div>
											
											<div class="clearfix"></div>
										</div>
										
										
										<div class="requestContentSection">
											<div class=" col-xs-12 col-md-3">Group</div>
											<div class=" col-xs-12 col-md-9"><input required class="col-xs-12" type="text" size="10" name="group"  data-toggle="tooltip" title="Cannot be empty" data-placement="left"></div>
											
											<div class="clearfix"></div>
										</div>
										
										
										<div class="requestContentSection" style="display: none;">
											<div class=" col-xs-12 col-md-3">Unique Document ID</div>
											<div class=" col-xs-12 col-md-9"><input required class="col-xs-12" type="text" size="10" name="uniqueDocID"  data-toggle="tooltip" title="Cannot be empty" data-placement="left"></div>
											
											<div class="clearfix"></div>
										</div>
										
										<div class="col-md-7" style="padding-left: 0;">
											<div class="requestContentSection">
												<div class=" col-xs-12 col-md-5">Resort Code</div>
												<div class=" col-xs-12 col-md-6" style="margin-left: 12px; padding-right: 0;"><input required class="col-xs-12" type="text" size="2" maxlength="2"  name="resortCode"  data-toggle="tooltip" title="Cannot be empty" data-placement="left"></div>
												
												<div class="clearfix"></div>
											</div>
											
											
											<div class="requestContentSection">
												<div class=" col-xs-12 col-md-5">Date</div>
												<div class=" col-xs-12 col-md-6 asscDocFormDateInput" style="margin-left: 12px; padding-right: 0;"><input required class="col-xs-12" type="date" size="10" name="date"  data-toggle="tooltip" title="Cannot be empty" data-placement="left"></div>
												
												<div class="clearfix"></div>
											</div>
											
											
											<div class="requestContentSection">
												<div class=" col-xs-12 col-md-5">Upload File</div>
												<div class=" col-xs-12 col-md-6" style="margin-left: 12px; padding-right: 0;">
													<input required type="file" name="fileToUpload" id="fileToUpload">
												</div>
												
												<div class="clearfix"></div>
											</div>
											
											<div class="requestContentSection">
												<div class=" col-xs-12 col-md-5">Recent Upload</div>
												<div class=" col-xs-12 col-md-6 recentUploadSection" style="margin-left: 12px; padding-right: 0; color: #A7A7A7;"><i>n/a</i></div>
												<div class="clearfix"></div>
											</div>
										</div>
												
										
										<div class="col-md-5" style="padding-left: 10px;">
											<strong style="color: red;">Please Note :</strong> Association Documents is updated with a CronJob that runs everyday at 3a.m.
												
											<a class="resetAsscDocBtn noPadding pull-right" style="margin-top: 100px; text-align: right; text-decoration: none; border: none; cursor:pointer;">Reset Form</a>
										</div>
										<div class="clearfix"></div>
										
										<div class="pull-right col-md-12 col-xs-12 noPadding">
											<div class="col-md-9 pull-right noPadding" style="margin-top: 12px; margin-left: 15px;">
												<button type="submit" form="" type="button" class="pull-right col-md-5 btn btn-success addNewAsscDocItem" style="margin-bottom: 10px; margin-left: 10px;">Add New Document To List</button>
												
												<button type="submit" form="" type="button" class="pull-right col-md-6 btn btn-primary associationCurrentDocFormBtn" style="">Save Current Association Doc</button>
											</div>
										</div>
										
										<?php
											if($_SESSION['username'] == "mdeso862"){
												print "<a class=\"addEmptyTestDocs pull-right\" style=\"display: none; color: red; margin-top: 15px; text-align: center; text-decoration: underline; border: none; cursor:pointer;\" onclick=\"addEmptyAsscDocs();\">Add empty assc docs</a>";
											}
										?>
									</form>
								</div>
								
								<script>
									
									var checkTodayDate = function(){
										var now = new Date();
										var day = ("0" + now.getDate()).slice(-2);
										var month = ("0" + (now.getMonth() + 1)).slice(-2);

										var today = now.getFullYear()+"-"+(month)+"-"+(day) ;

										$('.asscDocFormDateInput input').val(today);
									};checkTodayDate();
											


									$(".resetAsscDocBtn").on("click", function(){
											$(".associationCurrentDocForm")[0].reset();
									});
									
									

									var checkAsscDocLength = function(){
										var asscDocLength = $("a.associationDocItem:visible").length;
										if(asscDocLength <= 0){
											$(".submitAsscDocBtn").prop("disabled",true);
											$(".associationCurrentDocFormBtn").prop("disabled",true);
										}else{
											$(".submitAsscDocBtn").prop("disabled",false);
											$(".associationCurrentDocFormBtn").prop("disabled",false);
											
											var asscDocLength = $("a.associationDocItem:visible").length;
											if(asscDocLength <= 1){
												$(".submitAsscDocBtn").html("Submit Association Document");
												
												$(".submitAsscDocBtn").prop("disabled", false);
											}else if(asscDocLength >= 2){
												$(".submitAsscDocBtn").html("Submit All ("+asscDocLength+") Association Documents");
											}
										};
									};checkAsscDocLength();
									
									

									$(".addNewAsscDocItem").on("click", function(e){
										var asscDocForm = $(".associationCurrentDocForm"),
											asscDocFormDataName = asscDocForm.find("input[name='name']").val(),
											assDocFormDataDescription = asscDocForm.find("input[name='description']").val(),
											assDocFormDataGroup = asscDocForm.find("input[name='group']").val(),
											assDocFormDataUniqueDocID = asscDocForm.find("input[name='uniqueDocID']").val(),
											assDocFormDataResortCode = asscDocForm.find("input[name='resortCode']").val(),
											assDocFormDataDate = asscDocForm.find("input[name='date']").val();
											
											
										if(asscDocFormDataName == "" || assDocFormDataDescription == "" || assDocFormDataGroup == "" || assDocFormDataUniqueDocID == "" || assDocFormDataResortCode == "" || assDocFormDataDate == ""){
											
											$("#myModalLabel").html("Empty Fields");
											$("#myModalBody").html("<center>Please make sure that all fields are filled out.</center>");
											$(".modal-footer button").html("Ok");
											
											$("#myModal").modal('toggle');
											
											
											
											
											e.preventDefault();
											return;
											
										}else if($('input[type=file]').val().replace(/C:\\fakepath\\/i, '') == "" && $(".recentUploadSection").text() == "n/a"){
												console.log("empty file upload value");
												
												$("#myModalLabel").html("No File Attached");
												$("#myModalBody").html("<center>You did not attach any files to this association document, please make sure to go back and upload.</center>");
												$(".modal-footer button").html("Ok");
												
												$("#myModal").modal('toggle');
												
												e.preventDefault();
												return;
										
										}else{
											
											checkTodayDate();
											
											$("a.associationDocItem").removeClass("active");
											
											$(".deleteAsscDocListItemBtn").hide();
											if($(this).not(".active")){
												//do nothing
												$(this).find(".deleteAsscDocListItemBtn").show();
											}else if(!$(this).not(".active")){
												//do nothing
												$(this).find(".deleteAsscDocListItemBtn").hide();
											}
											
											$("a.associationDocItem .optionThumb i").attr("class", "fa fa-pencil");
											
											var asscDocLength = $("a.associationDocItem").length + 1;
											if(asscDocLength <= 1){
												$(".submitAsscDocBtn").html("Submit Association Document");
												
												$(".submitAsscDocBtn").prop("disabled", false);
											}else if(asscDocLength >= 2){
												$(".submitAsscDocBtn").html("Submit All ("+asscDocLength+") Association Documents");
											}
											
											
											var filename = $('input[type=file]').val().replace(/C:\\fakepath\\/i, '');


											var sqlAction;
											if($("input[name=asscAction]:checked").val() == "insert"){
												sqlAction = "INSERT"
											}else if($("input[name=asscAction]:checked").val() == "update"){
												sqlAction = "UPDATE"
											}else if($("input[name=asscAction]:checked").val() == "delete"){
												sqlAction = "DELETE"
											};


												
											if(asscDocFormDataName == ""){
												asscDocFormDataName = "undefined name"
											}else{
												//keep the same
											}
											


											$(".associationDocNewItemList").prepend("<a href=\"#\" title='"+asscDocFormDataName+" - "+filename+"' class=\"associationDocItem\" data-action=\"insert\" data-name='"+asscDocFormDataName+"' data-description='"+assDocFormDataDescription+"' data-group='"+assDocFormDataGroup+"' data-uniqueDocID='"+assDocFormDataUniqueDocID+"' data-resortCode='"+assDocFormDataResortCode+"' data-date='"+assDocFormDataDate+"' data-file="+filename+"><li><div class=\"optionThumb col-xs-1\"><i class=\"fa fa-pencil\"></i></div><div class=\"optionTitle col-xs-10\"><i style=\"color: #555; font-weight: normal;\"><span class=\"thisAsscDocIndex\">"+asscDocLength+"</span> &dash; <span class=\"associationDocListItemTitle\">"+asscDocFormDataName+"</span></i></div><div class=\"col-xs-1 deleteAsscDocListItemBtn\" style=\"display: none;\"><i class=\"fa fa-trash\" aria-hidden=\"true\"></i></div></li><div class=\"clearfix\"></div><input  style=\"display: none;\" class=\"sr-only inputName col-xs-12\" type=\"text\" size=\"10\" name=\"name[]\" data-toggle=\"tooltip\" title=\"\" data-placement=\"left\" value='"+asscDocFormDataName+"' data-original-title='"+asscDocFormDataName+"'\><input  style=\"display: none;\" class=\"sr-only col-xs-12\" type=\"text\" size=\"10\" name=\"description[]\" data-toggle=\"tooltip\" title=\"\" data-placement=\"left\" value='"+assDocFormDataDescription+"' data-original-title='"+assDocFormDataDescription+"'\><input  style=\"display: none;\" class=\"sr-only col-xs-12\" type=\"text\" size=\"10\" name=\"group[]\" data-toggle=\"tooltip\" title=\"\" data-placement=\"left\" value='"+assDocFormDataGroup+"' data-original-title='"+assDocFormDataGroup+"'\><input  style=\"display: none;\" class=\"sr-only col-xs-12\" type=\"text\" size=\"10\" name=\"uniqueDocID[]\" data-toggle=\"tooltip\" title=\"\" data-placement=\"left\" value='"+assDocFormDataUniqueDocID+"' data-original-title='"+assDocFormDataUniqueDocID+"'\><input  style=\"display: none;\" class=\"sr-only col-xs-12\" type=\"text\" size=\"10\" name=\"resortCode[]\" data-toggle=\"tooltip\" title=\"\" data-placement=\"left\" value='"+assDocFormDataResortCode+"' data-original-title='"+assDocFormDataResortCode+"'\><input style=\"display: none;\" class=\"sr-only col-xs-12\" type=\"date\" size=\"10\" name=\"date[]\" data-toggle=\"tooltip\" title=\"\" data-placement=\"left\" value='"+assDocFormDataDate+"' data-original-title='"+assDocFormDataDate+"'\><input style=\"display: none;\" class=\"itemFileToUpload col-xs-12\" type=\"text\" size=\"10\" name=\"fileToUpload[]\" data-toggle=\"tooltip\" title=\"\" data-placement=\"left\" value='"+filename+"' data-original-title='"+filename+"'\><input style=\"display: none;\" class=\"sqlActionInput sr-only col-xs-12\" type=\"text\" size=\"10\" name=\"sqlAction[]\" data-toggle=\"tooltip\" title=\"\" data-placement=\"left\" value='"+sqlAction+"' data-original-title='"+sqlAction+"'\></a>");
											
											
											$(".associationCurrentDocForm h5").html("Current Selected Association Document Information");
											
											checkTodayDate();
											$(".associationCurrentDocForm")[0].reset();
											checkTodayDate();
											
											$(".associationCurrentDocFormBtn").prop("disabled",true);
										};
									});
									
									
									
									$(".associationDocTable").on("click", "a.associationDocItem", function(e){
										e.preventDefault();
										$(".associationCurrentDocFormBtn").prop("disabled",false);
										
										
										var asscDocForm = $(".associationCurrentDocForm");
										
										var asscDocIndex = $(this).find(".thisAsscDocIndex").text();
										$(".associationCurrentDocForm h5").html("You are currently editing Association Document #<span class='currentEditingIndex'>"+asscDocIndex+"</span>");
										
										$("a.associationDocItem .optionThumb i").attr("class", "fa fa-pencil");
										$(this).find(".optionThumb i").attr("class", "fa fa-reply");
										
										$("a.associationDocItem").removeClass("active");
										$(this).addClass("active");
										
										
										//needs work -> asscDocForm.find("input[name='asscAction']").val($(this).attr("data-action"));
										asscDocForm.find("input[name='name']").val($(this).attr("data-name"));
										asscDocForm.find("input[name='description']").val($(this).attr("data-description"));
										asscDocForm.find("input[name='group']").val($(this).attr("data-group"));
										asscDocForm.find("input[name='uniqueDocID']").val($(this).attr("data-uniqueDocID"));
										asscDocForm.find("input[name='resortCode']").val($(this).attr("data-resortCode"));
										asscDocForm.find("input[name='date']").val($(this).attr("data-date"));
										
										if($(this).attr("data-file") == ""){
											asscDocForm.find(".recentUploadSection").text("n/a");
										}else{
											asscDocForm.find(".recentUploadSection").text($(this).attr("data-file"));
										}
										
										
										
										$(".deleteAsscDocListItemBtn").hide();
										if($(this).not(".active")){
											//do nothing
											$(this).find(".deleteAsscDocListItemBtn").show();
										}else if(!$(this).not(".active")){
											//do nothing
											$(this).find(".deleteAsscDocListItemBtn").hide();
										}
										
										
										//<i>n/a</i>
										//needs work -> asscDocForm.find("input[name='fileToUpload']")
									});
									
									
									
									
									
									//this function needs work
									//when click save, get the corresponding element on the list to the current editing element.
									$(".associationCurrentDocFormBtn").on("click", function(e){
										e.preventDefault();
										
										// ---------------------------- Assc Doc Form ------------------------------------------- //
										//message above edit form
										//You are currently editing Association Document #currentIndexDoc
										var currentIndexDoc = $(".associationCurrentDocForm .currentEditingIndex").text();
										//console.log("currentIndexDoc - "+currentIndexDoc);
										
										//current editing assc doc form name value
										var formNameInputVal = $(".associationCurrentDocForm input[name='name']").val();
										
										
										// ---------------------------- Assoc Doc List ------------------------------------------- //
										//Association Doc List Item Number Text Value
										var listItemElement = $(".associationDocForm .associationDocNewItemList .associationDocItem .thisAsscDocIndex:contains("+currentIndexDoc+")").text();
										//console.log("listItemElement - "+listItemElement);
										
										//Association Doc List Item Number Object
										var listItemElementParent = $(".associationDocForm .associationDocNewItemList .associationDocItem .thisAsscDocIndex:contains("+currentIndexDoc+")");
										///console.log("listItemElementParent - "+listItemElementParent.text());
										
										//Association Doc List Item Number Hidden Input Object
										var listItemElementParentInput = $(".associationDocForm .associationDocNewItemList .associationDocItem .thisAsscDocIndex:contains("+currentIndexDoc+")").parent().parent().parent().parent().find("input.inputName");
										
										var listItemElementDataAttrParentObj = $(".associationDocForm .associationDocNewItemList .associationDocItem .thisAsscDocIndex:contains("+currentIndexDoc+")").parent().parent().parent().parent();
										
										listItemElementParentInput.attr("value", formNameInputVal);
										//console.log("listItemElementParentInput - "+listItemElementParentInput.val());
										
													
										
										
										var asscDocForm = $(".associationCurrentDocForm"),
											asscDocFormDataName = asscDocForm.find("input[name='name']").val(),
											assDocFormDataDescription = asscDocForm.find("input[name='description']").val(),
											assDocFormDataGroup = asscDocForm.find("input[name='group']").val(),
											assDocFormDataUniqueDocID = asscDocForm.find("input[name='uniqueDocID']").val(),
											assDocFormDataResortCode = asscDocForm.find("input[name='resortCode']").val(),
											assDocFormDataDate = asscDocForm.find("input[name='date']").val();
											
											
										var sqlAction;
										if($("input[name=asscAction]:checked").val() == "insert"){
											sqlAction = "INSERT"
										}else if($("input[name=asscAction]:checked").val() == "update"){
											sqlAction = "UPDATE"
										}else if($("input[name=asscAction]:checked").val() == "delete"){
											sqlAction = "DELETE"
										};
										
										$(".associationDocForm .associationDocNewItemList .associationDocItem .thisAsscDocIndex:contains("+currentIndexDoc+")").parent().parent().parent().parent().find("input.sqlActionInput").val(sqlAction);
										
											
										$(".associationDocItem .optionTitle .associationDocListItemTitle").parent().find(".thisAsscDocIndex:contains("+currentIndexDoc+")").parent().find(".associationDocListItemTitle").text(asscDocFormDataName);
										
										listItemElementDataAttrParentObj.attr("data-name", asscDocFormDataName);
										listItemElementDataAttrParentObj.attr("data-description", assDocFormDataDescription);
										listItemElementDataAttrParentObj.attr("data-group", assDocFormDataGroup);
										listItemElementDataAttrParentObj.attr("data-uniqueDocID", assDocFormDataUniqueDocID);
										listItemElementDataAttrParentObj.attr("data-resortCode", assDocFormDataResortCode);
										listItemElementDataAttrParentObj.attr("data-date", assDocFormDataDate);
										listItemElementDataAttrParentObj.attr("data-action", sqlAction);
										listItemElementDataAttrParentObj.attr("title", asscDocFormDataName+" - "+$('input[type=file]').val().replace(/C:\\fakepath\\/i, ''));
										
										if($('input[type=file]').val().replace(/C:\\fakepath\\/i, '') == "" && $(".recentUploadSection").text() == "n/a"){
											console.log("empty file upload value");
											
											$("#myModalLabel").html("No File Attached");
											$("#myModalBody").html("<center>You did not attach any files to this association document, please make sure to go back and upload.</center>");
											$(".modal-footer button").html("Ok");
											
											$("#myModal").modal('toggle');
											
											return;
										}else{
											listItemElementDataAttrParentObj.attr("data-file", $('input[type=file]').val().replace(/C:\\fakepath\\/i, ''));
											
											console.log("console log (1) - "+listItemElementDataAttrParentObj.find("input.itemFileToUpload").val());
											
											listItemElementDataAttrParentObj.find("input.itemFileToUpload").val($('input[type=file]').val().replace(/C:\\fakepath\\/i, ''));
											listItemElementDataAttrParentObj.find("input.itemFileToUpload").attr("value", $('input[type=file]').val().replace(/C:\\fakepath\\/i, ''));
											
											console.log("console log (2) - "+listItemElementDataAttrParentObj.find("input.itemFileToUpload").val($('input[type=file]').val().replace(/C:\\fakepath\\/i, '')));
										}
										
										
										asscDocForm.find(".recentUploadSection").text($('input[type=file]').val().replace(/C:\\fakepath\\/i, ''));
										$('input[type=file]').val("");
									});
									
									
									
									
									var deleteThisItemFn = function(itemToBeDeleted){
										$(".confirmModal").modal('toggle');
										
										$(".modal-footer button.btn-danger").on("click", function(e){
											e.preventDefault();
											
											itemToBeDeleted.hide();
											itemToBeDeleted.find("input").removeAttr("name");
											itemToBeDeleted.find("input").removeAttr("description");
											itemToBeDeleted.find("input").removeAttr("group");
											itemToBeDeleted.find("input").removeAttr("uniqueDocID");
											itemToBeDeleted.find("input").removeAttr("resortCode");
											itemToBeDeleted.find("input").removeAttr("date");
											itemToBeDeleted.find("input").removeAttr("fileToUpload");
											itemToBeDeleted.find("input").removeAttr("sqlAction");
											
											checkAsscDocLength();
											return;
										});
									};
									
									
									
									
									$(".associationDocTable").on("click", ".deleteAsscDocListItemBtn", function(e){
										e.preventDefault();
										
										$(".confirmModal .modal-title").html("Delete this item?");
										$(".confirmModal .modal-body").html("<center>please confirm that you would like to delete <br/> <strong>"+$(this).parent().find(".thisAsscDocIndex").text()+" - "+$(this).parent().find(".associationDocListItemTitle").text()+"</strong> <br/> from the association impex script list.</center>");
										
										deleteThisItemFn($(this).parent().parent());
										
										
										
											
											
									});
								
									
									
									
									
									
									var addEmptyAsscDocs = function(){
										(function(count) {
											if (count < 5) {
												// call the function.
												$("a.associationDocItem").removeClass("active");
																	
												var asscDocForm = $(".associationCurrentDocForm"),
													asscDocFormDataName = asscDocForm.find("input[name='name']").val();
													
												if(asscDocFormDataName == ""){
													asscDocFormDataName = "undefined name"
												}else{
													//keep the same
												}
												
												var asscDocLength = $("a.associationDocItem").length + 1;
												$(".associationDocNewItemList").prepend("<a href=\"#\" class=\"associationDocItem active\" data-action=\"insert\" data-name='"+asscDocFormDataName+"' data-description='"+asscDocForm.find("input[name='description']").val()+"' data-group='"+asscDocForm.find("input[name='group']").val()+"' data-uniqueDocID='"+asscDocForm.find("input[name='uniqueDocID']").val()+"' data-resortCode='"+asscDocForm.find("input[name='resortCode']").val()+"' data-date='"+asscDocForm.find("input[name='date']").val()+"' data-file=\"vg_resort_map.pdf\"><li><div class=\"optionThumb col-xs-1\"><i class=\"fa fa-reply\"></i></div><!--close resort page option--><div class=\"optionTitle col-xs-11\"><i style=\"color: #555; font-weight: normal;\">"+asscDocLength+" &dash; "+asscDocFormDataName+"</i></div><!--close resort page option--><div class=\"clearfix\"></div></li><!--close list item--><div class=\"clearfix\"></div></a>"); 

												// The currently executing function which is an anonymous function.
												var caller = arguments.callee; 
												window.setTimeout(function() {
													// the caller and the count variables are
													// captured in a closure as they are defined
													// in the outside scope.
													caller(count + 1);
												}, 1);    
											}
											checkAsscDocLength();
										})(0);
									};
								</script>
								
								
								<div class="clearfix"></div>
							</ul>
						</div>
					</div>
				</div>
				
				
				<div class="panel panel-default">
					<div class="panel-heading" style="padding: 10px;">
						<h4 class="panel-title">
							<a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
							View All Association Documents</a>
						</h4>
					</div>
					<div id="collapse2" class="panel-collapse collapse">
						<div class="panel-body">
							<div class='col-md-12' style='padding: 0 0 5px 0;'>
								<div style='border-left: 1px solid #dedede; border-right: 1px solid #dedede; background-color: #D1D9CA; padding: 10px;'>
									<div class='col-xs-1' style='margin-left: 0; font-weight: bold;'>Action</div>
									<div class='col-xs-2' style='font-weight: bold;'>Name</div>
									<div class='col-xs-2' style='font-weight: bold;'>Description</div>
									<div class='col-xs-1' style='font-weight: bold;'>Group</div>
									<div class='col-xs-1' style='font-weight: bold;'>Unique Doc ID</div>
									<div class='col-xs-1' style='font-weight: bold;'>Resort Code</div>
									<div class='col-xs-1' style='font-weight: bold;'>Date</div>
									<div class='col-xs-3' style='font-weight: bold;'>File Name</div>
									
									<div class='clearfix'></div>
								</div>
							</div>
						
							<ul class="existingAssocDocList">
								<li style="list-style: none;">
									<div class="optionThumb col-xs-1">
										<i class="fa fa-pencil pull-left" aria-hidden="true"></i>
										<i class="fa fa-trash pull-right" aria-hidden="true"></i>
									</div>
									
									<div class="col-xs-2">
										<i style="color: #555; font-weight: normal;">
											<span class="thisAsscDocIndex">1</span> &dash; <span class="associationDocListItemTitle">John Davis</span>
										</i>
									</div>
									
									<div class="col-xs-2">
										<i style="color: #555; font-weight: normal;">
											n/a
										</i>
									</div>
									
									<div class="col-xs-1">
										<i style="color: #555; font-weight: normal;">
											n/a
										</i>
									</div>
									
									<div class="col-xs-1">
										<i style="color: #555; font-weight: normal;">
											n/a
										</i>
									</div>
									
									<div class="col-xs-1">
										<i style="color: #555; font-weight: normal;">
											n/a
										</i>
									</div>
									
									<div class="col-xs-1">
										<i style="color: #555; font-weight: normal;">
											n/a
										</i>
									</div>
									
									<div class="col-xs-3">
										<i style="color: #555; font-weight: normal;">
											n/a
										</i>
									</div>
									
									<div class="clearfix"></div></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
				
				
				
				
				
				<div class="clearfix"></div>
			</div>
			
			
		</section>
      </div><!-- /.content-wrapper -->

	<?php require_once('../../footer.php'); ?>
      