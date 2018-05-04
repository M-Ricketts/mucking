<?php
namespace App\Http\Controllers;  //points where this file is located
use App\Http\Controllers\Controller; // uses the controller class built into laravel 
/**
* 
*/
class PageController extends Controller //new class named page conttroller that borrows the controller fucntionalitiy
{
	public function about() {
	
	return view('pages/about');
	
	}
	
}
