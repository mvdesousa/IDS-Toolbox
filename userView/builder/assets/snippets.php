
<div data-thumb="assets/default/thumbnails/video.png" data-cat="0,20">
 	<div class="row clearfix">
        	<div class="col-xs-12 col-md-12">
            		<div class="embed-responsive embed-responsive-16by9">
            			<iframe width="560" height="315" src="//www.youtube.com/embed/98lscvpR9qE" frameborder="0" allowfullscreen=""></iframe>
            		</div>
        	</div>
    	</div>
</div>

<div data-thumb="assets/default/thumbnails/video-left.png" data-cat="0,5,20">
	<div class="row clearfix">
        	<div class="col-xs-12 col-md-6 center">
            		<div class="embed-responsive embed-responsive-4by3">
            			<iframe width="560" height="315" src="//www.youtube.com/embed/98lscvpR9qE" frameborder="0" allowfullscreen=""></iframe>
            		</div>
        	</div>
        	<div class="col-xs-12 col-md-6 flow-opposite">
            		<h3>Lorem Ipsum is simply dummy text</h3>
            		<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
        	</div>
    	</div>
</div>


<div data-thumb="assets/default/thumbnails/video-left.png" data-cat="0,5,20">
	<div class="row clearfix">
        	<div class="col-xs-12 col-md-6 center">
            		<div class="embed-responsive embed-responsive-4by3">
            			<div class="video">
    								<img src="//www.marriottvacationclub.com/vacation-resorts/images/video/hero_placeholder.jpg">
    								<!-- <iframe width="940" height="529" src="//www.youtube.com/embed/98lscvpR9qE?autoplay=1" frameborder="0" allowfullscreen></iframe>-->
									</div>
            		</div>
        	</div>
        	<div class="col-xs-12 col-md-6 flow-opposite">
            		<h3>Lorem Ipsum is simply dummy text</h3>
            		<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
        	</div>
    	</div>
</div>

<div data-thumb="assets/default/thumbnails/video-right.png" data-cat="0,5,20">
	<div class="row clearfix">
        	<div class="col-xs-12 col-md-6">
            		<h3>Lorem Ipsum is simply dummy text</h3>
            		<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
        	</div>
        	<div class="col-xs-12 col-md-6">
            		<div class="embed-responsive embed-responsive-4by3">
            			<iframe width="560" height="315" src="//www.youtube.com/embed/98lscvpR9qE" frameborder="0" allowfullscreen=""></iframe>
            		</div>
        	</div>
    	</div>
</div>


<-- Snippet 38 -->
<div data-thumb="assets/default/thumbnails/marriott-hotel.png" data-cat="0,16">
	<div class="row clearfix">
		<div class="col-xs-12 col-md-8">
			<?php
			// A few settings
			$image = 'http://10.206.6.37/builder/assets/default/Marriott-Hotel.jpg';

			// Read image path, convert to base64 encoding
			$imageData = base64_encode(file_get_contents($image));

			// Format the image SRC:  data:{mime};base64,{data};
			$src = "data: image/jpeg;base64,".$imageData;

			// Echo out a sample image
			echo '<img src="'. $src. '" class="img-responsive">';
			?>
			<!---<img src="assets/default/Marriott-Hotel.jpg" class="img-responsive">--->
 		</div>
		<div class="col-xs-12 col-md-4 center">
			<h2>Lorem Ipsum</h2>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
            		<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
			<div class="social">
                		<a href="https://twitter.com/"><i class="fa fa-twitter fa-2x"></i></a>
                		<a href="https://www.facebook.com/"><i class="fa fa-facebook fa-2x"></i></a>
                		<a href="https://plus.google.com/"><i class="fa fa-google-plus fa-2x"></i></a>
                		<a href="mailto:you@example.com"><i class="fa fa-envelope-o fa-2x"></i></a>
			</div>
    </div>
	</div>
</div>


<!-- Snippit 17 -->
<div data-thumb="assets/marriotthotel_thumbnail.jpg" data-cat="0,12">
	<div class="row clearfix">
			<div class="col-xs-12 col-md-12">
            			<img src="assets/marriotthotel.jpg" class="img-responsive">
            			<h2>Marriott Hotel</h2>
            			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
      </div>
	</div>
</div>


<div data-thumb="assets/minimalist-basic/thumbnails/o03.png" data-cat="0,12">
	<div class="row clearfix">
	  <div class="col-xs-12 col-md-12">
<figure class="hdr two">
				<img src="assets/default/marriott-background.jpg" alt="">
				<div>
                    <figcaption>
					    <h2>The <span>Cafe</span></h2>
					    <p>Fresh roasted coffee, exclusive teas &amp; light meals</p>
				    </figcaption>	
                </div>		
			</figure>
    </div>
	<style>
	
figure {margin:0}

/* FIX: Preventing Chrome from wrapping text with span-style (when editing) */
.display h1 span {font-size: 2.8em;line-height:1.4;}
.display p span {font-size: 1.5em;line-height:1.7;}
h1 span {font-size: 2.37em;line-height:1.7;}
h2 span {font-size: 1.83em;line-height:1.7;}
h3 span {font-size: 1.39em;line-height:1.7;}
h4 span {font-size: 1.1em;line-height:1.7;}
h5 span {font-size: 0.98em;line-height:1.7;}
h6 span {font-size: 0.85em;line-height:1.7;}
p span {font-size: 14px; line-height: 1.7;}
li span {font-size: 14px; line-height: 1.7;}


