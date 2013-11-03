@extends('templates.main')

@section('page-meta')
Booking
@stop

@section('content')

@if($errors->has())
    @foreach($errors->all() as $error)
        <ul><li style="color:red">{{ $error }}</li></ul>
    @endforeach
@endif

<form method="post" action ="{{ URL::to('/order') }}">
    <div class="row-fluid">
        <div class="span6">
            <fieldset>
                    <legend>
                            Personal Information
                    </legend>
                    <div class="controls controls-row">
                      <input class="span6" type="text" name="firstname" placeholder="First Name" value="<?php echo Input::old('firstname');?>">
                      <input class="span6" name="lastname" type="text" placeholder="Last Name" value="<?php echo Input::old('lastname');?>">
                    </div>
                    <div class="controls controls-row">
                      <input class="span8" type="text" name="email" placeholder="Email Adress for voucher" value="<?php echo Input::old('email');?>">
                      <input class="span4" name="phone" type="text" placeholder="Phone Number" value="<?php echo Input::old('phonenumber');?>">
                    </div>                
                    <div class="controls controls-row">
                      <input class="span8" type="text" name="address" placeholder="Street Adress" value="<?php echo Input::old('adress');?>">
                      <input class="span4" name="postcode" type="text" placeholder="Postcode" value="<?php echo Input::old('postcode');?>">
                    </div>                
            </fieldset>
         </div>
        <div class="span6">
            <fieldset>
                    <legend>
                            Payment Information
                    </legend>
                    <div class="controls controls-row">                
                        <label class="radio">
                          <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                          VISA/MASTERCARD
                        </label>
                    </div>    
                    <div class="controls controls-row">
                      <input class="span12" type="text" name="cardnumber" placeholder="Card Number" value="<?php echo Input::old('cardnumber');?>">
                    </div>
                    <div class="controls controls-row">
                      <input class="span4" name="cardexpires" type="text" placeholder="MM/YYYY" value="<?php echo Input::old('cardexpires');?>">                    
                      <input type="hidden" class="span4">
                      <input class="span4" type="text" name="cardcvv" placeholder="CVV Code" value="<?php echo Input::old('cardcvv');?>">
                    </div>
                    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
            </fieldset>
        </div>
     </div>
    <div class="row-fluid">
        <div class="span12">
            <table class="table table-striped">
                    <thead>
                      <tr>
                        <th>
                          Product
                        </th>
                        <th>
                          Qty
                        </th>                        
                        <th>
                          Price
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Wing Walking</td>
                        <td>1</td>
                        <td><strong>£480</strong></td>                        
                      </tr>                  
                    </tbody>
                  </table>           
            <button type="submit" class="btn pull-right">Confirm Order</button>            
        </div>
    </div>
</form>

@stop