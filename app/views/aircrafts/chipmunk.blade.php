@extends('templates.about')

@section('page-meta')
Chipmunk
@stop

@section('inner_image')
	<img src="{{ URL::asset('img/portfolio/page-title.jpg') }}" width="940" height="220" alt="" />
	<div class="inner-page-title fixed">
		<h2>Our Aircraft</h2>
		<p>We have both own and hire some of the finest vintage and new aircraft around</p>
	</div><!-- end .inner-page-title -->
@stop
@section('inner_content')

	<div class="col-700 last">
		<div id="slideshow-portfolio">
			<ul>
				<li><img src="http://placehold.it/700x300" width="700" height="300" alt="" /></li><!-- end slide 1 -->
				<li><img src="_content/portfolio/700x300-2.png" width="700" height="300" alt="" /></li><!-- end slide 2 -->
				<li><img src="_content/portfolio/700x300-3.png" width="700" height="300" alt="" /></li><!-- end slide 3 -->
			</ul>
			<div id="portfolio-slideshow-pager">&nbsp;</div>
		</div><!-- end #slideshow-portfolio -->	
		
		<div class="hr"></div>
		
		<div class="col-340">
			<h3>The Plane</h3> <br />
			<p>
				Here is your chance to take the controls of the iconic de Havilland Chipmunk. Built as a replacement to the 1930’s Tiger Moth the “Chippie” was the main training aircraft of the 3 armed forces for over 20 years. 
			</p>
			<p>
				After a thorough ground briefing your Instructor will fly the aircraft to a safe height and hand you the controls so you can experience the superlative handling qualities that many pilots have compared only to the Spitfire. 

			<p>
				Your Instructor will even teach you to fly loops and rolls in G-BAPB which was serial number DHC – 0001 the first British built Chipmunk used by the services for initial valuation.
			</p>
		</div>
		
		<div class="col-340 last">
			<h3>Other text</h3> <br />
			<p>Aenean sed mauris id diam fermentum pretium. Cras consectetur diam nec nulla iaculis mattis.
			 Phasellus iaculis sollicitudin sagittis. Proin semper feugiat ornare. Vivamus viverra suscipit bibendum.
			 Fusce eu sem mauris, non pharetra ligula.</p>
			<p>Praesent facilisis eros quis dolor ullamcorper varius. 
			 Duis neque eros, lacinia adipiscing egestas quis, consequat a ipsum.</p>  
		</div>
		
		<div class="fixed clear">				
			<h3>Some Bullet Points</h3> <br />
			<p>Etiam pellentesque, magna eget lobortis placerat, leo leo consequat ante, non iaculis turpis
			augue ac ligula. Nunc blandit tincidunt consequat.</p>
			<ul class="checklist">
				<li>Lorem ipsum dolor sit amet consectetur.</li>
				<li>Phasellus adipiscing ante ac mi commodo.</li>
				<li>Fusce iaculis lectus quis enim dictum ultrices.</li>
			</ul>
		</div>

	</div><!-- end .col-700 -->
				
	
@stop