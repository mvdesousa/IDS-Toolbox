
var menuScrollTop = 0;
var menuScrollLeft = 0;
var lastScrollTop = 0;

$(document).ready(function() {
	$('.luxurySwitch').click(function() {
		$('.luxurySwitch').toggleClass('on');
		if ( $('.luxurySwitch').hasClass('on') ) {
			$('.explorerBox:not(".luxury")').parents('.column').hide();
		} else {
			$('.explorerBox:not(".luxury")').parents('.column').show();
		}
	});

	$('.luxuryToggle').click(function() {
		if ( $(this).is(':checked') ) {
			$('.explorerBox:not(".luxury")').parents('.column').hide();
		} else {
			$('.explorerBox:not(".luxury")').parents('.column').show();
		}
	});

	// caret fix for default accordions
	$('.default-accordion .panel-heading').click(function() {
		var siblingPanels = $(this).parent().siblings();
		$(siblingPanels).find('i.fa').removeClass('fa-caret-up').addClass('fa-caret-down');
	});

	// default dropdown functionality
	$('.default-dropdown .dropdown-button').click(function() {
		var obj = $(this).closest(".input-group");
		if (obj.hasClass("open")) {
			obj.removeClass("open");
		} else {
			obj.addClass("open");
		}
		return false;
	});
	$('.default-dropdown ul.dropdown-menu li').click(function() {
		$(this).parents('.input-group').find('input').val( $(this).text() );

		var target = $(this).attr('data-target');
		if ( target ) {
			$('.default-dropdown-content-section').hide();
			$(target).show();
		}
	});

	// default mobile tab functionality
	$('.default-mobile-tab').click(function() {
		var target = $(this).attr('data-target');
		$(this).parent().hide();
		$('.mobileSectionProfile').show();
		$(target).show();
	});
	
	// datepicker closes when body is tapped on mobile
	if ( $('.datepicker').is('visible') ) {
		$('body').bind('tapone', function() {
			$('.datepicker').hide();
		});	
	}

	// dropdown closes when body is tapped on mobile
	if ( $('.input-group').hasClass('open') ) {
		$('body').bind('tapone', function() {
			$('.input-group').removeClass('open');
		});	
	}
		

	$('.faq-sections li a[role="tab"] span.standard-tooltip').click(function(e) {
		var modal = $(this).attr("data-modal");
		e.stopPropagation();
		$(modal).modal('show');
	});

	$(".docSelect a").click(function() {
		$(this).stopImmediatePropagation();
		$(this).stopPropagation();
		$(this).preventDefault();
		return false;
	});

	$('#contact-comments').keyup(function() {
		var charCount = $(this).val().length;
		$('#char-count').text(charCount);
	});

	$(window).resize(function() {
		var windowWidth = $(window).width(); 
		if(windowWidth < 992) {
			$('.contact-us-form').removeClass('gray-box-fade-content');
		} else {
			$('.contact-us-form').addClass('gray-box-fade-content');
		}
	});

	$('.QA-checklist #QA-all').click(function(){
		if ( $(this).find('input').is(':checked') ) {
			$(this).parents('.QA-checklist').find('input').prop('checked', true);
		} else {
			$(this).parents('.QA-checklist').find('input').prop('checked', false);
		}
	});
	$('.table-checklist-mobile #QA-mobile-all').click(function() {
		if ( $(this).is(':checked') ) {
			$(this).parents('.table-checklist-mobile').find('input').prop('checked', true);
		} else {
			$(this).parents('.table-checklist-mobile').find('input').prop('checked', false);
		}
	});

	$('.docSelect .dropdown-menu a').click(function() {
		var text = '';
		var doc = $(this).attr('data-doc');
		$('#docModal').modal('show');

		if ( doc === 'disclosure-guide') {
			$('#docModal .modal-body textarea').val('Program Disclosure Guide content');
		} else if ( doc === 'exchange-procedure') {
			$('#docModal .modal-body textarea').val('Program Exchange Procedures content');
		} else if ( doc === 'ii-buyers-guide') {
			$('#docModal .modal-body textarea').val('Interval International Buyers Guide content');
		} else if ( doc === 'points-charts') {
			$('#docModal .modal-body textarea').val('Vacation Club Points Charts content');
		} else if ( doc === 'terms-conditions') {
			$('#docModal .modal-body textarea').val('Marriott Rewards Terms and Conditions content');
		} else if ( doc === 'terms-conditions-oceanwatch') {
			$('#docModal .modal-body textarea').val('Marriott Rewards Terms and Conditions for OceanWatch Owners content');
		}

		return false;
	});

	$('.enterEmails .addEmail').click(function() {
		var numEmails = $('.newEmail').length;
		var inputID = "addEmail" + numEmails;
		var emailDiv = 

			'<div class="newEmail">' +
				'<div class="clearfix"></div>' +
				'<span>Additional Email:</span>' +
				'<div class="emailInput">' +
					'<input type="email" name="email[]" id="' + inputID + '" placeholder="Email Address" required="">' +
					'<button class="visible-md visible-lg viewButton removeEmail">Remove</button>' +
					'<a href="#" class="visible-sm-block visible-xs-block btn-primary removeEmail" style="margin-bottom: 15px;">Remove Email</a>' +
				'</div>' +
				'<div class="clearfix"></div>' +
			'</div>';
			
		$(emailDiv).appendTo('.enterEmails');

		$('.newEmail .removeEmail').unbind('click');
		$('.newEmail .removeEmail').click(function() {
			$(this).closest('.newEmail').remove();
			return false;
		});
		return false;
	});


	$('.acct-select-continue').click(function() {
		$('.choose-account').css('display', 'none');
		$('.referralStatus').css('display', 'block');
	});

	$('#ammenitiesAccordion .toPhotos, .resortNav a.toPhotos').click(function() {
		$('#galleryModal').modal('show'); 
		$('#galleryModal').on('shown.bs.modal', function(e) {
			$('#galleryModal ul.gallery-tabs li a[href="#resort-photos"]').click();
		});
		return false;
	});
	$('.resort-galleries .gallery.photo a, .resortNav a.photoGallery').click(function() {
		var target = $(this).attr('data-target');
		$('#galleryModal').on('shown.bs.modal', function(e) {
			$('#galleryModal ul.gallery-tabs li a[href="#resort-photos"]').click();
			$('#galleryModal .photos-dropdown-menu li[data-info="' + target + '"]').click();
		});
		$('#galleryModal').modal('show');
		return false;
	});
	$('.resort-galleries .gallery.floorplan a, #ammenitiesAccordion .toFP, .resortNav a.floorplans').click(function() {
		var target = $(this).attr('data-target');
		
		if ( target !== '') {
			$('#galleryModal').on('shown.bs.modal', function(e) {
				$('#galleryModal ul.gallery-tabs li a[href="#resort-floorplans"]').click();
				$('#galleryModal .floorplan-dropdown-menu li[data-image="' + target + '"]').click();
			});
		} else {
			$('#galleryModal').on('shown.bs.modal', function(e) {
				$('#galleryModal ul.gallery-tabs li a[href="#resort-floorplans"]').click();
			}); 
		}
		$('#galleryModal').modal('show');
		
		return false; 
	});

	$('#galleryModal .floorplan-dropdown-menu li').click(function() {
		var image = $(this).attr('data-image');
		$('.floorplan-image').css('display', 'none');
		$(image).css('display', 'block');
	});

	$('#galleryModal .photos-dropdown-menu li').click(function() {
		var imageSet = $(this).attr('data-image-set');
		$('.gallery-image-set').hide();
		$(imageSet).show();
	});

	$('#galleryModal .gallery-image-set .gallery-thumbnails img').click(function() {
		var image = $(this).attr('data-image');
		var parent = "#" + $(this).parents('.gallery-image-set').attr('id');
		$(parent).find('.gallery-main-img').attr('src', image);
		$('#galleryModal .gallery-image-set .gallery-thumbnails img.active').removeClass('active');
		$(this).addClass('active');
	});
	$("input:not(.dropdown-toggle, [type=checkbox], [type=radio])").focus(function() {
		$("body").addClass("keyboard");

		var windowWidth = $(window).width();
		if (windowWidth < 992) {
			$('.mainNavigation, .container').stop();
			$(".mainNavigation" ).animate({'top':'-65px'}, 200, 'linear', function() {
				$(this).hide();
			});
			$(".container").animate({ 'padding-top' : '0px' }, 200, 'linear');
		}
		else {
			$('.mainNavigation, .container').stop();
			$('.mainNavigation').removeAttr('style');
			$('.container').removeAttr('style');
		}		
	});

	$("input:not(.dropdown-toggle, [type=checkbox], [type=radio])").blur(function() {
		$("body").removeClass("keyboard");

		var windowWidth = $(window).width();
		if (windowWidth < 992) {
			$('.mainNavigation, .container').stop();
			$(".mainNavigation").show();
			$(".mainNavigation").animate({'top':'0'}, 200, 'linear');
			$(".container").animate({ 'padding-top' : '64px' }, 200, 'linear');
		}
		else {
			$('.mainNavigation, .container').stop();
			$('.mainNavigation').removeAttr('style');
			$('.container').removeAttr('style');
		}
	});
	
	$(window).on("orientationchange", function(event) {
		var windowWidth = $(window).width();

		//landscape final position
		if(window.innerHeight < window.innerWidth){
			if ($("body").hasClass("keyboard")) {
				$(".mainNavigation" ).css("top","-65px");
				$(".container" ).css("padding-top","0");
			}
			else {
				if (windowWidth < 992) {
					$(".mainNavigation" ).css("top","0");
					$(".container" ).css("padding-top","64px");
				}
				else {
					$('.mainNavigation, .container').stop();
					$('.mainNavigation').removeAttr('style');
					$('.container').removeAttr('style');
				}
			}
		}
		//portrait final position
		else {
			if ($("body").hasClass("keyboard")) {
				$(".mainNavigation" ).css("top","-65px");
				$(".container" ).css("padding-top","0");
			}
			else {
				if (windowWidth < 992) {
					$(".mainNavigation" ).css("top","0");
					$(".container" ).css("padding-top","64px");
				}
				else {
					$('.mainNavigation, .container').stop();
					$('.mainNavigation').removeAttr('style');
					$('.container').removeAttr('style');
				}
			}
		}
	});
$('.redirect-landing-page .dropdown').hover(function(){
	$(this).find('.dropdown-menu').css('display','block');
	$(this).addClass('open');
	$(this).find('i').addClass('fa-caret-up');
},function(){
	$(this).find('.dropdown-menu').css('display','none');
	$(this).removeClass('open');
	$(this).find('i').removeClass('fa-caret-up');
});
$(window).resize(function() {
	var windowWidth = $(window).width(); 
	if(windowWidth < 992) {
		$('#tip-textarea').attr('placeholder', 'Type a Tip...');

		$('.eligibility-background .socialNavDrop input').val('Select Usage Options');

		$(window).unbind("scroll");
		$(window).scroll(function(event){
			var st = $(this).scrollTop();
			if (st > lastScrollTop && parseInt($('.mainNavigation').css('top')) !== -65 ){
				$('.mainNavigation, .container').stop();
				$(".mainNavigation" ).animate({'top':'-65px'}, 200, 'linear', function() {
					$(this).hide();
				});
				$(".container").animate({ 'padding-top' : '0px' }, 200, 'linear');
			} 
			else if (st < lastScrollTop && parseInt($('.mainNavigation').css('top')) !== 0 && !$("body").hasClass("keyboard")) {
				$('.mainNavigation, .container').stop();
				$(".mainNavigation").show();
				$( ".mainNavigation" ).animate({'top':'0'}, 200, 'linear');
				$(".container").animate({ 'padding-top' : '64px' }, 200, 'linear');
			}
			lastScrollTop = st;
		});
	} else {
		$('#tip-textarea').attr('placeholder', '');

		$('.eligibility-background .socialNavDrop input').val('Elect Vacation Club Points');

		$(window).unbind("scroll");
		$('.mainNavigation, .container').stop();
		$('.mainNavigation').removeAttr('style');
		$('.container').removeAttr('style');
	}
});
$(window).resize();

if($('#forcedModal').length > 0){
	$('#forcedModal').modal('toggle');
}

$(".menu").sidr({
	name: "mobileMenu",
	side: "left",
	displace: false,
	onOpen: function() {
			// Save our scroll position.
			menuScrollTop = $("body").scrollTop();
			menuScrollLeft = $("body").scrollLeft();

			// Gray out the bpdy.
			$("#shade").show();

			// Disable scrolling on Mobile & Tablets.
			$('body').bind('touchmove', function (e) {
				if (!$("#mobileMenu").has($(e.target)).length ||
					$("#mobileMenu").scrollTop() >= $("#mobileMenu")[0].scrollHeight - $(window).height()) {
					
					if ($("#mobileMenu").scrollTop() >= $("#mobileMenu")[0].scrollHeight - $(window).height()) {
						$("#mobileMenu").scrollTop($("#mobileMenu").scrollTop() - 1);
					}

					e.preventDefault();
				}
			});

			// Disable scrolling on PC.
			$(document).scroll(function() {
				$("body").scrollTop(menuScrollTop);
				$("body").scrollLeft(menuScrollLeft);
			});
		},
		onClose: function() {
			$("#shade").hide();
			$(document).unbind("scroll");
			$('body').unbind('touchmove');
		}
	});

$(".reserve").sidr({
	name: "resortMenu",
	side: "right",
	displace: false,
	onOpen: function() {
			// Save our scroll position.
			menuScrollTop = $("body").scrollTop();
			menuScrollLeft = $("body").scrollLeft();

			// Gray out the bpdy.
			$("#shade").show();

			// Disable scrolling on Mobile & Tablets.
			$('body').bind('touchmove', function (e) {
				if (!$("#mobileMenu").has($(e.target)).length ||
					$("#mobileMenu").scrollTop() >= $("#mobileMenu")[0].scrollHeight - $(window).height()) {
					
					if ($("#mobileMenu").scrollTop() >= $("#mobileMenu")[0].scrollHeight - $(window).height()) {
						$("#mobileMenu").scrollTop($("#mobileMenu").scrollTop() - 1);
					}

					e.preventDefault();
				}
			});

			// Disable scrolling on PC.
			$(document).scroll(function() {
				$("body").scrollTop(menuScrollTop);
				$("body").scrollLeft(menuScrollLeft);
			});
		},
		onClose: function() {
			$("#shade").hide();
			$(document).unbind("scroll");
			$('body').unbind('touchmove');
		}
	});

$(".contact").sidr({
	name: "contactMenu" ,
	side:"right" ,
	displace: false,
	onOpen: function() {
			// Save our scroll position.
			menuScrollTop = $("body").scrollTop();
			menuScrollLeft = $("body").scrollLeft();

			// Gray out the bpdy.
			$("#shade").show();

			// Disable scrolling on Mobile & Tablets.
			$('body').bind('touchmove', function (e) {
				if (!$("#contactMenu").has($(e.target)).length ||
					$("#contactMenu").scrollTop() >= $("#contactMenu")[0].scrollHeight - $(window).height()) {
					
					if ($("#contactMenu").scrollTop() >= $("#contactMenu")[0].scrollHeight - $(window).height()) {
						$("#contactMenu").scrollTop($("#contactMenu").scrollTop() - 1);
					}

					e.preventDefault();
				}
			});

			// Disable scrolling on PC.
			$(document).scroll(function() {
				$("body").scrollTop(menuScrollTop);
				$("body").scrollLeft(menuScrollLeft);
			});
		},
		onClose: function() {
			$("#shade").hide();
			$(document).unbind("scroll");
			$('body').unbind('touchmove');
		}
	});

$(".resources").sidr({
	name: "resourcesMenu" ,
	side:"right" ,
	displace: false,
	onOpen: function() {
			// Save our scroll position.
			menuScrollTop = $("body").scrollTop();
			menuScrollLeft = $("body").scrollLeft();

			// Gray out the bpdy.
			$("#shade").show();

			// Disable scrolling on Mobile & Tablets.
			$('body').bind('touchmove', function (e) {
				if (!$("#contactMenu").has($(e.target)).length ||
					$("#contactMenu").scrollTop() >= $("#contactMenu")[0].scrollHeight - $(window).height()) {
					
					if ($("#contactMenu").scrollTop() >= $("#contactMenu")[0].scrollHeight - $(window).height()) {
						$("#contactMenu").scrollTop($("#contactMenu").scrollTop() - 1);
					}

					e.preventDefault();
				}
			});

			// Disable scrolling on PC.
			$(document).scroll(function() {
				$("body").scrollTop(menuScrollTop);
				$("body").scrollLeft(menuScrollLeft);
			});
		},
		onClose: function() {
			$("#shade").hide();
			$(document).unbind("scroll");
			$('body').unbind('touchmove');
		}
	});

$("#shade, .closeMenu, a[data-target='#friendShareOverlay'], #resortMenu .links a[data-toggle='modal']").click(function() {
	$.sidr("close", "mobileMenu");
	$.sidr("close", "resortMenu");
	$.sidr("close", "contactMenu");
	$.sidr("close", "resourcesMenu");

});

$(".mobile-filter .dropdown-button").click(function() {
	if ($(".mobile-filter .col-xs-4").hasClass("open")) {
		$(".mobile-filter .col-xs-4").removeClass("open");
	}

	if ($(".mobile-filter .input-group").hasClass("open")) {
		$(".mobile-filter .input-group").removeClass("open");
	}
	else {
		$(".mobile-filter .input-group").addClass("open");
	}

	return false;
});

$(".resortSidebar .dropdown-button, .resortOverview .dropdown-button, .socialNavDrop .dropdown-button, .select-tip-board .dropdown-button, .searchDrops .dropdown-button").click(function(e) {
	var obj = $(this).closest(".input-group");
	if (obj.hasClass("open")) {
		obj.removeClass("open");
	}
	else {
		obj.addClass("open");
	}

	return false;
});

$(".mobile-filter .input-group input").click(function() {
	if ($(".mobile-filter .col-xs-4").hasClass("open")) {
		$(".mobile-filter .col-xs-4").removeClass("open");
	}
});

$(".mobile-filter .col-xs-4 button").click(function() {
	if ($(".mobile-filter .input-group").hasClass("open")) {
		$(".mobile-filter .input-group").removeClass("open");
	}
});

$(".mobile-filter .col-xs-4 ul li a").click(function() {
	var obj = $(this).siblings("input");
	if (obj.prop("checked")) {
		$(this).siblings("input").prop("checked", false);
	}
	else {
		$(this).siblings("input").prop("checked", true);
	}

	return false;
});

$("#mobileMenu .left button").click(function() {
	location.href = "#";
});

$('.points-calculator .add-on').click(function(){
	location.href="#upHere";
});

$("#mobileMenu .left button.tipboard-search").click(function() {
	location.href = "tip-board-search-results.html";
	$.sidr("close", "mobileMenu");
});

$('input:radio[name="forgot-password-radio"]').change( function(){
	if($('input[name=forgot-password-radio]:checked').val() === 'User-Name'){
		$('.account-identification-text').html('Enter your <strong>User Name:</strong>');
		$('#mobile-identification-input').attr("placeholder","  USERNAME:");
	}else{
		$('.account-identification-text').html('Enter your <strong>Customer-ID:</strong>');
		$('#mobile-identification-input').attr("placeholder","  CUSTOMER ID:");
	}
});

$('input:radio[name="forgot-password-radio"]').change();

$('input:radio[name="loan-summary-radio"]').change( function(){
	$('#loan-summary').collapse('show');
	$('.loan-panel-header').text($(this).attr("value"));
});

if ($("#username-field, #password-field").length === 2) {
	$(window).resize(function() {
		var w = $(this).width();

			// Large Desktop
			if (w >= 1200) {
				$("#username-field").attr("placeholder", "Enter your username here");
				$("#password-field").attr("placeholder", "Enter your password here");
			}
			// Desktop
			else if (w >= 992) {
				$("#username-field").attr("placeholder", "Enter your username here");
				$("#password-field").attr("placeholder", "Enter your password here");
			}
			// Tablet
			else if (w >= 768) {
				$("#username-field").attr("placeholder", "USERNAME");
				$("#password-field").attr("placeholder", "PASSWORD");
			}
			// Phone
			else {
				$("#username-field").attr("placeholder", "USERNAME");
				$("#password-field").attr("placeholder", "PASSWORD");
			}
		});
	$(window).resize();
}

$(".footerExpand").expander({
	slicePoint: 100,
	preserveWords: true,
	expandText: 'See more',
	userCollapseText: 'See less',
	moreClass: 'see-more',
	lessClass: 'see-less'
});
$(".footerExpand div.summary span a").append("<i class=\"fa fa-chevron-circle-down\"></i>");
$(".footerExpand div.details span a").append("<i class=\"fa fa-chevron-circle-up\"></i>");

$('.saveProfile, .cancelProfile').hide();

$('.saveProfile').click(function(){
	$('.saveProfile').hide();
	$('.cancelProfile').hide();
	$('.profileContent .edit').show();
	$('.addRemoveButtons').css("display","none");
	$('.profileRemoveButton').hide();
	$('.profileCheckboxLabel').hide();
	$('.rwd-table td span').css("top","-40px");
	$('#accountDetails input').each(function(){
		var text = $(this).val().trim();
		var size = $(this).context.className;
		var validate = $(this).context.name;
		var input = $('<p class="profileValue" data-field="text" data-size="' + size + '" data-validate="' + validate + '">' + text +' </p>');
		if($(this).attr('id') !== "profileCheck"){
			$(this).replaceWith(input);
		}
	});

	$('#communicationSettings input').each(function(){
		var text = $(this).val().trim();
		var size = $(this).context.className;
		var validate = $(this).context.name;
		var input = $('<p class="profileValue" data-field="text" data-size="' + size + '" data-validate="' + validate + '">' + text +' </p>');
		if($(this).attr('id') !== "profileCheck"){
			$(this).replaceWith(input);
		}
	});

	$('select').each(function(){
		var text = $(this).val().trim();
		optionalValues = $(this).attr("data-values");
		var size = $(this).context.className;
		var input = $('<p class="profileValue" data-field="select" data-size="' + size + '" data-values="' + optionalValues + '" >' + text +' </p>');
		$(this).replaceWith(input);
	});
});

$('.cancelProfile').click(function(){
	$('.saveProfile').hide();
	$('.cancelProfile').hide();
	$('.edit').show();
	$('.addRemoveButtons').css("display","none");
	$('.profileRemoveButton').hide();
	$('.profileCheckboxLabel').hide();
	$('.rwd-table td span').css("top","-40px");
	$('#accountDetails input').each(function(){
		var text = $(this).val().trim();
		var size = $(this).context.className;
		var validate = $(this).context.name;
		var input = $('<p class="profileValue" data-field="text" data-size="' + size + '" data-validate="' + validate + '">' + text +' </p>');
		if($(this).attr('id') !== "profileCheck"){
			$(this).replaceWith(input);
		}
	});

	$('#communicationSettings input').each(function(){
		var text = $(this).val().trim();
		var size = $(this).context.className;
		var validate = $(this).context.name;
		var input = $('<p class="profileValue" data-field="text" data-size="' + size + '" data-validate="' + validate + '">' + text +' </p>');
		if($(this).attr('id') !== "profileCheck"){
			$(this).replaceWith(input);
		}
	});

	$('select').each(function(){
		var text = $(this).val().trim();
		optionalValues = $(this).attr("data-values");
		var size = $(this).context.className;
		var input = $('<p class="profileValue" data-field="select" data-size="' + size + '" data-values="' + optionalValues + '" >' + text +' </p>');
		$(this).replaceWith(input);
	});
});

$('.edit').click(function(){
	$('.saveProfile').show();
	$('.cancelProfile').show();
	$('.profileContent .edit').hide();
	$('.addRemoveButtons').css("display","block");
	$('.profileRemoveButton').show();
	$('.profileCheckboxLabel').show();
	$('p[data-field]').each(function(){
		var inputType;
		var optionalValues;
		var optionalValuesArray;
		var inputSize = $(this).attr("data-size");
		var $outer = $(this).text().trim();
		inputType = $(this).attr("data-field");
		var inputValidation = $(this).attr("data-validate");
		if(inputType === "text"){
			var input = $('<input type="text" class="' + inputSize + '" name="'+ inputValidation +'" />');
			$(this).replaceWith(input);

			if (inputValidation === 'phone') {
				$(input).on("keydown keyup", validatePhoneNumber);
				$(input).on("blur", validatePhoneLength);
			}

			if(inputValidation === 'email') {
				$(input).blur(validateEmail);
			}

			input.val($outer);
		}
		else if(inputType === "select"){
			optionalValues = $(this).attr("data-values");
			optionalValuesArray = optionalValues.split(',');
			var select = $('<select class="' + inputSize + '" data-values="' + optionalValues + '" >');
			$(optionalValuesArray).each(function(index,val){
				var option;
				if($outer === val){
					option = $('<option selected="selected">');
				}
				else{
					option = $('<option>');
				}
				option.append(optionalValuesArray[optionalValuesArray.indexOf(val)]);
				option.append('</option>');
				select.append(option);
			});
			select.append('</select');
			$(this).replaceWith(select);
		}
	});
});

if($('.loan-summary-radio-div input').length > 0){
	$(window).resize(function() {
		if(window.innerWidth<992){
			$('.loan-summary-radio-div').hide();
			$('#loan-summary').attr("style","margin-top: 10px");
			$('#loan-summary').show();
		}
		else{
			$('.loan-summary-radio-div').show();
			$('#loan-summary').show();
			$('#loan-summary').attr("style","margin-top: -100px");
		}
	});
}

$('.loan-summary-radio-div input').click(function(){
	if(window.innerWidth<992){
		$('.loan-summary-radio-div').hide();
		$('#loan-summary').show();
		$('.mobileSearch .loanSummaryTitle').attr("style","display:block !important");
		$('.mobileSearch .loanTitle').hide();
	}
});

$('.loanBack').click(function(){
	$('.loan-summary-radio-div').show();
	$('#loan-summary').hide();
	$('.mobileSearch .loanSummaryTitle').attr("style","display:none !important");
	$('.mobileSearch .loanTitle').show();
});

$('.filterRadio').click(function(e) {
	e.stopPropagation();
});

$('.profileContent .edit').click(function(){
	$('.passwordLabel').hide();
	$('.passInput').css("display","block");
	$('.changePassword').hide();
});

$('.cancelProfile').click(function(){
	$('.passwordLabel').show();
	$('.passInput').hide();
	$('.changePassword').show();
});

$('.saveProfile').click(function(){
	$('.passwordLabel').show();
	$('.passInput').hide();
	$('.changePassword').show();
});

$('#accountDet').click(function(){
	$('.mobileSectionProfile').css("display","block");
	$('.pseudoContent').attr("style","display: none !important");
	$('.content').attr("style","display: block !important");
	$('.defaultTitle').attr("style","display: none");
	$('.accountDetailTitle').attr("style","display: block");
});

$('#commSet').click(function(){
	$('.mobileSectionProfile').css("display","block");
	$('.pseudoContent').attr("style","display: none !important");
	$('.content').attr("style","display: block !important");
	$('.defaultTitle').attr("style","display: none");
	$('.communicationSettingTitle').attr("style","display: block");
});

$('#userAcc').click(function(){
	$('.mobileSectionProfile').css("display","block");
	$('.pseudoContent').attr("style","display: none !important");
	$('.content').attr("style","display: block !important");
	$('.defaultTitle').attr("style","display: none");
	$('.userAccountTitle').attr("style","display: block");
});

$('#internAcc').click(function(){
	$('.mobileSectionProfile').css("display","block");
	$('.pseudoContent').attr("style","display: none !important");
	$('.content').attr("style","display: block !important");
	$('.defaultTitle').attr("style","display: none");
	$('.intervalTitle').attr("style","display: block");
});

$('#weeksOwners').click(function(){
	$('.mobileSectionProfile').css("display","block");
	$('.pseudoContent').attr("style","display: none !important");
	$('.content').attr("style","display: block !important");
	$('.defaultTitle').attr("style","display: none");
	$('.accountDetailTitle').attr("style","display: block");
});
$('#weeksOwners_mobile').click(function() {
	$('.mobileSectionProfile').css("display","block");
	$('.pseudoContent').attr("style","display: none !important");
	$('.faq-intro').attr("style","display: none !important");
});

$('#vcpo').click(function(){
	$('.mobileSectionProfile').css("display","block");
	$('.pseudoContent').attr("style","display: none !important");
	$('.content').attr("style","display: block !important");
	$('.defaultTitle').attr("style","display: none");
	$('.accountDetailTitle').attr("style","display: block");
});
$('#vcpo_mobile').click(function() {
	$('.mobileSectionProfile').css("display","block");
	$('.pseudoContent').attr("style","display: none !important");
	$('.faq-intro').attr("style","display: none !important");
});

$('#enrolledOwners').click(function(){
	$('.mobileSectionProfile').css("display","block");
	$('.pseudoContent').attr("style","display: none !important");
	$('.content').attr("style","display: block !important");
	$('.defaultTitle').attr("style","display: none");
	$('.accountDetailTitle').attr("style","display: block");
});
$('#enrolledOwners_mobile').click(function() {
	$('.mobileSectionProfile').css("display","block");
	$('.pseudoContent').attr("style","display: none !important");
	$('.faq-intro').attr("style","display: none !important");
});
$('#golfMobile').click(function() {
	$('.mobileSectionProfile').css("display","block");
	$('.pseudoContent').attr("style","display: none !important");
	$('.content').attr("style","display: block !important");
});
$('#hikeMobile').click(function() {
	$('.mobileSectionProfile').css("display","block");
	$('.pseudoContent').attr("style","display: none !important");
	$('.content').attr("style","display: block !important");
});
$('#bikeMobile').click(function() {
	$('.mobileSectionProfile').css("display","block");
	$('.pseudoContent').attr("style","display: none !important");
	$('.content').attr("style","display: block !important");
});
$('#raftMobile').click(function() {
	$('.mobileSectionProfile').css("display","block");
	$('.pseudoContent').attr("style","display: none !important");
	$('.content').attr("style","display: block !important");
});
$('#multi_sportMobile').click(function() {
	$('.mobileSectionProfile').css("display","block");
	$('.pseudoContent').attr("style","display: none !important");
	$('.content').attr("style","display: block !important");
});
$('#drivingMobile').click(function() {
	$('.mobileSectionProfile').css("display","block");
	$('.pseudoContent').attr("style","display: none !important");
	$('.content').attr("style","display: block !important");
});

$('.profileBack').click(function(){
	$('.cancelProfile').trigger('click');
	if( $('.defaultTitle').css('display') === 'block'){

	}
	else if( $('.intervalTitle').css('display') === 'block'){
		$('.content').attr("style","display: none !important");
		$('.pseudoContent').attr("style","display: initial !important");
		$('.defaultTitle').attr("style","display: block");
		$('.intervalTitle').attr("style","display: none");
	}
	else if( $('.accountDetailTitle').css('display') === 'block'){
		$('.pseudoContent').attr("style","display: initial !important");
		$('.content').attr("style","display: none !important");
		$('.defaultTitle').attr("style","display: block");
		$('.accountDetailTitle').attr("style","display: none");
	}
	else if( $('.communicationSettingTitle').css('display') === 'block'){
		$('.pseudoContent').attr("style","display: initial !important");
		$('.content').attr("style","display: none !important");
		$('.defaultTitle').attr("style","display: block");
		$('.communicationSettingTitle').attr("style","display: none");
	}
	else if( $('.userAccountTitle').css('display') === 'block'){
		$('.pseudoContent').attr("style","display: initial !important");
		$('.content').attr("style","display: none !important");
		$('.defaultTitle').attr("style","display: block");
		$('.userAccountTitle').attr("style","display: none");
	}
});

$('.activities-panel').click(function(){
	window.setTimeout(toggleCarets,365);
});

function toggleCarets(){
	$('.panel').each(function(){
		if($(this).find('.panel-collapse').hasClass('in')){
			$(this).find('.panel-heading i').addClass('fa-caret-up');
			$(this).find('.panel-heading i').removeClass('fa-caret-down');
		}else{
			$(this).find('.panel-heading i').removeClass('fa-caret-up');
			$(this).find('.panel-heading i').addClass('fa-caret-down');
		}
	});
};

$('.date').datepicker();

$(function() {
	var today = new Date();
	var month = today.getMonth()+1;
	$('.span2').val(month+"/"+today.getDate()+"/"+today.getFullYear());
	$('.span2').attr("value", month+"/"+today.getDate()+"/"+today.getFullYear());
	$('.date').attr("data-date", month+"/"+today.getDate()+"/"+today.getFullYear());
});

$('.datepicker tbody .day').on({
	click:function(){
		$('.datepicker').attr("style","display: none");
	}
});

$('.date').datepicker().on('changeDate',function(){
	var selectDate = $('.span2').val().split('/');
	var now = new Date();
	var nowDay = now.getDate();
	var nowMonth = now.getMonth()+1;
	var nowYear = now.getFullYear();
	if(parseInt(selectDate[2]) > nowYear){
		$('.datepicker').hide();
	}else if(parseInt(selectDate[2]) === nowYear){
		if(parseInt(selectDate[0]) > nowMonth){
			$('.datepicker').hide();
		}else if(parseInt(selectDate[0]) === nowMonth){
			if(parseInt(selectDate[1]) >= nowDay){
				$('.datepicker').hide();
			}else{
				alert("This date has already past, please select select a date in the future.");
			}
		}else{
			alert("This date has already past, please select select a date in the future.");
		}
	}else{
		alert("This date has already past, please select select a date in the future.");
	}
}).data('datepicker');

$('.hide-details-button').click(function() {
	var $hideShowText = $('.toggleText').html();
	var $hideSHowInfo = $('.toggleTextInfo').html();
	if($hideShowText === "HIDE DETAILS") {
		$('.toggleText').html("SHOW DETAILS");
	} else if ($hideShowText ==="SHOW DETAILS"){
		$('.toggleText').html("HIDE DETAILS");
	} else if ($hideSHowInfo === "SHOW DETAILS") {
		$('.toggleTextInfo').html("HIDE DETAILS");
	} else if($hideSHowInfo === "HIDE DETAILS") {
		$('.toggleTextInfo').html("SHOW DETAILS");
	}
});

$('#hideDetailsSelected').click(function() {
	var $toggleTextLinkss = $('#hideDetailsSelected').html();
	if($toggleTextLinkss === '(Show Details)') {
		$('#hideDetailsSelected').html('(Hide Details)');
	} else if ($toggleTextLinkss === '(Hide Details)') {
		$('#hideDetailsSelected').html('(Show Details)');
	}
});

$("#payment-amount-input").on("keydown keyup", function(){
	var valid = /^\d{0,10}(\.\d{0,2})?$/.test(this.value),
	val = this.value;

	if(!valid){
		var input = val.split("");
		var onePeriod = true;
		var valid = jQuery.grep(input, function(a){
			if(onePeriod && a==='.'){
				onePeriod = false;
				return a;
			}else if(a<10){
				return a;
			}
		});
		this.value = valid.join("");
	}
});

$(".payment-details-table td input, #payment-details-park-body-inner input").on("keydown keyup", function(){
	var valid = /^\d{0,10}(\.\d{0,2})?$/.test(this.value),
	val = this.value;

	if(!valid){
		var input = val.split("");
		var onePeriod = true;
		var valid = jQuery.grep(input, function(a){
			if(onePeriod && a==='.'){
				onePeriod = false;
				return a;
			}else if(a<10){
				return a;
			}
		});
		this.value = valid.join("");
	}
});

$(".principal-balance").on("keydown keyup", function(){
	var valid = /^\d{0,10}(\.\d{0,2})?$/.test(this.value),
	val = this.value;

	if(!valid){
		var input = val.split("");
		var onePeriod = true;
		var valid = jQuery.grep(input, function(a){
			if(onePeriod && a==='.'){
				onePeriod = false;
				return a;
			}else if(a<10){
				return a;
			}
		});
		this.value = valid.join("");
	}
});

$("#amount-to-pay").on("keydown keyup", function(){
	var valid = /^\d{0,10}(\.\d{0,2})?$/.test(this.value),
	val = this.value;

	if(!valid){
		var input = val.split("");
		var onePeriod = true;
		var valid = jQuery.grep(input, function(a){
			if(onePeriod && a==='.'){
				onePeriod = false;
				return a;
			}else if(a<10){
				return a;
			}
		});
		this.value = valid.join("");
	}
});

$("#amount-to-pay-single").on("keydown keyup", function(){
	var valid = /^\d{0,10}(\.\d{0,2})?$/.test(this.value),
	val = this.value;

	if(!valid){
		var input = val.split("");
		var onePeriod = true;
		var valid = jQuery.grep(input, function(a){
			if(onePeriod && a==='.'){
				onePeriod = false;
				return a;
			}else if(a<10){
				return a;
			}
		});
		this.value = valid.join("");
	}
});

$("#no-nights-input").on("keydown keyup", function(){
	var valid = /^\d{0,10}?$/.test(this.value),
	val = this.value;

	if(!valid){
		var input = val.split("");
		var valid = jQuery.grep(input, function(a){
			if(a<10){
				return a;
			}
		});
		this.value = valid.join("");
	}
});

var showChar = 100;
var ellipsestext = "...";
var moretext = "more";
var lesstext = "less";
$('.more').each(function() {
	var content = $(this).html();

	if(content.length > showChar) {

		var c = content.substr(0, showChar-1);
		var h = content.substr(showChar-1, content.length - showChar);

		var html = c + '<span class="moreellipses">' + ellipsestext+ '&nbsp;</span><span class="morecontent"><span>' + h + '</span>&nbsp;&nbsp;<a href="" class="morelink">' + moretext + '</a></span>';

		$(this).html(html);
	}

});

$(".clickable").click(function(){
	if($(window).width()<992){
		var link = $(this).find('.morelink');
		if(link.hasClass("less")) {
			link.removeClass("less");
			link.html(moretext);
		} else {
			link.addClass("less");
			link.html(lesstext);
		}
		link.parent().prev().toggle();
		link.prev().toggle();
		return false;
	}
});

$(".morelink").click(function(){
	if($(window).width()<992){
		if($(this).hasClass("less")) {
			$(this).removeClass("less");
			$(this).html(moretext);
		} else {
			$(this).addClass("less");
			$(this).html(lesstext);
		}
		$(this).parent().prev().toggle();
		$(this).prev().toggle();
		return false;
	}
});

$('.top-ten-show-all').click(function(){
	if($(this).hasClass("allHidden")){
		$('.morelink').each(function(){
			if($(this).hasClass("less")) {
			} else {
				$(this).addClass("less");
				$(this).html(lesstext);
				$(this).parent().prev().toggle();
				$(this).prev().toggle();
			}
		});
		$(this).html('Hide All <img src="images/hide-all.jpg">');
		$(this).removeClass("allHidden");
	}else{
		$('.morelink').each(function(){
			if($(this).hasClass("less")) {
				$(this).removeClass("less");
				$(this).html(moretext);
				$(this).parent().prev().toggle();
				$(this).prev().toggle();
			} else {
			}
		});
		$(this).html('Show All <img src="images/show-all.jpg">');
		$(this).addClass("allHidden");
	}
});

$('.collapse-table').click(function(){
	$(this).closest("tr").toggleClass("hiddenRow");
});

$('.showOptions').click(function(){
	var width = window.innerWidth;
	if(width<768){
		$(this).parent().next('table').css('display','table');
	}else{
		$(this).parent().next('table').css('display','table');
	}
});

$('.show-all').click(function(){
	if($(this).hasClass("allHidden")){
		$('tbody').find('tr.hiddenRow').toggleClass("hiddenRow");
		$(this).html('Hide All <img src="images/hide-all.jpg">');
		$(this).removeClass("allHidden");
	}else{
		$('tbody').find('tr').each(function(){
			if($(this).hasClass('hiddenRow')){
			}else{
				$(this).toggleClass('hiddenRow');
			}
		});
		$(this).html('Show All <img src="images/show-all.jpg">');
		$(this).addClass("allHidden");
	}
});

$('.show-all-activity').click(function(){
	var toggles = $(this).closest('.tab-pane').find('.panel-collapse');
	if($(this).hasClass('allHidden')){
		toggles.each(function(){
			if($(this).hasClass('in')){
			}else{
				$(this).toggleClass('in');
				var arrow = $(this).prev().find('.fa');
				arrow.toggleClass('fa-caret-down');
				arrow.toggleClass('fa-caret-up');
			}
		});
		$(this).html('Hide All <img src="images/hide-all.jpg">');
		$(this).removeClass("allHidden");
	}else{
		toggles.each(function(){
			if($(this).hasClass('in')){
				$(this).toggleClass('in');
				var arrow = $(this).prev().find('.fa');
				arrow.toggleClass('fa-caret-down');
				arrow.toggleClass('fa-caret-up');
			}else{
			}
		});
		$(this).html('Show All <img src="images/show-all.jpg">');
		$(this).addClass("allHidden");
	}
});

$(' .weeks-transaction-history .weeksHidden').click(function() {
	$('tr').toggleClass('hiddenRow');
	$('tr').find('.arrow').toggleClass('fa-caret-up');

});

$('.reservation-table-show-all').click(function(){
	if($(this).hasClass('allHidden')){
		$(this).next('table').find('tbody').find('tr').each(function(){
			if($(this).hasClass('hiddenRow')){
				$(this).toggleClass('hiddenRow');
			}else{}
		});
		$(this).html('Hide All <img src="images/hide-all.jpg">');
		$(this).toggleClass('allHidden');
	}else{
		$(this).next('table').find('tbody').find('tr').each(function(){
			if($(this).hasClass('hiddenRow')){
			}else{
				$(this).toggleClass('hiddenRow');
			}
		});
		$(this).html('Show All <img src="images/show-all.jpg">');
		$(this).toggleClass('allHidden');
	}
});

$('.reservation-show-all').click(function(){
	if($(this).hasClass('allHidden')){
		$(this).closest('.panel, .reservation-confirmation-body').find('.points-reservation-info-header').each(function(){
			var info = $(this).parent().find('.points-reservation-info');
			if($(this).hasClass('show-reservation')){
				info.css('display','block');
				$(this).toggleClass('show-reservation');
			}else{}
		});
		$(this).html('Hide All <img src="images/hide-all.jpg">');
		$(this).toggleClass('allHidden');
	}else{
		$(this).closest('.panel, .reservation-confirmation-body').find('.points-reservation-info-header').each(function(){
			var info = $(this).parent().find('.points-reservation-info');
			if($(this).hasClass('show-reservation')){
			}else{
				info.css('display','none');
				$(this).toggleClass('show-reservation');
			}
		});
		$(this).html('Show All <img src="images/show-all.jpg">');
		$(this).toggleClass('allHidden');
	}
});
$('.showHide').click(function() {
	var showHideText = $('.showHideText');
	if(showHideText.html() === "Show All") {
		$('#showPlus1').hide();
		$('#showMinus1').show();
		showHideText.html("Hide All");
		$('.toggleOneDesk').each(function() {
			if(!$(this).hasClass('in')) {
				$(this).addClass('in');
				$(this).prev('.panel-heading').toggleClass('collapsed');
			} 
		});
	} else if (showHideText.html() === "Hide All") {
		showHideText.html("Show All");
		$('#showPlus1').show();
		$('#showMinus1').hide();
		$('.toggleOneDesk').each(function() {
			if($(this).hasClass('in')) {
				$(this).removeClass('in');
				$(this).prev('.panel-heading').toggleClass('collapsed');
			}
		});				
	}

});

$('.showHide2').click(function() {
	var showHideText2 = $('.showHideText2');
	if(showHideText2.html() === "Show All") {
		$('#showPlus2').hide();
		$('#showMinus2').show();
		showHideText2.html("Hide All");
		$('.toggleTwoDesk').each(function() {
			if($(this).hasClass('in') === false) {
				$(this).addClass('in');
				$(this).prev('.panel-heading').toggleClass('collapsed');
			}
		});
	} else if (showHideText2.html() === "Hide All") {
		$('#showPlus2').show();
		$('#showMinus2').hide();
		showHideText2.html("Show All");
		$('.toggleTwoDesk').each(function() {
			if($(this).hasClass('in') === true) {
				$(this).removeClass('in');
				$(this).prev('.panel-heading').toggleClass('collapsed');
			}
		});				
	}

});

$('.text-header a').click(function(){
	var toggle = $(this).parent().parent().next('.text-section');
	toggle.slideToggle('fast');
	$(this).find('i').toggleClass('fa-caret-down');
	$(this).find('i').toggleClass('fa-caret-up');
});

$('.points-reservation-info-header').click(function(){
	var info = $(this).parent().find('.points-reservation-info');
	if($(this).hasClass('show-reservation')){
		info.attr('style','display: block');
		$(this).toggleClass('show-reservation');
	}else{
		info.attr('style','display: none');
		$(this).toggleClass('show-reservation');
	}
});

$('.payment-details-table tbody tr td .toggleOpen').click(function(){
	var toggle = $(this).closest('tr').next('tr').toggleClass('show-row');
	var icon = $(this).find('i').not('.fa-usd, .fa-eur, .fa-gbp, .fa-btc');
	var image = $(this).closest('table').prev('span').find('img[alt="Show All Single Mfees"]');
	icon.first().toggleClass('fa-plus-square-o');
	icon.first().toggleClass('fa-minus-square-o');
	if(image.attr('src') === 'images/show-all-grey.jpg'){
		image.attr('src','images/hide-all-grey.jpg');
	}else{
		image.attr('src','images/show-all-grey.jpg');
	}

});

$('.payment-details-table tbody tr td:first-child i').click(function(){
	var icon = $(this).find('i');
	var image = $(this).closest('table').prev('span').find('img[alt="Show All Single Mfees"]');
	if(icon.hasClass('fa-plus-square-o')){
		$(this).parent().next('tr').toggleClass('show-row');
		icon.first().toggleClass('fa-plus-square-o');
		icon.first().toggleClass('fa-minus-square-o');
		if(image.attr('src') === 'images/show-all-grey.jpg'){
			image.attr('src','images/hide-all-grey.jpg');
		}else{
			image.attr('src','images/show-all-grey.jpg');
		}
	}else if(icon.hasClass('fa-minus-square-o')){
		$(this).parent().next('tr').toggleClass('show-row');
		icon.toggleClass('fa-plus-square-o');
		icon.toggleClass('fa-minus-square-o');
		if(image.attr('src') === 'images/show-all-grey.jpg'){
			image.attr('src','images/hide-all-grey.jpg');
		}else{
			image.attr('src','images/show-all-grey.jpg');
		}
	}
});

$('img[alt="Show All Single Mfees"]').click(function(){
	$(this).parent().next('table').find('tbody').find('.hideable-row').toggleClass('show-row');
	if($(this).parent().hasClass('row-shown')){
		$(this).attr('src','images/show-all-grey.jpg');
	}else{
		$(this).attr('src','images/hide-all-grey.jpg');
	}
	$(this).parent().toggleClass('row-shown');
});

$('.mobile-show-all-mfees').click(function(){
	var rows = $(this).parent().find('tr.hideable-row');
	if($(this).hasClass('shown')){
		rows.each(function(){
			if($(this).hasClass('show-row')){
			}else{
				$(this).toggleClass('show-row');
			}
		});
		$(this).html('Hide All <img src="images/hide-all-grey.jpg">');
		$(this).siblings('span').find('img[alt="Show All Single Mfees"]').attr('src','images/hide-all-grey.jpg');
	}else{
		rows.each(function(){
			if($(this).hasClass('show-row')){
				$(this).toggleClass('show-row');
			}else{
			}
		});
		$(this).html('Show All <img src="images/show-all-grey.jpg">');
		$(this).siblings('span').find('img[alt="Show All Single Mfees"]').attr('src','images/show-all-grey.jpg');
	}
	$(this).toggleClass('shown');
});

$('.payment-details-show-all').click(function(){
	if($(this).hasClass('shown')){
		$(this).parent().find('tbody tr td:first-child').each(function(){
			var icon = $(this).find('.fa-plus-square-o');
			if(icon.hasClass('fa-plus-square-o')){
				if($(this).parent().next('tr').hasClass('show-row')){
				}else{
					$(this).parent().next('tr').toggleClass('show-row');
					icon.toggleClass('fa-plus-square-o');
					icon.toggleClass('fa-minus-square-o');
				}
			}else if(icon.hasClass('fa-minus-square-o')){
				if($(this).parent().next('tr').hasClass('show-row')){
				}else{
					$(this).parent().next('tr').toggleClass('show-row');
					icon.toggleClass('fa-plus-square-o');
					icon.toggleClass('fa-minus-square-o');
				}
			}
		});
		$(this).toggleClass('shown');
	}else{
		$('.payment-details-table tbody tr td:first-child').each(function(){
			var icon = $(this).find('.fa-minus-square-o');
			if(icon.hasClass('fa-plus-square-o')){
				if($(this).parent().next('tr').hasClass('show-row')){
					$(this).parent().next('tr').toggleClass('show-row');
					icon.toggleClass('fa-plus-square-o');
					icon.toggleClass('fa-minus-square-o');
				}else{
				}
			}else if(icon.hasClass('fa-minus-square-o')){
				if($(this).parent().next('tr').hasClass('show-row')){
					$(this).parent().next('tr').toggleClass('show-row');
					icon.toggleClass('fa-plus-square-o');
					icon.toggleClass('fa-minus-square-o');
				}else{
				}
			}
		});
		$(this).toggleClass('shown');
	}
	var icon = $(this).find('i');
	icon.toggleClass('fa-plus-square-o');
	icon.toggleClass('fa-minus-square-o');
	if(icon.hasClass('fa-plus-square-o')){
		$(this).html('<i class="fa fa-plus-square-o"></i> Show All');
	}else{
		$(this).html('<i class="fa fa-minus-square-o"></i> Hide All');
	}
});

$('.mfees-content .info-header').click(function(){
	if($(this).hasClass('shown')){
		$(this).parent().find('.payment-details-info').css('display','none');
		$(this).find('i').toggleClass('fa-caret-down');
		$(this).find('i').toggleClass('fa-caret-up');
		$(this).toggleClass('shown');
	}else{
		$(this).parent().find('.payment-details-info').css('display','block');
		$(this).find('i').toggleClass('fa-caret-down');
		$(this).find('i').toggleClass('fa-caret-up');
		$(this).toggleClass('shown');
	}
});

$('.mfees-content .payment-details-body:last-child .info-header').click(function(){
	if($(this).hasClass('shown')){
		$(this).css('border-bottom','solid 1px gray');
	}else{
		$(this).css('border-bottom','none');
	}
});

$('.mfees-content .mfeesConfirmationShowAll').click(function() {
	$('a.mfeesConfirmationShowAll img').toggle();

	var newTextArray = $(this).html().split(" ");
	if(newTextArray[0] === "Hide") {
		newTextArray[0] = "Show";
		$('.payment-details-info').css('display' , 'none');
		$('.info-header').removeClass('shown');
		$('.info-header i').addClass('fa-caret-down');
		$('.info-header i').removeClass('fa-caret-up');
	} 
	else {
		newTextArray[0] = "Hide";
		$('.payment-details-info').css('display', 'block');
		$('.info-header').addClass('shown');
		$('.info-header i').addClass('fa-caret-up');		
	}

	var newText = "";
	for (var i = 0; i < newTextArray.length; i++) {
		newText = newText +  newTextArray[i] + " ";
	}
	$(this).html(newText);
});

$('.reservation-confirmation-details .points-reservation-info-header:last-child').click(function(){
	alert('test');
	if($(this).hasClass('show-reservation')){
		$(this).toggleClass('show-reservation');
		$(this).css('border-bottom','solid 1px #A98645');
	}else{
		$(this).toggleClass('show-reservation');
		$(this).css('border-bottom','none');
	}
});
var desktop = false;
$(window).on('resize', function(){
	var width = $(this).width();
	if(width>=975){
		$('.points-reservation-info').css('display','block');
		$('.multiple-payment-bodies .payment-details-info').css('display','block');
		desktop = true;
	}else if(desktop){
		$('.points-reservation-info').css('display','none');
		$('.multiple-payment-bodies .payment-details-info').css('display','none');
		$('.mfees-content .multiple-payment-bodies .payment-details-body:first-child .payment-details-info').css('display','block');
		desktop = false;
	}else{
		desktop = false;
	}
});

$('input:radio[name="available-checkin"]').change(function(){
	$('input:radio[name="available-checkin"]').each(function(){
		if($(this).is(':checked')){
			$(this).closest('tr').next('tr').css('display','table-row');
			$(this).closest('tr').next('tr').find('.point-cost-table').css('display','table');
		}else{
			$(this).closest('tr').next('tr').css('display','none');
			$(this).closest('tr').next('tr').find('table').css('display','none');
			$(this).closest('tr').next('tr').find('.point-cost-table').css('display','table');
		}
	});
});

$('input:radio[name="available-checkin"]').each(function(){
	if($(this).is(':checked')){
		$(this).closest('tr').next('tr').css('display','table-row');
		$(this).closest('tr').next('tr').find('table').css('display','table');
	}else{
		$(this).closest('tr').next('tr').css('display','none');
		$(this).closest('tr').next('tr').find('table').css('display','none');
	}
});

$('#hold-reservation').click(function(){
	$('.hold-reservation').css('display','block');
});

$('#continue-searching, #release-selection').click(function(){
	$('.hold-reservation').css('display','none');
});

var limit = 10;
$('input.top-ten-checkbox').on('change', function() {
	if($(this).siblings(':checked').length >= limit) {
		this.checked = false;
	}
});

$('#points-reservation-clear-all').click(function(){
	location.reload();
});

$('#clear-all-checkboxes').click(function(){
	$('input.top-ten-checkbox').each(function(){
		this.checked = false;
	});
});

$('ul.dropdown-menu a').click(function(){
	$('#top-ten-landing-dropdown').attr("value",$(this).text());
	var linkSelected = $(this).attr("name");
	$('#owner-results-btn').attr("href", linkSelected+".html");
	$('#owner-vote-btn').attr("href", linkSelected+"-vote.html");
});

$('.weeks-generic ul.dropdown-menu a, .points-reservation ul.dropdown-menu a, .weeks-occupy ul.dropdown-menu a, .mfees-content ul.dropdown-menu a, #paymentOverLay ul.dropdown-menu a, .socialNavDrop ul.dropdown-menu a, .galleryDropdown ul.dropdown-menu li').click(function(){
	$(this).parent().parent().parent().find('input').val($(this).text());
	$(this).closest('.input-group').removeClass('open');
});

var usAmount = [];
$('.mfees-content .amount').each(function(){	
	var amount = parseFloat($(this).text());
	usAmount.push(amount);
});

$('.mfees-content ul.dropdown-menu a').click(function(){
	var currency = $(this).closest('.content').find('.currency');
	var amountObject = $(this).closest('.content').find('.amount');
	for (var i = 0; i < amountObject.length; i++) {
		var amount = 0;
		if($(this).text() === 'USD'){
			amount = usAmount[i];
			amount = Math.ceil(amount);
			$(amountObject[i]).html(amount + ".00");
		}else if($(this).text() === 'HKD'){
			amount = usAmount[i]*7.76;
			amount = Math.ceil(amount);
			$(amountObject[i]).html(amount + ".00");
		}else if($(this).text() === 'SGD'){
			amount = usAmount[i]*1.28;
			amount = Math.ceil(amount);
			$(amountObject[i]).html(amount + ".00");
		}
	};
	if($(this).text() === 'USD'){
		currency.removeClass();
		currency.addClass('fa fa-usd usd currency');
	}else if($(this).text() === 'HKD'){
		currency.removeClass();
		currency.addClass('fa fa-usd hkd currency');
	}else if($(this).text() === 'SGD'){
		currency.removeClass();
		currency.addClass('fa fa-usd sgd currency');
	}
});

$('.socialNavDrop .input-group .input-group-btn button, .weeks-occupy .socialNavDrop .input-group .input-group-btn button, #paymentOverLay .socialNavDrop .input-group .input-group-btn button').click(function(){
	var toggle = $(this).closest('.socialNavDrop').find('.input-group');
	if(toggle.hasClass('open')){
		$('.socialNavDrop .input-group, .weeks-occupy .socialNavDrop .input-group, #paymentOverLay .socialNavDrop .input-group').removeClass('open');
		toggle.toggleClass('open');
	}else{
		$('.socialNavDrop .input-group, .weeks-occupy .socialNavDrop .input-group, #paymentOverLay .socialNavDrop .input-group').removeClass('open');
	}
});

$('.points-reservation .socialNavDrop .input-group, .weeks-occupy .socialNavDrop .input-group').click(function(){
	$(this).toggleClass('open');
	$('.points-reservation .socialNavDrop .input-group, .weeks-occupy .socialNavDrop .input-group').each(function(){
		$(this).toggleClass('open');
	});
});

var width = $(this).width();
if(width<992){
	$('.points-reservation .socialNavDrop').each(function(){
		var text = $(this).find('i').text();
		$(this).find('input').val(text);
	});
	$('.keep-value').each(function(){
		value = $(this).find('input').attr('value');
		$(this).find('input').val(value);
	});
}

$(window).resize(function(){
	var width = $(this).width();
	if(width<975){
		$('.points-reservation .socialNavDrop').each(function(){
			var text = $(this).find('i').text();
			$(this).find('input').val(text);
		});
	}
});

$('#e-postcard-email1').blur(validateEmail);

$('#e-postcard-email2').blur(function(){
	var string = $(this).val();
	if(string.length >= 1){
		validateThisEmail(this);
	}
});

$('#e-postcard-email3').blur(function(){
	var string = $(this).val();
	if(string.length >= 1){
		validateThisEmail(this);
	}
});

$('#e-postcard-email4').blur(validateEmail);

$('#e-postcard-name').blur(validateRequired);

$('#suggestion-form-email').blur(validateEmail);

$('.phone').click(function() {
	contactNumber();
});

$('#dropaccordion').on('click', 'a[data-toggle="collapse"]', function (event) {
	event.preventDefault();
	event.stopPropagation();
	$($(this).data('parent')).find('.panel-collapse.in').collapse('hide');
	$($(this).attr('href')).collapse('show');
});

$('.mfeesShowHideImg').click(function() {
	
	var custDeets = $(this).parent().next().next().next();
	var thisOne = $(this);	
	if(custDeets.hasClass('showDetails')) {
		thisOne.attr('src', 'images/show-all-grey.jpg');
		custDeets.removeClass('showDetails');
	} 

	else {
		thisOne.attr('src', 'images/hide-all-grey.jpg');
		custDeets.addClass('showDetails');
		
	}
});

$('.mfees-content .ownershipPkgs .pkgsShowHideAll').click(function() {
	var image = $('.mfeesShowHideImg');
	if($('.pkgsShowHideAll a').html() === 'Show All') {
		$('.pkgsShowHideAll a').html('Hide All');
		$('.pkgDetailsMobile').css('display', 'block');
		$('.pkgInsertsMobile').find('i').toggleClass('downCaret');
		
		var plusMinus = $('.showHideImage');
		plusMinus.attr('src','images/hide-all-grey.jpg');
		$('.customerPkgDetails').each(function() {
			if(!($(this).hasClass('showDetails'))) {
				$(this).addClass('showDetails');
			}
		});
		image.each(function() {
			$(this).attr('src','images/hide-all-grey.jpg');
		});
		$('.hideOrShow').each(function() {
			$(this).addClass('row-shown1');
		});
	} else {
		$('.pkgsShowHideAll a').html('Show All');
		$('.pkgDetailsMobile').css('display', 'none');
		$('.pkgInsertsMobile').find('i').addClass('downCaret');

		var plusMinus = $('.showHideImage');
		plusMinus.attr('src','images/show-all-grey.jpg');
		$('.customerPkgDetails').each(function() {
			if($(this).hasClass('showDetails')) {
				$(this).removeClass('showDetails');
			}
		});
		image.each(function() {
			$(this).attr('src','images/show-all-grey.jpg');
		});
		$('.hideOrShow').each(function() {
			$(this).removeClass('row-shown1');
		});
	}
});
$('.pkgInsertsMobile').click(function() {
	var caret = $(this).children('.fa-caret-up');
	if(caret.hasClass('downCaret')) {
		caret.removeClass('downCaret');
		$('.pkgDetailsMobile').css('display','block');
	} else {
		caret.addClass('downCaret');
		$('.pkgDetailsMobile').css('display','none');
	}
});
$('.product-summary .innerDrop').click(function() {
	var plus = $(this).children(".fa-plus");
	var minus = $(this).children(".fa-minus");
	var pointsList = $(this).next().children(".pointsList");
	var pointsListFirst = $(this).next().children(".pointsListFirst");
	pointsListFirst.toggleClass("listOpen1");
	plus.toggle();
	minus.toggle();	
	$(this).children(".innerDropdownInfo").toggle();
	pointsList.toggleClass("listOpen");
});


$('.weeks-generic .toggleCaret').click(function() {
	$('.villaPrefDrop').slideToggle("fast");
});

$('.weeks-generic .toggleCaret').click(function() {
	var caret = $('.toggleCaret .fa-caret-up');
	if(caret.hasClass('rotate')) {
		caret.removeClass('rotate');
	}	else {
		caret.addClass('rotate');
	}
	

});

$('.reservation-toggle-header').click(function(){
	if ($('#collapseOne, #collapseTwo, #collapseThree, #collapseFour').hasClass('in')) {
		$(this).find('span').attr('style','background: #A8A8A8 !important');
		$(this).find('h3').attr('style','color: #A8A8A8 !important');
		$(this).find('i').attr('style','color: #A8A8A8 !important');
	} else{
		$(this).find('span').attr('style','background: #A98645 !important');
		$(this).find('h3').attr('style','color: #A98645 !important');
		$(this).find('i').attr('style','color: #A98645 !important');
	};
});

$('.nextToggle').click(function(){
	$(this).closest('.panel').find('.panel-heading').toggleClass('collapsed');
	var nextCollapse = $(this).closest('.panel').next('.panel').find('.panel-heading');
	nextCollapse.toggleClass('collapsed');
	nextCollapse.find('span').attr('style','background: #A98645 !important');
	nextCollapse.find('h3').attr('style','color: #A98645 !important');
	nextCollapse.find('i').attr('style','color: #A98645 !important');

	var thisCollapse = $(this).closest('.panel').find('.panel-heading');
	thisCollapse.find('span').attr('style','background: #A8A8A8 !important');
	thisCollapse.find('h3').attr('style','color: #A8A8A8 !important');
	thisCollapse.find('i').attr('style','color: #A8A8A8 !important');
});


$('.weeks-generic .panel-heading').click(function() {
	$(this).toggleClass('collapsed');
});

$('#doNothing').click(function(){
	$(this).find('span').attr('style','background: #a8a8a8 !important');
	$(this).find('h3').attr('style','color: #a8a8a8 !important');
	$(this).find('i').attr('style','color: #a8a8a8 !important');
});

$('#sortName').click(function(){
	var names = [];
	var checked = -1;
	$('.points-reservation').find('.scroller').find('label').each(function(){
		var inputID = '#'+$(this).attr('for');
		var input = $(this).siblings(inputID);
		if(input.is(':checked')){
			checked = $(this).html();
		}
		names.push($(this).html());
	});
	names.sort();
	var index=0;
	$('.points-reservation').find('.scroller').find('label').each(function(){
		var inputID = '#'+$(this).attr('for');
		var input = $(this).siblings(inputID);
		$(this).html(names[index]);
		if(names[index].indexOf(checked) > -1 ){
			input.attr('checked',true);
		}else{
			input.attr('checked',false);
		}
		index++;
	});
});

$('#sortLocation').click(function(){
	var locations = [];
	var names = [];
	var checked = -1;
	$('.points-reservation').find('.scroller').find('label').each(function(){
		var inputID = '#'+$(this).attr('for');
		var input = $(this).siblings(inputID);
		if(input.is(':checked')){
			checked = $(this).html();
		}
		locations.push($(this).html());
		names.push($(this).find('i').text());
	});
	names.sort();
	locations.sort();
	var index=0;
	$('.points-reservation').find('.scroller').find('label').each(function(){
		var inputID = '#'+$(this).attr('for');
		var input = $(this).siblings(inputID);
		var currentName = names[index];
		for (var i = 0; i < locations.length; i++) {
			var first = true;
			if(locations[i].indexOf(currentName) > -1 && first){
				$(this).html(locations[i]);
				first=false;
				if(locations[i].indexOf(checked) > -1){
					input.attr('checked',true);
				}else{
					input.attr('checked',false);
				}
				locations.splice(i,1);
			}
		};
		index++;
	});
});

$('.nav li.dropdown').click(function() {
	var icon = $(this).find('i');
	if(icon.hasClass('fa-caret-down')){
		icon.toggleClass('fa-caret-up');
	}

});

$('header li.searchBox').click(function() {
	
	var icon = $(this).find('i');
	if(icon.hasClass('fa-caret-down')){
		icon.toggleClass('fa-caret-down');
		icon.toggleClass('fa-times');
		
	}
	else{
		icon.toggleClass('fa-caret-down');
		icon.toggleClass('fa-times');
		
	}
});

$('#headerPop').popover({
	container:'body',
	html: true,
	trigger: 'click',
	content: 'Call John Doe <br> <strong>888-684-4868</strong> ext <strong>1234</strong> <br> <i class="fa fa-envelope-o" style="color:#C8C8C8"></i> <a href="" class="blue">Contact Us</a> <br> <i class="fa fa-comments" style="color:#C8C8C8"></i> <a href="" class="blue">Chat Online</a> <br> <i class="fa fa-phone" style="color:#C8C8C8; padding-right:3px;"></i> <a href="" class="blue">Click to Talk</a><br>',
	placement: 'bottom',
	template: '<div class="popover" role="tooltip"><div class="arrow"></div><h3 class="popover-title"></h3><div class="popover-content"></div><div><span class="pop pull-right"><a href="" class="blue">Close</a></span></div></div>'
});


$('.questionDeskIcon-login').tooltip();

$('.mfees-content .fa-exclamation-circle').click(function(){
	$('.mfees-content .fa-exclamation-circle').popover('toggle');
});

$('.popover-sidebar ul li a').click(function(){
	if($(this).hasClass('popover-selected')){
		$(this).removeClass('popover-selected');
	}else{
		var id = $(this).attr('id');
		$('.popover-sidebar ul li a ').each(function(){
			if($(this).hasClass('popover-selected')){
				$(this).removeClass('popover-selected');
				$(this).popover('hide');
			}
		});
		$(this).addClass('popover-selected');
	}
});
$('#vacations').popover({
	container: 'body',
	html: true,
	trigger: 'manual',
	content: '<a href="#">Check Status / Make a Payment</a> <br><br> <a href="#">View Maintenance Fee Package(s)</a> <br><br> <a href="#">Register for eBilling</a>'
}).click(closePopovers);
$('#pay-fees').popover({
	container: 'body',
	html: true,
	trigger: 'manual',
	content: '<a href="#">Check Status / Make a Payment</a> <br><br> <a href="#">View Maintenance Fee Package(s)</a> <br><br> <a href="#">Register for eBilling</a>'
}).click(closePopovers);
$('#rewards-points').popover({
	container: 'body',
	html: true,
	trigger: 'manual',
	content: '<a href="#">Check Marriott Rewards Points Balance</a> <br><br> <a href="#">Trade for Marriott Rewards Points</a> <br><br> <a href="#">Manage your Marriott Rewards Account</a>'
}).click(closePopovers);
$('#friend-share').popover({
	container: 'body',
	html: true,
	trigger: 'manual',
	content: '<a href="#">Check Referral Status</a> <br><br> <a data-toggle="modal" href="#friendShareOverlay">Refer a Friend</a> <br><br> <a href="#">Choose Your FriendShare Benefit</a>'
}).click(closePopovers);

$('#friend-share-edu').popover({
	container: 'body',
	html: true,
	trigger: 'manual',
	content: '<a href="weeks-owner-topic-friendshare.html">Earn Rewards</a> <br><br> <a href="friendshare-redeem-rewards-weeks-owner.html">Redeem Rewards</a> <br><br> <a href="check-referral-status.html">Check Referrals</a> <br><br><a href="weeks-owner-topic-friendshare.html" data-toggle="modal" data-target="#friendShareOverlay">Refer a Friend</a><br><br><a href="friendshare-choose-benefit.html">Choose Benefit</a>'
}).click(closePopovers);
$('#association').popover({
	container: 'body',
	html: true,
	trigger: 'manual',
	content: '<a href="#">Condominium Owners Association</a> <br><br> <a href="#">Trust Owners Association</a> <br><br> <a href="#">Register for Online Document Notification</a> <br><br> <a href="#">ARDA/ROC News</a>'
}).click(closePopovers);
$('#explorer').popover({
	container: 'body',
	html: true,
	trigger: 'manual',
	content: '<a href="#">Cruises <i class="fa fa-share-square-o"></i></a> <br><br> <a href="#">Guided Tours <i class="fa fa-share-square-o"></i></a> <br><br> <a href="points_owner_hotels_luxury_residences.html">Hotels and Luxury Residences</a> <br><br> <a href="adventure-travel.html">Adventure Travel</a> <br><br> <a href="specialty-packages.html">Specialty Packages</a> <br><br> <a href="travel-arrangements-points-owner.html">Travel Arrangements</a> <br><br> <a href="local_activities.html">Local Activities</a> <br><br> <a href="#">Vacation Homes</a>'
}).click(closePopovers);
$('#ownershipOverview').popover({
	container: 'body',
	html: true,
	trigger: 'manual',
	content: '<a href="#">Before You Start</a> <br><br> <span class="brownText">Owner Resources</span>'
}).click(closePopovers);
$('#destinationsProgram').popover({
	container: 'body',
	html: true,
	trigger: 'manual',
	content: '<a href="#">Discover the Benefits</a> <br><br> <a href="#">Explore Pricing and Usage</a> <br><br> <a href="#">Tour Destination Options</a> <br><br> <a href="product_summary.html">View Your Weeks</a> <br><br> <a href="enrollment-step-1.html">Enroll Your Weeks</a>'
}).click(closePopovers);

var popoverOpen = false;
$(window).click(function(e){
	if($('body').find('.popover').hasClass('in') && popoverOpen){
		var tar = e.target;
		if(!$(tar).hasClass('popover-content')){
			$('.popover').popover('hide');
			$('.popover-selected').removeClass('popover-selected');
		}
	}
	popoverOpen = false;
});

function closePopovers(){
	$('.popover').popover('hide');
	$(this).popover('show');
	popoverOpen = false;
	setTimeout(popoverChange, 100);
	return false;
}

function popoverChange(){
	popoverOpen = true;
}

$(window).resize(function(){
	var windowWidth = $(window).width();
	if(windowWidth <= 975){
		$('#vacations').popover('hide');
		$('#pay-fees').popover('hide');
		$('#rewards-points').popover('hide');
		$('#friend-share').popover('hide');
		$('#association').popover('hide');
		$('.payment-details-email-form input').each(function(){
			var text = $(this).siblings('span').text();
			$(this).attr('placeholder',text);
		});
	}else{
		$('.payment-details-email-form input').each(function(){
			var text = $(this).siblings('span').text();
			$(this).attr('placeholder','');
		});
	}
});

var width = $(this).width();
if(width <= 975){
	$('.payment-details-email-form input').each(function(){
		var text = $(this).siblings('span').text();
		$(this).attr('placeholder',text);
	});
}else{
	$('.payment-details-email-form input').each(function(){
		var text = $(this).siblings('span').text();
		$(this).attr('placeholder','');
	});
}

var canRotate = true;
$('#mobileMenu ul li a').click(function(){
	var icon = $(this).find('i');
	if(canRotate){
		if(icon.hasClass('fa-play')){
			icon.removeClass('fa-rotate-90 fa-play');
		}else{
			icon.addClass('fa-rotate-90 fa-play');
		}
		canRotate = false;
		setTimeout(rotateChange,400);
	}
});

function rotateChange(){
	canRotate = true;
}

$(".header-close-btn").click(function() {
	var closeWindow = confirm("Are you sure you want to close this page?");
	if (closeWindow) {
		window.close();
	}
});
$(".closeBtn").click(function() {
	$(this).parent().parent('.cautionRow').toggle();
});
$(".occupyLink").click(function() {
	$(this).parent().parent('.row').next(".row").toggle();
});

$('.btn-toggle').click(function() {
	$(this).find('.btn').toggleClass('btnSwitchInactive');
});

$('.mFeesSwitch').click(function() {
	$(this).find('.btn').toggleClass('mFeesSwitchActive');
});

$('.mfeesBack').click(function() {
	window.location.href = "mfees_step-2-summary3.html";
});

$('.back').click(function() {
	if($(this).attr('onclick')){
	}else{
		window.location.href = "product_summary.html";
	}
});

$(".imgSwitch i").click(function() {
	var selected = $(this);
	var first  = $('.imgSwitch .button1');
	var second = $('.imgSwitch .button2');
	var third  = $('.imgSwitch .button3');
	var fourth = $('.imgSwitch .button4');
	var fith   = $('.imgSwitch .button5');

	if (selected.hasClass('button1')) {
		$('.modalFigure img').attr('src', 'images/beach.jpg');
	};

	if (selected.hasClass('button2')) {
		$('.modalFigure img').attr('src', 'http://placehold.it/868x225');
	};

	if (selected.hasClass('button3')) {
		$('.modalFigure img').attr('src', 'images/beach.jpg');
	};

	if (selected.hasClass('button4')) {
		$('.modalFigure img').attr('src', 'http://placehold.it/868x225');
	};

	if (selected.hasClass('button5')) {
		$('.modalFigure img').attr('src', 'images/beach.jpg');
	};



	if (selected.hasClass('fa-circle')) {
		selected.removeClass('fa-circle');
		selected.addClass('fa-circle-o');
	}

	if (selected.siblings('i').hasClass('fa-circle-o')) {
		selected.siblings('i').removeClass('fa-circle-o').addClass('fa-circle');
	}

});

$('#carouselModal .imgShown').css('display', 'block');


$('.my-account .show-hide').click(function() {

	if($(this).text() === 'Show All') {
		$('.collapse:not(.in)').each(function() {
			$(this).collapse("toggle");
		});
		$(this).text('Hide All');
		$(this).prepend('<img src="images/hide-all.jpg">');


	} else {
		$(this).text('Show All');
		$(this).prepend('<img src="images/show-all.jpg">');
		$('.collapse.in').each(function() {
			$(this).collapse("toggle");
		});
	}
	return false;	
});

$('.villa-amenities .show-hide, .marriott-rewards .show-hide, .exchange-unenroll .show-hide, .int-international .show-hide').click(function() {

	if($(this).text() === 'Show All') {
		$('.collapse:not(.in)').each(function() {
			$(this).collapse("toggle");
		});
		$('.contentToggle.closed').toggleClass('closed');
		$('.titleToggle.closed1').find('i').toggleClass('fa-caret-up').toggleClass('fa-caret-down');
		$(this).text('Hide All');
		$(this).prepend('<img src="images/hide-all.jpg">');
		
	} else {
		$(this).text('Show All');
		$(this).prepend('<img src="images/show-all.jpg">');
		$('.contentToggle:not(.open)').toggleClass('closed');
		$('.titleToggle.closed1').find('i').toggleClass('fa-caret-down').toggleClass('fa-caret-up');
		$('.collapse.in').each(function() {
			$(this).collapse("toggle");
		});
	}
	return false;	

});


$('.titleToggle').click(function() {
	var windowWidth = $(window).width();
	
	if(windowWidth<=992){
		console.log(windowWidth);
		$(this).find('i').toggleClass('fa-caret-up');
		$(this).find('i').toggleClass('fa-caret-down');
		$(this).next('.contentToggle').toggle();
	}
});

$('.resortOwnerTitle').click(function() {
	$(this).find('i').toggleClass('fa-caret-up');
	$(this).find('i').toggleClass('fa-caret-down');	
	$('.block1, .resortWeather, .resortForecast, .resortNav').toggleClass('closed');
});

});//end $(document).ready

