<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	
	<title>Aerobatic Tactics | @yield('page-meta')</title>
	<meta name="description" content="" />
	<meta name="keywords"    content="" />

	<!-- //////// Favicon ////////  -->
	<link href="favicon.ico" rel="shortcut icon" type="image/x-icon" />
	
	<!-- //////// Css - stylesheets ////////  --> 
  <link href="{{ URL::asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ URL::asset('css/style.css') }}" rel="stylesheet" type="text/css" media="all" />
	<link href="{{ URL::asset('css/style-print.css') }}" type="text/css" media="print" /> 
	<link href="{{ URL::asset('css/jquery.dataTables.css') }}" rel="stylesheet" type="text/css"/>
	<link href="{{ URL::asset('js/tipsy/css.tipsy.css') }}" rel="stylesheet" type="text/css"/>
	<!-- <link href="{{ URL::asset('js/prettyphoto/css.prettyphoto.css') }}" rel="stylesheet" type="text/css"/> -->
	<link href="{{ URL::asset('js/validity/css.validity.css') }}" rel="stylesheet" type="text/css"/>
	
	<!-- TypeKit -->
	<script type="text/javascript" src="//use.typekit.net/por0bdg.js"></script>
	<script type="text/javascript">try{Typekit.load();}catch(e){}</script>

	<!-- jQuery -->
	<script src="{{ URL::asset('js/libraries/jquery-1.8.3.min.js') }}"></script>
    
