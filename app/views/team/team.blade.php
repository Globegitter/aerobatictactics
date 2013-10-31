@extends('templates.about')

@section('page-meta')
The Team
@stop

@section('inner_image')
<img src="{{ URL::asset('img/team/team.png') }}" width="940" height="220" alt="" />

<div class="inner-page-title fixed">

	<h2>The Team</h2>
	<p>
		Meet our highly qualified, professional and experienced team.
	</p>

</div><!-- end .inner-page-title -->
@stop
@section('inner_content')
<!-- ///   CONTENT   /////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

	<div class="col-700 last">

		<!-- ///   MAIN CONTENT   ////////////////////////////////////////////////////////////////////////////////////////////// -->

		<div class="fixed">

			<div class="col-220">

				<p><img src="{{ URL::asset('img/team/tony-richards.png') }}" width="220" height="120" alt="" />
				</p>

				<!-- <ul class="team-social-media fixed" >
					<li><img src="{{ URL::asset('img/images/social-icons/facebook.png') }}" width="14" height="14" alt="facebook" /><a href="#">Facebook</a>
					</li>
					<li><img src="{{ URL::asset('img/images/social-icons/twitter.png') }}"  width="14" height="14" alt="twitter" /><a href="#">Twitter</a>
					</li>
				</ul> --><!-- end .team-social-media -->

			</div><!-- end .col-220 -->
			<div class="col-460 last">

				<h3>Tony Richards</h3>

				<p>
					Tony was born in Pembury, Kent and first flew a glider aged 5, he has flown a wide range of aircraft from gliders to Second World War fighters and spent 10 years as a full time wing walk pilot.
				</p>

				<p class="last">
					Tony holds a commercial pilots license, flight instructor rating, display pilot authorisation and is a display pilot examiner.
				</p>

			</div><!-- end .col-460 -->

		</div><!-- end .fixed -->

		<div class="hr"></div>

		<div class="fixed">

			<div class="col-220">

				<p><img src="{{ URL::asset('img/team/richard-pickin-2.png') }}" width="220" height="120" alt="" />
				</p>

				<!-- <ul class="team-social-media fixed" >
					<li><img src="{{ URL::asset('img/images/social-icons/facebook.png') }}" width="14" height="14" alt="facebook" /><a href="#">Facebook</a>
					</li>
					<li><img src="{{ URL::asset('img/images/social-icons/twitter.png') }}"  width="14" height="14" alt="twitter" /><a href="#">Twitter</a>
					</li>
				</ul> --><!-- end .team-social-media -->

			</div><!-- end .col-220 -->
			<div class="col-460 last">

				<h3>Richard Pickin</h3>

				<p>
					Richard has been flying for over 40 years and has a passion for aerobatics. He has been a member of the British unlimited aerobatic team for over 25 years and has competed all over Europe.
				</p>

				<p class="last">
					Richard holds a commercial pilots license, flight instructor rating, display pilot authorisation and is a display pilot examiner.
				</p>

			</div><!-- end .col-460 -->

		</div><!-- end .fixed -->

		<div class="hr"></div>

		<div class="fixed">

			<div class="col-220">

				<p><img src="{{ URL::asset('img/team/julian-spencer.png') }}" width="220" height="120" alt="" />
				</p>

				<!-- <ul class="team-social-media fixed" >
					<li><img src="{{ URL::asset('img/images/social-icons/linkedin.png') }}" width="14" height="14" alt="facebook" /><a href="#">LinkedIn</a>
					</li>
				</ul> --><!-- end .team-social-media -->

			</div><!-- end .col-220 -->
			<div class="col-460 last">

				<h3>Julian Spencer</h3>

				<p>
					Julian is our helicopter pilot and film coordinator, he flies both fixed wing and rotary aircraft. He has worked as a stuntman in the film industry for over 20 years with more than 75 films to his credit including - Air America, 3 Bond films and Saving Private Ryan.
				</p>

				<p class="last">
					Tony and Julian have worked together on various TV and film projects. Julian holds a display pilot authorisation.
				</p>

			</div><!-- end .col-460 -->

		</div><!-- end .fixed -->

		<div class="hr"></div>

		<div class="fixed">

			<div class="col-220">

				<p><img src="{{ URL::asset('img/team/michael-pickin.png') }}" width="220" height="120" alt="" />
				</p>

				<ul class="team-social-media fixed" >
					<!-- <li><img src="{{ URL::asset('img/images/social-icons/facebook.png') }}" width="14" height="14" alt="facebook" /><a href="http://www.facebook.com/michael.pickin">Facebook</a>
					</li> -->
					<li><img src="{{ URL::asset('img/images/social-icons/youtube.png') }}" width="14" height="14" alt="youtube" /><a href="http://www.youtube.com/user/mikepickin">Youtube</a>
					</li>
				</ul><!-- end .team-social-media -->

			</div><!-- end .col-220 -->
			<div class="col-460 last">

				<h3>Michael Pickin</h3>

				<p>
					Michael has been around aeroplanes since he was a child and had his first flight aged 5. He soloed 5 aeroplanes on his 16th birthday and obtained his private pilots license at 17, both the earliest ages possible. 
				</p>

				<p class="last">
					Michael has had a display authorisation since he was seventeen and gained a place on the advanced aerobatic team at just 19, the youngest pilot ever to do so. Now 22 he works as a pilot for Ryanair on the Boeing 737-800 fleet based in Pisa.
				</p>

			</div><!-- end .col-460 -->

		</div><!-- end .fixed -->

		<!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

	</div><!-- end .col-700 -->
@stop