function validatePhoneNumber( ){
	var valid = /^[0-9]+(-[0-9]+)+$/.test(this.value),
	val = this.value;
	var input = val.split("");

	if(!valid){
		var valid = jQuery.grep(input, function(a){
			if(a<10 || a==='-'){
				return a;
			}
		});
		this.value = valid.join("");
	}
}

function validatePhoneLength(){
	val = this.value;
	var input = val.split("");
	if(input.length < 7 || input.length > 15){
		alert("Not a valid phone number");
		this.focus();
	}
}

function validateEmail() {
	var x = this.value;
	var atpos = x.indexOf("@");
	var dotpos = x.lastIndexOf(".");
	if(x.length > 1){
		if (atpos< 1 || dotpos<atpos+2 || dotpos+2>=x.length) {
			alert("Not a valid e-mail address");
			this.focus();
			return false;
		}
	}
}

function validateThisEmail(y) {
	var x = y.value;
	var atpos = x.indexOf("@");
	var dotpos = x.lastIndexOf(".");
	if (atpos< 1 || dotpos<atpos+2 || dotpos+2>=x.length) {
		alert("Not a valid e-mail address");
		y.focus();
		return false;
	}
}

function validateRequired(){
	var string = this.value;
	if(string.length <= 1){
		alert("This field is required!");
		this.focus();
	}
}