/**********************************
    Header Image with Caption
***********************************/
figure.hdr {
	position: relative;
	width: 100%;
	overflow:hidden;
    background-color: #000;   
}
figure.hdr img {
	position: relative;
	display: block;
	width: 100%;
	opacity: 0.8;
	-webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
	transition: opacity 0.35s, transform 0.35s;	
	-webkit-transform: scale(1.2);
	transform: scale(1.2);
}
figure.hdr:hover img {
	opacity: 0.5;
	-webkit-transform: scale(1);
	transform: scale(1);
}
figure.hdr figcaption {
   	position: absolute;
	top: auto;
	bottom: 0;
	left: 0;
	width: 100%;
	height: 60%; 
	padding: 0 2.5em;
	color: #fff;
	font-size: 1.55em;
	text-align: center;
	box-sizing: border-box;
	z-index:1;
}
/* Text */
figure.hdr h2 {
	font-weight: 300;
	text-transform: uppercase;
}
figure.hdr h2 span {
	font-weight: 800;
}
figure.hdr p {
	letter-spacing: 1px;
	font-size: 68.5%;
	text-transform: uppercase;
}
figure.hdr h2, figure.hdr p {
	margin: 0;
	z-index:10000;
}
/* Cosmetic */
figure.hdr div {
	height: 100%; 
	z-index:0;
}
figure.hdr div::before,
figure.hdr div::after {
	position: absolute;
	content: '';
}
/* One */
figure.one div::before {
	top: 50px;
	right: 30px;
	bottom: 50px;
	left: 30px;
	border-top: 1px solid #fff;
	border-bottom: 1px solid #fff;
}
figure.one div::after {
	top: 30px;
	right: 50px;
	bottom: 30px;
	left: 50px;
	border-right: 1px solid #fff;
	border-left: 1px solid #fff;
}
/* Two */
figure.two div::before {
	top: 30px;
	right: 30px;
	bottom: 30px;
	left: 30px;
	border-top: 1px solid #fff;
	border-bottom: 1px solid #fff;
}
figure.two div::after {
	top: 30px;
	right: 30px;
	bottom: 30px;
	left: 30px;
	border-right: 1px solid #fff;
	border-left: 1px solid #fff;
}
/* Three */
figure.three figcaption {
	height: 70%; 
}
figure.three p {
	margin: 1em 0 0;
	padding: 2em;
	border: 1px solid #fff;	
} 
/* Four */
figure.four figcaption {
	height: 60%; 
	text-align: left;
}
figure.four p {
	position: absolute;
	right: 50px;
	bottom: 50px;
	left: 50px;
	padding: 2em;
	border: 7px solid #fff;
}
/* Five */
figure.five figcaption {
	height: 100%; 
	text-align: right;
}
figure.five h2 {
    position: absolute;
    left: 50px;
	right: 50px;
	top: 10%;
	border-bottom: 5px solid #fff;
}
figure.five p {
	position: absolute;
	right: 50px;
	bottom: 10%;
}
/* Six */
figure.six figcaption {
	height: 70%;
}
figure.six h2 {
    padding-bottom: 3%;
	border-bottom: 1px solid #fff;
}
figure.six p {
	padding-top: 6%;
}
/* Seven */
figure.seven figcaption {
	height: 90%;
	text-align:left;
}
figure.seven h2 {
	border-bottom: 3px solid #fff;
}
figure.seven p {
    padding-top: 1em;
}
/* Eight */
figure.eight figcaption {
	height: 100%; 
	text-align: right;
}
figure.eight h2 {
	position: absolute;
	left: 50%;
	right: 50px;
	bottom: 10%;
}
figure.eight p {
    position: absolute;
    left: 50px;
	right: 50%;
	top: 10%;
	padding-right:0.5em;
	border-right: 1px solid #fff;
}
	</style>
	</div>
</div>

<div data-thumb="assets/default/thumbnails/30.png" data-cat="0,12">
	<div class="row clearfix">
	  <div class="col-xs-12 col-md-12">
           <figure class="hdr eight">
				<img src="assets/default/marriott-atlantic-city.jpg" alt=""/>
				<div>
                    <figcaption>
					    <h2>The <span>Cafe</span></h2>
					    <p>Fresh roasted coffee, exclusive teas & light meals</p>
				    </figcaption>	
                </div>		
			</figure>
    </div>
	</div>
</div>

<div data-thumb="assets/default/thumbnails/marriott-interior-room.png" data-cat="0,12">
 	<div class="row clearfix">
	  <div class="col-xs-12 col-md-12">
           		 <figure class="hdr one">
				<img src="assets/default/marriott-interior.jpg">
				<div>
                    			<figcaption>
					    <h2 style="color:#fff;">The <span>Cafe</span></h2>
					    <p>Fresh roasted coffee, exclusive teas &amp; light meals</p>
				    	</figcaption>	
                		</div>		
			</figure>
        	</div>
	</div>
</div>

<div data-thumb="assets/default/internal-tile1.jpg" data-cat="0,1">
	<div class="row clearfix">
		<div class="col-xs-12 col-md-12 center">
				<img src="assets/default/internal-tile1.jpg" />
		</div>
	</div>
</div>


