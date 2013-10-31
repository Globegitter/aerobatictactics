@extends('templates.services')

@section('page-meta')
Experience Flights
@stop

@section('title')
<h3 class="booking">Experience Flights</h3>
@stop
@section('inner_content')

<div class="col-700 last">

	<div id="slideshow-portfolio">

		<ul>
			<li><img src="{{ URL::asset('img/services/experience-1.png') }}" width="700" height="300" alt="" />
			</li><!-- end slide 1 -->
			<li><img src="{{ URL::asset('img/services/experience-2.png') }}" width="700" height="300" alt="" />
			</li><!-- end slide 2 -->
			<li><img src="{{ URL::asset('img/services/experience-3.png') }}" width="700" height="300" alt="" />
			</li><!-- end slide 2 -->
			<li><img src="{{ URL::asset('img/services/experience-4.jpg') }}" width="700" height="300" alt="" />
			</li><!-- end slide 2 -->
			<li><img src="{{ URL::asset('img/services/experience-5.jpg') }}" width="700" height="300" alt="" />
			</li><!-- end slide 2 -->
		</ul>

		<div id="portfolio-slideshow-pager">
			&nbsp;
		</div>

	</div><!-- end #slideshow-portfolio -->

	<div class="hr"></div>

	<div class="col-220">

		<h3>Experience Flights</h3>
		<br />

		<ul class="checklist">
			<li>
				Anniversary Gifts
			</li>
			<li>
				Birthday Gifts
			</li>
			<li>
				Christmas Gifts
			</li>
			<li>
				Thrill Seeker Experiences
			</li>
			<li>
				Introductory Lesson
			</li>
		</ul>

	</div>

	<div class="col-460 last experience-intro">

		<p>
			Aerobatic Tactics offers a range of experience flights in a variety of historic and aerobatic aircraft. Gift vouchers are available for the whole range of experience flights. All flights are in dual control aircraft with a qualified flight instructor and include a full briefing covering safety in and around the aircraft, flight controls and instruments, content of your flight and the route to be flown.
		</p>

	</div>

	<div class="fixed clear">

		<hr>
		</hr>

		<h3>Locations</h3>
		<br />

		<p>
			Our experience flights are available from our <a href="{{ URL::to('/contact') }}">Daymns Hall base in Essex, and Headcorn Aerodrome in Kent.</a>
		</p>


		<hr>
		</hr>

		<h3>Further Details</h3>
		<br />

		<p>
			After your briefing your instructor will show you around the aircraft before helping you into the cockpit, then its chocks away for your flying experience.
		</p>

		<p>
			During the flight your instructor will show you how to keep the aircraft flying straight and level, how to control the aircraft in a turn and if you wish let you take control. You will soon discover the light touch required to guide the aircraft around the sky. If you like your instructor will be happy to demonstrate a loop or roll on the way back to the airfield.
		</p>

		<p>
			Flight durations are 20, 30, 40, 50 and 60 minutes. If you decide you would like to continue learning to fly the time flown in our aircraft can be counted towards the hours required to gain your private pilots licence. Experience flights are available in the Tiger Moth, Chipmunk, Slingsby T.67, Harvard and Cap 10 aircraft.
		</p>

		<p>
			Why not give an Aerobatic Tactics gift voucher as a birthday, anniversary or Christmas present or just treat yourself?
		</p>

		<p>
			Please feel free to bring your family and friends along on the day to enjoy the experience with you.
		</p>

	</div>

</div><!-- end .col-700 -->
@stop