</head>
<body>
	<noscript>
		<link href="{{ URL::asset('css/style-nojs.css') }}" rel="stylesheet" type="text/css" media="all" />
			<div class="nojs-warning"><strong>JavaScript seems to be Disabled!</strong> Some of the website features are unavailable unless JavaScript is enabled.</div>
	</noscript>
		
	<div id="wrap">
		<div id="header">		
			<div class=" dropdown-container fixed">
			
				<div class="col-220">
				
					<a href="{{ URL::to('/') }}" title="Back Home" id="logo">
						<img src="{{ URL::asset('img/images/logo.png') }}" alt="logo">
					</a>
				
				</div><!-- end .col-220 -->	
				<div class="col-700 last">

					<p class="get-in-touch">For additional information call: <strong>+447540 192551</strong></p>	

					<ul id="dropdown-menu" class="fixed">
										
						<li class="current"><a href="{{ URL::to('/') }}">Home</a></li>
						<li><a href="#">About</a>
							<ul class="sub-menu">
								<li><a href="{{ URL::to('/about') }}">About Us</a></li>
								<li><a href="{{ URL::to('/aircraft') }}">Our Aircraft</a></li>
								<li><a href="{{ URL::to('/team') }}">The Team</a></li>
							</ul>
						</li>
						<li><a href="#">Services</a>
							<ul class="sub-menu">
								<li><a href="{{ URL::to('/services/displays') }}">Aerobatic Displays</a></li>
								<li><a href="{{ URL::to('/services/experience') }}">Experience Flights</a></li>
								<li><a href="{{ URL::to('/services/film') }}">TV and Film</a></li>
								<li><a href="{{ URL::to('/services/training') }}">Training</a></li>
								<li><a href="{{ URL::to('/services/wingwalking') }}">Wing Walking</a></li>
							</ul>
						</li>
						<li class="last"><a href="{{ URL::to('/contact') }}">Contact</a></li>

					</ul><!-- end #dropdown-menu -->
				
				</div><!-- end .col-700 -->	
				
			</div><!-- end .row -->
			
			<div class="hr"></div>
		
			@yield('header')
		</div><!-- end #header -->
		
		<div id="content">
			<div class="hr"></div>
			@yield('content')
    	</div>
    	   	
		<div id="footer">
			<div class="hr"></div>	
			
			<div class=" fixed">
				
				<div class="col-220">
				
					<p><strong>&copy; 2013 Aerobatic Tactics Ltd</strong></p>
					
					<p class="last"> All right are reserved.

				</div><!-- end .col-220 -->
				<div class="col-220">
				
					<p><strong>Contact Info</strong></p>
					
					<p class="last">Barrow House,
					<br />24 Park Avenue,
					<br />Farnborough Park,
					<br />Orpington,
					<br />Kent,BR6 8LL
					<br />T: +447540 192551</p>
				
				</div><!-- end .col-220 -->
				<div class="col-220">
					
					<p><strong>Quick Navigation</strong></p>
					
					<ul class="footer-nav-1">
						<li><a href="{{ URL::to('/about') }}">About Us</a></li>
						<!-- <li><a href="#">Testimonials</a></li> -->
						<li><a href="{{ URL::to('/') }}">Our Services</a></li>
						<li><a href="{{ URL::to('/terms') }}">Terms and Conditions</a></li>
					</ul><!-- end .footer-nav-1 -->
					
					<ul class="footer-nav-2">
						<!-- <li><a href="#">Blog</a></li> -->
						<li><a href="{{ URL::to('/team') }}">The Team</a></li>
						<li><a href="{{ URL::to('/contact') }}">Contact Us</a></li>
					</ul><!-- end .footer-nav-2 -->
	 
				</div><!-- end .col-460 -->
				<div class="col-220 last">

					<p><strong>Connect with us</strong></p>
					
					
					<ul id="social-media" class="fixed">
						<li><img src="{{ URL::asset('img/images/social-icons/facebook.png') }}" width="16" height="16" alt="facebook" /><a href="https://www.facebook.com/pages/Aerobatic-Tactics/464604703561893">Facebook</a></li>
						<li><img src="{{ URL::asset('img/images/social-icons/twitter.png') }}"  width="16" height="16" alt="twitter" /><a href="https://twitter.com/aerobatictactic">Twitter</a></li>
					</ul><!-- end #social-media -->

				</div><!-- end .col-220 -->
			
			</div><!-- end .row -->
			
		<!-- ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
		
		</div><!-- end #footer -->

	</div><!-- end #wrap -->
	<script src="{{ URL::asset('js/datepicker/bootstrap-datepicker.js') }}"></script>
	<!-- // <script src="{{ URL::asset('js/timepicker/jquery.timepicker.js') }}"></script> -->
	<script src="{{ URL::asset('js/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ URL::asset('js/datatables/dataTables.fnAddTr.js') }}"></script>  
    <script src="{{ URL::asset('js/libraries/bootstrap.min.js') }}"></script>
	<script src="{{ URL::asset('js/tipsy/jquery.tipsy.js') }}"></script>
	<script src="{{ URL::asset('js/prettyphoto/jquery.prettyPhoto.js') }}"></script>
	<script src="{{ URL::asset('js/validity/jquery.validity.js') }}"></script>
	<script src="{{ URL::asset('js/cycle/jquery.cycle.all.min.js') }}"></script>
	<script src="{{ URL::asset('js/accordion/jquery.accordion.js') }}"></script>
	<script src="{{ URL::asset('js/tabify/jquery.tabify-1.4.js') }}"></script>
	<script src="{{ URL::asset('js/scripts.js') }}"></script>
	<script src="{{ URL::asset('js/plugins.js') }}"></script>
	
	<!-- analytics code here -->

	
	<script>
	  //<![CDATA[
	    (function() {var s=document.createElement('script');
	      s.type='text/javascript';s.async=true;
	      s.src=('https:'==document.location.protocol?'https':'http') +
	      '://aerobatictactics.groovehq.com/widgets/de19c03a-29a0-4831-b343-b444c40df9f6/ticket.js'; var q = document.getElementsByTagName('script')[0];q.parentNode.insertBefore(s, q);})();
	  //]]>
	</script>
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-29626441-4', 'aerobatictactics.com');
	  ga('send', 'pageview');

	</script>
</body>
</html>
