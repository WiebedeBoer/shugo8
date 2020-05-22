<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Place;
use App\Province;
use App\Clan;
use App\Person;
use App\Support\Collection;
use Illuminate\Support\Facades\DB;

class ClanController extends Controller
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
	   $clan = Clan::with('rulers','startpoints','startprovinces','capitals')->paginate(25);
	   return view('clans.index', compact('user','clan')); 
    }
	
	//show view
    public function show($id)
    {            	
       $user = auth()->user();
	   $clan = Clan::with('rulers','startpoints','startprovinces','capitals')->where('clan_id', $id)->firstOrFail(); 
	   return view('clans.show', compact('user','clan')); 
    }	

	//edit view
    public function edit($id)
    {       
		$user = auth()->user();
		$clan = Clan::with('rulers','startpoints','startprovinces','capitals')->where('clan_id', $id)->firstOrFail(); 
		return view('clans.edit', compact('user','clan'));        
    }
	
    //update function
    public function update(Request $request, $id)
    {
        $user = auth()->user();
        $data = $request->validate([
            'daimyo' => 'nullable',
            'capital' => 'nullable'				
        ]);
        Clan::where('clan_id',$id)->update($data);	
		return redirect('/clans/'.$id)->with('message', 'Updated');
    }		

}
