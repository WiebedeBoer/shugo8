<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    //provinces table
    protected $table = 'places';
    protected $primaryKey = 'place_id';
	
	//fk
    public function rulers()
    {
        return $this->belongsTo('App\Person','ruler');
    } 
	
    public function controllers()
    {
        return $this->belongsTo('App\Clan','controller');
    } 
	
    public function provinces()
    {
        return $this->belongsTo('App\Province','province');
    } 	
	
}
