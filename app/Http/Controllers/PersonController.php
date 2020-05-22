<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Place;
use App\Province;
use App\Clan;
use App\Person;
use App\Support\Collection;
use Illuminate\Support\Facades\DB;

class PersonController extends Controller
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
	   $person = Person::with('owners','clans','provinces','controllers')->paginate(25);
	   return view('persons.index', compact('user','person')); 
    }
	
	//show view
    public function show($id)
    {            	
       $user = auth()->user();
	   $person = Person::with('owners','clans','provinces','controllers')->where('person_id', $id)->firstOrFail(); 
	   return view('persons.show', compact('user','person')); 
    }

	//create view 
    public function create()
    {            	
       $user = auth()->user();
	   $person = new Person();
	   return view('persons.create', compact('user','person'));  
    }	

	//edit view
    public function edit($id)
    {       
		$user = auth()->user();
		$person = Person::with('owners','clans','provinces','controllers')->where('person_id', $id)->firstOrFail(); 
		return view('persons.edit', compact('user','person'));        
    }
	
    //update function
    public function update(Request $request, $id)
    {
        $user = auth()->user();
        $data = request()->validate([
            'character_category' => 'required',
            'province' => 'required',
			'location' => 'required'
        ]);
		Person::where('person_id',$id)->update($data);
		return redirect('/persons/'.$id)->with('message', 'Updated');
    }	
	
    //store function
    public function store()
    { 
		$user = auth()->user();
        $data = request()->validate([
            'person_name' => 'required',
            'character_category' => 'required',
            'gender' => 'required',
            'owner' => 'required',
            'clan' => 'required',
            'province' => 'required',
			'location' => 'required'
        ]);        
        $person = new Person();       
        $person->person_name = request('person_name');
        $person->character_category = request('character_category');
        $person->gender = request('gender');
        $person->owner = request('owner');
        $person->clan = request('clan');
        $person->province = request('province');
		$person->location = request('location');
        $person->save(); 
		return redirect('/persons/')->with('message', 'Created');
	}
	
    //delete function
    public function destroy($id)
    {
        $user = auth()->user();
		$person = Person::findOrFail($id);
        $person->delete();
        return redirect('/persons')->with('message', 'Removed');
    }
}