<div data-thumb="assets/default/thumbnails/accordion-destinations.png" data-cat="0,1">
	<div class="row clearfix">
			<h2>Marriott Vacation Club Resort Destinations</h2>
		<div class="col-xs-12 col-md-3">
			<a href="http://marriottvacationclub.com/vacation-resorts/marriott-vacation-club-collection.shtml" target="_self"><img src="http://www.marriottvacationclub.com/vacation-resorts/images/overviewMVCTN.jpg" alt="Marriott Vacation Club quality resorts and vacation villas."></a>
		</div>
		<div class="col-xs-11 col-md-12">
					<div class="description">
						<p style="font-size:12px;">Marriott Vacation Club resorts are located in the most sought-after vacation destinations and offer a variety of accommodations for your family's needs - from 1-, 2- and 3-bedroom villas to studios and roomy town homes. Here are great vacation destinations you can enjoy through your Marriott Vacation Club ownership.</p>
					</div>
		</div>
		<div class="col-xs-11 col-md-12">
					<p style="padding: 10px 0px;"><i class="fa fa-plus" data-toggle="collapse" data-target="#toggleDemo"> <strong>Top Destinations</strong> </i></p>
					<div id="toggleDemo" class="collapse">
						<div class="col-xs-12 col-sm-6 col-md-3"><strong>Eastern United States</strong><br> <a href="/vacation-resorts/marriott-custom-house/overview.shtml">Boston, Massachusetts</a><br> <a href="/vacation-resorts/marriott-fairway-villas/overview.shtml">Absecon, New Jersey</a><br> <a href="/vacation-resorts/hilton-head.shtml">Hilton Head Island, South Carolina</a><br> <a href="/vacation-resorts/marriott-oceanwatch-villas/overview.shtml">Myrtle Beach, South Carolina</a><br> <a href="/vacation-resorts/marriott-manor-club/overview.shtml">Williamsburg, Virginia</a><br> <br> <strong>Caribbean</strong><br> <a href="/vacation-resorts/marriott-vacation-club-collection.shtml#region-caribbean">Palm Beach, Aruba</a><br> <a href="/vacation-resorts/marriott-stkitts-beach-club/overview.shtml">St. Kitts and Nevis, BVI</a><br> <a href="/vacation-resorts/marriott-frenchmans-cove/overview.shtml">St. Thomas, USVI</a><br></div>
						<div class="col-xs-12 col-sm-6 col-md-3"><strong>Western United States</strong><br> <a href="/vacation-resorts/marriott-canyon-villas/overview.shtml">Phoenix, Arizona</a><br> <a href="/vacation-resorts/marriott-newport-coast/overview.shtml">Newport Coast, California</a><br> <a href="/vacation-resorts/marriott-vacation-club-collection.shtml#region-unitedStates-california">Palm Desert, California</a><br> <a href="/vacation-resorts/marriott-timber-lodge/overview.shtml">South Lake Tahoe, California</a><br> <a href="/vacation-resorts/marriott-mountain-valley-lodge/overview.shtml">Breckenridge, Colorado</a><br> <a href="/vacation-resorts/marriott-streamside/overview.shtml">Vail, Colorado</a><br> <a href="/vacation-resorts/marriott-willow-ridge-lodge/overview.shtml">Branson, Missouri</a><br> <a href="/vacation-resorts/marriott-grand-chateau/overview.shtml">Las Vegas, Nevada</a><br> <a href="/vacation-resorts/marriott-vacation-club-collection.shtml#region-unitedStates-utah">Park City, Utah</a><br><br> <strong>Europe</strong><br> <a href="/vacation-resorts/marriott-village-dile-de-france/overview.shtml">Bailly-Romainvilliers, France</a><br> <a href="/vacation-resorts/marriott-playa-andaluza/overview.shtml">Estepona, Costa del Sol, Spain</a><br> <a href="/vacation-resorts/marriott-club-son-antem/overview.shtml">Mallorca, Spain</a><br> <a href="/vacation-resorts/marriott-marbella-beach-club/overview.shtml">Marbella, Spain</a><br></div>
						<div class="col-xs-12 col-sm-6 col-md-3"><strong>Florida</strong><br> <a href="/vacation-resorts/marriott-beachplace-towers/overview.shtml">Fort Lauderdale, Florida</a><br> <a href="/vacation-resorts/marriott-crystal-shores/overview.shtml">Marco Island, Florida</a><br> <a href="/vacation-resorts/marriott-villas-at-doral/overview.shtml">Miami, Florida</a><br> <a href="/vacation-resorts/orlando.shtml">Orlando, Florida</a><br> <a href="/vacation-resorts/marriott-legends-edge/overview.shtml">Panama City, Florida</a><br> <a href="/vacation-resorts/marriott-vacation-club-collection.shtml#region-unitedStates-florida">The Palm Beaches, Florida</a><br><br> <strong>Asia</strong> <br> <a href="/vacation-resorts/marriott-vacation-club-collection.shtml#region-thailand">Phuket, Thailand</a><br></div>
						<div class="col-xs-12 col-sm-6 col-md-3"><strong>Hawaii</strong><br> <a href="/vacation-resorts/marriott-vacation-club-collection.shtml#region-unitedStates-hawaii">Kauai, Hawaii</a><br> <a href="/vacation-resorts/marriott-maui-ocean-club/overview.shtml">Maui, Hawaii</a><br> <a href="/vacation-resorts/marriott-ko-olina-beach-club/overview.shtml">Oahu, Hawaii</a><br></div>
					</div>
		</div>
	</div>
	<script>
	$(".fa-plus, .fa-minus").click(function(){
    $(this).toggleClass("fa-minus fa-plus");
	});	
	</script>
