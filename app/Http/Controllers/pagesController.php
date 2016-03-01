<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Input;
use Validator;
use Redirect;
use Session;
use Form;

use App\Http\Controllers\Controller;

class pagesController extends Controller
{
	public function home (){
		$people = ['p1one', 'p2','p3'];
		return view('pages.displayStudent')->with('people', $people);
	}
    //
}

   
