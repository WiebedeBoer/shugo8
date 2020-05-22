<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clan extends Model
{
    //clans table
    protected $table = 'clans';
    protected $primaryKey = 'clan_id';
	
	//fk
    public function rulers()
    {
        return $this->belongsTo('App\Person','daimyo');
    } 
	
    public function startpoints()
    {
        return $this->belongsTo('App\Place','start_location');
    } 
	
    public function startprovinces()
    {
        return $this->belongsTo('App\Province','start_province');
    } 
	
    public function capitals()
    {
        return $this->belongsTo('App\Place','capital');
    } 	
	
}