function contactNumber() {
	window.location='tel:800-690-9279';
}

//added

$(window).resize(function(){
	var windowWidth = $(window).width();
	//points reservation
	if (windowWidth <= 741) {
		$('#redeem-points-header-text').removeClass('col-md-9').addClass('col-sm-9');
		$('#redeem-points-header-text').css('text-align', 'center');
		$('#redeem-points-header-text').css('font-size', '8pt');
		$('#redeem-points-header-text').css('margin-top', '-28px');
		$('#use-my-points-button').removeClass('visible-md visible-lg').addClass('visible-sm visible-xs');
		$('#use-my-points-button').css({
			width: '100%'
		});
	}else{
		$('#redeem-points-header-text').removeClass('col-sm-9').addClass('col-md-9');	
		$('#redeem-points-header-text').css('text-align', 'left');

		$('#use-my-points-button').removeClass('visible-lg visible-xs').addClass('visible-md visible-lg');
		$('#use-my-points-button').css({
			width: 'auto'
		});
	}
	
	//bookings weeks occupy
});

function removeCalendarsBookings(){
	$('#theCalx').remove();
	$('#theCalw').remove();
	$('#theCalv').remove();
	$('#theCala').remove();
	$('#theCalb').remove();
	$('#theCalc').remove();
}

