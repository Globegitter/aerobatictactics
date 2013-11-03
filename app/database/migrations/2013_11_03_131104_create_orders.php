<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrders extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('orders', function(Blueprint $table)
		{
			$table->increments('id');
			$table->timestamps();
                        
                        // Information about who made the order
			$table->string('firstname', 50);
			$table->string('lastname', 50);
			$table->string('email');
                        $table->string('phone');			
                        $table->string('address');
                        $table->string('city',50);
                        $table->string('postcode', 15);     
                        
                        // The ordered product
                        $table->string('product');
                        // The order's voucher
                        $table->string('voucher');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('orders');
	}

}
