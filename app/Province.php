<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    //provinces table
    protected $table = 'provinces';
    protected $primaryKey = 'province_id';
	
	//fk
    public function governors()
    {
        return $this->belongsTo('App\Person','shugo');
    } 
	
    public function controllers()
    {
        return $this->belongsTo('App\Clan','controller');
    } 	
	
}
