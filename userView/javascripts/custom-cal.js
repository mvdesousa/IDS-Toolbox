
/*
	Params
		leftParam is the left
		topParam is the top
		month is the month in a 0 to 11 enum
		year just the full year
		calendarDiv is the id of the div you are placing the calendar in
		*/
		var customCalendar = function(leftParam,topParam,month,year,calendarDiv,uniqueID,calWidth){

			var today = new Date();
			var day = today.getDay();
			var date = today.getDate();
			var currentMonth = today.getMonth();
			var currentYear = today.getFullYear();
			var daysHightLighted = [];
			var yearOffSet = 0;
			function daysInMonth(month, year){
				return new Date(year, month, 0).getDate();
			}

			if (year === 2015) {
				yearOffSet = 1;
			}else if(year === 2016){
				yearOffSet = 2;
			}else{
				yearOffSet = 0;
			}

			var days = daysInMonth(month,year);

			var dayTitles = ["S","M","T","W","T","F","S"];


			var monthName = "";
			switch(month){
				case 0:
				monthName = "January " + year + " &nbsp;<i class='fa fa-caret-down'></i>";
				break;
				case 1:
				monthName = "Feburary " + year + " &nbsp;<i class='fa fa-caret-down'></i>";
				break;
				case 2:
				monthName = "March " + year + " &nbsp;<i class='fa fa-caret-down'></i>";
				break;
				case 3:
				monthName = "April " + year + " &nbsp;<i class='fa fa-caret-down'></i>";
				break;
				case 4:
				monthName = "May " + year + " &nbsp;<i class='fa fa-caret-down'></i>";
				break;
				case 5:
				monthName = "June " + year + " &nbsp;<i class='fa fa-caret-down'></i>";
				break;
				case 6:
				monthName = "July " + year + " &nbsp;<i class='fa fa-caret-down'></i>";
				break;
				case 7:
				monthName = "August " + year + " &nbsp;<i class='fa fa-caret-down'></i>";
				break;
				case 8:
				monthName = "September " + year + " &nbsp;<i class='fa fa-caret-down'></i>";
				break;
				case 9:
				monthName = "October " + year + " &nbsp;<i class='fa fa-caret-down'></i>";
				break;
				case 10:
				monthName = "November " + year + " &nbsp;<i class='fa fa-caret-down'></i>";
				break;
				case 11:
				monthName = "December " + year + " &nbsp;<i class='fa fa-caret-down'></i>";
				break;
				default:
				break;
			}

			$('<table/>',{
				id: 'theCal'+uniqueID
			}).appendTo(calendarDiv);
			$('#theCal'+uniqueID).css('border-spacing','0px');
			$('#theCal'+uniqueID).css('width', calWidth - 2 + 'px');

	//month title
	$('<thead />',{
		id: 'theMonthContainer'+uniqueID
	}).appendTo('#theCal'+uniqueID);

	$('<th />',{
		id: 'theMonth'+uniqueID
	}).appendTo('#theMonthContainer'+uniqueID);
	$('#theMonth'+uniqueID).html(monthName);
	$('#theMonth'+uniqueID).attr('colspan','7');
	$('#theMonth'+uniqueID).addClass('custom-cal-month-header');

	//days titles
	$('<tr/>',{
		id: 'dayRow'+uniqueID
	}).appendTo('#theMonthContainer'+uniqueID);

	//Days
	$('<td />',{
		id: 'Sun'+uniqueID
	}).appendTo('#theMonthContainer'+uniqueID);
	$('#Sun'+uniqueID).html(dayTitles[0]);
	$('#Sun'+uniqueID).addClass('custom-cal-day-title-header');

	$('<td />',{
		id: 'Mon'+uniqueID
	}).appendTo('#theMonthContainer'+uniqueID);
	$('#Mon'+uniqueID).html(dayTitles[1]);
	$('#Mon'+uniqueID).addClass('custom-cal-day-title-header');

	$('<td />',{
		id: 'Tue'+uniqueID
	}).appendTo('#theMonthContainer'+uniqueID);
	$('#Tue'+uniqueID).html(dayTitles[2]);
	$('#Tue'+uniqueID).addClass('custom-cal-day-title-header');

	$('<td />',{
		id: 'Wed'+uniqueID
	}).appendTo('#theMonthContainer'+uniqueID);
	$('#Wed'+uniqueID).html(dayTitles[3]);
	$('#Wed'+uniqueID).addClass('custom-cal-day-title-header');

	$('<td />',{
		id: 'Thur'+uniqueID
	}).appendTo('#theMonthContainer'+uniqueID);
	$('#Thur'+uniqueID).html(dayTitles[4]);
	$('#Thur'+uniqueID).addClass('custom-cal-day-title-header');

	$('<td />',{
		id: 'Fri'+uniqueID
	}).appendTo('#theMonthContainer'+uniqueID);
	$('#Fri'+uniqueID).html(dayTitles[5]);
	$('#Fri'+uniqueID).addClass('custom-cal-day-title-header');

	$('<td />',{
		id: 'Sat'+uniqueID
	}).appendTo('#theMonthContainer'+uniqueID);
	$('#Sat'+uniqueID).html(dayTitles[6]);
	$('#Sat'+uniqueID).addClass('custom-cal-day-title-header');

	$('<tbody />',{
		id: 'calBody'+uniqueID
	}).appendTo('#theCal'+uniqueID);

	//dates
	$('<tr/>',{
		id: 'dateRow1'+uniqueID
	}).appendTo('#calBody'+uniqueID);

	
	//First cal row
	for(var j=1;j <= 7;j++){
		$('<td />',{
			id: 'date'+j+uniqueID
		}).appendTo('#dateRow1'+uniqueID);
		if (j>=2) {
			$('#date'+j+uniqueID).html(' ');
		};
	}
	
	$('<tr/>',{
		id: 'dateRow2'+uniqueID
	}).appendTo('#calBody'+uniqueID);

	//Second Cal row	
	for(var j=8;j <= 14;j++){
		$('<td />',{
			id: 'date'+j+uniqueID
		}).appendTo('#dateRow2'+uniqueID);
		$('#date'+j+uniqueID).html(' ');
		$('#date'+j+uniqueID).addClass('custom-cal-date-cell');
	}

	$('<tr/>',{
		id: 'dateRow3'+uniqueID
	}).appendTo('#calBody'+uniqueID);

	//Third row
	for(var j=15;j <= 21;j++){
		$('<td />',{
			id: 'date'+j+uniqueID
		}).appendTo('#dateRow3'+uniqueID);
		$('#date'+j+uniqueID).html(' ');
		$('#date'+j+uniqueID).addClass('custom-cal-date-cell');
	}

	$('<tr/>',{
		id: 'dateRow4'+uniqueID
	}).appendTo('#calBody'+uniqueID);

	//Fourth row
	for(var j=22;j <= 28;j++){
		$('<td />',{
			id: 'date'+j+uniqueID
		}).appendTo('#dateRow4'+uniqueID);
		$('#date'+j+uniqueID).html(' ');
		$('#date'+j+uniqueID).addClass('custom-cal-date-cell');
	}
	
	$('<tr/>',{
		id: 'dateRow5'+uniqueID
	}).appendTo('#calBody'+uniqueID);

	//Fifth row
	for(var j=29;j <= 35;j++){
		$('<td />',{
			id: 'date'+j+uniqueID
		}).appendTo('#dateRow5'+uniqueID);
		if (j<days + 1) {
			$('#date'+j+uniqueID).html(' ');
			$('#date'+j+uniqueID).addClass('custom-cal-date-cell');
		}else{
			$('#date'+j+uniqueID).html(' ');
			$('#date'+j+uniqueID).addClass('custom-cal-date-cell');
		}
	}

	$('<tr/>',{
		id: 'dateRow6'+uniqueID
	}).appendTo('#calBody'+uniqueID);

	//Sixth row
	for(var j=36;j <= 42;j++){
		$('<td />',{
			id: 'date'+j+uniqueID
		}).appendTo('#dateRow6'+uniqueID);
		if (j<days + 1) {
			$('#date'+j+uniqueID).html(' ');
			$('#date'+j+uniqueID).addClass('custom-cal-date-cell');
		}else{
			$('#date'+j+uniqueID).html(' ');
			$('#date'+j+uniqueID).addClass('custom-cal-date-cell');
		}
	}
	
	$(calendarDiv).css({
		left: leftParam,
		top: topParam
	});

	if (month === 0) { //Jan
		for(var i=1; i < 32; i++){
			$('#date' + (i+3+yearOffSet)+uniqueID).html(i);
			$('#date' + (i+3+yearOffSet)+uniqueID).click(function(){
				if($(this).hasClass('custom-cal-date-cell')){
					$(this).removeClass('custom-cal-date-cell').addClass('custom-cal-date-cell-clicked');
				}else{
					$(this).removeClass('custom-cal-date-cell-clicked').addClass('custom-cal-date-cell');
				}
			});

			//set the current day to yellow
			var dateText = $('#date'+i+uniqueID).html();
			if (dateText === date && currentMonth === month && currentYear === year) {
				$('#date'+i+uniqueID).addClass('custom-cal-date-current-day');
			}else{
				$('#date'+i+uniqueID).addClass('custom-cal-date-cell');
			}
		}
	}else if(month === 1){ // Feb
		for(var i=1; i <= 28; i++){
			$('#date' + (i+6+yearOffSet)+uniqueID).html(i);
			$('#date' + (i+6+yearOffSet)+uniqueID).click(function(){
				if($(this).hasClass('custom-cal-date-cell')){
					$(this).removeClass('custom-cal-date-cell').addClass('custom-cal-date-cell-clicked');
				}else{
					$(this).removeClass('custom-cal-date-cell-clicked').addClass('custom-cal-date-cell');
				}


			});

			//set the current day to yellow
			var dateText = $('#date'+i+uniqueID).html();
			if (dateText === date && currentMonth === month && currentYear === year) {
				$('#date'+i+uniqueID).addClass('custom-cal-date-current-day');
			}else{
				$('#date'+i+uniqueID).addClass('custom-cal-date-cell');
			}
		}
	}else if(month === 2){ // Mar
		for(var i=1; i < 32; i++){
			$('#date' + (i+6+yearOffSet)+uniqueID).html(i);
			$('#date' + (i+6+yearOffSet)+uniqueID).click(function(){
				if($(this).hasClass('custom-cal-date-cell')){
					$(this).removeClass('custom-cal-date-cell').addClass('custom-cal-date-cell-clicked');
				}else{
					$(this).removeClass('custom-cal-date-cell-clicked').addClass('custom-cal-date-cell');
				}
			});

			//set the current day to yellow
			var dateText = $('#date'+i+uniqueID).html();
			if (dateText === date && currentMonth === month && currentYear === year) {
				$('#date'+i+uniqueID).addClass('custom-cal-date-current-day');
			}else{
				$('#date'+i+uniqueID).addClass('custom-cal-date-cell');
			}
		}
	}else if(month === 3){ // Apr
		for(var i=1; i < 30; i++){
			$('#date' + (i+2+yearOffSet)+uniqueID).html(i);
			$('#date' + (i+2+yearOffSet)+uniqueID).click(function(){
				if($(this).hasClass('custom-cal-date-cell')){
					$(this).removeClass('custom-cal-date-cell').addClass('custom-cal-date-cell-clicked');
				}else{
					$(this).removeClass('custom-cal-date-cell-clicked').addClass('custom-cal-date-cell');
				}
			});

			//set the current day to yellow
			var dateText = $('#date'+i+uniqueID).html();
			if (dateText === date && currentMonth === month && currentYear === year) {
				$('#date'+i+uniqueID).addClass('custom-cal-date-current-day');
			}else{
				$('#date'+i+uniqueID).addClass('custom-cal-date-cell');
			}
		}
	}else if(month === 4){ // May
		for(var i=1; i < 32; i++){
			$('#date' + (i+4+yearOffSet)+uniqueID).html(i);
			$('#date' + (i+4+yearOffSet)+uniqueID).click(function(){
				if($(this).hasClass('custom-cal-date-cell')){
					$(this).removeClass('custom-cal-date-cell').addClass('custom-cal-date-cell-clicked');
				}else{
					$(this).removeClass('custom-cal-date-cell-clicked').addClass('custom-cal-date-cell');
				}
			});

			//set the current day to yellow
			var dateText = $('#date'+i+uniqueID).html();
			if (dateText === date && currentMonth === month && currentYear === year) {
				$('#date'+i+uniqueID).addClass('custom-cal-date-current-day');
			}else{
				$('#date'+i+uniqueID).addClass('custom-cal-date-cell');
			}
		}
	}else if(month === 5){ // Jun
		for(var i=1; i < 31; i++){
			$('#date' + (i+yearOffSet)+uniqueID).html(i);
			$('#date' + (i+yearOffSet)+uniqueID).click(function(){
				if($(this).hasClass('custom-cal-date-cell')){
					$(this).removeClass('custom-cal-date-cell').addClass('custom-cal-date-cell-clicked');
				}else{
					$(this).removeClass('custom-cal-date-cell-clicked').addClass('custom-cal-date-cell');
				}
			});

			//set the current day to yellow
			var dateText = $('#date'+i+uniqueID).html();
			if (dateText === date && currentMonth === month && currentYear === year) {
				$('#date'+i+uniqueID).addClass('custom-cal-date-current-day');
			}else{
				$('#date'+i+uniqueID).addClass('custom-cal-date-cell');
			}
		}
	}else if(month === 6){ //July
		for(var i=1; i < 32; i++){
			$('#date' + (i+2+yearOffSet)+uniqueID).html(i);
			$('#date' + (i+2+yearOffSet)+uniqueID).click(function(){
				if($(this).hasClass('custom-cal-date-cell')){
					$(this).removeClass('custom-cal-date-cell').addClass('custom-cal-date-cell-clicked');
				}else{
					$(this).removeClass('custom-cal-date-cell-clicked').addClass('custom-cal-date-cell');
				}
			});

			//set the current day to yellow
			var dateText = $('#date'+i+uniqueID).html();
			if (dateText === date && currentMonth === month && currentYear === year) {
				$('#date'+i+uniqueID).addClass('custom-cal-date-current-day');
			}else{
				$('#date'+i+uniqueID).addClass('custom-cal-date-cell');
			}
		}
	}else if(month === 7){ //Aug
		for(var i=1; i < 32; i++){
			$('#date' + (i+5+yearOffSet)+uniqueID).html(i);
			$('#date' + (i+5+yearOffSet)+uniqueID).click(function(){
				if($(this).hasClass('custom-cal-date-cell')){
					$(this).removeClass('custom-cal-date-cell').addClass('custom-cal-date-cell-clicked');
				}else{
					$(this).removeClass('custom-cal-date-cell-clicked').addClass('custom-cal-date-cell');
				}
			});

			//set the current day to yellow
			var dateText = $('#date'+i+uniqueID).html();
			if (dateText === date && currentMonth === month && currentYear === year) {
				$('#date'+i+uniqueID).addClass('custom-cal-date-current-day');
			}else{
				$('#date'+i+uniqueID).addClass('custom-cal-date-cell');
			}
		}
	}else if(month === 8){ //Sept
		for(var i=1; i < 31; i++){
			$('#date' + (i+1+yearOffSet)+uniqueID).html(i);
			$('#date' + (i+1+yearOffSet)+uniqueID).click(function(){
				if($(this).hasClass('custom-cal-date-cell')){
					$(this).removeClass('custom-cal-date-cell').addClass('custom-cal-date-cell-clicked');
				}else{
					$(this).removeClass('custom-cal-date-cell-clicked').addClass('custom-cal-date-cell');
				}
			});

			//set the current day to yellow
			var dateText = $('#date'+i+uniqueID).html();
			if (dateText === date && currentMonth === month && currentYear === year) {
				$('#date'+i+uniqueID).addClass('custom-cal-date-current-day');
			}else{
				$('#date'+i+uniqueID).addClass('custom-cal-date-cell');
			}
		}
	}else if(month === 9){ //Oct
		for(var i=1; i < 32; i++){

			$('#date' + (i+3+yearOffSet)+uniqueID).html(i);
			$('#date' + (i+3+yearOffSet)+uniqueID).click(function(){

				if($(this).hasClass('custom-cal-date-cell')){
					$(this).removeClass('custom-cal-date-cell').addClass('custom-cal-date-cell-clicked');
				}else{
					$(this).removeClass('custom-cal-date-cell-clicked').addClass('custom-cal-date-cell');
				}

				
			});

			//set the current day to yellow
			var dateText = $('#date'+i+uniqueID).html();
			if (dateText === date && currentMonth === month && currentYear === year) {
				$('#date'+i+uniqueID).addClass('custom-cal-date-current-day');
			}else{
				$('#date'+i+uniqueID).addClass('custom-cal-date-cell');
			}
		}
	}else if(month === 10){ //Nov
		for(var i=1; i < 31; i++){
			$('#date' + (i+6+yearOffSet)+uniqueID).html(i);
			$('#date' + (i+6+yearOffSet)+uniqueID).click(function(){
				if($(this).hasClass('custom-cal-date-cell')){
					$(this).removeClass('custom-cal-date-cell').addClass('custom-cal-date-cell-clicked');
				}else{
					$(this).removeClass('custom-cal-date-cell-clicked').addClass('custom-cal-date-cell');
				}
			});

			//set the current day to yellow
			var dateText = $('#date'+i+uniqueID).html();
			if (dateText === date && currentMonth === month && currentYear === year) {
				$('#date'+i+uniqueID).addClass('custom-cal-date-current-day');
			}else{
				$('#date'+i+uniqueID).addClass('custom-cal-date-cell');
			}
		}
	}else if(month === 11){ //Dec
		for(var i=1; i < 32; i++){
			$('#date' + (i+1+yearOffSet)+uniqueID).html(i);
			$('#date' + (i+1+yearOffSet)+uniqueID).click(function(){
				if($(this).hasClass('custom-cal-date-cell')){
					$(this).removeClass('custom-cal-date-cell').addClass('custom-cal-date-cell-clicked');
				}else{
					$(this).removeClass('custom-cal-date-cell-clicked').addClass('custom-cal-date-cell');
				}
			});

			//set the current day to yellow
			var dateText = $('#date'+i+uniqueID).html();
			if (dateText === date && currentMonth === month && currentYear === year) {
				$('#date'+i+uniqueID).addClass('custom-cal-date-current-day');
			}else{
				$('#date'+i+uniqueID).addClass('custom-cal-date-cell');
			}
		}
	}

	$(calendarDiv).addClass('custom-cal2');
	
	
	if (calWidth === '') {
	}else{
		var newCellWidth = calWidth / 7.0;
		var newCellHeight = calWidth / 7.0;
		for (var i = 0; i < 42; i++) {
			$('#date'+i+uniqueID).css({
				width: newCellWidth,
				height: newCellHeight
			});
		};
	}

	this.setHighlightedDays = function(daysHighLighted,monthHightlighted,ID){
		for (var j=0; j < daysHighLighted.length; j++) {
			var dayHighLighted = daysHighLighted[j];
			for (var i = 0; i < 42; i++) {
				var highlightedDate = $('#date'+i+ID).html();
				if ( highlightedDate === dayHighLighted.toString() && monthHightlighted === month) {
					$('#date'+i+ID).removeClass('custom-cal-date-cell').addClass('custom-cal-date-cell-clicked');
				};
			};
		};
	};
};

