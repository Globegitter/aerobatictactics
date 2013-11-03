<?php

class Order extends Eloquent {
    protected $fillable = 
            array('firstname ', 'lastname', 'email', 'phone', 'city', 'address', 'postcode','product','voucher');
    
    public function payments()
    {
        return $this->hasOne('Payment');
    }
}
