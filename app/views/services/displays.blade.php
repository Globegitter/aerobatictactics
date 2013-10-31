@extends('templates.services')

@section('page-meta')
Aerobatic Displays
@stop

@section('title')
<h3 class="booking">Aerobatic Displays</h3>
@stop
@section('inner_content')

<div class="col-700 last">

	<div id="slideshow-portfolio">

		<ul>
			<li><img src="{{ URL::asset('img/services/displays-1.png') }}" width="700" height="300" alt="" />
			</li><!-- end slide 1 -->
			<li><img src="{{ URL::asset('img/services/displays-2.png') }}" width="700" height="300" alt="" />
			</li><!-- end slide 2 -->
		</ul>

		<div id="portfolio-slideshow-pager">
			&nbsp;
		</div>

	</div><!-- end #slideshow-portfolio -->

	<div class="hr"></div>

	<div class="col-220">

		<h3>Aerobatic displays</h3>
		<br />

		<ul class="checklist">
			<li>
				Weddings
			</li>
			<li>
				Village fetes
			</li>
			<li>
				County shows
			</li>
			<li>
				Product launches
			</li>
			<li>
				Public air displays
			</li>
		</ul>

	</div>

	<div class="col-460 last">

		<h3>Details</h3>
		<br />

		<p>
			We have access to a variety of vintage, modern and ex military aircraft enabling us to offer anything from a gentle vintage aircraft fly past to a spectacular world class aerobatic aircraft routine flown by a British World Aerobatic Team member.
		</p>

		<p>
			Display duration is from 10 minutes for a single aircraft up to 45 minutes for a three aircraft display featuring aerobatics, fly pasts and formation flying.
		</p>

		<p>
			All our display pilots are specifically authorised by the Civil Aviation Authority to fly lower and closer to you than aviation law normally permits. Whether the display is a single aircraft attending a private function or part of a large public air show our pilots ensure you have a ringside seat of a spectacular flying display.
		</p>

	</div>

	<div class="fixed clear">

		<h3>Details</h3>
		<br />

		<p>
			As well as attending outdoor events and air shows throughout Europe we also organise a number of events on behalf of individuals and corporate clients.
		</p>

		<p>
			Due to his close and valued working relationship with the UK Civil Aviation Authority, Tony Richards, of Aerobatic Tactics, is able to provide a flying display in the heart of London dockland area at London City Airport.
		</p>

		<p>
			The City Airport “Fun Day” is organised primarily to raise money for local charities but is also a chance for the airport to say “thank you” to the local population by offering them free entry into the airport to see a flying display consisting of historically significant aircraft, high performance aerobatic aircraft, parachuting and 1930’s style barnstorming acts.  Free local transport is arranged and many who may otherwise never have the opportunity to get close to anything other than commercial airliners visit this unique event time and time again.
		</p>

		<p>
			Most displays need permission from the Civil Aviation Authority who require a written application 28 days prior to the event taking place. For off airfield displays we need 42 days notice to carry out a survey and make any applications required to the authority.
		</p>

	</div>

</div><!-- end .col-700 -->
@stop