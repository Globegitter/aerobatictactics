@extends('templates.admin_main')
@section('content')

<table class="table">
	<thead>
		<tr>
			<th></th>
			<th>Transaction ID</th>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Method</th>
			<th>Amount</th>
			<th>Paid</th>
			<th>Transaction Date</th>
			<th>Booking Date</th>
			<th>Slot</th>
			<th></th>
		</tr>
	</thead>
	<tbody id = "tablebody">

	</tbody>
</table>

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
	<div id="editModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			<h3 id="myModalLabel" align="center">Edit transaction</h3>
		</div>
		<div class="modal-body">
				<input name="transId" id="transId" type="hidden">
				<label>First name</label><input name="fName" id="fName"><br></br>
				<label>Last name</label><input name="lName" id="lName"><br></br>
				<label>Transaction type</label><input name="transType" id="transType"><br></br>
				<label>Transaction date</label>
				<div id="toFill"></div></br>
				<label>Price</label><input name="price" id="price"><br></br>
				<label>Paid</label><input name="paid" id="paid"><br></br>
				<label>Booking time</label><input name="slotTime" id="slotTime"><br></br>
													
		</div>
		<div class="modal-footer">
			<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
			<button value="Save changes" class="btn btn-primary" id="submit" type="submit" name="editRow">Save changes</button>
		</div>
	</div>
</form>

<form method="post">
	<div id="deleteModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			<h3 id="myModalLabel" align="center">Edit transaction</h3>
		</div>
		<div class="modal-body">
				<input name="dtransId" id="dtransId" type="hidden">
				<label>The transaction will be removed from the records. Do you wish to continue?</label>									
		</div>
		<div class="modal-footer">
			<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
			<button value="Save changes" class="btn btn-primary" id="submit" type="submit" name="deleteRow">Yes</button>
		</div>
	</div>
</form>
<style>
.datepicker{z-index:1151;}
.datepicker{position: absolute;}
</style>


<script type="text/javascript">
var tableBody = document.getElementById('tablebody');
var data = jQuery.parseJSON('<?php echo json_encode($data) ?>');  

function deleteRowContent(rowNumber){
	var rowData = data[rowNumber];	
	document.getElementById( "dtransId" ).value = rowData[0];
	$('#deleteModal').modal('show');
}

function displayRowContent(rowNumber){
	var rowData = data[rowNumber];	
	document.getElementById( "transId" ).value = rowData[0];
	document.getElementById( "fName" ).value = rowData[1];
	document.getElementById( "lName" ).value = rowData[2];
	document.getElementById( "transType" ).value = rowData[3];
	document.getElementById( "price" ).value = rowData[4];
	document.getElementById( "paid" ).value = rowData[5];
	document.getElementById( "slotTime" ).value= rowData[8];
	
	document.getElementById( "toFill" ).innerHTML = '<div class="input-append date" id="dp" data-date=' + rowData[6] + '" data-date-format="d/m/yyyy"/>' +
    '<input value=' + rowData[6] + ' class="span2" size="12" type="text" name="transDate" id="transDate" />' +
    '<span class="add-on"><i class="icon-calendar"></i></span></div>';
	
	
	$('#editModal').modal('show')
	$('#dp').datepicker();	
	
}
  
//get hold of the transID and pass it to the displayRowContent
//transID is the first entry in each data[], data[k, 0] is the transID of k
function createRowWithValues(values, rowNumber){
	var tr = tableBody.insertRow(0);	
	$('tr').attr({'id': rowNumber});
	var edit_button = '<button id="editbtn" class="btn" onclick="displayRowContent(' + rowNumber + ')">Edit</button>';
	var td = tr.insertCell(0);
	td.innerHTML = edit_button;	
	for(var i = 0; i < 9; i++){	
		var td = tr.insertCell(i + 1);
		$('td').attr({'id':'id' + rowNumber + (i + 1)});
		td.innerHTML = values[i];	
	}
	var delete_button = '<button id="deletebtn" class="btn" onclick="deleteRowContent(' + rowNumber + ')">Delete</button>';
	var td = tr.insertCell(10);
	td.innerHTML = delete_button;
	return tr;
}


$(document).ready(function() {
	$table = $('.table').dataTable( {"aoColumnDefs": [{ 'bSortable': false, 'aTargets': [0, 10] }]});    
    //var data = jQuery.parseJSON('<?php echo json_encode($data) ?>');
    for(var k = 0; k < data.length; k++){
    	$table.fnAddTr(createRowWithValues(data[k], k));
    }
});
</script>


@stop