</div>


<div data-thumb="assets/default/thumbnails/tripadvisor.png" data-cat="0,11">
	<div class="row clearfix">
		<div class="col-xs-12 col-md-12">
			<div id="tripAdvisorWidget">
				<p>TripAdvisor Travel Rating</p>
				<div id="tripAdvisorRating"><img border="0" src="http://www.tripadvisor.com/img/cdsi/img2/ratings/traveler/4.5-11216-5.png"></a></div>
					<p style="color:#999; font-size:10px; margin:3px 0 4px 0;">Based on <span id="numOfRatings"></span>traveler reviews</p>
					<p style="margin:3px 0 0 0;">
						<a href="#">Read Reviews</a>
					</p>
					<p style="color:#999; font-size:10px; margin:3px 0 0 0;">
						<script type="text/javascript">
							//document.write("&copy; "+new Date().getFullYear() +" TripAdvisor LLC");
						</script>&copy; 2015 TripAdvisor LLC
					</p>
					<img src="http://marriottvacationclub.com/common/cms/mvc/images/graphics/hr-180.gif" style="padding:10px 0 10px 0;"></div>
				</div>	
			</div>
		</div>
	</div>	
</div>

<div data-thumb="assets/default/thumbnails/weather-widget.png" data-cat="0,11">
	<div class="row clearfix">
		<div class="col-xs-12 col-md-12">
				<h2>Destination Weather</h2>
					<h4>Phoenix, Arizona</h4>
		</div>
		<div class="col-xs-6 col-md-5 col-md-offset-1">
						<div class="sidebar_weather_day0" id="com.mvci.owner.respages.weather.ui.div.day_0"><a target="_self" href="#">Current</a><img border="0" src="http://marriottvacationclub.com/common/vc/en-us/images/external_link_icon_lg.gif"><br><img alt="" src="http://icons.wxug.com/i/c/k/cloudy.gif" id="tempreg_0"><br><span class="currentTemp"> 69&deg; F</span></div>
		</div>
		<div class="col-xs-6 col-md-6">
						<div class="sidebar_weather_day1" id="com.mvci.owner.respages.weather.ui.div.day_1"><a target="_self" href="#">Tomorrow</a><img border="0" src="http://marriottvacationclub.com/common/vc/en-us/images/external_link_icon_lg.gif"><br><img alt="" src="http://icons.wxug.com/i/c/k/clear.gif" id="tempreg_1"><br><span class="tomorrowTemp">Hi 84&deg; F<br>Lo 61&deg; F</span></div>
						<br clear="all">
		</div>
		<div class="col-xs-12 col-md-12" style="margin-left: 5px; padding-top:10px;"><i class="fa fa-chevron-right"> <a href="#">Extended Forecast</a></span></i>
		</div>
		<div class="col-xs-12 col-md-12 center">
					<br clear="all">
					<img src="http://marriottvacationclub.com/common/cms/mvc/images/graphics/hr-180.gif" style="padding:10px 0 10px 0;">
		</div>
	</div>	
</div>

<div data-thumb="assets/default/thumbnails/mvc-line.png" data-cat="0,19">
    <div class="row clearfix">
			<div class="col-xs-12 col-md-12 center">
            <img src="http://marriottvacationclub.com/common/cms/mvc/images/graphics/hr-180.gif" style="padding:10px 0 10px 0;">
        </div>
    </div>
</div>

<div data-thumb="assets/minimalist-basic/thumbnails/v02.png" data-cat="0,19">
    <div class="row clearfix">
			<div class="col-xs-12 col-md-12">
            <br><br>
        </div>
    </div>
</div>

<div data-thumb="assets/minimalist-basic/thumbnails/v01.png" data-cat="0,19">
    <div class="row clearfix">
			<div class="col-xs-12 col-md-12">
            <hr>
        </div>
    </div>
</div>

<div data-thumb="assets/minimalist-basic/thumbnails/b01.png" data-cat="0,2">
	<div class="row clearfix">
			<div class="col-xs-12 col-md-12 center">
            		<h1>Beautiful content. Responsive.</h1>
            		<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
        	</div>
	</div>
</div>

<div data-thumb="assets/minimalist-basic/thumbnails/a01.png" data-cat="0,1">
	<div class="row clearfix">
		<div class="col-xs-12 col-md-12">
				<h1>Lorem Ipsum is simply dummy text of the printing and typesetting industry</h1>
		</div>
	</div>
</div>

<div data-thumb="assets/minimalist-basic/thumbnails/c01.png" data-cat="0,3">
	<div class="row clearfix">
		<div class="col-xs-12 col-md-12">
                		<p">This is a special report</p>
                		<h1">Lorem Ipsum is simply dummy text of the printing industry</h1>
        	</div>
	</div>
</div>

<div data-thumb="assets/minimalist-basic/thumbnails/g01.png" data-cat="0,6">
	<div class="row clearfix">
		<div class="col-xs-12 col-md-12">
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus leo ante, consectetur sit amet vulputate vel, dapibus sit amet lectus.</p>
    </div>
	</div>