var clubPointsShown = false;
var clubWeeksShown = false;


currentDate = new Date();
var currentMonth = currentDate.getMonth();
var currentYear = currentDate.getFullYear();

var displayM = currentMonth;
var displayM2 = currentMonth + 1;

var displayYr = currentYear;
var displayYr2 = currentYear;

var stopYear = currentYear + 2;

var hitBackStopPointBooking = false;
var hitForwardPointBooking = false;

function moveCalendarsLeft(){

	hitBackStopPointBooking = hitBackPoint(displayM,displayYr);
	
	displayYr = updateWeeksCalendarLeft(displayM,displayYr);
	displayYr2 = updateWeeksCalendarLeft(displayM2,displayYr2);

	if(!hitBackStopPointBooking){
		displayM -= 1;
		displayM2 -= 1;
	};
	
	if (displayM < 0) {
		displayM = 11;
	};

	if (displayM2 < 0) {
		displayM2 = 11;
	};
	updateWeeksCalendars();
}

function moveCalendarsRight(){
	
	hitForwardPointBooking = hitForwardPoint(displayM,displayM2,displayYr,displayYr2);
	
	displayYr = updateWeeksCalendarRight(displayM,displayYr);
	displayYr2 = updateWeeksCalendarRight(displayM2,displayYr2);


	if (!hitForwardPointBooking) {
		displayM += 1;
		displayM2 += 1;
	};
	
	if (displayM > 11) {
		displayM = 0;
	};
	
	if (displayM2 > 11) {
		displayM2 = 0;
	};
	updateWeeksCalendars();
}

