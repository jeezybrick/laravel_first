<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;

use Illuminate\Http\Request;
use DB;
class PagesController extends Controller {

	//
	public function index()
	{
        //return \Auth::user()->name;
		//return 'Hello world!';
		return view('pages.index');
	}

   public function about()
	{
		
		return view('pages.about');
	}
	 public function contacts()
	{
		
		return view('pages.contacts');
	}

  

    
  
    



}
