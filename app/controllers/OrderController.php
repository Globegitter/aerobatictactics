<?php

class OrderController extends BaseController {
    
    public function __construct()
    {
        $this->beforeFilter('csrf', array('on' => 'post'));
    }
    public function getIndex()
    {
            return View::make('order.index');
    }

    public function getSuccess()
    {
            return View::make('order.success');
    }
    
    public function postIndex()
    {
         
        $input = Input::all();

        $rules = array(
            'firstname'  => 'required|min:3|max:32|alpha',
            'lastname'   => 'required|min:3|max:32|alpha',
            'email'      => 'required|min:3|max:50|Email',
            'phone'      => 'required|min:3|max:50',
            'address'    => 'required|min:3|max:32',
            'postcode'   => 'required|min:3|max:15',
            'cardnumber' => 'required|integer', 
            'cardcvv'    => 'required|integer',  
            'cardexpires'=> 'required|integer',             
                      );

        
        $validator = Validator::make($input, $rules);
              
        if( $validator->passes() ) {
 
          
            $voucher = str_random(10);
            $order_data = array
                        (
                        'firstname' => Input::get('firstname'),
                        'lastname' => Input::get('lastname'),
                        'email' => Input::get('email'),
                        'phone' => Input::get('phone'),
                        'address' => Input::get('address'),
                        'postcode' => Input::get('postcode'),
                        'voucher' => $voucher,
                        'product' => 'WingWalking',
                
                        );  
            $order = new Order;
            $order->fill($order_data);
            $order->save();
            $insertedId = $order->id;
            
            $payment_data = array
                        (
                        'order_id' => $insertedId,
                        'amount' => 480,
                
                        );
            $payment = new Payment;
            $payment->fill($payment_data);
            $payment->save();
            
            $data = array(
                'voucher'=> $voucher,
                'name'   => Input::get('firstname'),
            );            
            Mail::send('emails.voucher', $data, function($message)
            {
                $message->from('johannes.lanstrom@gmail.com', 'Laravel');
                $message->to('johannes.lanstrom@gmail.com')->subject('Your voucher');;
            });

            return Redirect::to('order/success')
                    ->with(
                    "message","Thank you for your order! A voucher has been sent to the email adress you supplied.
                     ");

        } else {             
            return Redirect::to('order')->withErrors($validator)->withInput();
            
        }        
        
    }

}