function hitBackPoint(month,year){
	if (month === currentMonth && year === currentYear) {
		return true;
	}else{
		return false;
	}
}

function hitForwardPoint(month1,month2,year1,year2){
	var windowWidth = $(window).width();
	if (windowWidth <= 768) {
		return yearCheck(month1,year1);
	}else if(windowWidth <= 992 && windowWidth > 768){
		return yearCheck(month2,year2);
	}
}

function yearCheck(month,year){
	if(year === stopYear && month === 11){
		return true;
	}else{
		return false;
	}
}

function updateWeeksCalendarRight(month,year){
	if (month === 11 && year === stopYear-2) {
		return stopYear-1;
	}else if (month === 11 && year === stopYear-1) {
		return stopYear;
	}else{
		return year;
	}
}

function updateWeeksCalendarLeft(month,year){
	if (month === 0 && year === stopYear-1) {
		return stopYear-2;
	}else if (month === 0 && year === stopYear) {
		return stopYear-1;
	}else{
		return year;
	}
}

function updateWeeksCalendars(){
	var windowWidth = $(window).width();
	if (windowWidth <= 330 ) {
		removeCalendarsBookings();
		var theCal3 = new customCalendar(0,0,displayM, displayYr,'#jwcustomCalendar1','x', 160);
		var center = windowWidth/2 -110;
		$('#jwcustomCalendar1').css({
			left: center,
			top: '475px'
		});

	}else if(windowWidth <= 376 && windowWidth > 331){
		removeCalendarsBookings();
		var theCal3 = new customCalendar(0,0,displayM, displayYr,'#jwcustomCalendar1','x', 160);
		var center = windowWidth/2 -110;
		$('#jwcustomCalendar1').css({
			left: center,
			top: '400px'
		});

	}else if(windowWidth  <= 421 && windowWidth > 376){
		removeCalendarsBookings();
		var theCal3 = new customCalendar(0,0,displayM, displayYr,'#jwcustomCalendar1','x', 290);
		var center = windowWidth/2 -165;
		$('#jwcustomCalendar1').css({
			left: center,
			top: '345px'
		});

	}else if(windowWidth <= 600 && windowWidth > 421){
		removeCalendarsBookings();
		var theCal3 = new customCalendar(0,0,displayM, displayYr,'#jwcustomCalendar1','x', 290);
		var center = windowWidth/2 -165;
		$('#jwcustomCalendar1').css({
			left: center,
			top: '345px'
		});

	}else if(windowWidth <= 768 && windowWidth > 600){
		removeCalendarsBookings();
		var theCal3 = new customCalendar(0,0,displayM, displayYr,'#jwcustomCalendar1','x', 290);
		var center = windowWidth/2 -165;
		$('#jwcustomCalendar1').css({
			left: center,
			top: '300px'
		});

	}else if(windowWidth <= 992 && windowWidth > 768){
		removeCalendarsBookings();
		var theCal3 = new customCalendar(120,265,displayM,displayYr,'#jwcustomCalendar1','x', 160);
		var theCal4 = new customCalendar(393,265,displayM2,displayYr2,'#jwcustomCalendar2','w', 160);

	}else if (windowWidth > 992 && windowWidth <= 1200){
		removeCalendarsBookings();
		var theCal3 = new customCalendar(77,275,displayM,displayYr,'#jwcustomCalendar1','x', 160);
		var theCal4 = new customCalendar(324,275,displayM2,displayYr2,'#jwcustomCalendar2','w', 160);
	}

}

function showPoints(){
	clubPointsShown = true;
	clubWeeksShown = false;

	//show
	$('#clubPointsPanelGroup').css('display','block');
	$('#clubPoints').css('display','block');
	$('#lowerButtonIcon').css('display', 'block');

	//hide
	$('.product-nav-buttons').css('display','none');
	$('.product-summary-header-title-mobile').css('display','none');
	$('#clubWeeksMobilePanelGroup').css('display','none');
	$('#clubWeeks').css('display','none');

	$("#topBottomButton").css('display','block').attr('onclick','window.location.href = "points-transaction-history.html"').html('<a>View Points Transaction History</a>');
}

function showWeeks(){
	clubPointsShown = false;
	clubWeeksShown = true;
	//show
	$('#clubWeeksMobilePanelGroup').css('display','block');
	$('#clubWeeks').css('display','block');
	$('#lowerButtonIcon').css('display', 'block');

	//hide
	$('.product-nav-buttons').css('display','none');
	$('.product-summary-header-title-mobile').css('display','none');
	$('#clubPointsPanelGroup').css('display','none');
	$('#clubPoints').css('display','none');

	$("#topBottomButton").css('display','block').attr('onclick','window.location.href = "weeks-transaction-history.html"').html('<a>View Weeks Transaction History<a/>');
	$("#bottomBottomButton").css('display','block').html('<i id="lowerButtonIcon" style="margin-right:10px;" class="fa fa-lg fa-calendar"></i> My Vacation Club Points');
	$('#lowerButtonIcon').removeClass('fa fa-database').addClass('fa fa-calendar');
}

$('.leftArrowButtonWeeksOccupy').click(function(event) {
	moveCalendarsLeft();
});
$('.rightArrowButtonWeeksOccupy').click(function(event) {
	moveCalendarsRight();
});
$('#clubPointsButton').click(function(){
	$('.viewUpcomingReservation').hide();
	$('#mobileBottomNavButtons a').hide();
	showPoints();
});


$('#clubWeeksButton').click(function(){
	$('.viewUpcomingReservation').hide();
	$('#mobileBottomNavButtons a').hide();
	showWeeks();
});

$('#mobileBackButtonPoints').click(function(){

	//hide
	$('#clubPointsPanelGroup').css('display','none');
	$('#clubPoints').css('display','none');
	$("#topBottomButton").css('display','none');
	$("#bottomBottomButton").css('display','none');

	//show
	$('.product-nav-buttons').css('display','block');
	$('.product-summary-header-title-mobile').css('display','block');
	$('#mobileBottomNavButtons a').show();

});

$('#mobileBackButtonWeeks').click(function(){
	//hide
	$('#clubWeeksMobilePanelGroup').css('display','none');
	$('#clubWeeks').css('display','none');
	$("#topBottomButton").css('display','none');
	$("#bottomBottomButton").css('display','none');
	
	//show
	$('.product-nav-buttons').css('display','block');
	$('.product-summary-header-title-mobile').css('display','block');
	$('#mobileBottomNavButtons a').show();
});

$('#bottomBottomButton').click(function(){
	if (clubPointsShown) {
		showWeeks();
	}else{
		showPoints();
	}
});

///calendars
var todayMonth = new Date();
var monthInc = todayMonth.getMonth();
var monthInc2 = (todayMonth.getMonth() + 1)%12;

var displayYear = todayMonth.getFullYear();
if(monthInc === 11){
	displayYear2 = todayMonth.getFullYear()+1;
}else{
	displayYear2 = todayMonth.getFullYear();
}

var hitForwardStopPoint = false;
var hitBackStopPoint = false;

var forwardStopYear = todayMonth.getFullYear()+2;

var theCal = new customCalendar(40,64,monthInc,displayYear,'#customCalendar1','z','');
theCal.setHighlightedDays([1 ,2 , 13],monthInc,'z');
var theCal2 = new customCalendar(245,64,monthInc2,displayYear2,'#customCalendar2','y','');
theCal2.setHighlightedDays([1 ,2 , 13],monthInc2,'y');
var theCal3 = new customCalendar(0,0,monthInc,displayYear,'#customCalendar101','m',160);
theCal.setHighlightedDays([1 ,2 , 13],9,'z');

var theCal4 = new customCalendar(0,0,monthInc,displayYear,'#customCalendar1337','1337',190);

$('#callendarLeftButton').click(function(){
	
	var currentYear = todayMonth.getFullYear();
	var currentMonth = todayMonth.getMonth();

	if (monthInc <= currentMonth && displayYear === currentYear ) {
		hitBackStopPoint = true;
	}else{
		hitBackStopPoint = false;
	}

	displayYear = updateCalendarLeft(monthInc,displayYear);
	displayYear2 = updateCalendarLeft(monthInc2,displayYear2);

	if (!hitBackStopPoint) {
		monthInc -= 1;
		monthInc2 -= 1;
	};
	
	if (monthInc < 0) {
		monthInc = 11;
	}
	if(monthInc2 <  0){
		monthInc2 = 11;
	}

	updateCalendar(monthInc, monthInc2,displayYear,displayYear2);
});

$('#callendarRightButton').click(function(){
	
	if (monthInc2 >= 11 && displayYear2 === 2016) {
		hitForwardStopPoint = true;
	}else{
		hitForwardStopPoint = false;
	}

	displayYear = updateCalendarRight(monthInc,displayYear);
	displayYear2 = updateCalendarRight(monthInc2,displayYear2);

	//only go to the 12/2016
	if (!hitForwardStopPoint) {
		monthInc += 1;
		monthInc2 += 1;
	}
	

	if (monthInc > 11) {
		monthInc = 0;
	}else if(monthInc <  0){
		monthInc = 11;
	}

	if(monthInc2 <  0){
		monthInc2 = 11;
	}else if (monthInc2 > 11) {
		monthInc2 = 0;
	}
	updateCalendar(monthInc,monthInc2,displayYear,displayYear2);
});

$('#calendarLeftButton').click(function(){
	
	var currentYear = todayMonth.getFullYear();
	var currentMonth = todayMonth.getMonth();

	if (monthInc <= currentMonth && displayYear === currentYear ) {
		hitBackStopPoint = true;
	}else{
		hitBackStopPoint = false;
	}

	displayYear = updateCalendarLeft(monthInc,displayYear);

	if (!hitBackStopPoint) {
		monthInc -= 1;
	};
	
	if (monthInc < 0) {
		monthInc = 11;
	}

	updateCalendar2(monthInc, displayYear);
});

$('#calendarRightButton').click(function(){
	
	if (monthInc >= 11 && displayYear === 2016) {
		hitForwardStopPoint = true;
	}else{
		hitForwardStopPoint = false;
	}

	displayYear = updateCalendarRight(monthInc,displayYear);

	if (!hitForwardStopPoint) {
		monthInc += 1;
	}
	

	if (monthInc > 11) {
		monthInc = 0;
	}else if(monthInc <  0){
		monthInc = 11;
	}
	updateCalendar2(monthInc,displayYear);
});

/* Added by Matt */

function updateCalendarLeft(month,year){
	if (month === 0 && year === forwardStopYear) {
		return forwardStopYear-1;
	}else if(month === 0 && year === forwardStopYear-1){
		return forwardStopYear-2;
	}else{
		return year;
	}
}