</div>

<div data-thumb="assets/minimalist-basic/thumbnails/e01.png" data-cat="0,5">
	<div class="row clearfix">
			<div class="col-xs-12 col-md-12">
            		<h1>Heading 1 Text Goes Here</h1>
            		<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
    	</div>
  </div>
</div>

<div data-thumb="assets/minimalist-basic/thumbnails/e02.png" data-cat="0,5">
	<div class="row clearfix">
			<div class="col-xs-12 col-md-12">
            		<h2>Heading 2 Text Goes Here</h2>
            		<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
        	</div>
    	</div>
</div>

<div data-thumb="assets/minimalist-basic/thumbnails/e08.png" data-cat="0,5">
	<div class="row clearfix">
			<div class="col-xs-12 col-md-4">
					<h1>Beautiful Content</h1>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
			</div>
			<div class="col-xs-12 col-md-5">
					<img src="assets/minimalist-basic/e08-1.jpg" class="img-responsive" style="margin-right:1.5em">
			</div>
			<div class="col-xs-12 col-md-3">
					<img src="assets/minimalist-basic/e08-2.jpg" class="img-responsive">
			</div>
	</div>
</div>

<div data-thumb="assets/minimalist-basic/thumbnails/e09.png" data-cat="0,5">
	<div class="row clearfix">
			<div class="col-xs-12 col-md-4">
			<h1>Lorem Ipsum</h1>
			<p>Lorem Ipsum is simply dummy text. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
		</div>
			<div class="col-xs-12 col-md-8">
			<img src="assets/minimalist-basic/e09-1.jpg" class="img-responsive">
		</div>
	</div>
</div>

<div data-thumb="assets/minimalist-basic/thumbnails/b12.png" data-cat="0,2">
	<div class="row clearfix">
	  <div class="col-xs-12 col-md-12">
			<div class="center">
				<img src="assets/minimalist-basic/b12-1.jpg" class="circle">
			</div>
			<div class="center">
				<h1>Lorem Ipsum is Simply</h1>
				<h3>Lorem Ipsum is simply dummy text</h3>
			</div>
			<p style="text-align: center">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus leo ante, consectetur sit amet vulputate vel, dapibus sit amet lectus.</p>
		</div>
	</div>
</div>

<div data-thumb="assets/minimalist-basic/thumbnails/b14.png" data-cat="0,2">
	<div class="row clearfix">
	  <div class="col-xs-12 col-md-12">
			<div class="display center">
				<h1>Beautiful Content</h1>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
				<br>
			</div>
			<div class="center">
				<img src="assets/minimalist-basic/b14-1.jpg" class="img-responsive"><img src="assets/minimalist-basic/b14-2.jpg" class="img-responsive"><img src="assets/minimalist-basic/b14-3.jpg" class="img-responsive">
			</div>
		</div>
	</div>
</div>

<div data-thumb="assets/minimalist-basic/thumbnails/g02.png" data-cat="0,6">
	<div class="row clearfix">
			<div class="col-xs-12 col-md-6">
            		<img src="assets/minimalist-basic/g02-1.jpg" class="img-responsive">
        	</div>
			<div class="col-xs-12 col-md-6">
            		<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
        	</div>
	</div>
</div>

<div data-thumb="assets/minimalist-basic/thumbnails/g03.png" data-cat="0,6">
	<div class="row clearfix">
			<div class="col-xs-12 col-md-6">
            		<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
       		 </div>
			<div class="col-xs-12 col-md-6">
            		<img src="assets/minimalist-basic/g03-1.jpg" class="img-responsive">
       		</div>
	</div>
</div>

<div data-thumb="assets/minimalist-basic/thumbnails/h01.png" data-cat="0,6">
	<div class="row clearfix">
			<div class="col-xs-12 col-md-6">
            		<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
        	</div>
			<div class="col-xs-12 col-md-6">
			<img src="assets/minimalist-basic/h01-1.jpg" class="circle" style="margin-right: 1.5em">
			<img src="assets/minimalist-basic/h01-2.jpg" class="circle" style="margin-right: 1.5em">
			<img src="assets/minimalist-basic/h01-3.jpg" class="circle">
		</div>
	</div>
</div>

<div data-thumb="assets/minimalist-basic/thumbnails/h02.png" data-cat="0,6">
	<div class="row clearfix">
			<div class="col-xs-12 col-md-6">
				<img src="assets/minimalist-basic/h02-1.jpg" class="circle" style="margin-right: 1.5em">
				<img src="assets/minimalist-basic/h02-2.jpg" class="circle" style="margin-right: 1.5em">
				<img src="assets/minimalist-basic/h02-3.jpg" class="circle">
		</div>
			<div class="col-xs-12 col-md-6">
            		<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
        	</div>
	</div>
</div>



<div data-thumb="assets/minimalist-basic/thumbnails/k06.png" data-cat="0,9">
	<div class="row clearfix">
	  <div class="col-xs-12 col-md-3 center">
			<img src="assets/minimalist-basic/k06-1.jpg">
		</div>
		<div class="col-xs-12 col-md-3">
			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
		</div>
		<div class="col-xs-12 col-md-3 center">
			<img src="assets/minimalist-basic/k06-2.jpg">
		</div>
		<div class="col-xs-12 col-md-3">
			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
		</div>
	</div>
