<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('products', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->bigInteger('categorie_id')->unsigned()->index('products_categorie_id_foreign');
			$table->string('product_name');
			$table->string('product_prix');
			$table->string('product_image');
			$table->string('product_devise');
			$table->string('product_description', 5000);
			$table->string('product_auteur');
			$table->string('product_in_stock');
			$table->timestamps(10);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('products');
	}

}