function updateCalendarRight(month,year){
	if (month === 11 && year === forwardStopYear-2) {
		return forwardStopYear-1;
	}else if(month === 11 && year === forwardStopYear-1){
		return forwardStopYear;
	}else{
		return year;
	}
}

function updateCalendar(month1,month2,year1,year2){

	$('#theCalz').remove();
	$('#theCaly').remove();

	var theCal = new customCalendar(40,64,month1,year1,'#customCalendar1','z');
	theCal.setHighlightedDays([1 ,2 , 13],month1,'z');
	var theCal2 = new customCalendar(245,64,month2,year2,'#customCalendar2','y');
	theCal2.setHighlightedDays([1 ,2 , 13],month2,'y');

	var windowWidth = $(window).width();
if(windowWidth <= 750){ //mobile
	var center = windowWidth/2 -122;
	$('#customCalendar2').css('display','none');
	$('#customCalendar1').css({
		left: center,
		top: '95px'
	});
	$('.availability-legend-row').css('margin-top','300px');
	$('.availability-legend-img-label').css('margin-bottom','35px');
}else if(windowWidth <= 974 && windowWidth > 750){//tablet
	var centerFirst = windowWidth/6-45;
	var centerSecond = windowWidth/6+235;
	$('#customCalendar2').css('display','block');
	$('#customCalendar2').css({
		left: centerSecond,
		top: '64px'
	});
	$('#customCalendar1').css({
		left: centerFirst,
		top: '64px'
	});
	$('.availability-legend-row').css('margin-top','285px');
}else if(windowWidth > 974 && windowWidth <= 1199){//large and med desktop
	$('#customCalendar2').css('display','block');
	$('#customCalendar1').css({
		left: '40px',
		top: '64px'
	});

	$('#customCalendar2').css({
		left: '245px',
		top: '64px'
	});
	$('.availability-legend-row').css('margin-top','285px');
}else{
	$('#customCalendar2').css('display','block');
	$('#customCalendar1').css({
		left: '50px',
		top: '64px'
	});

	$('#customCalendar2').css({
		left: '270px',
		top: '64px'
	});
	$('.availability-legend-row').css('margin-top','285px');
}
}

function updateCalendar2(month1,year1){

	$('#theCalm').remove();

	monthInc = month1;
	displayYear = year1;

	var theCal3 = new customCalendar(0,0,month1,year1,'#customCalendar101','m', 160);

}

/* End of Matt */

//added 10/15 
var collapseOneMobileOpen = true;
var collapseTwoMobileOpen = false;
var collapseThreeMobileOpen = false;

///Points

$('#pointsHeading1').click(function(){
	if ($('#collapseOneMobile').hasClass('in')) {
		collapseOneMobileOpen = false;
		$('#collapseOneMobile').collapse('hide');
	}else{
		collapseOneMobileOpen = true;
		$('#collapseOneMobile').collapse('show');
	}
	updateShowAllButton();
});

$('#pointsHeading2').click(function(){
	if ($('#collapseTwoMobile').hasClass('in')) {
		collapseTwoMobileOpen = false;
		$('#collapseTwoMobile').collapse('hide');
	}else{
		collapseTwoMobileOpen = true;
		$('#collapseTwoMobile').collapse('show');
	}
	updateShowAllButton();
});

$('#pointsHeading3').click(function(){

	if ($('#collapseThreeMobile').hasClass('in')) {
		collapseThreeMobileOpen = false;
		$('#collapseThreeMobile').collapse('hide');
	}else{
		collapseThreeMobileOpen = true;
		$('#collapseThreeMobile').collapse('show');
	}
	updateShowAllButton();
});

function closeAllPointsPanels(){
	
	$('#pointsShowAll').attr('src','images/show-all.jpg');
	$('#clubPointsShowAllText').html('Show All');

	collapseOneMobileOpen = false;
	$('#collapseOneMobile').collapse('hide');

	collapseTwoMobileOpen = false;
	$('#collapseTwoMobile').collapse('hide');

	collapseThreeMobileOpen = false;
	$('#collapseThreeMobile').collapse('hide');
	updateShowAllButton();
}

function openAllPointsPanels(){

	if (!($('#collapseOneMobile').hasClass('in'))) {
		collapseOneMobileOpen = true;
		$('#collapseOneMobile').collapse('show');
	}

	if (!($('#collapseTwoMobile').hasClass('in'))) {
		collapseTwoMobileOpen = true;
		$('#collapseTwoMobile').collapse('show');
	}

	if (!($('#collapseThreeMobile').hasClass('in'))) {
		collapseThreeMobileOpen = true;
		$('#collapseThreeMobile').collapse('show');
	}
	updateShowAllButton();
}
function updateShowAllButton(){
	if (collapseOneMobileOpen && collapseTwoMobileOpen && collapseThreeMobileOpen) {
		$('#pointsShowAll').attr('src','images/hide-all.jpg');
		$('#clubPointsShowAllText').html('Hide All');
	}else{
		$('#pointsShowAll').attr('src','images/show-all.jpg');
		$('#clubPointsShowAllText').html('Show All');
	};
}
$('#pointsShowAllContainer').click(function(e){
	updateShowAllButton();
	if ($('#clubPointsShowAllText').html() === 'Hide All') {
		closeAllPointsPanels();		
	}else{
		openAllPointsPanels();
	}
});
//Weeks
var topWeeksPanelOneOpen = false;
var topWeeksPanelTwoOpen = false;
var topWeeksPanelThreeOpen = false;
var topWeeksPanelFourOpen = false;
var topWeeksPanelFiveOpen = false;

var clubWeeksMobilePanelGroupOpen = false;

function updateWeeksShowAll(){
	if (topWeeksPanelOneOpen || topWeeksPanelTwoOpen || topWeeksPanelThreeOpen || topWeeksPanelFourOpen || topWeeksPanelFiveOpen) {
		$('#weeksShowAll').attr('src','images/show-all.jpg');
		$('#weeksShowAllText').html('Show All');
	}else{
		$('#weeksShowAll').attr('src','images/hide-all.jpg');
		$('#weeksShowAllText').html('Hide All');
	}
}

$('.heading1').click(function(){
	updateWeeksShowAll();
	if ($('#panelHeading1').hasClass('collapsed')) {
		topWeeksPanelOneOpen = false;
	}else{
		topWeeksPanelOneOpen = true;
	}
	
});
$('.heading2').click(function(){
	updateWeeksShowAll();
	if ($('#panelHeading2').hasClass('collapsed')) {
		topWeeksPanelTwoOpen = false;
	}else{
		topWeeksPanelTwoOpen = true;
	}
	
});
$('.heading3').click(function(){
	updateWeeksShowAll();
	if ($('#panelHeading3').hasClass('collapsed')) {
		topWeeksPanelThreeOpen = false;
	}else{
		topWeeksPanelThreeOpen = true;
	}
	
});
$('.heading4').click(function(){
	updateWeeksShowAll();
	if ($('#panelHeading4').hasClass('collapsed')) {
		topWeeksPanelFourOpen = false;
	}else{
		topWeeksPanelFourOpen = true;
	}
});
$('.heading5').click(function(){
	updateWeeksShowAll();
	if ($('#panelHeading5').hasClass('collapsed')) {
		topWeeksPanelFiveOpen = false;
	}else{
		topWeeksPanelFiveOpen = true;
	}
});

$('#weeksShowAllContainer').click(function(){
	updateWeeksShowAll();
	if (topWeeksPanelOneOpen) {
		$('#panelHeading1').addClass('collapsed');
		topWeeksPanelOneOpen = false;
	}else{
		$('#panelHeading1').removeClass('collapsed');
		topWeeksPanelOneOpen = true;
	}

	if (topWeeksPanelTwoOpen) {
		$('#panelHeading2').addClass('collapsed');
		topWeeksPanelTwoOpen = false;
	}else{
		$('#panelHeading2').removeClass('collapsed');
		topWeeksPanelTwoOpen = true;
	}

	if (topWeeksPanelThreeOpen) {
		$('#panelHeading3').addClass('collapsed');
		topWeeksPanelThreeOpen = false;
	}else{
		$('#panelHeading3').removeClass('collapsed');
		topWeeksPanelThreeOpen = true;
	}

	if (topWeeksPanelFourOpen) {
		$('#panelHeading4').addClass('collapsed');
		topWeeksPanelFourOpen = false;
	}else{
		$('#panelHeading4').removeClass('collapsed');
		topWeeksPanelFourOpen = true;
	}

	if (topWeeksPanelFiveOpen) {
		$('#panelHeading5').addClass('collapsed');
		topWeeksPanelFiveOpen = false;
	}else{
		$('#panelHeading5').removeClass('collapsed');
		topWeeksPanelFIveOpen = true;
	}
	
	if (!clubWeeksMobilePanelGroupOpen) {
		$('#invCollapseOneMobile').collapse('show');
		$('#invCollapseTwoMobile').collapse('show');
		clubWeeksMobilePanelGroupOpen = true;
	}else{
		$('#invCollapseOneMobile').collapse('hide');
		$('#invCollapseTwoMobile').collapse('hide');
		clubWeeksMobilePanelGroupOpen = false;
	}	
});

$('.mobileSearch.returnProfile').click(function() {
	location.href = "profile.html";
});
$('.mobileSearch.returnPortfolio').click(function() {
	location.href = "product_summary.html";
});
$(".mobileSearch.returnIndex").click(function() {
	location.href = "index-logged-in.html";
});
function reloadPage() {
	location.reload();
}
var hotelDeedInfo1Shown = false;
var hotelDeedInfo2Shown = false;
var hotelDeedInfo3Shown = false;
var hotelDeedInfo4Shown = false;
var hotelDeedInfo5Shown = false;
var hotelDeedInfo6Shown = false;
var hotelDeedInfo7Shown = false;
var hotelDeedInfo8Shown = false;
var hotelDeedInfo9Shown = false;

$('#HotelOneInfoButton').click(function(){
	if (!hotelDeedInfo1Shown) {
		$('#hotelDeedInfo1').show();
		$(this).attr('src','images/hide-all.jpg');
		hotelDeedInfo1Shown = true;
	}else{
		$('#hotelDeedInfo1').hide();
		$(this).attr('src','images/show-all.jpg');
		hotelDeedInfo1Shown = false;
	}
});

$('#HotelTwoInfoButton').click(function(){
	if (!hotelDeedInfo2Shown) {
		$('#hotelDeedInfo2').show();
		$(this).attr('src','images/hide-all.jpg');
		hotelDeedInfo2Shown = true;
	}else{
		$('#hotelDeedInfo2').hide();
		$(this).attr('src','images/show-all.jpg');
		hotelDeedInfo2Shown = false;
	}
});

$('#HotelThreeInfoButton').click(function(){
	if (!hotelDeedInfo3Shown) {
		$('#hotelDeedInfo3').show();
		$(this).attr('src','images/hide-all.jpg');
		hotelDeedInfo3Shown = true;
	}else{
		$('#hotelDeedInfo3').hide();
		$(this).attr('src','images/show-all.jpg');
		hotelDeedInfo3Shown = false;
	}
});
$('#HotelFourInfoButton').click(function(){
	if (!hotelDeedInfo4Shown) {
		$('#hotelDeedInfo4').show();
		$(this).attr('src','images/hide-all.jpg');
		hotelDeedInfo4Shown = true;
	}else{
		$('#hotelDeedInfo4').hide();
		$(this).attr('src','images/show-all.jpg');
		hotelDeedInfo4Shown = false;
	}
});

$('#HotelFiveInfoButton').click(function(){
	if (!hotelDeedInfo5Shown) {
		$('#hotelDeedInfo5').show();
		$(this).attr('src','images/hide-all.jpg');
		hotelDeedInfo5Shown = true;
	}else{
		$('#hotelDeedInfo5').hide();
		$(this).attr('src','images/show-all.jpg');
		hotelDeedInfo5Shown = false;
	}
});

$('#HotelSixInfoButton').click(function(){
	if (!hotelDeedInfo6Shown) {
		$('#hotelDeedInfo6').show();
		$(this).attr('src','images/hide-all.jpg');
		hotelDeedInfo6Shown = true;
	}else{
		$('#hotelDeedInfo6').hide();
		$(this).attr('src','images/show-all.jpg');
		hotelDeedInfo6Shown = false;
	}
});

$('#HotelSevenInfoButton').click(function(){
	if (!hotelDeedInfo7Shown) {
		$('#hotelDeedInfo7').show();
		$(this).attr('src','images/hide-all.jpg');
		hotelDeedInfo7Shown = true;
	}else{
		$('#hotelDeedInfo7').hide();
		$(this).attr('src','images/show-all.jpg');
		hotelDeedInfo7Shown = false;
	}
});

$('#HotelEightInfoButton').click(function(){
	if (!hotelDeedInfo8Shown) {
		$('#hotelDeedInfo8').show();
		$(this).attr('src','images/hide-all.jpg');
		hotelDeedInfo8Shown = true;
	}else{
		$('#hotelDeedInfo8').hide();
		$(this).attr('src','images/show-all.jpg');
		hotelDeedInfo8Shown = false;
	}
});

$('#HotelNineInfoButton').click(function(){
	if (!hotelDeedInfo9Shown) {
		$('#hotelDeedInfo9').show();
		$(this).attr('src','images/hide-all.jpg');
		hotelDeedInfo9Shown = true;
	}else{
		$('#hotelDeedInfo9').hide();
		$(this).attr('src','images/show-all.jpg');
		hotelDeedInfo9Shown = false;
	}
});

$('#mfees-make-payment').click(function(){
	$('#protectModal').modal('show');
});

$('#save_close').click(function(){
	var modal = $(this).closest('.modal');
	modal.modal('hide');
});

function checkValue(value){
	if(!isNaN(value)){
		if(value !== 0){
			return true;
		}else{
			return false;
		}
	};
};

$('#shortPayment .payment-details-table tbody td:first-child, #shortPayment2 .payment-details-table tbody td:first-child').click(function(){
	var image = $(this).closest('table').prev('span').find('img');
	var trToggle = $(this).parent();
	var nextTr = trToggle.next('tr');
	if(trToggle.hasClass('displayRows')){
		image.attr('src','images/hide-all-grey.jpg');
	}else{
		image.attr('src','images/show-all-grey.jpg');
	}
	trToggle.toggleClass('displayRows');

	if(nextTr.hasClass('hideable-row')){
		nextTr.toggleClass('show-row');
	}
});

$('#shortPayment img[alt="Show All Single Mfees"], #shortPayment2 img[alt="Show All Single Mfees"]').click(function(){
	var toggle = $(this).parent().next('table').find('tbody tr');
	toggle.toggleClass('displayRows');
});

$('.modal-close').click(function(){
	var modal = $(this).closest('.modal');
	modal.modal('hide');
});

var windowWidth = $(window).width();
if(windowWidth>768){
	$('#shortPayment2 .payment-details-table .hideable-row').addClass('show-row');
}else{
	$('#shortPayment2 .payment-details-table .hideable-row').removeClass('show-row');
}

var desktop = false;
$(window).resize(function(){
	var windowWidth = $(window).width();
	if(windowWidth >= 768){
		$('#shortPayment2 .payment-details-table .hideable-row').addClass('show-row');
		desktop = true;
	}else if(desktop && windowWidth < 768){
		$('#shortPayment2 .payment-details-table .hideable-row').removeClass('show-row');
		desktop = false;
	}
});

$('.points-content .points-info-header').click(function(){
	var windowWidth = $(window).width();
	if(windowWidth<992){
		$(this).closest('.row').toggleClass('show-info');
		$(this).find('i').toggleClass('fa-caret-up');
		$(this).find('i').toggleClass('fa-caret-down');
	}
});

$('.legal-content .legalInfo-info-header').click(function(){
	var windowWidth = $(window).width();
	if(windowWidth<992){
		$(this).closest('.row').toggleClass('show-info');
		$(this).find('i').toggleClass('fa-caret-up');
		$(this).find('i').toggleClass('fa-caret-down');
	}
});
var allPtsTradeDetailsShowing = true;

$('.step1-points-trade-mobile .panel-heading').click(function(){
	if (!($('#collapseOne').hasClass('in'))) {
		$('#collapseOne').collapse('show');
		$(this).find('i').toggleClass('fa-caret-up');
		$(this).find('i').toggleClass('fa-caret-down');	
	}else{
		$('#collapseOne').collapse('hide');
		$(this).find('i').toggleClass('fa-caret-up');
		$(this).find('i').toggleClass('fa-caret-down');	
	}
});

$('.step1-points-trade-mobile #mobileHeadingTwo').click(function(){
	if (!($('#collapseTwo').hasClass('in'))) {
		$('#collapseTwo').collapse('show');
		$(this).find('i').toggleClass('fa-caret-up');
		$(this).find('i').toggleClass('fa-caret-down');	
	}else{
		$('#collapseTwo').collapse('hide');
		$(this).find('i').toggleClass('fa-caret-up');
		$(this).find('i').toggleClass('fa-caret-down');	
	}
});

$('.step1-points-trade-mobile #mobileHeadingThree').click(function(){
	if (!($('#collapseThree').hasClass('in'))) {
		$('#collapseThree').collapse('show');
		$(this).find('i').toggleClass('fa-caret-up');
		$(this).find('i').toggleClass('fa-caret-down');	
	}else{
		$('#collapseThree').collapse('hide');
		$(this).find('i').toggleClass('fa-caret-up');
		$(this).find('i').toggleClass('fa-caret-down');	
	}
});
$('.step1-points-trade-mobile #mobileHeadingOne').click(function(){
	console.log('hitting panel heading pt step1');
	$(this).find('i').toggleClass('fa-caret-up');
	$(this).find('i').toggleClass('fa-caret-down');	
	
});
$('#pt1ShowAll').click(function(){
	var showAllImg = $(this).find('#showAllImg');

	if (!allPtsTradeDetailsShowing) {
		showAllImg.attr('src','images/hide-all.jpg');
		$('#pt1ShowAllText').text('Hide All');
		if (!($('#collapseOne').hasClass('in'))) {
			$('#collapseOne').collapse('show');
		};
		if (!($('#collapseTwo').hasClass('in'))) {
			$('#collapseTwo').collapse('show');
		};
		if (!($('#collapseThree').hasClass('in'))) {
			$('#collapseThree').collapse('show');
		};
		
		allPtsTradeDetailsShowing = true;
	}else{
		showAllImg.attr('src','images/show-all.jpg');
		$('#pt1ShowAllText').text('Show All');
		if (($('#collapseOne').hasClass('in'))) {
			$('#collapseOne').collapse('hide');
		};
		if (($('#collapseTwo').hasClass('in'))) {
			$('#collapseTwo').collapse('hide');
		};
		if (($('#collapseThree').hasClass('in'))) {
			$('#collapseThree').collapse('hide');
		};

		allPtsTradeDetailsShowing = false;
	}
	$(this).parent().find('i').each(function(){
		$(this).toggleClass('fa-caret-up');
		$(this).toggleClass('fa-caret-down');
	});
});