function removeCalendarsBookings(){
	$('#theCalx').remove();
	$('#theCalw').remove();
	$('#theCalv').remove();
	$('#theCala').remove();
	$('#theCalb').remove();
	$('#theCalc').remove();
}
function isMobile(){
	if (navigator.userAgent.match(/(iPhone|iPod)/) ||
		navigator.userAgent.match(/Android/i)) {
		return true;
};
return false;
}
function updateCals(){
	var windowWidth = $(this).width();
	var windowHeight = $(this).height();
	var todayMonth = new Date();
	var month1 = todayMonth.getMonth();
	var displayYear = todayMonth.getFullYear();
	var year = [];
	for (var i = 1; i < 6; i++) {
		if (month1 + i >=12) {
			year[i] = displayYear + 1;
		}else{
			year[i] = displayYear;
		};
	};
	
	if(windowWidth <= 330 ) { //small mobile
		
		removeCalendarsBookings();
		var theCal3 = new customCalendar(0,0,month1,displayYear,'#jwcustomCalendar1','x', 160);
		theCal3.setHighlightedDays([1 ,2 , 13],month1,'x');
		var center = windowWidth/2 -110;
		$('#jwcustomCalendar1').css({
		left: center,
		top: '475px'
	});
		$('.leftArrowButtonWeeksOccupy').css({
			top: '565px',
			left : '10px',
			display : 'block',
			position : 'absolute'
		});
		$('.rightArrowButtonWeeksOccupy').css({
			top: '565px',
			right : '10px',
			display : "block",
			position : 'absolute'
		});
		$('#jwcustomCalendar3, #jwcustomCalendar4, #jwcustomCalendar5, #jwcustomCalendar6').css({
			display: 'none'
		});

	}else if(windowWidth <= 376 && windowWidth > 331) {//med mobile
		removeCalendarsBookings();

		var theCal3 = new customCalendar(0,0,month1,displayYear,'#jwcustomCalendar1','x', 160);
		theCal3.setHighlightedDays([1 ,2 , 13],month1,'x');
		var center = windowWidth/2 -110;
		$('#jwcustomCalendar1').css({
		left: center,
		top: '400px'
	});
		$('.leftArrowButtonWeeksOccupy').css({
			top: '485px',
			left : '10px',
			display : 'block',
			position : 'absolute'
		});
		$('.rightArrowButtonWeeksOccupy').css({
			top: '485px',
			right : '10px',
			display : 'block',
			position : 'absolute'
		});

		$('#jwcustomCalendar3, #jwcustomCalendar4, #jwcustomCalendar5, #jwcustomCalendar6').css({
			display: 'none'
		});

	}else if(windowWidth <= 421 && windowWidth > 376) {//med mobile
		removeCalendarsBookings();

		var theCal3 = new customCalendar(0,0,month1,displayYear,'#jwcustomCalendar1','x', 290);
		theCal3.setHighlightedDays([1 ,2 , 13],month1,'x');
		var center = windowWidth/2 -165;
		$('#jwcustomCalendar1').css({
		left: center,
		top: '345px'
	});
		$('.leftArrowButtonWeeksOccupy').css({
			top: '485px',
			left : '10px',
			display : 'block',
			position : 'absolute'
		});
		$('.rightArrowButtonWeeksOccupy').css({
			top: '485px',
			right : '10px',
			display : 'block',
			position : 'absolute'
		});
		$('#jwcustomCalendar3, #jwcustomCalendar4, #jwcustomCalendar5, #jwcustomCalendar6').css({
			display: 'none'
		});
	}else if(windowWidth <= 600 && windowWidth > 421) {//med mobile
		removeCalendarsBookings();

		var theCal3 = new customCalendar(0,0,month1,displayYear,'#jwcustomCalendar1','x', 290);
		theCal3.setHighlightedDays([1 ,2 , 13],month1,'x');
		var center = windowWidth/2 -165;
		$('#jwcustomCalendar1').css({
		left: center,
		top: '345px'
	});
		$('.leftArrowButtonWeeksOccupy').css({
			top: '485px',
			left : '10px',
			display : 'block',
			position : 'absolute'
		});
		$('.rightArrowButtonWeeksOccupy').css({
			top: '485px',
			right : '10px',
			display : 'block',
			position : 'absolute'
		});
		$('#jwcustomCalendar3, #jwcustomCalendar4, #jwcustomCalendar5, #jwcustomCalendar6').css({
			display: 'none'
		});
	}else if( windowWidth > 600 && windowWidth <= 768) {//sm desktop

		removeCalendarsBookings();
		var theCal3 = new customCalendar(0,0,month1,displayYear,'#jwcustomCalendar1','x', 290);
		theCal3.setHighlightedDays([1 ,2 , 13],month1,'x');
		var center = windowWidth/2 -165;
		$('#jwcustomCalendar1').css({
		left: center,
		top: '300px'
	});

		$('.leftArrowButtonWeeksOccupy').css({
			top: '425px',
			left : '10px',
			display : 'block',
			position : 'absolute'
		});
		$('.rightArrowButtonWeeksOccupy').css({
			top: '425px',
			right : '10px',
			display : 'block',
			position : 'absolute'
		});
		$('#jwcustomCalendar2, #jwcustomCalendar3, #jwcustomCalendar4, #jwcustomCalendar5, #jwcustomCalendar6').css({
			display: 'none'
		});

	}else if (windowWidth > 768 && windowWidth <= 992) {//tablet
		removeCalendarsBookings();
		var theCal3 = new customCalendar(120,265,month1,displayYear,'#jwcustomCalendar1','x', 160);
		theCal3.setHighlightedDays([1 ,2 , 13],month1,'x');
		var theCal4 = new customCalendar(393,265,(month1+1)%12,year[1],'#jwcustomCalendar2','w', 160);
		theCal4.setHighlightedDays([1 ,2 , 13],(month1+1)%12,'w');
		$('.leftArrowButtonWeeksOccupy').css({
			top: '336px',
			left : '10px',
			display : 'block',
			position : 'absolute'
		});
		$('.rightArrowButtonWeeksOccupy').css({
			top: '336px',
			right : '10px',
			display : 'block',
			position : 'absolute'
		});
		$('#jwcustomCalendar1, #jwcustomCalendar2').css('display', 'block');
	}else if (windowWidth > 992 && windowWidth <= 1200) {//med desktop
		removeCalendarsBookings();
		var theCal3 = new customCalendar(77,275,month1,displayYear,'#jwcustomCalendar1','x', 160);
		theCal3.setHighlightedDays([1 ,2 , 13],month1,'x');
		var theCal4 = new customCalendar(324,275,(month1+1)%12,year[1],'#jwcustomCalendar2','w', 160);
		theCal4.setHighlightedDays([1 ,2 , 13],(month1+1)%12,'w');
		$('.leftArrowButtonWeeksOccupy').css({
			top: '360px',
			left : '10px', 
			display : 'block',
			position : 'absolute'
		});
		$('.rightArrowButtonWeeksOccupy').css({
			top: '360px',
			right : '10px',
			display : 'block',
			position : 'absolute'
		});
		$('#jwcustomCalendar1, #jwcustomCalendar2').css('display', 'block');
	}else {//large desktop
		removeCalendarsBookings();
		var theCal3 = new customCalendar(59,275,month1,displayYear,'#jwcustomCalendar1','x', 160);
		theCal3.setHighlightedDays([1 ,2 , 13],month1,'x');
		var theCal4 = new customCalendar(269,275,(month1+1)%12,year[1],'#jwcustomCalendar2','w', 160);
		theCal4.setHighlightedDays([1 ,2 , 10],(month1+1)%12,'w');
		var theCal5 = new customCalendar(479,275,(month1+2)%12,year[2],'#jwcustomCalendar3','v', 160);
		theCal5.setHighlightedDays([1 ,2 , 13],(month1+2)%12,'v');
		var theCal6 = new customCalendar(59,528,(month1+3)%12,year[3],'#jwcustomCalendar4','a', 160);
		theCal6.setHighlightedDays([1 ,2 , 13],(month1+3)%12,'a');
		var theCal7 = new customCalendar(269,528,(month1+4)%12,year[4],'#jwcustomCalendar5','b', 160);
		theCal7.setHighlightedDays([1 ,2 , 13],(month1+4)%12,'b');
		var theCal8 = new customCalendar(479,528,(month1+5)%12,year[5],'#jwcustomCalendar6','c', 160);
		theCal8.setHighlightedDays([1 ,2 , 13],(month1+5)%12,'c');

		$('.leftArrowButtonWeeksOccupy').css({
			top: '436px',
			left : '10px', 
			display : "none"
		});
		$('.rightArrowButtonWeeksOccupy').css({
			top: '436px',
			right : '10px',
			display : "none"
		});
		$('#jwcustomCalendar1, #jwcustomCalendar2, #jwcustomCalendar3, #jwcustomCalendar4, #jwcustomCalendar5, #jwcustomCalendar6').css({
			display: 'block'
		});
	}
}


$(window).resize(function(){

	var windowWidth = window.innerWidth;
if(windowWidth <= 750){ //mobile
	var center = windowWidth/2 -122;
	$('#customCalendar2').css('display','none');
	$('#customCalendar1').css({
		left: center,
		top: '95px'
	});
	$('.availability-legend-row').css('margin-top','300px');
	$('.availability-legend-img-label').css('margin-bottom','35px');
}else if(windowWidth <= 992 && windowWidth > 750){//tablet
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
}else if(windowWidth > 992 && windowWidth <= 1199){//large and med desktop
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
});


$(window).resize(function(){
	updateCals();
});

updateCals();

