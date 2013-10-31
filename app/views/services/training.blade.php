@extends('templates.services')

@section('page-meta')
Training
@stop

@section('title')
<h3 class="booking">Training</h3>
@stop
@section('inner_content')

<div class="col-700 last">

	<div id="slideshow-portfolio">

		<ul>
			<li><img src="{{ URL::asset('img/services/training-1.png') }}" width="700" height="300" alt="" />
			</li><!-- end slide 1 -->
			<li><img src="{{ URL::asset('img/services/training-2.png') }}" width="700" height="300" alt="" />
			</li><!-- end slide 2 -->
		</ul>

		<div id="portfolio-slideshow-pager">
			&nbsp;
		</div>

	</div><!-- end #slideshow-portfolio -->

	<div class="hr"></div>

	<div class="col-220">

		<h3>Training</h3>
		<br />

		<ul class="checklist">
			<li>
				Starter training
			</li>
			<li>
				Novice pilots
			</li>
			<li>
				Experienced pilots
			</li>
			<li>
				Aerobatic training
			</li>
			<li>
				Display pilot training
			</li>
		</ul>

	</div>

	<div class="col-460 last">

		<h3>Details</h3>
		<br />

		<p>
			If you are not a licence holder we have a number of options allowing you to fly in and take control of a variety of dual control aircraft with a flying instructor.
		</p>

		<p>
			If you have an interest in aviation but not had any training then our experience flights are an ideal introduction to the joy of flight.
		</p>

		<p>
			If you have had an experience flight or want to take your flying a step further you can come and have a day course with us. During the day you will fly three times and learn how to fly straight and level, climb, descend, turn, basic navigation and if conditions allow visit another aerodrome. Between flights you will attend ground briefings to learn about the aircraft and its systems, theory of flight, map reading and navigation.
		</p>
		<p>
			This is a great introduction to flying and all counts towards the training requirements if you decide to go on and complete your PPL (private pilot licence) training which we can organise for you. Contact us for more details.
		</p>

	</div>

	<div class="fixed clear">

		<hr>
		</hr>

		<h3>Further ratings</h3>
		<br />

		<p>
			For licensed pilots we offer training to put the fun back into flying. Our instructors are on hand to offer tailwheel conversions, advanced handling and safety training, aerobatics from Sunday afternoon loops and rolls through to competition aerobatics at any level, formation flying and display pilot training.
		</p>
		<p>
			Tony Richards and Richard Pickin are Civil Aviation Authority approved Display Authorisation Examiners and can guide you through the process of becoming a display pilot.
		</p>

	</div>

</div><!-- end .col-700 -->
@stop