</div>

<div data-thumb="assets/minimalist-basic/thumbnails/k02.png" data-cat="0,9">
	<div class="row clearfix">
		<div class="col-xs-12 col-md-4">
            		<figure>
				<img src="assets/minimalist-basic/k02-1.jpg">
                		<figcaption>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
				</figcaption>	
			</figure>
        	</div>
		<div class="col-xs-12 col-md-4">
            		<figure>
				<img src="assets/minimalist-basic/k02-2.jpg">
                		<figcaption>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
				</figcaption>	
			</figure>
        	</div>
		<div class="col-xs-12 col-md-4">
            		<figure>
				<img src="assets/minimalist-basic/k02-3.jpg">
                		<figcaption>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
				</figcaption>	
			</figure>
        	</div>
	</div>
</div>

<div data-thumb="assets/minimalist-basic/thumbnails/k01.png" data-cat="0,9">
	<div class="row clearfix">
		<div class="col-xs-12 col-md-6">
            		<figure>
				<img src="assets/minimalist-basic/k01-1.jpg">
                		<figcaption>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
				</figcaption>	
			</figure>
        	</div>
		<div class="col-xs-12 col-md-6">
            		<figure>
				<img src="assets/minimalist-basic/k01-2.jpg">
               	 		<figcaption>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
				</figcaption>	
			</figure>
        	</div>
	</div>
</div>

<div data-thumb="assets/minimalist-basic/thumbnails/p01.png" data-cat="0,13">
	<div class="row clearfix">
		<div class="col-xs-12 col-md-6">
            		<img src="assets/minimalist-basic/p01-1.jpg">
       	 	</div>
		<div class="col-xs-12 col-md-6">
           		<div class="display">
               			<h1>Beautiful content. Responsive.</h1>
                		<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                		<div style="margin:1em 0 2.5em;">
                			<a href="#" class="btn btn-primary">Read More</a>
                		</div>
            		</div>
        	</div>
	</div>
</div>

<div data-thumb="assets/minimalist-basic/thumbnails/p02.png" data-cat="0,13">
	<div class="row clearfix">
		<div class="col-xs-12 col-md-6">
            		<div class="display">
                		<h1>Beautiful content. Responsive.</h1>
                		<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                		<div style="margin:1em 0 2.5em;">
                			<a href="#" class="btn btn-primary">Read More</a>
                		</div>
            		</div>
        	</div>
		<div class="col-xs-12 col-md-6">
            		<img src="assets/minimalist-basic/p02-1.jpg">
        	</div>
	</div>
</div>

<div data-thumb="assets/minimalist-basic/thumbnails/p03.png" data-cat="0,13">
 	<div class="row clearfix">
		<div class="col-xs-12 col-md-6">
            		<img src="assets/minimalist-basic/p03-1.jpg">
        	</div>
		<div class="col-xs-12 col-md-6">
            		<h1>Beautiful content. Responsive.</h1>
            		<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            		<div style="margin:1em 0 2.5em;">
            			<a href="#" class="btn btn-primary">Read More</a>
            		</div>
        	</div>
	</div>
</div>

<div data-thumb="assets/minimalist-basic/thumbnails/p04.png" data-cat="0,13">
 	<div class="row clearfix">
		<div class="col-xs-12 col-md-6">
            		<h1>Beautiful content. Responsive.</h1>
            		<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            		<div style="margin:1em 0 2.5em;">
            			<a href="#" class="btn btn-primary">Read More</a>
            		</div>
        	</div>
		<div class="col-xs-12 col-md-6">
            		<img src="assets/minimalist-basic/p04-1.jpg">
        	</div>
	</div>
</div>

<div data-thumb="assets/minimalist-basic/thumbnails/p05.png" data-cat="0,13">
  <div class="row clearfix">
		<div class="col-xs-12 col-md-12">
            <div class="display center">
                <h1>Beautiful content. Responsive.</h1>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            </div>
         </div>
    </div>
    <div class="row clearfix">
		<div class="col-xs-12 col-md-12 center">
            <div style="margin:1em 0 2.5em;">
            <a href="#" class="btn btn-primary">Read More</a>
            </div>
        </div>
    </div>
</div>

<div data-thumb="assets/minimalist-basic/thumbnails/p06.png" data-cat="0,13">
 <div class="row clearfix">
		<div class="col-xs-12 col-md-12">
            <div class="display center">
                <h1 style="font-size:4em">Lorem Ipsum is simply dummy text of the printing and typesetting industry</h1>
            </div>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
        </div>
    </div>
    <div class="row clearfix">
		<div class="col-xs-12 col-md-12 center">
            <div style="margin:1em 0 2.5em;">
            <a href="#" class="btn btn-primary">Read More</a>
            </div>
        </div>
    </div>
</div>

<div data-thumb="assets/minimalist-basic/thumbnails/p07.png" data-cat="0,13">
 <div class="row clearfix">
		<div class="col-xs-12 col-md-12 center">
            <div style="margin:1em 0 2.5em;">
            <a href="#" class="btn btn-default">Read More</a> &nbsp;
            <a href="#" class="btn btn-primary">Download</a>
            </div>
        </div>
    </div>
</div>

