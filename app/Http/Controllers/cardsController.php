<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Input;
use Validator;
use Redirect;
use Session;
use Form;

use App\Http\Controllers\Controller;

class cardsController extends Controller
{
	public function index (){

return view('cards.index');
	}

}

   
