<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlacesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('places', function (Blueprint $table) {
            $table->bigIncrements('place_id');
			$table->string('place_name');
			$table->string('place_category');
			//fk
			$table->unsignedBigInteger('province');
			$table->unsignedBigInteger('ruler')->nullable();
			$table->unsignedBigInteger('controller')->nullable();
			//stats
			$table->integer('agr')->default(1);
			$table->integer('com')->default(1);
			$table->integer('def')->default(1);
			$table->integer('jus')->default(900);
			$table->integer('mor')->default(99);
			$table->integer('tra')->default(50);
			$table->integer('sol')->default(1);
			//timestamps
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
        Schema::dropIfExists('places');
    }
}
