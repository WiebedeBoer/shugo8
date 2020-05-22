<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Place;
use App\Province;
use App\Clan;
use App\Person;
use App\Support\Collection;
use Illuminate\Support\Facades\DB;

class ProvinceController extends Controller
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
	   $province = Province::with('governors','controllers')->paginate(25);
	   return view('provinces.index', compact('user','province')); 
    }
	
	//show view
    public function show($id)
    {            	
       $user = auth()->user();
	   $province = Province::with('governors','controllers')->where('province_id', $id)->firstOrFail(); 
	   return view('provinces.show', compact('user','province')); 
    }	

	//edit view
    public function edit($id)
    {       
		$user = auth()->user();
		$province = Province::with('governors','controllers')->where('province_id', $id)->firstOrFail(); 
		return view('provinces.edit', compact('user','province'));        
    }
	
    //update function
    public function update(Request $request, $id)
    {
        $user = auth()->user();	
        $data = $request->validate([
            'shugo' => 'nullable',
            'controller' => 'nullable'     
        ]);
        Province::where('province_id',$id)->update($data);					
		return redirect('/provinces/'.$id)->with('message', 'Updated');
    }	
	
}