<div data-thumb="assets/minimalist-basic/thumbnails/q01.png" data-cat="0,14">
    <div class="row clearfix">
		<div class="col-xs-12 col-md-6">
            <div class="list">
                <i class="fa fa-check"></i>
                <h3>Feature Item</h3>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            </div>
        </div>
		<div class="col-xs-12 col-md-6">
            <div class="list">
                <i class="fa fa-check"></i>
                <h3>Feature Item</h3>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            </div>
        </div>
    </div> 	
</div>

<div data-thumb="assets/minimalist-basic/thumbnails/q02.png" data-cat="0,14">
    <div class="row clearfix">
		<div class="col-xs-12 col-md-4">
            <div class="list">
                <i class="fa fa-check"></i>
                <h3>Feature Item</h3>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            </div>
        </div>
		<div class="col-xs-12 col-md-4">
            <div class="list">
                <i class="fa fa-check"></i>
                <h3>Feature Item</h3>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            </div>
        </div>
		<div class="col-xs-12 col-md-4">
            <div class="list">
                <i class="fa fa-check"></i>
                <h3>Feature Item</h3>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            </div>
        </div>
    </div> 	
</div>

<div data-thumb="assets/minimalist-basic/thumbnails/r01.png" data-cat="0,15">
    <div class="row clearfix">
		<div class="col-xs-12 col-md-12">
            <blockquote>
                <i class="fa fa-quote-left"></i>
	            <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                <small>by Albert Einstein</small>
            </blockquote>
        </div>
    </div>
</div>

<div data-thumb="assets/minimalist-basic/thumbnails/r02.png" data-cat="0,15">
    <div class="row clearfix">
		<div class="col-xs-12 col-md-6">
            <blockquote>
                <i class="fa fa-quote-left"></i>
	            <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                <small>by Albert Einstein</small>
            </blockquote>
        </div>
		<div class="col-xs-12 col-md-6">
            <blockquote>
                <i class="fa fa-quote-left"></i>
	            <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                <small>by Albert Einstein</small>
            </blockquote>
        </div>
    </div>
</div>

<div data-thumb="assets/minimalist-basic/thumbnails/r03.png" data-cat="0,15">
	<div class="row clearfix">
		<div class="col-xs-12 col-md-6 center">
            		<img src="assets/minimalist-basic/r03-1.jpg" class="circle" style="margin-top:1.5em">
        	</div>
		<div class="col-xs-12 col-md-6">
            		<blockquote>
                		<i class="fa fa-quote-left fa-2x"></i>
	            		<p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                		<small>by Albert Einstein</small>
            		</blockquote>
        	</div>
	</div>
</div>

<div data-thumb="assets/minimalist-basic/thumbnails/r04.png" data-cat="0,15">
	<div class="row clearfix">
		<div class="col-xs-12 col-md-6">
            		<blockquote>
                		<i class="fa fa-quote-left fa-2x"></i>
	            		<p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                		<small>by Albert Einstein</small>
            		</blockquote>
        	</div>
		<div class="col-xs-12 col-md-6 center">
            		<img src="assets/minimalist-basic/r04-1.jpg" class="circle" style="margin-top:1.5em">
        	</div>
	</div>
</div>


<div data-thumb="assets/minimalist-basic/thumbnails/s01.png" data-cat="0,16">
	<div class="row clearfix">
        	<div class="col-xs-3 col-md-2 center">
            		<img src="assets/minimalist-basic/s01-1.jpg" class="circle" style="margin-top:1.2em">
        	</div>
					<div class="col-xs-9 col-md-10">
            		<p>
                	<b>Sara Phillipps</b><br>A freelance web designer &amp; developer based in Melbourne, Australia.
            		</p>
            		<div class="">
                		<a href="https://twitter.com/"><i class="fa fa-twitter fa-2x"></i></a>
                		<a href="https://www.facebook.com/"><i class="fa fa-facebook fa-2x"></i></a>
                		<a href="https://plus.google.com/"><i class="fa fa-google-plus fa-2x"></i></a>
                		<a href="mailto:you@example.com"><i class="fa fa-envelope-o fa-2x"></i></a>
           	 	</div>
       	 	</div>
	</div>
</div>


<div data-thumb="assets/minimalist-basic/thumbnails/s10.png" data-cat="0,16">
	<div class="row clearfix">
		<div class="col-xs-12 col-md-6">
			<div class="col-xs-12 col-md-4 center">
				<img src="assets/minimalist-basic/s10-1.jpg" class="circle" style="margin-top:1.5em">
			</div>
			<div class="col-xs-12 col-md-8">
				<p>Lorem Ipsum is simply dummy text of the printing industry.</p>
				<div class="social">
                			<a href="https://twitter.com/"><i class="fa fa-twitter fa-2x"></i></a>
                			<a href="https://www.facebook.com/"><i class="fa fa-facebook fa-2x"></i></a>
                			<a href="https://plus.google.com/"><i class="fa fa-google-plus fa-2x"></i></a>
                			<a href="mailto:you@example.com"><i class="fa fa-envelope-o fa-2x"></i></a>
				</div>
			</div>
		</div>
		<div class="col-xs-12 col-md-6">
			<div class="col-xs-12 col-md-4 center">
				<img src="assets/minimalist-basic/s10-2.jpg" class="circle" style="margin-top:1.5em">
			</div>
			<div class="col-xs-12 col-md-8">
				<p>Lorem Ipsum is simply dummy text of the printing industry.</p>
				<div class="social">
                			<a href="https://twitter.com/"><i class="fa fa-twitter fa-2x"></i></a>
                			<a href="https://www.facebook.com/"><i class="fa fa-facebook fa-2x"></i></a>
                			<a href="https://plus.google.com/"><i class="fa fa-google-plus fa-2x"></i></a>
                			<a href="mailto:you@example.com"><i class="fa fa-envelope-o fa-2x"></i></a>
				</div>
			</div>
		</div>
	</div>
