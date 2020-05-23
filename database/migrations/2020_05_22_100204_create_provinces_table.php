<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProvincesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('provinces', function (Blueprint $table) {
            $table->bigIncrements('province_id');
			$table->string('province_name');
			//fk
			$table->unsignedBigInteger('shugo')->nullable();
			$table->unsignedBigInteger('controller')->nullable();
			//special items
			$table->integer('horses')->default(0);
			$table->integer('naval')->default(0);
			$table->integer('lacquerware')->default(0);
			$table->integer('pottery')->default(0);
			$table->integer('silk')->default(0);
			$table->integer('cotton')->default(0);
			$table->integer('tea')->default(0);
			$table->integer('iron')->default(0);
			$table->integer('gold')->default(0);
			$table->integer('silver')->default(0);
			$table->integer('copper')->default(0);
			$table->integer('holy_site')->default(0);
			$table->integer('smithing')->default(0);
			$table->integer('ninja_clan')->default(0);
			$table->integer('philosophy')->default(0);
			$table->integer('kanrei')->default(0);
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
        Schema::dropIfExists('provinces');
    }
}
