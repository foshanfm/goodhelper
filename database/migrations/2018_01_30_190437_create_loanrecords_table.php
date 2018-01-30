<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLoanrecordsTable extends Migration 
{
	public function up()
	{
		Schema::create('loanrecords', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('order_id')->index();
            $table->integer('user_id')->unsigned()->index();
            $table->integer('category_id')->unsigned()->index();
            $table->integer('day')->unsigned();
            $table->integer('loan')->unsigned();
            $table->integer('repayment_id')->unsigned()->default(0);
            $table->timestamps();
        });
	}

	public function down()
	{
		Schema::drop('loanrecords');
	}
}
