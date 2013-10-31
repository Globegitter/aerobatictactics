@extends('templates.main')
@section('header')

<div class="inner-page-title-container">

	<img src="{{ URL::asset('img/services/ww-sunset.jpg') }}" width="940" height="220" alt="" />

	<div class="inner-page-title fixed">

		<h2>Services</h2>
		<p>
			We are able to offer many top-notch services, from experience flights to aerobatic displays
		</p>

	</div><!-- end .inner-page-title -->

</div><!-- end .inner-page-title-container -->
@stop
@section('content')

<div id="content">

	<!-- ///   CONTENT   /////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

	<div class="fixed">

		<div class="col-220">

			<a href="{{ URL::to('/') }}">Back to Overview</a>

		</div>
		<div class="col-460 last">
			
			@yield('title')
			

		</div>

	</div><!-- end .fixed -->

	<div class="hr"></div>

	<div class=" fixed">

		<div class="col-220">

			<p>
				<strong>Services provided</strong>
			</p>

			<ul class="side-nav">
				<li class="current">
					<a href="{{ URL::to('/services/displays') }}">Aerobatic Displays</a>
				</li>
				<li>
					<a href="{{ URL::to('/services/experience') }}">Experience Flights</a>
				</li>
				<li>
					<a href="{{ URL::to('/services/film') }}">TV and Film</a>
				</li>
				<li>
					<a href="{{ URL::to('/services/training') }}">Training</a>
				</li>
				<li>
					<a href="{{ URL::to('/services/wingwalking') }}">Wing Walking</a>
				</li>
			</ul>

		</div><!-- end .col-220 -->

		@yield('inner_content')

	</div><!-- end .row -->
</div>
@stop