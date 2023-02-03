<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCheckoutsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('checkouts', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->bigInteger('panier_id')->unsigned();
			$table->string('checkout_full_name');
			$table->string('checkout_email');
			$table->string('checkout_name_on_card');
			$table->string('checkout_adress');
			$table->string('checkout_credit_cart_number');
			$table->string('checkout_city');
			$table->string('checkout_exp_month');
			$table->string('checkout_state');
			$table->string('checkout_zip');
			$table->string('checkout_exp_year');
			$table->string('checkout_cvv');
			$table->string('checkout_valide');
			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('checkouts');
	}

}