$('.step1-points-trade-mobile #rewardsDropDownButton1').click(function(){
	$('.step1-points-trade-mobile #rewards3DropDownItem1').toggle();
	return false;
});
$('.step1-points-trade-mobile #rewardsDropDownButton2').click(function(){
	$('.step1-points-trade-mobile #rewards3DropDownItem2').toggle();
	return false;
});
$('.step1-points-trade-mobile #rewardsDropDownButton3').click(function(){
	$('.step1-points-trade-mobile #rewards3DropDownItem3').toggle();
	return false;
});

$('.transactions-table tbody tr td:first-child').click(function(e){
	if($(e.target).is('a')){
	}else{
		var windowWidth = $(window).width();
		var arrow = $(this).find('.arrow');
		arrow.toggleClass('fa-caret-down');
		arrow.toggleClass('fa-caret-up');
		$(this).closest('tr').toggleClass('hiddenRow');
		var icon = $(this).find('.square-plus');
		var toggle = $(this).closest('table').next('.transaction-table-details-row');
		icon.toggleClass('fa-plus-square-o');
		icon.toggleClass('fa-minus-square-o');
		if(icon.hasClass('fa-plus-square-o')){
			toggle.css('display','none');
		}else{
			toggle.css('display','block');
		}
		$('.transaction-mobile-section').css('clear','both');
	}
});
$('.mobilePointsTradeStep2 .see-details').click(function(){
	var content = $(this).closest('.panel-body').find('#contentSetOne').html();
	$("#seeDetails").find('.modal-body').html(content);
	$("#seeDetails").modal('toggle');
});

var r1item1Showing = false;
var r1item2Showing = false;
var r1item3Showing = false;
//Jason edited December
$('.points-trade-step1 .ptTableCol8ContentRow,.colTwoTextBelow').click(function(){
	$(this).find('li').toggle();
	$(this).find('ul li').click(function(){
		$(this).find('input[type="text"]').text($(this).find('li').text());
	});
});


/*$('.pt-step2 #mobileHeadingTwo,.pt-step2 #mobileHeadingOne').click(function(){
	if ($('#collapseTwo').hasClass('in')) {
		$('#panelCaret2').removeClass('fa-caret-up').addClass('fa-caret-down');
	}else{
		$('#panelCaret2').removeClass('fa-caret-down').addClass('fa-caret-up');
	}
	if ($('#collapseOne').hasClass('in')) {
		$('#panelCaret1').removeClass('fa-caret-up').addClass('fa-caret-down');
	}else{
		$('#panelCaret1').removeClass('fa-caret-down').addClass('fa-caret-up');
	}
});
*/
$('#detailsShowAll').click(function(){
	$('#detail1Caret').toggleClass('fa-caret-up');
	$('#detail1Caret').toggleClass('fa-caret-down');
	$('#detail2Caret').toggleClass('fa-caret-up');
	$('#detail2Caret').toggleClass('fa-caret-down');
	
	$('#contentSetOne').animate({
		height: 'toggle'
	}, 200, function(){

	});
	
	$('#contentSetTwo').animate({
		height: 'toggle'
	}, 200, function(){
		
	});
	if ($('#detail1Caret').hasClass('fa-caret-up') && $('#detail2Caret').hasClass('fa-caret-up')) {
		$('#detailsShowAllText').text('Hide All');
		$('#detailsShowAllImg').attr('src','images/hide-all.jpg');
	}else{
		$('#detailsShowAllText').text('Show All');
		$('#detailsShowAllImg').attr('src','images/show-all.jpg');
	}
});

$('#detailsRow1').click(function () {
	$(this).find('i').toggleClass('fa-caret-up');
	$(this).find('i').toggleClass('fa-caret-down');	
	$('#contentSetOne').animate({
		height: 'toggle'
	}, 200, function(){

	});
});

$('#detailsRow2').click(function () {
	$(this).find('i').toggleClass('fa-caret-up');
	$(this).find('i').toggleClass('fa-caret-down');	
	$('#contentSetTwo').animate({
		height: 'toggle'
	}, 200, function(){
		
	});
});

$('#detailsRow3').click(function () {
	$(this).find('i').toggleClass('fa-caret-up');
	$(this).find('i').toggleClass('fa-caret-down');	
	$('#contentSetThree').animate({
		height: 'toggle'
	}, 200, function(){
		
	});
});

$('.ownership-show-all').click(function(){
	if($(this).hasClass("allHidden")){
		$(this).html('Hide All <img src="images/hide-all.jpg">');
		$(this).removeClass("allHidden");
	}else{
		$(this).html('Show All <img src="images/show-all.jpg">');
		$(this).addClass("allHidden");
	}
});

$('.points-content .showAllRow a').click(function(){
	$('.transaction-mobile-section').css('clear','both');
	var toggleGroup = $(this).parent().next('.transaction-mobile-group');
	var toggles = toggleGroup.find('.transaction-mobile-section table tbody tr');
	if($(this).hasClass('allHidden')){
		toggles.each(function(){
			var icon = $(this).find('.square-plus');
			var arr = $(this).find('.arrow');
			var toggleRow = $(this).closest('table').next('.transaction-table-details-row');
			if($(this).hasClass('hiddenRow')){

			}else{
				icon.toggleClass('fa-plus-square-o');
				icon.toggleClass('fa-minus-square-o');
				arr.toggleClass('fa-caret-down');
				arr.toggleClass('fa-caret-up');
				$(this).toggleClass('hiddenRow');
				if(icon.hasClass('fa-plus-square-o')){
					toggleRow.css('display','none');
				}else{
					toggleRow.css('display','block');
				}
			}
		});
	}else{
		$(toggles).each(function(){
			var icon = $(this).find('.square-plus');
			var arr = $(this).find('.arrow');
			var toggleRow = $(this).closest('table').next('.transaction-table-details-row');
			if($(this).hasClass('hiddenRow')){
				icon.toggleClass('fa-plus-square-o');
				icon.toggleClass('fa-minus-square-o');
				arr.toggleClass('fa-caret-down');
				arr.toggleClass('fa-caret-up');
				$(this).toggleClass('hiddenRow');
				if(icon.hasClass('fa-plus-square-o')){
					toggleRow.css('display','none');
				}else{
					toggleRow.css('display','block');
				}
			}
		});
	}
});

$('.owner-mobile-section').click(function(){
	var width = $(window).width();
	if (width < 991) {
		if($(this).hasClass('shown')){
			$(this).find('p').css('display','none');
		}else{
			$(this).find('p').css('display','block');
		}
		$(this).find('i').toggleClass('fa-caret-down');
		$(this).find('i').toggleClass('fa-caret-up');
		$(this).toggleClass('shown');
	};
	
});

$('.payment-method-select #credit').click(function(){
	if ($(this).is(':checked')) {
		$('.payment-method-select #check').attr('checked',false);
	};
});

$('.payment-method-select #check').click(function(){
	if ($(this).is(':checked')) {
		$('.payment-method-select #credit').attr('checked',false);
	};
});

$('.selected-credit').hide();
$('.selected-check').hide();
var clickCount = 0;
$('#paymentOverlayContinueButton').click(function(){
	
	if (!$('#credit').is(':checked') && !$('#check').is(':checked')) {
		alert('Please select a payment method from above.');
	}else{
		$('.payment-method-select').hide();
		if ($('.payment-method-select #credit').is(':checked')) {
			$('.selected-credit').show();
			if(clickCount>=1){
				$('#paymentOverlayContinueButton').attr('href','bookings_weeks-occupy-confirmation.html');
			}
		}else if ($('.payment-method-select #check').is(':checked')) {
			$('.selected-check').show();
			if(clickCount>=1){
				$('#paymentOverlayContinueButton').attr('href','bookings_weeks-occupy-confirmation.html');
			}
		}
		clickCount = clickCount+1;
	}
});

$('.faq-section-cat a').click(function() {
	var href = $(this).attr('href');

	$('.faq-content').not(href).hide();
	$(href).show();
	return false;
});

// Opens first question category when a tab is clicked
$('.faq-sections.nav-tabs li a, .faq-sections-mobile a').click(function() {
	var href = $(this).attr('href');
	var firstCat = $(href).find('.faq-section-cat li:first-child a').attr('href');

	$('.faq-content').hide(); 
	$(firstCat).show();
});


$(window).click(function(){
	if(!$('#paymentOverLay').hasClass('in')){
		$('.payment-method-select').show();
		$('.selected-credit').hide();
		$('.selected-check').hide();
		$('#paymentOverlayContinueButton').attr('href','#');
		clickCount = 0;
	}
});
$(function() {
	$( ".points-calculator #datepicker" ).datepicker({
		showOn: "button",
		buttonImage: "images/calendar.gif",
		buttonImageOnly: true,
		buttonText: "Select date"
	});
});

$('.restrictions a').click(function(){
	$('.hide-details').toggle();
	$('.restrictions a i').toggleClass('fa-minus');
	$('.restrictions a i').toggleClass('fa-plus');
	if ($('.restrictions a i').hasClass('fa-minus')) {
		$('.restrictions a').html('<br/><a href="#"><i class="fa fa-minus"></i>Hide Details</a>');
	}else{
		$('.restrictions a').html('<br/><a href="#"><i class="fa fa-plus"></i>Show Details</a>');
	}
});

fillDropDown();

$('.dropDownTrigger').click(function(){
	if($(this).hasClass('shown')){
		$('.theCalDropDown').css('display', 'none');
	}else{
		$('.theCalDropDown').css('display', 'block');
	}
	$(this).toggleClass('shown');
});

$('.theCalDropDown li a').click(function(){
	$('.theCalDropDown').css('display','none');
	$('.dropDownTrigger').toggleClass('shown');
	var month = $(this).data("month");
	var year = $(this).data("year");
	updateCalendar2(month, year);
});

function fillDropDown(){
	var html = $('.theCalDropDown').html();
	var year = currentYear;
	for(var i=currentMonth; i<currentMonth+36; i++){
		if((i%12 === 0 && currentMonth !== 0) || (i%12 ===0 && i>1)){
			year += 1;
		}

		html = updateHTML(html,i,year);
		
	};
	$('.theCalDropDown').html(html);
};

function updateHTML(text, index, theYear){
	if(index%12 === 0){
		text = text + '<li><a data-month="0" data-year="'+theYear+'">January '+theYear+'</a></li>\n';
	}else if(index%12 === 1){
		text = text + '<li><a data-month="1" data-year="'+theYear+'">February '+theYear+'</a></li>\n';
	}else if(index%12 === 2){
		text = text + '<li><a data-month="2" data-year="'+theYear+'">March '+theYear+'</a></li>\n';
	}else if(index%12 === 3){
		text = text + '<li><a data-month="3" data-year="'+theYear+'">April '+theYear+'</a></li>\n';
	}else if(index%12 === 4){
		text = text + '<li><a data-month="4" data-year="'+theYear+'">May '+theYear+'</a></li>\n';
	}else if(index%12 === 5){
		text = text + '<li><a data-month="5" data-year="'+theYear+'">June '+theYear+'</a></li>\n';
	}else if(index%12 === 6){
		text = text + '<li><a data-month="6" data-year="'+theYear+'">July '+theYear+'</a></li>\n';
	}else if(index%12 === 7){
		text = text + '<li><a data-month="7" data-year="'+theYear+'">August '+theYear+'</a></li>\n';
	}else if(index%12 === 8){
		text = text + '<li><a data-month="8" data-year="'+theYear+'">September '+theYear+'</a></li>\n';
	}else if(index%12 === 9){
		text = text + '<li><a data-month="9" data-year="'+theYear+'">October '+theYear+'</a></li>\n';
	}else if(index%12 === 10){
		text = text + '<li><a data-month="10" data-year="'+theYear+'">November '+theYear+'</a></li>\n';
	}else if(index%12 === 11){
		text = text + '<li><a data-month="11" data-year="'+theYear+'">December '+theYear+'</a></li>\n';
	}
	return text;
}

$('.mobile-show-all').click(function(){
	var toggles = $(this).parent().next('.mobile-group').find('.info-section');
	if($(this).hasClass('allHidden')){
		$('.info-section').each(function(){
			var h3 = $(this).parent().find('h3');
			if(h3.hasClass('shown')){
			}else{
				$(this).css('display','block');
				h3.toggleClass('shown');
				h3.find('i').toggleClass('fa-caret-down');
				h3.find('i').toggleClass('fa-caret-up');
			}
		});
		$(this).html('Hide All <img src="images/hide-all.jpg">');
	}else{
		$('.info-section').each(function(){
			var h3 = $(this).prev('h3');
			if(h3.hasClass('shown')){
				$(this).css('display','none');
				h3.toggleClass('shown');
				h3.find('i').toggleClass('fa-caret-down');
				h3.find('i').toggleClass('fa-caret-up');
			}else{
			}
		});
		$(this).html('Show All <img src="images/show-all.jpg">');
	}
	$(this).toggleClass('allHidden');
});

$('.mobile-group .mobile-section h3').click(function(){
	var nextToggle = $(this).parent().next('.mobile-section.hiddenSection');
	var nextToggleInfo = $(this).parent().next('.mobile-section.hiddenSection').find('.info-section');
	if($(this).hasClass('shown')){
		$(this).parent().find('.info-section').css('display','none');
		nextToggle.css('display','none');
		nextToggleInfo.css('display','none');
	}else{
		$(this).parent().find('.info-section').css('display','block');
		nextToggle.css('display','block');
		nextToggleInfo.css('display','block');
	}
	$(this).find('i').toggleClass('fa-caret-down');
	$(this).find('i').toggleClass('fa-caret-up');
	$(this).toggleClass('shown');
});

var desktop2 = true;

$(window).resize(function(){
	if(window.innerWidth>992 && !desktop2){
		$('.mobile-group .mobile-section .info-section').css('display','block');
		desktop2 = true;
	}else if(window.innerWidth<=992 && desktop2){
		$('.mobile-group .mobile-section .info-section').css('display','none');
		desktop2 = false;
	}
});

var moreContentShown = true;
$('.edu-owner-content-mobile #more-less').click(function(){

	if (moreContentShown) {
		$('.more-content').hide();
		$(this).text('more');
		moreContentShown = false;
	}else{
		$('.more-content').show();
		$(this).text('less');
		moreContentShown = true;
	}
	
});
$('.panel-heading').click(function(){
	var caret = $(this).find('i');
	caret.each(function(){
		if (!$(this).hasClass('fa-pencil-square-o')) {
			$(this).toggleClass('fa-caret-up');
			$(this).toggleClass('fa-caret-down');	
		}
	});
});
function hideAllAdvTabs(){
	$('.mobile-tab-one').css('display','none');
	$('.mobile-tab-two').css('display','none');
	$('.mobile-tab-three').css('display','none');
	$('.mobile-tab-four').css('display','none');
}
$('#advTab, #vipTab').click(function(){
	hideAllAdvTabs();
	$('.mobile-tabs').hide();
	$('.mobile-tab-one').show();
	$('.adv-travel-mobile-nav').show();
	$('.new-adv-container footer').css('margin-top' , '360px');
});

$('#sailTab, #cityTab').click(function(){
	$('.mobile-tabs').hide();
	$('.adv-travel-mobile .mobile-tab-two').show();
	$('.adv-travel-mobile-nav').show();
	$('.new-adv-container footer').css('margin-top' , '360px');

});
$('#expTab, #premTab').click(function(){
	$('.mobile-tabs').hide();
	$('.mobile-tab-three').show();
	$('.adv-travel-mobile-nav').show();
	$('.new-adv-container footer').css('margin-top' , '360px');

});
$('#raftTab, #golfTab').click(function(){
	$('.mobile-tabs').hide();
	$('.mobile-tab-four').show();
	$('.adv-travel-mobile-nav').show();
	$('.new-adv-container footer').css('margin-top' , '360px');

});


$('.adv-travel-mobile-nav').click(function(){
	location.reload();
});
$('.hlResidences-mobile .mobile-tab').click(function() {
	var target = $(this).attr('data-target');
	$('.mobile-tab-content').not(target).hide();
	$(target).show();
	$('.mobileSection2').show();
	$('.luxury').parent('.column').show();
	$('.hlResidences-mobile .mobile-tabs').hide();
});

var switchOn = false;
var radioButtonOn = false;
$('input[name="showLuxVac"]').on("click",function(){

	if (!radioButtonOn) {
		radioButtonOn = true;
		$('#galop-peng').hide();
		$('.nashTenn').hide();
		$('input[name="showLuxVac"]').prop('checked',true);
	}else{
		radioButtonOn = false;
		$('#galop-peng').show();
		$('.nashTenn').show();
		$('input[name="showLuxVac"]').prop('checked',false);
		
	}
	
});

var desktopCheck = false;
$(window).resize(function(){
	var width = window.innerWidth;
	if(width>=992){
		$('.text-section').css('display','block');
		desktopCheck = true;
	}else if (width<992 && desktopCheck){
		$('.text-section').css('display','none');
	}
});

$('.onOffSwitch').click(function(){
	var onOffButton = $(this).find('.onOffButton');
	var on = $(this).find('.on');
	var off = $(this).find('.off');
	if (!switchOn) {
		onOffButton.text(on.text());
		$('.onOffButton').animate({
			'margin-left' : '0px'
		}, 200, function(){
			switchOn = true;
			$('.adv-travel-mobile #galop-peng').hide();
			$('.adv-travel-mobile .nashTenn').hide();
			$('.luxury').parent('.column').hide();
		});
	}else{
		onOffButton.text(off.text());
		$('.onOffButton').animate({
			'margin-left' : '50px'
		}, 200, function(){
			switchOn = false;
			$('.adv-travel-mobile #galop-peng').show();
			$('.adv-travel-mobile .nashTenn').show();
			$('.luxury').parent('.column').show();
		});
	}
});

