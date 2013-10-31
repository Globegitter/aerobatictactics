@extends('templates.main')

@section('page-meta')
Booking
@stop

@section('content')
<form method="post">
	<fieldset>
		<legend>
			Booking
		</legend>
		<br />

		<label>First Name</label>
		<input type="text" name="firstname" placeholder="Type something…">

		<div class="clearfix"></div>
		<br />

		<label>Last Name</label>
		<input type="text" name="lastname" placeholder="Type something…">

		<div class="clearfix"></div>
		<br />

		<label>Email Address</label>
		<input type="text" name="emailaddress" placeholder="Type something…">

		<div class="clearfix"></div>
		<br />

		<label>Date of birth</label>
		<input type="date" name="dateofbirth" placeholder="Type something…">

		<div class="clearfix"></div>
		<br />


		<label>Phone Number</label>
		<input type="text" name="phonenumber" placeholder="Type something…">

		<div class="clearfix"></div>
		<br />

		<label>Address Line 1</label>
		<input type="text" name="addressline1" placeholder="Type something…">

		<div class="clearfix"></div>
		<br />

		<label>Address Line 2</label>
		<input type="text" name="addressline2" placeholder="Type something…">

		<div class="clearfix"></div>
		<br />

		<label>City</label>
		<input type="text" name="city" placeholder="Type something…">

		<div class="clearfix"></div>
		<br />

		<label>Province</label>
		<input type="text" name="province" placeholder="Type something…">

		<div class="clearfix"></div>
		<br />

		<label>Postcode</label>
		<input type="text" name="postcode" placeholder="Type something…">

		<div class="clearfix"></div>
		<br />

		<label>Country</label>
		<input type="text" name="country" placeholder="Type something…">

		<div class="clearfix"></div>
		<br />

		<button type="submit" class="btn">Submit</button>
	</fieldset>
</form>

@stop