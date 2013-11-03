<?php

class Payment extends Eloquent {
    protected $fillable = array('order_id', 'amount', 'method','success');
    public function order()
    {
        return $this->belongsTo('Order');
    }

}
