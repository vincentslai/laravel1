<?php
namespace App\Http\Controllers;

class PagesController extends Controller {

	public function getIndex(){
		# process variable data or parameters
		# and talk to the model, received data from the 
		# model and compile, and pass it to correct view.
		return view('pages.welcome');
	}

	public function getAbout(){
		return view('pages.about');
	}

	public function getContact(){
		return view('pages.contact');
	}

}