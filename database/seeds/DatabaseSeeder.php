<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //foreign keys
		$this->call('fkSeeder');
		//provinces
		$this->call('ProvinceSeeder');
		//places
		$this->call('PlaceSeeder');
		//clans
		$this->call('ClanSeeder');
    }
}

class fkSeeder extends Seeder
{
	//foreign keys
    public function run()
    {
		//provinces
		Schema::table('provinces', function (Blueprint $table) {
			$table->foreign('shugo')->references('person_id')->on('people');		
			$table->foreign('controller')->references('clan_id')->on('clans');
        });
		
		//places
		Schema::table('places', function (Blueprint $table) {
			$table->foreign('province')->references('province_id')->on('provinces');		
			$table->foreign('ruler')->references('person_id')->on('people');
			$table->foreign('controller')->references('clan_id')->on('clans');
        });
		
		//clans
		Schema::table('clans', function (Blueprint $table) {
			$table->foreign('daimyo')->references('person_id')->on('people');		
			$table->foreign('start_location')->references('place_id')->on('places');
			$table->foreign('start_province')->references('province_id')->on('provinces');
			$table->foreign('capital')->references('place_id')->on('places');
        });
		
		//characters
		Schema::table('people', function (Blueprint $table) {
			$table->foreign('owner')->references('id')->on('users');		
			$table->foreign('clan')->references('clan_id')->on('clans');
			$table->foreign('province')->references('province_id')->on('provinces');
			$table->foreign('location')->references('place_id')->on('places');
        });
		
	}
	
}
