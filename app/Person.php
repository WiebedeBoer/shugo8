<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    //provinces table
    protected $table = 'people';
    protected $primaryKey = 'person_id';
	
	//fk
    public function owners()
    {
        return $this->belongsTo('App\User','owner');
    } 
	
    public function clans()
    {
        return $this->belongsTo('App\Clan','clan');
    } 
	
    public function provinces()
    {
        return $this->belongsTo('App\Province','province');
    } 
	
    public function locations()
    {
        return $this->belongsTo('App\Place','location');
    }	
	
}
