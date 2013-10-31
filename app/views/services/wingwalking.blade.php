@extends('templates.services')

@section('page-meta')
Wing Walking
@stop

@section('title')
<h3 class="booking">Wing Walking</h3>
<!-- <a href="{{ URL::to('/booking') }}" class="btn btn-danger booking" type="button">Book Online</a> -->
@stop
@section('inner_content')

<div class="col-700 last">

	<div id="slideshow-portfolio">

		<ul>
			<li><img src="{{ URL::asset('img/services/wingwalking-1.png') }}" width="700" height="300" alt="" /></li><!-- end slide 1 -->
			<li><img src="{{ URL::asset('img/services/wing-walking-2.jpg') }}" width="700" height="300" alt="" /></li><!-- end slide 1 -->
			<li><img src="{{ URL::asset('img/services/wing-walking-3.jpg') }}" width="700" height="300" alt="" /></li><!-- end slide 1 -->
			<li><img src="{{ URL::asset('img/services/wing-walking-4.jpg') }}" width="700" height="300" alt="" /></li><!-- end slide 1 -->
			<li><img src="{{ URL::asset('img/services/wing-walking-5.jpg') }}" width="700" height="300" alt="" /></li><!-- end slide 1 -->
			<li><img src="{{ URL::asset('img/services/wing-walking-6.jpg') }}" width="700" height="300" alt="" /></li><!-- end slide 1 -->
		</ul>

		<div id="portfolio-slideshow-pager">
			&nbsp;
		</div>

	</div><!-- end #slideshow-portfolio -->

	<div class="hr"></div>

	<div class="col-220">

		<h3>Wing Walking</h3>
		<br />

		<ul class="checklist">
			<li>
				Wing walk experiences
			</li>
			<li>
				Fully licenced aircraft
			</li>
			<li>
				South-East UK coverage
			</li>
		</ul>

	</div>

	<div class="col-460 last">

		<h3>Details</h3>
		<br />

		<p>
			As well as attending public airshows the Aerobatic Tactics Stearman Biplane is available for displays at private functions around Greater London and the South East. Aerobatic Tactics also offer private displays and wing walker training from our bases at Damyns Hall Aerodrome, Aveley Road, Upminster, Essex. RM14 2TN and Headcorn Aerodrome, Headcorn, Ashford, Kent. TN27 9HX
		</p>

		<p>
			Now you can take part in display training with you as the wing walker on top of our Boeing Stearman Biplane. Please note that wingwalkers must be under 12 stone (77kg), less than 6' tall,over 18 and sign a fitness declaration
		</p>

		<p>
			After a full safety brief and training session you will be strapped into the 5 point safety harness on top of the Boeing Stearman Biplane. Once airborne you will take part in a 10 minute display practice including fly pasts at various angles of bank and finish with a zoom climb from 135 mph. After landing you will receive a certificate confirming you are a trained wing walker.
		</p>

	</div>

	<div class="fixed clear">

		<hr>
		</hr>

		<h3>Wing Walking</h3>
		<br />

		<p>
			Aerobatic Tactics operates the only UK registered Boeing Stearman, fitted with four ailerons and 300hp engine, approved by the Civil Aviation Authority (CAA) for wingwalking in the UK.
		</p>

		<p>
			The wing walking rig took two years to develop. Once design, stress analysis and construction were complete and the wing walking rig fitted to the Stearman a test pilot from the Civil Aviation Authority carried out a series of flight tests. The final test flight was with a 6ft dummy strapped into the wing walking rig to determine  performance and handling changes, with the test schedule completed and manuals approved the wing walking rig was accepted as a major modification for the Stearman.
		</p>

		<p>
			Wing Riders must be under 12 stone (77kg), less than 6' tall and sign a fitness declaration.
		</p>

		<p>
			If you are interested please contact us for more details.
		</p>

	</div>

</div><!-- end .col-700 -->
@stop