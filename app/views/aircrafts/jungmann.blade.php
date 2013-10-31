@extends('templates.about')

@section('page-meta')
Jungmann
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
				<li><img src="_content/portfolio/700x300-1.png" width="700" height="300" alt="" /></li><!-- end slide 1 -->
				<li><img src="_content/portfolio/700x300-2.png" width="700" height="300" alt="" /></li><!-- end slide 2 -->
				<li><img src="_content/portfolio/700x300-3.png" width="700" height="300" alt="" /></li><!-- end slide 3 -->
			</ul>
			<div id="portfolio-slideshow-pager">&nbsp;</div>
		</div><!-- end #slideshow-portfolio -->	
		
		<div class="hr"></div>
		
		<div class="col-340">
			<h3>The Plane</h3> <br />
			<p>Fusce varius euismod lorem, nec semper ante ullamcorper condimentum. Lorem ipsum
			 dolor sit amet, consectetur adipiscing elit. Nam eu tortor eget nunc blandit rutrum.
			 Praesent hendrerit ante sed nulla molestie gravida.</p>
			<p>Vestibulum ante ipsum primis in
			 faucibus orci luctus et ultrices posuere cubilia Curae; Nullam eu ipsum nec felis
			 facilisis molestie tristique id elit. Vivamus ipsum mi, luctus eu ullamcorper ut,
			 dapibus et elit. Phasellus et mauris eu mi accumsan scelerisque id non lectus. </p>
		</div>
		
		<div class="col-340 last">
			<h3>Our Solution</h3> <br />
			<p>Aenean sed mauris id diam fermentum pretium. Cras consectetur diam nec nulla iaculis mattis.
			 Phasellus iaculis sollicitudin sagittis. Proin semper feugiat ornare. Vivamus viverra suscipit bibendum.
			 Fusce eu sem mauris, non pharetra ligula.</p>
			<p>Praesent facilisis eros quis dolor ullamcorper varius. 
			 Duis neque eros, lacinia adipiscing egestas quis, consequat a ipsum.</p>  
		</div>
		
		<div class="fixed clear">
			<h3>Results</h3> <br />
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