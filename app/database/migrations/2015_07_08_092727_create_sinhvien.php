<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSinhvien extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create("sinhvien",function($table) {
			$table->increments("id");
			$table->text("tensv");
			$table->date("ngaysinh");
			$table->text("quequan");
			$table->string("dienthoai");
			$table->text("lophoc");
			$table->text("email");
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
		//
	}

}
