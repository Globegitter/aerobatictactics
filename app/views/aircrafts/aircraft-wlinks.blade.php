@extends('templates.about')

@section('page-meta')
Our Aircraft
@stop

@section('inner_image')

<img src="{{ URL::asset('img/team/team.png') }}" width="940" height="220" alt="" />

<div class="inner-page-title fixed">
	<h2>Our Aircraft</h2>
	<p>We have access to a beautiful collection of vintage and new aircraft</p>
</div><!-- end .inner-page-title -->

@stop
@section('inner_content')

	<div class="col-700 last">

		<div class="fixed">
			<div class="portfolio-item col-220">
				<a href="{{ URL::to('/aircraft/stearman') }}" class="portfolio-item-preview"> <img src="{{ URL::asset('img/aircraft/stearman.png') }}" width="220" height="140" alt="" /> </a>
				<br />
				<h3>Stearman</h3>
				<p>A symphony for the aviation enthusiast!</p>
				<p><a href="{{ URL::to('/aircraft/stearman') }}">Find out more</a></p>
			</div><!-- end .portfolio-item -->

			<div class="portfolio-item col-220">
				<a href="{{ URL::to('/aircraft/tigermoth') }}" class="portfolio-item-preview"> <img src="{{ URL::asset('img/aircraft/tiger-moth.png') }}" width="220" height="140" alt="" /> </a>
				<br />
				<h3>Tiger Moth</h3>
				<p>A piece of wartime history</p>
				<p><a href="{{ URL::to('/aircraft/tigermoth') }}">Find out more</a></p>
			</div><!-- end .portfolio-item -->

			<div class="portfolio-item col-220 last">
				<a href="{{ URL::to('/aircraft/cap10c') }}" class="portfolio-item-preview"> <img src="{{ URL::asset('img/aircraft/cap-10c.png') }}" width="220" height="140" alt="" /> </a>
				<br />
				<h3>CAP 10C</h3>
				<p>A competitive aerobatic aircraft</p>
				<p><a href="{{ URL::to('/aircraft/cap10c') }}">Find out more</a></p>
			</div><!-- end .portfolio-item -->
		</div><!-- end .fixed -->

		<div class="hr"></div>

		<div class="fixed">
			<div class="portfolio-item col-220">
				<a href="{{ URL::to('/aircraft/harvard') }}" class="portfolio-item-preview"> <img src="{{ URL::asset('img/aircraft/harvard.png') }}" width="220" height="140" alt="" /> </a>
				<br />
				<h3>Harvard</h3>
				<p>An advanced trainer aircraft</p>
				<p><a href="{{ URL::to('/aircraft/harvard') }}">Find out more</a></p>
			</div><!-- end .portfolio-item -->

			<div class="portfolio-item col-220">
				<a href="{{ URL::to('/aircraft/jungmann') }}" class="portfolio-item-preview"> <img src="{{ URL::asset('img/aircraft/jungmann.png') }}" width="220" height="140" alt="" /> </a>
				<br />
				<h3>Jungmann</h3>
				<p>A sturdy and agile aircraft</p>
				<p><a href="{{ URL::to('/aircraft/jungmann') }}">Find out more</a></p>
			</div><!-- end .portfolio-item -->

			<div class="portfolio-item col-220 last">
				<a href="{{ URL::to('/aircraft/cap232') }}" class="portfolio-item-preview"> <img src="{{ URL::asset('img/aircraft/cap-232.png') }}" width="220" height="140" alt="" /> </a>
				<br />
				<h3>CAP232</h3>
				<p>Our high performance beauty</p>
				<p><a href="{{ URL::to('/aircraft/cap232') }}">Find out more</a></p>
			</div><!-- end .portfolio-item -->

		</div><!-- end .fixed -->

		<div class="hr"></div>

		<div class="fixed">
			<div class="portfolio-item col-220">
				<a href="{{ URL::to('/aircraft/chipmunk') }}" class="portfolio-item-preview"> <img src="{{ URL::asset('img/aircraft/chipmunk.jpg') }}" width="220" height="140" alt="" /> </a>
				<br />
				<h3>Chipmunk</h3>
				<p>Services training aircraft for 20+ years</p>
				<p><a href="{{ URL::to('/aircraft/chipmunk') }}">Find out more</a></p>
			</div>
			
			<div class="portfolio-item col-220">
				<a href="{{ URL::to('/aircraft/chipmunk') }}" class="portfolio-item-preview"> <img src="{{ URL::asset('img/aircraft/jungmann.png') }}" width="220" height="140" alt="" /> </a>
				<br />
				<h3>Slingsby</h3>
				<p>A sturdy and agile aircraft</p>
				<p><a href="{{ URL::to('/aircraft/chipmunk') }}">Find out more</a></p>
			</div>			

		</div>

	</div><!-- end .col-700 -->
@stop