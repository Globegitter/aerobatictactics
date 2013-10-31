@extends('templates.main')

@section('page-meta')
Home
@stop

@section('header')
<div id="slideshow-index-outer" class="slideshow-container no-print fixed">
	<div id="slideshow-index">
		<ul>
			<li>
				<img src="{{ URL::asset('img/index/slider/plane-1.png') }}" width="940" height="350" alt="" />
				<div class="slidetext">

					<h2>Wing Walking</h2>
					<p>
						Now you can be a wing walker too and take part in display training on top of our Boeing Stearman
						Biplane.
					</p>
					</br><a href="{{ URL::to('/services/wingwalking') }}"><img id="more" src="{{ URL::asset('img/images/more-button.png') }}" width="150" height="31" alt="" /></a>

				</div>
			</li><!-- end slide 2 -->
			<li>
				<img src="{{ URL::asset('img/index/slider/plane-2.png') }}" width="940" height="350" alt="" />
				<div class="slidetext">

					<h2>Aerobatic Displays</h2>
					<p>
						We can offer anything from a gentle vintage aircraft fly past to a spectacular world class aerobatic  routine flown by a British World Aerobatic pilot.
					</p>

					</br><a href="{{ URL::to('/services/displays') }}"><img src="{{ URL::asset('img/images/more-button.png') }}" width="150" height="31" alt="" /></a>

				</div>
			</li><!-- end slide 1 -->
			
			
		</ul>

		<div id="index-slideshow-pager">
			&nbsp;
		</div>

	</div><!-- end #slideshow -->

</div><!-- end .row -->
@stop
@section('content')
<div class=" fixed">
	<div class="col-220" id="who-are-we">

		<h3>Who Are We</h3>
		<br />

		<p>
			Aerobatic Tactics is the modern day equivalent of the Barnstorming Pioneers, who would have travelled the country in the 20’s and 30’s as part of a flying circus, bringing aviation based activities to your local area.
		</p>
		<p>
			Our Display Pilots and Instructors have a real passion for aviation and are on hand to pass on their knowledge and enthusiasm to you.
		</p>
		<p>
			Operating from Damyns Hall Aerodrome in Essex and Headcorn Aerodrome in Kent. But we can travel to any part of the country.
		</p>

<!-- 		<div class="pdf">
			<a href="_content/pdf/aerobatic-tactics-brochure-2011.pdf">Download our
			<br />
			Brochure</a>
		</div> -->

	</div><!-- end .col-220 -->
	<div id="services-outer">
		<div class="col-700 last">

			<div class="fixed">

				<div class="col-460">

					<h3>Services</h3>
					<br />

				</div>
				<!--div class="col-220 last">

				<p class="text-right"><a href="#">view full list</a></p>

				</div-->

			</div><!-- end .fixed -->

			<ul id="services-overview" class="fixed">
				<li class="first">

					<h5><a href="{{ URL::to('/services/experience') }}">Experience Flights</a></h5>
					<p>
						Join one of our aerobatic pilots for a flight you won't forget
					</p>
					<img src="{{ URL::asset('img/index/services-overview/experience.png') }}" width="180" height="100" alt="" />

					<div class="services-overview-overlay"></div>

				</li><!-- end service 1 overview -->
				<li>

					<h5><a href="{{ URL::to('/services/training') }}">Training</a></h5>
					<p>
						Learn to fly with one of our highly qualified instructors
					</p>
					<img src="{{ URL::asset('img/index/services-overview/red-yellow.png') }}" width="180" height="100" alt="" />

					<div class="services-overview-overlay"></div>

				</li><!-- end service 2 overview -->
				<li>

					<h5><a href="{{ URL::to('/services/film') }}">TV and Film</a></h5>
					<p>
						Both our aircraft and pilots are available for TV and Film hire
					</p>
					<img src="{{ URL::asset('img/index/services-overview/tv.png') }}" width="180" height="100" alt="" />

					<div class="services-overview-overlay"></div>

				</li><!-- end service 3 overview -->
			</ul><!-- end #services-overview -->

		</div><!-- end .col-700 -->
		<div class="col-700 last">
			<ul id="services-overview" class="fixed section-2">
				<li class="first">

					<h5><a href="{{ URL::to('/services/displays') }}">Aerobatic Displays</a></h5>
					<p>
						Aerobatic displays are our speciality, we make the crowd roar in excitement
					</p>
					<img src="{{ URL::asset('img/index/services-overview/aerobatics.png') }}" width="180" height="100" alt="" />

					<div class="services-overview-overlay"></div>

				</li><!-- end service 1 overview -->
				<li>

					<h5><a href="{{ URL::to('/services/wingwalking') }}">Wing Walking</a></h5>
					<p>
						Have you ever wanted to walk on the wing of an aeroplane doing 200mph?
					</p>
					<img src="{{ URL::asset('img/index/services-overview/wing-walking.png') }}" width="180" height="100" alt="" />

					<div class="services-overview-overlay"></div>

				</li><!-- end service 2 overview -->
				<li>

					<h5><a href="{{ URL::to('/contact') }}">Other Services</a></h5>
					<p>
						We can provide many other services, please get in touch for more details
					</p>
					<img src="{{ URL::asset('img/index/services-overview/other.png') }}" width="180" height="100" alt="" />

					<div class="services-overview-overlay"></div>

				</li><!-- end service 3 overview -->
			</ul><!-- end #services-overview -->

		</div><!-- end .col-700 -->
	</div>
</div><!-- end .row -->

<script src="{{ URL::asset('js/spinjs/spin.js') }}"></script>
<script>
// Homepage animations
$(document).ready(function() {
		var opts = {
		  lines: 7, // The number of lines to draw
		  length: 0, // The length of each line
		  width: 9, // The line thickness
		  radius: 10, // The radius of the inner circle
		  corners: 1, // Corner roundness (0..1)
		  rotate: 15, // The rotation offset
		  direction: 1, // 1: clockwise, -1: counterclockwise
		  color: '#ddd', // #rgb or #rrggbb
		  speed: 1.4, // Rounds per second
		  trail: 55, // Afterglow percentage
		  shadow: false, // Whether to render a shadow
		  hwaccel: true, // Whether to use hardware acceleration
		  className: 'spinner', // The CSS class to assign to the spinner
		  zIndex: 2e9, // The z-index (defaults to 2000000000)
		  top: 'auto', // Top position relative to parent in px
		  left: 'auto' // Left position relative to parent in px
		};

		var target = document.getElementById('slideshow-index-outer');
		var spinner = new Spinner(opts).spin(target);

		$(window).load(function() {
			spinner.stop();
			$('#slideshow-index').delay(100).animate({"opacity":"1"}, 700);
			$('#who-are-we').delay(600).animate({"opacity":"1"}, 700);
			$('#services-outer').delay(1000).animate({"opacity":"1"}, 700);
		});

});
	
</script>
@stop
