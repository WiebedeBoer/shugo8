<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Place;
use App\Province;
use App\Clan;
use App\Person;
use App\Support\Collection;
use Illuminate\Support\Facades\DB;

class PlaceController extends Controller
{
    //authenticate
    public function __construct()
    {
        $this->middleware('auth');
    }	
	
	//main list
    public function index()
    {            	
       $user = auth()->user();
	   $place = Place::with('rulers','controllers','provinces')->paginate(25);
	   return view('places.index', compact('user','place')); 
    }
	
	//show view
    public function show($id)
    {            	
       $user = auth()->user();
	   $place = Place::with('rulers','controllers','provinces')->where('place_id', $id)->firstOrFail(); 
	   return view('places.show', compact('user','place')); 
    }

	//edit view
    public function edit($id)
    {       
		$user = auth()->user();
		$place = Place::with('rulers','controllers','provinces')->where('place_id', $id)->firstOrFail(); 
		return view('places.edit', compact('user','place'));        
    }
	
    //update function
    public function update(Request $request, $id)
    {
        $user = auth()->user();
        $data = $request->validate([
            'ruler' => 'nullable',
            'controller' => 'nullable', 
			'agr' => 'nullable',	
			'com' => 'nullable',		
			'def' => 'nullable',		
			'jus' => 'nullable',		
			'mor' => 'nullable',	
			'tra' => 'nullable',
			'sol' => 'nullable'					
        ]);
        Place::where('place_id',$id)->update($data);	
		return redirect('/places/'.$id)->with('message', 'Updated');
    }	
	
}
