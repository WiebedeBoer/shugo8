<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeopleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('people', function (Blueprint $table) {
            $table->bigIncrements('person_id');
			$table->string('person_name');
			$table->string('character_category');
			$table->integer('gender');
			//fk
			$table->unsignedBigInteger('owner')->nullable();
			$table->unsignedBigInteger('clan')->nullable();
			$table->unsignedBigInteger('province')->nullable();
			$table->unsignedBigInteger('location')->nullable();
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
        Schema::dropIfExists('people');
    }
}
