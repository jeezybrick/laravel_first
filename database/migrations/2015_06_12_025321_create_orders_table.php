<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration {

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
            $table->string('date');
            $table->integer('customer_id')->unsigned();
			$table->integer('d_avto')->unsigned();
            $table->integer('d_date')->unsigned();
            $table->integer('d_r')->unsigned();
            $table->timestamps();

            $table->foreign('customer_id')
                ->references('customer_id')
                ->on('customers')
                ->onDelete('cascade');

            $table->foreign('d_avto')
                ->references('id_avto')
                ->on('avtos')
                ->onDelete('cascade');

            $table->foreign('d_r')
                ->references('id_r')
                ->on('repairs')
                ->onDelete('cascade');

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