$('.weeks-generic .submit').click(function(){
	if (!switchOn) {
		alert('Please click to accept the terms.');
	}
});
function reloadAndPage(){
	$(window).reload();
}

var mobiletab1Shown = false;
$('#servicesTab').click(function(){
	mobiletab1Shown = true;
	$('.mobile-tab-1').show();
	$('.mobileSectionProfile').css('display','block');
	$('.mobileSection2').css('display', 'block');

	$('.mobile-tabs-container').hide();
	$('.resortNav').hide();
	$('.resortWeather').hide();
	$('.resortForecast').hide();
	$('resortNumbers').hide();
	$('#resortContainer').attr('style','display: none');

});

$(window).resize(function(){
	var windowWidth = $(window).width();
	if (windowWidth > 970) {
		$('#resortContainer').attr('style','display: none ');
	}else{
		if (!mobiletab1Shown) {
			//$('#resortContainer').attr('style','display: block');
		};	
	}

	if (windowWidth < 991 ) {
		$('.enrollment-step2 .onOffSwitch').appendTo('.switch-mobile');
		$('.enrollment-step2 .switchLabel').appendTo('.switch-mobile');
	}else{
		$('.enrollment-step2 .onOffSwitch').appendTo('.switch-desktop');
		$('.enrollment-step2 .switchLabel').appendTo('.switch-desktop');
	}

	if (windowWidth > 990) {
		$('.mobileSearch').hide();
		$('.new-adv-container footer').css('margin-top' , '100px');
	}else{
		$('.mobileSearch').show();
		$('.new-adv-container footer').css('margin-top' , '360px');
	}
});

var streetHasVal = false;
var postalHasVal = false;

$('input[name="street"]').blur(function(){
	if ($(this).val().length > 0) {
		streetHasVal = true;
	}

	if (streetHasVal && postalHasVal) {
		$('#getDirButton').css('display','block');
	}
});
$('input[name="postal"]').blur(function(){
	var alphaExp = /^[0-9a-zA-Z]+$/;
	if (($(this).val().length > 0) && $(this).val().match(alphaExp)) {
		postalHasVal = true;
	}else{
		$(this).focus();
		alert('please enter a valid zip');
	}
	
	if (streetHasVal && postalHasVal) {
		$('#getDirButton').css('display','block');
	}
});

var countryMenuShown = false;
$('#selectCountry').click(function(e){
	if (!countryMenuShown) {
		$(".countryDropDownMenu").show();
		countryMenuShown = true;
		$('.countryDropDownMenu li').click(function(){
			var country = $(this).text();
			console.log(country);
			$('input[name="country"]').val(country);
		});
	}else{
		$(".countryDropDownMenu").hide();
		countryMenuShown = false;
	}
});
$('#airPortTitle').click(function(){
	$(this).find('i').toggleClass('fa-minus');
	$(this).find('i').toggleClass('fa-plus');
	$(this).find('.airport-content').toggle();
});
$('#airPortTitle2').click(function(){
	$(this).find('i').toggleClass('fa-minus');
	$(this).find('i').toggleClass('fa-plus');
	$(this).find('.airport-content').toggle();
});
function ClickRoute(credentials)
{

	map.getCredentials(MakeRouteRequest);
}


function MakeRouteRequest(credentials)
{
	var routeRequest = "http://dev.virtualearth.net/REST/v1/Routes/Driving?wp.0=" + document.getElementById('streetInput').value + "&wp.1=" + document.getElementById('postalInput').value + "&routePathOutput=Points&output=json&jsonp=RouteCallback&key=" + credentials;
	CallRestService(routeRequest);
}


function RouteCallback(result) {


	if (result &&
		result.resourceSets &&
		result.resourceSets.length > 0 &&
		result.resourceSets[0].resources &&
		result.resourceSets[0].resources.length > 0) {
		var bbox = result.resourceSets[0].resources[0].bbox;
	var viewBoundaries = Microsoft.Maps.LocationRect.fromLocations(new Microsoft.Maps.Location(bbox[0], bbox[1]), new Microsoft.Maps.Location(bbox[2], bbox[3]));
	map.setView({ bounds: viewBoundaries});
	var routeline = result.resourceSets[0].resources[0].routePath.line;
	var routepoints = [];

	for (var i = 0; i < routeline.coordinates.length; i++) {

		routepoints[i]=new Microsoft.Maps.Location(routeline.coordinates[i][0], routeline.coordinates[i][1]);
	}
	var routeshape = new Microsoft.Maps.Polyline(routepoints, {strokeColor:new Microsoft.Maps.Color(200,0,0,200)});
	map.entities.push(routeshape);
}
}

function directionsModuleLoaded()
{
	directionsManager = new Microsoft.Maps.Directions.DirectionsManager(map);

	var startWaypoint = new Microsoft.Maps.Directions.Waypoint({address:"Seattle, WA"});
	var endWaypoint = new Microsoft.Maps.Directions.Waypoint({address:"Bellevue, WA"});

	directionsManager.addWaypoint(startWaypoint);
	directionsManager.addWaypoint(endWaypoint);

	Microsoft.Maps.Events.addHandler(directionsManager, 'directionsUpdated', displayMessage);
	Microsoft.Maps.Events.addHandler(directionsManager, 'directionsError', displayError);

	directionsManager.calculateDirections();
	console.log('dir man');
} 

function CallRestService(request) 
{
	var script = document.createElement("script");
	script.setAttribute("type", "text/javascript");
	script.setAttribute("src", request);
	document.body.appendChild(script);
};

var directionsManager;
var directionsErrorEventObj;
var directionsUpdatedEventObj;
var beforeStepRenderEventObj;
var map = null;
var stepNumber = 0;
var locationResults;
var totalDistance;
function getMap(){
	map = new Microsoft.Maps.Map(document.getElementById("mapDiv"),
		{credentials:"AhPoreTnuGUasFOVM7tYBrCr-yPTtvyc_fS6Sup88Yy6h02iMqboMm5PTuqFGyYY",
		mapTypeId: Microsoft.Maps.MapTypeId.road });
	if ( $(window).width() < 992 ) {
		$('.the-map').appendTo('.map-container-mobile');
		$('.dir-input-form').appendTo('.map-container-mobile');
	} else {
	}
};

function createDirectionsManager()
{
	var displayMessage;
	if (!directionsManager) 
	{
		directionsManager = new Microsoft.Maps.Directions.DirectionsManager(map);
	}
	directionsManager.resetDirections();
	directionsErrorEventObj = Microsoft.Maps.Events.addHandler(directionsManager, 'directionsError', function(arg) { alert(arg.message) });
	directionsUpdatedEventObj = Microsoft.Maps.Events.addHandler(directionsManager, 'directionsUpdated', function() { alert('Directions updated') });
};

function loadDirectionsModule() 
{
	if (!directionsManager)
	{
		Microsoft.Maps.loadModule('Microsoft.Maps.Directions', { callback: createDirectionsManager });
	}
	else
	{
		createDirectionsManager();
	}
};

function createDrivingRoute()
{
	if (!directionsManager) { 
		createDirectionsManager(); 
	}
	directionsManager.resetDirections();

	var streetInput = $('#streetInput').val();
	var zipInput = $('#postalInput').val();
	var countryInput = $('#countryInput').val();
	var addressString = streetInput + "," + zipInput + "," + countryInput;
	directionsManager.setRequestOptions({ routeMode: Microsoft.Maps.Directions.RouteMode.driving });
	var startWaypoint = new Microsoft.Maps.Directions.Waypoint({ address: addressString });
	directionsManager.addWaypoint(startWaypoint);
	var endWaypoint = new Microsoft.Maps.Directions.Waypoint({ address: 'Orlando, FL', location:locationResults });
	directionsManager.addWaypoint(endWaypoint);
	directionsManager.setRequestOptions({ 
		distanceUnit: Microsoft.Maps.Directions.DistanceUnit.kilometers,
		routeOptimization: Microsoft.Maps.Directions.RouteOptimization.shortestDistance
	});
	directionsManager.setRenderOptions({itineraryContainer: document.getElementById('itineraryDiv') });
	Microsoft.Maps.Events.addHandler(directionsManager, 'directionsUpdated', displayDistanceAndTime );
	Microsoft.Maps.Events.addHandler(directionsManager, 'afterStepRender', displayStepMessage );
	if(beforeStepRenderEventObj)
	{
		Microsoft.Maps.Events.removeHandler(beforeStepRenderEventObj);
		beforeStepRenderEventObj=null;
	}
	beforeStepRenderEventObj = Microsoft.Maps.Events.addHandler(directionsManager, 'beforeStepRender', function(arg){ 
		arg.handled=true; 
		arg.containerElement.innerHTML = '<div>' + stepNumber + ". " + arg.step.formattedText + '<span class="pull-right">' + arg.step.distance + '</span>' + '</div>' 
	});

	directionsManager.calculateDirections();
};

function createDirections() {    
	if ($(window).width() < 992) {
		$('#directionsModal').modal('show');
		$('#itineraryDiv').appendTo('#directionsModal .modal-body');

		if (!directionsManager) {
			Microsoft.Maps.loadModule('Microsoft.Maps.Directions', { callback: createDrivingRoute });
		}
		else {
			createDrivingRoute();
		}
		Microsoft.Maps.loadModule('Microsoft.Maps.Search', { callback: searchModuleLoaded });
	} else {
		if (!directionsManager) {
			Microsoft.Maps.loadModule('Microsoft.Maps.Directions', { callback: createDrivingRoute });
		}
		else {
			createDrivingRoute();
		}
		Microsoft.Maps.loadModule('Microsoft.Maps.Search', { callback: searchModuleLoaded });
	}
};


function displayStepMessage(e)
{
	stepNumber += 1;
};

function displayDistanceAndTime(e)
{
	totalDistance = e.routeSummary[0].distance;
	$('<div/>',{
		id:'totalDis',
		html: 'Total distance ' + totalDistance
	}).appendTo('#itineraryDiv')
	.addClass('totalAmount');	

	console.log(totalDistance);
};

function searchModuleLoaded()
{
	var searchManager = new Microsoft.Maps.Search.SearchManager(map);
	var geocodeRequest = {where:"1 Microsoft Way, Redmond, WA", count:10, callback:geocodeCallback, errorCallback:errCallback};
	searchManager.geocode(geocodeRequest);
};

function geocodeCallback(geocodeResult, userData)
{
	locationResults =  geocodeResult.results[0].location;
};

function errCallback(geocodeRequest)
{
	alert("An error occurred.");
};

$('#ownerServices .inner-tab li').click(function(){
	if ($('#ownerServices .inner-tab li').hasClass('selected')) {
		$('#ownerServices .inner-tab li').removeClass('selected');
	}
	$(this).addClass('selected');
});

$('#sales .inner-tab li').click(function(){
	if ($('#sales .inner-tab li').hasClass('selected')) {
		$('#sales .inner-tab li').removeClass('selected');
	}
	$(this).addClass('selected');
});
$('.mobile-tab-content .drop-down .drop-down-button, .mobile-tab-content .drop-down input[name = reside]').click(function(e){
	e.stopPropagation();
	$('.mobile-tab-content .drop-down .drop-down-list ul').toggle();
	$('.mobile-tab-content .drop-down .drop-down-list li').click(function(){
		$('.mobile-tab-content input[name = reside]').val($(this).text());
		$('.mobile-tab-content .drop-down-list ul').hide();
		if ($('.mobile-tab-content input[name = reside]').val() === 'The United States and Canada') {
			hideOthersMobile();
			$('#resideUSA').show();
		}else if ($('.mobile-tab-content input[name = reside]').val() === 'Europe') {
			hideOthersMobile();
			$('#resideEurope').show();
		}else if ($('.mobile-tab-content input[name = reside]').val() ==='Puerto Rico and The Caribbean') {
			hideOthersMobile();
			$('#resideCarribean').show();
		}else if ($('.mobile-tab-content input[name = reside]').val() === 'Latin America') {
			hideOthersMobile();
			$('#resideLatinAmerica').show();
		}else if ($('.mobile-tab-content input[name = reside]').val()=='Africa and Middle East') {
			hideOthersMobile();
			$('#resideAfrica').show();
		}else if ($('.mobile-tab-content input[name = reside]').val()=='Asia') {
			hideOthersMobile();
			$('#resideAsia').show();
		}else if ($('.mobile-tab-content input[name = reside]').val()==='Add') {
			hideOthersSalesMobile();
			$('#pickAdd').show();
		}else if ($('.mobile-tab-content input[name = reside]').val()==='Purchase') {
			hideOthersSalesMobile();
			$('#pickPurchase').show();
		}else if ($('.mobile-tab-content input[name = reside]').val()==='Sell') {
			hideOthersSalesMobile();
			$('#pickSell').show();
		}
	});
});

$('body').click(function(){
	$('.mobile-tab-content .drop-down .drop-down-list ul').hide();
});

function hideOthersMobile(){
	$('#resideUSA').hide();
	$('#resideEurope').hide();
	$('#resideCarribean').hide();
	$('#resideAfrica').hide();
	$('#resideAsia').hide();
	$('#resideLatinAmerica').hide();
}
function hideOthers(){
	$('#contactUSA-Canada').hide();
	$('#contactEurope').hide();
	$('#contactPRCarrib').hide();
	$('#contactLatin').hide();
	$('#contactAfrica').hide();
	$('#contactAsia').hide();
}
function hideOthersSales(){
	$('#add').hide();
	$('#purchase').hide();
	$('#sell').hide();
}
function hideOthersSalesMobile(){
	$('#pickAdd').hide();
	$('#pickPurchase').hide();
	$('#pickSell').hide();
}
$('li[data-target="#contactUSA-Canada"]').click(function(){
	hideOthers();
	$('#contactUSA-Canada').show();
	$('.comments').css('margin-top','-100px');
});
$('li[data-target="#contactEurope"]').click(function(){
	hideOthers();
	$('#contactEurope').show();
	$('.comments').css('margin-top','80px');
});
$('li[data-target="#contactPRCarrib"]').click(function(){
	hideOthers();
	$('#contactPRCarrib').show();
	$('.contact-us .comments').css('margin-top','350px');
});

$('li[data-target="#contactLatin"]').click(function(){
	hideOthers();
	$('#contactLatin').show();
	$('.contact-us .comments').css('margin-top','250px');
});

$('li[data-target="#contactAfrica"]').click(function(){
	hideOthers();
	$('#contactAfrica').show();
	$('.contact-us .comments').css('margin-top','180px');
});

$('li[data-target="#contactAsia"]').click(function(){
	hideOthers();
	$('#contactAsia').show();
	$('.contact-us .comments').css('margin-top','720px');
});


$('li[data-target="#purchase"]').click(function(){
	hideOthersSales();
	$('#purchase').show();
	$('.contact-us .comments').css('margin-top','700px');
});

$('li[data-target="#sell"]').click(function(){
	hideOthersSales();
	$('#sell').show();
	$('.contact-us .comments').css('margin-top','700px');
});

$('a[href="#sales"]').click(function(){
	
	if ($('li[data-target="#purchase"]').hasClass('selected')) {
		$('.contact-us .comments').css('margin-top','150px');
	}else if ($('li[data-target="#sell"]').hasClass('selected')) {
		$('.contact-us .comments').css('margin-top','150px');
	}
});

$('a[href="#ownerServices"]').click(function(){
	if ($('li[data-target="#contactUSA-Canada"]').hasClass('selected')) {
		$('.contact-us .comments').css('margin-top','-100px');
	}else if($('li[data-target="#contactEurope"]').hasClass('selected')){
		$('.contact-us .comments').css('margin-top','80px');
	}else if($('li[data-target="#contactPRCarrib"]').hasClass('selected')){
		$('.contact-us .comments').css('margin-top','350px');
	}else if($('li[data-target="#contactLatin"]').hasClass('selected')){
		$('.contact-us .comments').css('margin-top','250px');
	}else if($('li[data-target="#contactAfrica"]').hasClass('selected')){
		$('.contact-us .comments').css('margin-top','180px');
	}else if($('li[data-target="#contactAsia"]').hasClass('selected')){
		$('.contact-us .comments').css('margin-top','720px');
	}
});

$('a[href="#friendShare"]').click(function(){
	$('.contact-us .comments').css('margin-top','-480px');
});

$('a[href="#customerCare"]').click(function(){
	$('.contact-us .comments').css('margin-top','-380px');
});

$('.world-traveler-mobile i').click(function(){
	$(this).toggleClass('fa-plus');
	$(this).toggleClass('fa-minus');
	$('.world-traveler-mobile ul:nth-of-type(1)').toggle();
});

$('.world-traveler-mobile .inner-panel-heading').click(function(e){
	e.stopPropagation();
	$(this).find('i').toggleClass('fa-caret-up');
	$(this).find('i').toggleClass('fa-caret-down');
	
	if ($(this).find('.row').is(':visible')) {
		$(this).find('.row').hide();
		$(this).find('.inner-panel-body').animate({
			height : '1px'
		},500,function(){

		});
	}else{
		$(this).find('.row').show();
		$(this).find('.inner-panel-body').animate({
			height : '220px'
		},500,function(){


		});
	}
});

var allTravMobileShown = false;
$('.show-all-trav, .show-all-eu-landing').click(function(){
	$('.panel-group .panel-heading i').each(function(){
		$(this).toggleClass('fa-caret-up');
		$(this).toggleClass('fa-caret-down');
	});
	
	if (!allTravMobileShown) {
		$(this).html('Hide All <img src="images/hide-all.jpg">');
		allTravMobileShown = true;
		$('#TDI-1').collapse('show');
		$('#TDI-2').collapse('show');
		$('#TDI-3').collapse('show');
		$('#TDI-4').collapse('show');
		$('#confirm').collapse('show');
		$('#enroll').collapse('show');
	}else{
		$(this).html('Show All <img src="images/show-all.jpg">');
		allTravMobileShown = false;
		$('#TDI-1').collapse('hide');
		$('#TDI-2').collapse('hide');
		$('#TDI-3').collapse('hide');
		$('#TDI-4').collapse('hide');
		$('#confirm').collapse('hide');
		$('#enroll').collapse('hide');
	}

});