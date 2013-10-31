@extends('templates.main')
@section('header')

<div class="inner-page-title-container">
	
	@yield('inner_image')

</div><!-- end .inner-page-title-container -->
@stop
@section('content')
<div id="content">

	<div class=" fixed">
		<!-- ///   SIDEBAR   /////////////////////////////////////////////////////////////////////////////////////////////////// -->
		<div class="col-220">
			<ul class="side-nav">
				<li>
					<a href="{{ URL::to('/about') }}">About Us</a>
				</li>
				<li>
					<a href="{{ URL::to('/aircraft') }}">Our Aircraft</a>
				</li>
				<li>
					<a href="{{ URL::to('/team') }}">The Team</a>
				</li>
			</ul>

<!-- 			<div class="pdf">
				<a href="#">Download our
				<br />
				About Us Brochure</a>
			</div> -->

		</div><!-- end .col-220 -->
		<!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
		
		@yield('inner_content')
	
	</div><!-- end .row -->
</div>
@stop