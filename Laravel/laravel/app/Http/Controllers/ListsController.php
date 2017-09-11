<?php
namespace App\Http\Controllers;
use App\Lists;

class ListsController extends Controller{
	public function info(){
		
		return Lists::getLists();
		
		/* return view('List/info',['name'=>'超哥',
									'age'=>18
				
				]); */
	}
}