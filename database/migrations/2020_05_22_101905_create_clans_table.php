<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clans', function (Blueprint $table) {
            $table->bigIncrements('clan_id');
			$table->string('clan_name');
			$table->string('mon');
			//fk
			$table->unsignedBigInteger('daimyo')->nullable();
			$table->unsignedBigInteger('start_location');
			$table->unsignedBigInteger('start_province');
			$table->unsignedBigInteger('capital')->nullable();
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
        Schema::dropIfExists('clans');
    }
}
