@extends('templates.about')

@section('page-meta')
About Us
@stop

@section('inner_image')
	<img src="{{ URL::asset('img/team/team.png') }}" width="940" height="220" alt="" />

	<div class="inner-page-title fixed">

		<h2>About Us</h2>
		<p>
			A brief history of our company, please get in touch for more information
		</p>

	</div><!-- end .inner-page-title -->
@stop
@section('inner_content')
	<div class="col-700 last">
		<!-- ///   MAIN CONTENT   ////////////////////////////////////////////////////////////////////////////////////////////// -->

		<p>
			Many people go to airshows up and down the country and from the public enclosure watch Tiger Moths, Spitfires and fast Jets performing spectacular displays, now you can experience the joy of flight and join us on the other side of the fence.
		</p>

		<p>
			Do you just want to see for yourself what it is like to experience a flight in an open cockpit Tiger Moth  biplane, take control of an aerobatic aircraft, fly a genuine wartime fighter trainer or take things further and learn to fly?
		</p>

		<p>
			Have you ever wondered what it is like to take part in your own air display? We can train you to become a wing walker and you can then wow your friends on top of a Boeing Stearman biplane during your own private airshow.
		</p>

		<p>
			As well as operating from Damyns Hall Aerodrome, Essex and Headcorn Aerodrome, Kent we also travel around London and the South East of England.
		</p>

		<p>
			Aerobatic Tactics is the modern day equivalent of the Barnstorming Pioneers who would have traveled the country in the 20’s and 30’s as part of a flying circus bringing aviation based activities to your local area. Our Display Pilots and Instructors have a real passion for aviation and are on hand to pass on their knowledge and enthusiasm to you.
		</p>

		<!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

	</div><!-- end .col-700 -->
@stop