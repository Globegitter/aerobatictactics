@extends('templates.about')

@section('page-meta')
Terms and Conditions
@stop

@section('inner_image')
	<img src="{{ URL::asset('img/team/team.png') }}" width="940" height="220" alt="" />

	<div class="inner-page-title fixed">

		<h2>Terms</h2>
		<p>
			Please read and understand our terms and conditions before making a booking
		</p>

	</div><!-- end .inner-page-title -->
@stop
@section('inner_content')
	<div class="col-700 last">
		<!-- ///   MAIN CONTENT   ////////////////////////////////////////////////////////////////////////////////////////////// -->

		<p>
			The maximum weight limit for Wing Walkers is 77kg (12 stone 2 pounds) with an age limit between 18 – 65. 
		</p>

		<p>
			Maximum height is 6 ft. 1 inch You will also have to sign a fitness declaration before the flight. 
		</p>

		<p>
			Loose fitting clothes or hoodies should not be worn with trainers or ballet shoes being more suitable than boots. 
		</p>
		<p>
			Goggles are provided and must be worn and long hair should be tied back.
		</p>

		<!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

	</div><!-- end .col-700 -->
@stop