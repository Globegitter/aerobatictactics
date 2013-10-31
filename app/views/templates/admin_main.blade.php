<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>

		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

		<title>Aerobatic Tactics | Home</title>
		<meta name="description" content=" add description  ... " />
		<meta name="keywords"    content=" add keywords     ... " />

		<!-- //////// Favicon ////////  -->
		<link href="favicon.ico" rel="shortcut icon" type="image/x-icon" />

		<!-- //////// Css - stylesheets ////////  -->
		<link href="{{ URL::asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ URL::asset('css/style-print.css') }}" type="text/css" media="print" />
		<link href="{{ URL::asset('css/jquery.dataTables.css') }}" rel="stylesheet" type="text/css"/>
		<link href="{{ URL::asset('css/jquery-ui-1.9.2.min.css') }}" rel="stylesheet" type="text/css"/>
		<link href="{{ URL::asset('js/tipsy/css.tipsy.css') }}" rel="stylesheet" type="text/css"/>
		<link href="{{ URL::asset('js/prettyphoto/css.prettyphoto.css') }}" rel="stylesheet" type="text/css"/>
		<link href="{{ URL::asset('js/validity/css.validity.css') }}" rel="stylesheet" type="text/css"/>	
		<link href="{{ URL::asset('css/fullcalendar.css') }}" rel="stylesheet" type="text/css"/>	

		<script src="{{ URL::asset('js/libraries/jquery-1.8.3.min.js') }}"></script>

	<style type="text/css">
		body {background-color:white;
			  margin: 50px}
	</style>

	</head>
	<body>
		
		<div class="col-220">
				
					<a href="{{ URL::to('/') }}" title="Back Home" id="logo">
						<img src="{{ URL::asset('img/images/logo.png') }}" alt="logo">
					</a>
				
		</div><!-- end .col-220 -->
			
		<div class="pull-right">
				
			<div class="btn-group" >
			    <button href="#newSlot" role="button" class="btn" data-toggle="modal"> + Add new slot</button>
			    <button href="#newPlane" class="btn" role="button" data-toggle="modal">+ Add new plane</button>
			    <button href="#logout" class="btn" role="button" data-toggle="modal">Logout</button>
			</div>
		</div>		
		
		<form method="post">
			<div id="logout" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h3 id="myModalLabel" align="center">Logout</h3>
				</div>
				<div class="modal-body">
					<label> Are you sure you want to log out? </label> 					
				</div>
				<div class="modal-footer">
				<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
				<button value="Yes" class="btn btn-primary" id="submit" type="submit" name="logout">Yes</button>
				</div>
			</div>	
		</form>

		<form method="post">
			<div id="newPlane" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h3 id="myModalLabel" align="center">Add new plane</h3>
				</div>
				<div class="modal-body">
					<label> Name </label> 
					<input type="text" name="planeName" placeholder="insert name">
					
					<div class="clearfix"></div>
					<br />
					
					<label> Description </label>  
					<textarea type="text" name="description" rows="3"></textarea>
					
					<div class="clearfix"></div>
					<br />
					
				</div>
				<div class="modal-footer">
				<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
				<button value="Save changes" class="btn btn-primary" id="submit" type="submit" name="submitNewPlane">Save changes</button>
				</div>
			</div>	
		</form>
		
		<form method="post">
			<div id="newSlot" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h3 id="myModalLabel" align="center">Add new slot</h3>
				</div>
				<div class="modal-body">
					<label> Airfield </label>  
					<input type="text" name="airfield" placeholder="insert airfield">
									
					<div class="clearfix"></div>
					<br />
					
					<label> Date </label>
					<div class="input-append date" id="datepicker" data-date= <?php echo date('l, F jS, Y'); ?> data-date-format="dd-mm-yyyy">
    					<input name="slotdate" value='test' class="span2" size="15" type="text" data-bind="value: Customer.DateOfBirth">
    					<span class="add-on"><i class="icon-calendar"></i></span>
    				</div>
					
					<div class="clearfix"></div>
					<br />
					
					<label> Time </label>
					<select name="slottime" id="times"><option>10:00</option><option>11:00</option><option>12:00</option></select>
					
					<div class="clearfix"></div>
					<br />
					
					<label> Plane </label>
					<select name="plane" id="times">
						<?php $planes = DB::table('plane')->get();
							foreach($planes as $plane){ ?>
						<option><?php echo $plane->name; ?></option>
						<?php } ?>
					</select>		
					
					<div class="clearfix"></div>
					<br />
					
					<label> Price </label> 
					<input type="text" name="price" placeholder="insert price">	
				</div>
				<div class="modal-footer">
				<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
				<input value="Save changes" id="submit" class="btn btn-primary" type="submit" name="submitNewSlot"/>
				</div>
			</div>
		</form>
		
		<ul class="nav nav-tabs">
			<li>
				<a href="{{ URL::to('/admin/table') }}">Table</a>
			</li>
			<li >
				<a href="{{ URL::to('/admin/calendar') }}">Calendar</a>
			</li>
		</ul>
		

		@yield('content')
		
		
		<script src="{{ URL::asset('js/fullcalendar/jquery-ui-1.8.23.custom.min.js') }}"></script>
		<script src="{{ URL::asset('js/fullcalendar/fullcalendar.min.js') }}"></script>
		<script src="{{ URL::asset('js/datepicker/bootstrap-datepicker.js') }}"></script>
		<script src="{{ URL::asset('js/timepicker/jquery.timepicker.js') }}"></script>
		<script src="{{ URL::asset('js/datatables/jquery.dataTables.min.js') }}"></script>
		<script src="{{ URL::asset('js/datatables/dataTables.fnAddTr.js') }}"></script>
		<script src="{{ URL::asset('js/libraries/bootstrap.min.js') }}"></script>
		<script src="{{ URL::asset('js/tipsy/jquery.tipsy.js') }}"></script>
		<script src="{{ URL::asset('js/cufon/cufon.js') }}"></script>
		<script src="{{ URL::asset('js/cufon/Bebas_Neue_400.font.js') }}"></script>
		<script src="{{ URL::asset('js/prettyphoto/jquery.prettyPhoto.js') }}"></script>
		<script src="{{ URL::asset('js/validity/jquery.validity.js') }}"></script>
		<script src="{{ URL::asset('js/cycle/jquery.cycle.all.min.js') }}"></script>
		<script src="{{ URL::asset('js/accordion/jquery.accordion.js') }}"></script>
		<script src="{{ URL::asset('js/tabify/jquery.tabify-1.4.js') }}"></script>
		<script src="{{ URL::asset('js/scripts.js') }}"></script>
		<script src="{{ URL::asset('js/plugins.js') }}"></script>
		
		<script type="text/javascript">
		
			$(document).ready(function () {
			  $('#datepicker').datepicker()
			});
			
		</script>
		
	</body>
</html>