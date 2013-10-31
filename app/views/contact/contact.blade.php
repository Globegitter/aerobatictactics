@extends('templates.main')

@section('page-meta')
Contact Us
@stop

@section('header')
			<div class="inner-page-title-container">
			
				<img src="{{ URL::asset('img/contact/page-title.png') }}" width="940" height="220" alt="" />
			
				<div class="inner-page-title fixed">

					<h2>Contact</h2>
					<p>We are at your disposal for any queries, questions, quotations or bookings you may have.</p>
				
				</div><!-- end .inner-page-title -->
			
			</div><!-- end .inner-page-title-container -->
@stop
@section('content')
		<div id="content">
		
		<!-- ///   CONTENT   /////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
			
			<div class=" fixed">

				<div class="col-220">
				
					<h4>Contact Information</h4>

					<p><strong>Office Address</strong></p>

					<p>Barrow House,
					<br />24 Park Ave,
          <br />Farnborough Park,
					<br />Orpington,
					<br />Kent, BR6 8LL
					
					<p><strong>Home Airbase</strong></p>

					<p>Headcorn Aerodrome,
					<br />Shenley Road,
					<br />Headcorn,
					<br />Kent, TN27 9HX

					<p><strong>Contact Info</strong></p>
					
					

					<p style="margin-bottom:0;">Richard: +447540 192551
					<br />Tony: +447814 641356</p>
					<p><br />email: <a href="mailto:richard@aerobatictactics.com">richard@aerobatictactics.com</a></p>

				</div><!-- end .col-220 -->
				<div class="col-700 last">
					
					<div id="map_canvas">
					</div>
				</div><!-- end .col-700 -->

			</div><!-- end .row -->
			
			<!-- <div class="hr"></div> -->
			
			<div class=" no-print fixed">

<!-- 				<div class="col-220">
				
					<h4>Contact Form</h4>

					<p>Please enter your contact details and message.
					We will get back to you as soon as possible.</p>
	 
				</div> -->
<!-- 				<div class="col-700 last">

					<form id="contact-form" class="fixed" action="javascript:void(0);">
						<fieldset>
							<p id="formstatus"></p>

							<p>
								<label for="name">Your name: <span class="required">*</span></label><br />
								<input class="text" type="text" id="name" name="name" value="" />
							</p><p>
								<label for="email">Your Email Adress: <span class="required">*</span></label><br />
								<input class="text" type="text" id="email" name="email" value="" />
							</p><p>
								<label for="subject">Subject: <span class="required">*</span></label><br />
								<input class="text" type="text" id="subject" name="subject" value=""  />
							</p><p>
								<label for="message">Message: </label><br />
								<textarea id="message" name="message" rows="3" cols="25"></textarea>
							</p><p>
								<input type="submit" name="submit" value="Send!" />
								<br />
							</p>
						</fieldset>

					</form>

				</div>< -->

			</div><!-- end .row -->

		<!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
		
		</div><!-- end #content -->

		<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBZfgt2SGpHo1VyqkfXZ6x-WBaDvUMfPL8&sensor=false"></script>
    <script type="text/javascript">
	    $(document).ready(function () {

				var mapOptions = {
		      center: new google.maps.LatLng(51.364064,0.319977),
		      zoom: 8,
		      mapTypeId: google.maps.MapTypeId.ROADMAP
		    };

		    var map = new google.maps.Map(document.getElementById("map_canvas"),
		        mapOptions);

		    var marker_office = new google.maps.Marker({
            title: "AerobaticTactics Office",
            position: new google.maps.LatLng(50.961157,0.52272),
          });

				var marker_daymns = new google.maps.Marker({
            title: "Daymns Hall Aerodrome",
            position: new google.maps.LatLng(51.528998,0.246034),
          });

		    var marker_headcorn = new google.maps.Marker({
            title: "Headcorn Aerodrome",
            position: new google.maps.LatLng(51.154538,0.643902),
          });

		    // marker_office.setMap(map);
		    marker_daymns.setMap(map);
		    marker_headcorn.setMap(map);

        $('form#contact-form').bind('submit', function(e){
          var self = $(this), params = {}, errors = 0;

          $.each(['email', 'name', 'subject', 'message'], function(i,field){
            var field = self.find('#'+field), val = field.val();

            if(!$.trim(val)){ field.css('border', '1px solid #cc0000'); errors++; }

            params[field] = val;  
          });

          if(! errors)
             Groove.createTicket(params, function(){
                 console.log(arguments);
                 self.slideUp('fast', function(){
                   self.html('<p>Thanks, your email has been sent</p>').slideDown('slow');
                 });
             });
   

          return false;
        });
	    });
    </script>

    <script>
      //<![CDATA[
        (function() {var s=document.createElement('script');
          s.type='text/javascript';s.async=true;
          s.src=('https:'==document.location.protocol?'https':'http') +
          '://aerobatictactics.groovehq.com/widgets/de19c03a-29a0-4831-b343-b444c40df9f6/ticket/api.js'; var q = document.getElementsByTagName('script')[0];q.parentNode.insertBefore(s, q);})();
      //]]>
    </script>
@stop