</div>

<div data-thumb="assets/minimalist-basic/thumbnails/t01.png" data-cat="0,17">
    <div class="row clearfix">
		<div class="col-xs-12 col-md-12">
            <div class="embed-responsive embed-responsive-16by9">
            <iframe width="100%" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" class="mg1" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14037.386442401352!2d-81.4919163!3d28.4087964!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88e77fd2b16663a1%3A0x12371b4a64eccd12!2sMarriott+Vacations+Worldwide!5e0!3m2!1sen!2sus!4v1432045487871"></iframe>
            </div>
        </div>
    </div>
</div>

<div data-thumb="assets/minimalist-basic/thumbnails/t02.png" data-cat="0,17">
    <div class="row clearfix">
        <div class="col-xs-12 col-md-8">
            <div class="embed-responsive embed-responsive-16by9">
            <iframe width="100%" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" class="mg1" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14037.386442401352!2d-81.4919163!3d28.4087964!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88e77fd2b16663a1%3A0x12371b4a64eccd12!2sMarriott+Vacations+Worldwide!5e0!3m2!1sen!2sus!4v1432045487871"></iframe>
            </div>
        </div>
        <div class="col-xs-12 col-md-4 flow-opposite">
            <h3>Get in Touch</h3>
            <p>
              <strong>Marriott Vacations Worldwide</strong><br>
              6649 Westwood Blvd #500, Orlando<br>
              FL 32821<br>
              P: (123) 456 7890 / 456 7891
            </p>

            <p>
              <strong>Full Name</strong><br>
              <a href="mailto:#">first.last@example.com</a>
            </p>
        </div>
    </div>
</div>


<div data-thumb="assets/default/thumbnails/assorted-columns.png" data-cat="0,1">
<!-- Stack the columns on mobile by making one full-width and the other half-width -->
<div class="row">
  <div class="col-xs-12 col-md-8"><p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p></div>
  <div class="col-xs-6 col-md-4"><p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p></div>
</div>

<!-- Columns start at 50% wide on mobile and bump up to 33.3% wide on desktop -->
<div class="row">
  <div class="col-xs-6 col-md-4"><p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p></div>
  <div class="col-xs-6 col-md-4"><p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p></div>
  <div class="col-xs-6 col-md-4"><p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p></div>
</div>

<!-- Columns are always 50% wide, on mobile and desktop -->
<div class="row">
  <div class="col-xs-6"><p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p></div>
  <div class="col-xs-6"><p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p></div>
</div>
	
</div>
<div data-thumb="assets/minimalist-basic/thumbnails/u04.png" data-cat="0,18">
	<div class="row clearfix">
		<div class="col-xs-12 col-md-12 center">
			<div class="col-xs-12 col-md-3">
				<div style="background-color: #00bfff">
					<a href="https://twitter.com/" style="color:#ffffff"><i style="font-size:60px" class="fa fa-twitter"></i></a>
				</div>
			</div>
			<div class="col-xs-12 col-md-3">
				<div style="background-color: #128BDB;">
					<a href="https://facebook.com/" style="color:#ffffff"><i style="font-size:60px" class="fa fa-facebook"></i></a>
				</div>
			</div>
			<div class="col-xs-12 col-md-3">
				<div style="background-color: #E20000;">
					<a href="https://www.youtube.com/" style="color:#ffffff"><i style="font-size:60px" class="fa fa-youtube"></i></a>
				</div>
			</div>
			<div class="col-xs-12 col-md-3">
				<div style="background-color: #0569AA;">
					<a href="http://www.website.com/" style="color:#ffffff"><i style="font-size:60px" class="fa fa-home"></i></a>
				</div>
			</div>
			<div class="col-xs-12 col-md-3">
				<div style="background-color: #ff69B4">
					<a href="mailto:you@example.com" style="color:#ffffff"><i style="font-size:60px" class="fa fa-mail"></i></a>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- End of Default -->

<div data-thumb="assets/minimalist-basic/thumbnails/n15.png" data-cat="11">
	<div class="row clearfix">
		<div class="col-xs-12 col-md-6">
			<img src="assets/minimalist-basic/k01-1.jpg">
        </div>
        <div class="col-xs-12 col-md-6">
			<img src="assets/minimalist-basic/k01-2.jpg">
        </div>
	</div>
</div>

<div data-thumb="assets/minimalist-basic/thumbnails/n16.png" data-cat="11">
	<div class="row clearfix">
	    <div class="col-xs-12 col-md-4">
            <img src="assets/minimalist-basic/k02-1.jpg">	
        </div>
        <div class="col-xs-12 col-md-4">
			<img src="assets/minimalist-basic/k02-2.jpg">
        </div>
        <div class="col-xs-12 col-md-4">
			<img src="assets/minimalist-basic/k02-3.jpg">
        </div>
	</div>
</div>


